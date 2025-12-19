<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\PersonalInfoRequest;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Traits\HasContactForm;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;

class UserController extends BaseController
{
    use HasContactForm;

    public function profile()
    {
        return $this->sendResponse(new UserResource(Auth::user()), 'User profile found');
    }

    public function edit(PersonalInfoRequest $request)
    {

        return $this->sendResponse(Auth::user()->update($request->validated()), 'Profile updated successfully');
    }

    public function sendTransactionMail(Request $request)
    {
        // Retrieve user using the passed user ID
        $user = User::find($request->user_id);
    
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        // Fetch complete user data using UserResource
        $userData = new UserResource($user);
    
        // Retrieve the latest transaction for this user
        $transaction = Transaction::where('user_id', $user->id)->latest()->first();
    
        if (!$transaction) {
            return response()->json(['message' => 'No transaction found'], 404);
        }
    
        // Retrieve Subscription Data (Modify this based on your actual database structure)
        $subscription = Subscription::where('user_id', $user->id)->latest()->first(); // Change table name if needed
    
        // Check if subscription exists
        if (!$subscription) {
            return response()->json(['message' => 'No subscription found'], 404);
        }
    
          $package = \App\Models\Package::find($subscription->package_id);
           $packageName = $package?->name ?? 'N/A';

        // Prepare email data
        $data = [
            'user_name' => $userData->name ?? 'User',
            'email' => $userData->email ?? 'N/A',
            'phone' => $userData->mobile ?? 'N/A',
            'company_name' => $userData->company_name ?? 'N/A',
            'amount' => $transaction->amount,
            'transaction_id' => $transaction->transactionId,
            'status' => ucfirst($transaction->status->value),
    
            // ✅ Add missing subscription variables
              'subscription_plan' => $packageName,  // Adjust column name as per your DB
            'start_date' => $subscription->created_at ?? 'N/A',
            'end_date' => $subscription->expire_at ?? 'N/A',
        ];
    
        $adminEmail = 'support@indian-apparel.com';
        $userEmail = $userData->email;
    
        // Send email to the user
        try {
            Mail::send('emails.subscription_user', $data, function ($message) use ($userEmail) {
                $message->to($userEmail)->subject('Transaction Successful');
            });
    
            \Log::info('✅ Email sent successfully to: ' . $userEmail);
        } catch (\Exception $e) {
            \Log::error('❌ Failed to send email to user: ' . $userEmail . ' | Error: ' . $e->getMessage());
        }
    
        // Send email to the admin
        Mail::send('emails.subscription_admin', $data, function ($message) use ($adminEmail) {
            $message->to($adminEmail)->subject('New Transaction Completed');
        });
    
        return response()->json(['message' => 'Transaction email sent successfully']);
    }
    
    
    
    
    /**
     * Change the authenticated user's password.
     *
     * @return JsonResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        // Validate and retrieve validated data
        $validatedData = $request->validated();

        return $this->sendResponse(Auth::user()->update([
            'password' => Hash::make($validatedData['new_password']),
        ]), 'Password updated successfully');
    }

    public function contact_store(ContactFormRequest $request)
    {
        return $this->sendResponse($this->store($request), 'Contact has been submitted successfully');
    }

 public function getSubscribedCategory(Request $request)
{
    $search = $request->input('search');
    $categoryIds = $request->input('category_ids', []);
    $isPublic = filter_var($request->input('is_public'), FILTER_VALIDATE_BOOLEAN);

    $query = Category::query();

    if ($isPublic) {
        // If public, get the first user with at least one subscription (or a default user)
        $defaultUser = User::whereHas('subscriptions')->first();
        if ($defaultUser) {
            $query = $defaultUser->subscriptions();
        } else {
            return $this->sendResponse([], 'No default subscriptions available');
        }
    } else {
        if (!auth()->check()) {
            return response()->json(['message' => 'unauthenticated'], 401);
        }

        $query = auth()->user()->subscriptions();
    }

    // Apply search filter
    if ($search) {
        $query->where('name', 'like', '%' . $search . '%');
    }

    $categories = $query->orderBy('name')->get();

    return $this->sendResponse($categories, 'Categories fetched successfully');
}

    

//     public function getPublicSubscribedCategory(Request $request)
// {
//     // Retrieve optional search query and category IDs from the request
//     $search = $request->input('search');
//     $categoryIds = $request->input('category_ids', []);

//     // Start with the query builder
//     $query = Category::query();

//     // If category IDs are passed, filter by those
//     if (!empty($categoryIds)) {
//         $query->whereIn('id', $categoryIds);
//     }

//     // Apply search filter if needed
//     if ($search) {
//         $query->where('name', 'like', '%'.$search.'%');
//     }

//     // Get results
//     $categories = $query->orderBy('name')->get();

//     return $this->sendResponse($categories, 'Public categories fetched successfully');
// }

public function getChildCategory(Request $request)
{
    $parentId = $request->input('parent_id');
    $search = $request->input('search');
    $isPublic = filter_var($request->input('is_public'), FILTER_VALIDATE_BOOLEAN);

    $childCategories = Category::query();

    if ($isPublic) {
        // Use a default public user with subscriptions
        $defaultUser = User::whereHas('subscriptions')->first();

        if (!$defaultUser || $defaultUser->subscriptions->isEmpty()) {
            return $this->sendResponse([], 'No public categories available');
        }

        $subscribedCategoryIds = $defaultUser->subscriptions->pluck('id');

        // ✅ Default to parent_id = 1 if not passed
        $parentId = $parentId ?? 1;

        if (!$subscribedCategoryIds->contains($parentId)) {
            return $this->sendError('Unauthorized or missing parent category for public access');
        }

        $childCategories->where('parent_id', $parentId);
    } else {
        if (!auth()->check()) {
            return response()->json(['message' => 'unauthenticated'], 401);
        }

        $subscribedCategoryIds = auth()->user()->subscriptions->pluck('id');

        if ($parentId) {
            if (!$subscribedCategoryIds->contains($parentId)) {
                return $this->sendError('Unauthorized access to this parent category');
            }
            $childCategories->where('parent_id', $parentId);
        } else {
            $childCategories->whereIn('parent_id', $subscribedCategoryIds);
        }
    }

    if ($search) {
        $childCategories->where('name', 'like', '%' . $search . '%');
    }

    $childCategories = $childCategories->orderBy('name')->get();

    return $this->sendResponse($childCategories, 'Categories fetched successfully');
}







//     public function publicGetChildCategory(Request $request)
// {
//     // Retrieve parent_id and search query from the request
//     $parentId = $request->input('parent_id');
//     $search = $request->input('search');

//     // Validate that a parent ID is provided
//     if (!$parentId) {
//         return $this->sendError('Parent category ID is required');
//     }

//     // Fetch child categories under this parent
//     $childCategories = Category::where('parent_id', $parentId);

//     // Apply search filter if query is present
//     if ($search) {
//         $childCategories = $childCategories->where('name', 'like', '%' . $search . '%');
//     }

//     // Get the child categories
//     $childCategories = $childCategories->orderBy('name')->get();
//     return $this->sendResponse($childCategories, 'Categories fetched successfully');
// }

public function checkUser(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $user = User::with([
        'subscriptions',
        'subscriptionDetail',
        'company',
    ])->where('email', $request->email)->first();

    if ($user) {
        // ✅ Filter only active subscriptions
        $activeSubscriptions = $user->subscriptions->filter(function ($sub) {
            return $sub->pivot->status === 'active';
        })->values(); // reset array keys

        // ✅ Determine highest active package (if any)
        $highestAmount = null;
        $isHighestPackage = false;

        if ($activeSubscriptions->isNotEmpty()) {
            // Find max amount in all available packages
            $maxAmount = \App\Models\Package::max('pricing');

            // Find max amount among user's active subscriptions
            $highestAmount = $activeSubscriptions->max(fn($sub) => $sub->pivot->amount);

            // Compare to check if user's highest active subscription is the top package
            $isHighestPackage = ((float) $highestAmount === (float) $maxAmount);
        }

        return response()->json([
            'exists' => true,
            // 'status' => 'exists',
            'message' => $activeSubscriptions->isNotEmpty()
                ? 'User has active subscription(s).'
                : 'User found but has no active subscription.',
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'mobile' => $user->mobile,
                'company' => $user->company,
                'active_subscriptions' => $activeSubscriptions->map(function ($sub) {
                    return [
                        'business_type_id' => $sub->id,
                        'business_type_name' => $sub->name,
                        'package_id' => $sub->pivot->package_id,
                        'amount' => $sub->pivot->amount,
                        'expire_at' => $sub->pivot->expire_at,
                        'subscription_date' => $sub->pivot->subscription_date,
                        'status' => $sub->pivot->status,
                    ];
                }),
                'is_highest_package' => $isHighestPackage, // ✅ NEW FIELD
                'highest_amount' => $highestAmount, // Optional, helpful for debugging/UI
            ]
        ]);
    }

    return response()->json([
        'exists' => false,
     //   'status' => 'new',
        'message' => 'No user found with this email. Proceed with registration.',
    ]);
}
}
