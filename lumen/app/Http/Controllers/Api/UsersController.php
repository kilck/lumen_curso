<?php
/**
 * Created by PhpStorm.
 * User: Matheus
 * Date: 13/03/2018
 * Time: 22:52
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return $users;
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return $user;
    }

    public function update (Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return $user;
    }
}