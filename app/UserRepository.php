<?php namespace App;

/**
 * Class UserRepository
 *
 * @package App
 */
class UserRepository {

    /**
     * @param array $data
     *
     * @return $this
     */
    public function create(array $data)
    {
        var_dump('Repository',$data);

        return $this;
    }
}