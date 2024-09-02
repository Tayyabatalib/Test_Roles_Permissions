<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('user.create',compact('roles','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'user_name' => 'nullable|string',
            'email' => 'nullable|email',
            'password' => 'required',
   ]);
        //dd($validatedData);
        $user = new User();
        $user->name = $validatedData['user_name'];   
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->save();

        // $user->assignRole('Admin');

        return redirect()->route('users.index')
                         ->with('success','Your are Registered Successfully');
    }

    public function display(){
        $roles = Role::all();
        $permissions = Permission::all();
        return view('user.display',compact('roles','permissions'));
    }

    public function display_store(Request $request,User $user){
        //dd($request);
        //dd($request->role);
        $role = $user->assignRole($request->role);
        //dd($role);
        $permission = $user->givePermissionTo($request->permission);
        dd($permission);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')
                         ->with('success','Your are UNRegistered Successfully');
    }
}
