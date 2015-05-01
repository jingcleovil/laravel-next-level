<?php namespace App\Events;

use App\Events\Event;

use App\UserRepository;
use Illuminate\Queue\SerializesModels;

class UserHasRegistered extends Event {

	use SerializesModels;

    /**
     * @type UserRepository
     */
    public $user;

    /**
	 * Create a new event instance.
	 */
	public function __construct(UserRepository $user)
	{
        $this->user = $user;
    }
}
