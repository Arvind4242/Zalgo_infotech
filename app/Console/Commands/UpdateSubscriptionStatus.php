<?php

namespace App\Console\Commands;

use App\Enums\SubscriptionStatus;
use App\Models\Subscription;
use App\Models\SubscriptionDetail;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateSubscriptionStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-subscription-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now();
        $dateThreshold = $today->copy()->addDays(10);

        // Fetch subscriptions that are 10 days away from expiring and are not yet 'about_expire'
        $subscriptions = Subscription::where('status', '!=', SubscriptionStatus::ABOUT_EXPIRE)
            ->whereDate('expire_at', '<=', $dateThreshold)
            ->get();

        foreach ($subscriptions as $subscription) {
            $subscription->status = SubscriptionStatus::ABOUT_EXPIRE;
            $subscription->save();

            $SubscriptionDetail = SubscriptionDetail::where('user_id', $subscription->user_id)->whereJsonContains('subscription_ids', $subscription->id)->first();
            $SubscriptionDetail->status = SubscriptionStatus::ABOUT_EXPIRE;
        }

        $this->info('Subscription statuses updated successfully.');

        return 0;
    }
}
