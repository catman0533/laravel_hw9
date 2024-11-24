<?php

namespace App\Observers;
namespace App\Events;

use App\Models\News;

class NewsObserver
{
    /**
     * Обработчик события "обновление".
     *
     * @param  \App\Models\News  $news
     * @return void
     */
    public function updated(News $news)
    {
        if ($news->isDirty('hidden') && $news->hidden === true) {
            // Действие при скрытии новости
            event(new NewsHidden($news)); // Опционально: генерация события
        }
    }
}
