<?php

namespace App\Http\Controllers;

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
        return view('users' , [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->year_of_birth = $request->year_of_birth;
        $user->address = $request->address;
        $user->email_address = $request->email_address;
        $user->phone_number = $request->phone_number;
        $user->role = $request->role;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $users = User::all();
        $editUser = User::find($id);
        return view('users' , [
            'users' => $users,
            'editUser' => $editUser
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (isset($user)){
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->gender = $request->gender;
            $user->year_of_birth = $request->year_of_birth;
            $user->address = $request->address;
            $user->email_address = $request->email_address;
            $user->phone_number = $request->phone_number;
            $user->role = $request->role;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->update();
            }
            return redirect()->back();
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user = User::find($id);
        if (isset($user)){
            $user->delete();
        }
        return redirect()->back();
    }
}
