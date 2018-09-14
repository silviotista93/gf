<?php

namespace App\Listeners;

use App\Events\ClientWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddClient
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
     * @param  ClientWasCreated  $event
     * @return void
     */
    public function handle(ClientWasCreated $event)
    {
        //
    }
}
