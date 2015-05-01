<?php namespace App;

use App\Commands\RegisterCommand;

class Sanitizer {

    /**
     * @param RegisterCommand $command
     * @param                 $next
     *
     * @return mixed
     */
    public function handle(RegisterCommand $command, $next)
    {
        $command->name = 'xx';
        return $next($command);
    }
}