<?php namespace App\Http\Controllers;

use App\Events\UserHasRegistered;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Class RegisterController
 *
 * @package App\Http\Controllers
 */
class RegisterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('register');
	}

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
	{
        $user = $this->dispatchFrom('App\Commands\RegisterCommand', $request);

        event(new UserHasRegistered($user));
	}
}
