<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return UserResource::collection($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->fullName = $request->fullName;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->age = $request->age;
        $users->dateOfBirth = $request->dateOfBirth;
        $users->setting_id = $request->setting_id;

        if($users->save())
        {
            return new UserResource($users);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users =  User::findOrFail($id);
        $users->name = $request->name;
        $users->fullName = $request->fullName;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->age = $request->age;
        $users->dateOfBirth = $request->dateOfBirth;
        $users->setting_id = $request->setting_id;

        if($users->save())
        {
            return new UserResource($users);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =  User::findOrFail($id);

        if($user->delete())
        {
            return new UserResource($user); 
        }
    }
}
