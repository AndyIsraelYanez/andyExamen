<?php

namespace App\Http\Controllers;

use App\Models\Users_Role;
use Illuminate\Http\Request;
use App\Http\Resources\UserRoleResource;

class UsersRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_roles = Users_Role::paginate(10);
        return UserRoleResource::collection($users_roles);
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
        $users_roles = new Users_Role();
        $users_roles->user_id = $request->user_id;
        $users_roles->role_id = $request->role_id;

        if($users_roles->save())
        {
            return new UserRoleResource($users_roles);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users_Role  $users_Role
     * @return \Illuminate\Http\Response
     */
    public function show(Users_Role $users_Role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users_Role  $users_Role
     * @return \Illuminate\Http\Response
     */
    public function edit(Users_Role $users_Role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users_Role  $users_Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users_roles =  Users_Role::findOrFail($id);
        $users_roles->user_id = $request->user_id;
        $users_roles->role_id = $request->role_id;

        if($users_roles->save())
        {
            return new UserRoleResource($users_roles);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users_Role  $users_Role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users_roles =  Users_Role::findOrFail($id);

        if($users_roles->delete())
        {
            return new UserRoleResource($users_roles); 
        }
    }
}
