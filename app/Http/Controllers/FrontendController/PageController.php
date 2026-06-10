<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Login 
    public function login()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.login', compact('bodyClass'));
    }

    // Register 
    public function register()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.register', compact('bodyClass'));
    }

    // Shop
    public function shop()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.shop', compact('bodyClass'));
    }

    // Shop Details
    public function shopDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.shopDetails', compact('bodyClass'));
    }

    // Cart
    public function cart()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.cart', compact('bodyClass'));
    }

    // Checkout
    public function checkout()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.checkout', compact('bodyClass'));
    }

    // Pricing
    public function pricing()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.pricing', compact('bodyClass'));
    }

    // About
    public function about()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.about', compact('bodyClass'));
    }

    // App Intigration
    public function appIntigration()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.appIntigration', compact('bodyClass'));
    }

    // Policy Privacy
    public function policyPrivacy()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.policyPrivacy', compact('bodyClass'));
    }

    // Faq
    public function faq()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.faq', compact('bodyClass'));
    }

    // Project Details
    public function projectDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.projectDetails', compact('bodyClass'));
    }

    // Service Details
    public function serviceDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.serviceDetails', compact('bodyClass'));
    }

     public function webDesigns()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.webdesign', compact('bodyClass'));
    }
    public function webDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.web-development', compact('bodyClass'));
    }
     public function ReactJSDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.reactjsdevelopment', compact('bodyClass'));
    }
    public function cmsDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.cmsdevelopment', compact('bodyClass'));
    }
    public function shopifyDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.shopify', compact('bodyClass'));
    }
    public function NodejsDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.nodejs', compact('bodyClass'));
    }
     public function WordpressDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.wordpressdevelopment', compact('bodyClass'));
    }
    public function ecommerceDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.ecommerce', compact('bodyClass'));
    }
     public function pythonDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.python', compact('bodyClass'));
    }
    public function aiDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.aidevelopement', compact('bodyClass'));
    }
    public function laravelDevelopment()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.laravel', compact('bodyClass'));
    }
    public function maintenanceServices()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.maintenanceservices', compact('bodyClass'));
    }
    public function wordPressMaintenance()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.wordpressmaintenance', compact('bodyClass'));
    }
    public function seoServices()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.seoservices', compact('bodyClass'));
    }
    public function digitalMarketing()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.digitalservices', compact('bodyClass'));
    }
    public function CultureValue()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.culture-values', compact('bodyClass'));
    }
    public function LifeZalgo()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.life-zalgoinfotech', compact('bodyClass'));
    }
    


     public function industry()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.industry', compact('bodyClass'));
    }

    //Hire
    public function hireWebdeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirewebdeveloper', compact('bodyClass'));
    }
    public function hireWordpressdeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirewordpressdeveloper', compact('bodyClass'));
    }
    public function hireLaraveldeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirelaraveldeveloper', compact('bodyClass'));
    }
    public function hireNodejsdeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirenodejsdeveloper', compact('bodyClass'));
    }
    public function hirePHPdeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirephpdeveloper', compact('bodyClass'));
    }
    public function hireAideveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hireaideveloper', compact('bodyClass'));
    }
    public function hireReactjsdeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirereactjsdeveloper', compact('bodyClass'));
    }
    public function hireNextjsdeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirenextjsdeveloper', compact('bodyClass'));
    }
    public function hirePythondeveloper()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.hirepythondeveloper', compact('bodyClass'));
    }



    // Case Study Pages
    public function BioAge()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.bioage', compact('bodyClass'));
    }
    public function Experthe()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.experthe', compact('bodyClass'));
    }
    public function Dobramoc()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.dobramoc', compact('bodyClass'));
    }
    public function Lifetreeanatomical()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.lifetreeanatomical', compact('bodyClass'));
    }
    public function Towelsoutlet()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.towelsoutlet', compact('bodyClass'));
    }
    public function FinanceManagerTraining()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.financemanagertraining', compact('bodyClass'));
    }
    public function Awakeningthegeniuswithin()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.awakeningthegeniuswithin', compact('bodyClass'));
    }
    public function ErpSystem()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.erpsystem', compact('bodyClass'));
    }

    public function LabProject()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.labproject', compact('bodyClass'));
    }

    public function Lms()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.lms', compact('bodyClass'));
    }

    public function LeadManagement()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.leadmanagement', compact('bodyClass'));
    }

    public function WashingErp()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.washingerp', compact('bodyClass'));
    }
    


    // Blog
    public function blog(Request $request)
    {
        $bodyClass = 'home-one';

        $query = Blog::published()->latest('published_at');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('tag')) {
            $query->whereJsonContains('tags', $request->tag);
        }

        $blogs      = $query->paginate(6)->withQueryString();
        $recentBlogs = Blog::published()->latest('published_at')->take(3)->get();
        $categories  = $this->getCategories();
        $allTags     = $this->getAllTags();

        return view('frontend.pages.blog', compact('bodyClass', 'blogs', 'recentBlogs', 'categories', 'allTags'));
    }

    // Casestudy
    public function casestudy()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.case-studies.casestudy', compact('bodyClass'));
    }

    // Blog Details
    public function blogDetails(string $slug)
    {
        $bodyClass = 'home-one';
        $blog        = Blog::published()->where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::published()->where('id', '!=', $blog->id)->latest('published_at')->take(3)->get();
        $comments    = $blog->comments()->where('is_approved', true)->orderBy('created_at')->get();
        $categories  = $this->getCategories();
        $allTags     = $this->getAllTags();

        return view('frontend.pages.blogDetails', compact('bodyClass', 'blog', 'recentBlogs', 'comments', 'categories', 'allTags'));
    }

    // Submit Blog Comment
    public function submitComment(Request $request, string $slug)
    {
        $blog = Blog::published()->where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'comment' => 'required|string|max:5000',
        ]);

        $blog->comments()->create($validated);

        return back()->with('comment_success', 'Thank you! Your comment has been submitted and is awaiting approval.');
    }

    private function getCategories(): \Illuminate\Support\Collection
    {
        return Blog::published()
            ->whereNotNull('category')
            ->selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->orderByDesc('count')
            ->get();
    }

    private function getAllTags(): \Illuminate\Support\Collection
    {
        return Blog::published()
            ->whereNotNull('tags')
            ->get()
            ->flatMap(fn ($blog) => $blog->tags ?? [])
            ->unique()
            ->values();
    }

    // Contact 
    public function contact()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.contact', compact('bodyClass'));
    }
    public function testimonial()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.testimonial', compact('bodyClass'));
    }

     public function career()
    {
        $bodyClass    = 'home-one';
        $jobOpenings  = JobOpening::active()->get();
        return view('frontend.pages.career', compact('bodyClass', 'jobOpenings'));
    }
}

