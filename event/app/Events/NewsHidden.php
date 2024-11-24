<?php

namespace App\Events;

use App\Models\News;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewsHidden
{
    use Dispatchable, SerializesModels;

    public $news;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\News  $news
     * @return void
     */
    public function __construct(News $news)
    {
        $this->news = $news;
    }
}
