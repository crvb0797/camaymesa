<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Promotion;
use App\Models\Trademark;
use App\Observers\ProductObserver;
use App\Observers\PromotionObserver;
use App\Observers\TrademarkObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(ProductObserver::class);
        Promotion::observe(PromotionObserver::class);
        Trademark::observe(TrademarkObserver::class);
    }
}
