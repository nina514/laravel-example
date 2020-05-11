<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use App\Notifications\SuccessSignUp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShipmentNotification // implements ShouldQueue
{
//    public $connection = 'database';
//
//    public $queue = 'listeners';

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
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        $when = now()->addSeconds(10);
        $user = $event->getUser();


        $user->notify((new SuccessSignUp())->delay($when));
    }
}
