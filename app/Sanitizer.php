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
        $command->name = trim(preg_replace('/[^\w\- ]/', '', $command->name));
        return $next($command);
    }
}