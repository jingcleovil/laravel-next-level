<?php namespace App\Commands;

/**
 * Class RegisterCommand
 *
 * @package App\Commands
 */
class RegisterCommand extends Command {

    /**
     * @type
     */
    public $name;

    /**
     * @type
     */
    public $email;

    /**
     * @type
     */
    public $password;

    /**
     * Create a new command instance.
     *
     * @param $name
     * @param $email
     * @param $password
     */
	public function __construct($name, $email, $password)
	{
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}
