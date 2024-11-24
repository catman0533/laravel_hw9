<?php

namespace App\Providers;
namespace App\Observers;
   


use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider; // Наследуем правильный ServiceProvider
use App\Models\News;
use App\Observers\NewsObserver; // Убедитесь, что путь совпадает с расположением NewsObserver
use App\Events\NewsHidden;
use App\Listeners\NewsHiddenListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Регистрация события и слушателя
        NewsHidden::class => [
            NewsHiddenListener::class,
        ],
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   /* public function boot()
    {
        parent::boot();

        // Регистрация наблюдателей
        News::observe(NewsObserver::class);
    }*/
}
