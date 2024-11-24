<?php

namespace App\Listeners;

use App\Events\NewsHidden;
use App\Events\NewsHiddenEvent;
use Illuminate\Support\Facades\Log;

class NewsHiddenListener
{
    /**
     * Handle the event.
     *
     * @param NewsHiddenEvent $event
     * @return void
     */
    public function handle(NewsHidden $event)
    {
        // Логируем скрытие новости
        Log::info('News ' . $event->news->id . ' hidden');
    }
}
