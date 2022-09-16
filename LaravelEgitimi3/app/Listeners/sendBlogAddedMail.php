<?php

namespace App\Listeners;

use App\Events\BlogAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendBlogAddedMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BlogAdded  $event
     * @return void
     */
    public function handle(BlogAdded $event)
    {
        Log::info("Burası Çalıştı ve mail gönderildi");
    }
}
