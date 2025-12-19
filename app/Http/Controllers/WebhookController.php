<?php

namespace App\Http\Controllers;

use App\Models\PhonePeWebhook;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    /**
     * @throws Exception
     */
    public function handleCallback(Request $request)
    {
        try {
            Log::info('Webhook request receive', $request->toArray());
            PhonePeWebhook::create([
                'data' => $request->toArray(),
            ]);
        } catch (Exception $e) {
            Log::error('Error creating payment request: '.$e->getMessage());
            throw $e;
        }

        return response()->json(['message' => 'Job dispatched successfully'], 200);
    }
}
