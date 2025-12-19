<?php

namespace App\Http\Controllers;

use App\Enums\SubscriptionStatus;
use App\Http\Controllers\API\BaseController;
use App\Http\Requests\SubscribeFormRequest;
use App\Models\BusinessType;
use App\Models\SubscriptionDetail;
use App\Services\PhonePePaymentService;
use App\Settings\WebSettings;
use Auth;
use Carbon\Carbon;
use PhonePe\common\exceptions\PhonePeException;

class PaymentController extends BaseController
{
    
}




