<?php namespace App\Handlers\Commands;

use App\Commands\RegisterCommand;

use App\Events\UserHasRegistered;
use App\UserRepository;
use Illuminate\Queue\InteractsWithQueue;

class RegisterCommandHandler {

    /**
     * @type UserRepository
     */
    private $user;

    /**
	 * Create the command handler.
	 */
	public function __construct(UserRepository $user)
	{
        $this->user = $user;
    }

	/**
	 * Handle the command.
	 *
	 * @param  RegisterCommand  $command
	 * @return void
	 */
	public function handle(RegisterCommand $command)
	{
        $user = $this->user->create(get_object_vars($command));

        return $user;
	}
}
