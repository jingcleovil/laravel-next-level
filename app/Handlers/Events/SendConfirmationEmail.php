<?php namespace App\Handlers\Events;

use App\Events\UserHasRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendConfirmationEmail {

	/**
	 * Create the event handler.
	 */
	public function __construct()
	{

	}

	/**
	 * Handle the event.
	 *
	 * @param  UserHasRegistered  $event
	 * @return void
	 */
	public function handle(UserHasRegistered $event)
	{
        var_dump('Send email', $event);
	}
}
