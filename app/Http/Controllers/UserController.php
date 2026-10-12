<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUser = User::find(session('user_id'))->username ?? 'Unknown'; 
        $users = User::all();
        return view('users' , [
            'users' => $users,
            'currentUser_name' => $currentUser
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
        $user->role = $request->role;

        $user->email_address = $request->email_address;
        $user->phone_number = $request->phone_number;
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
        $currentUser = User::find(session('user_id'))->username ?? 'Unknown'; 
        $editUser = User::find($id);
        return view('users' , [
            'users' => $users,
            'editUser' => $editUser,
            'currentUser_name' => $currentUser
        ]);
    }

    public function showlogin(){
        return view('login');
    }

    public function showregister(){
        return view('register');
    }

    public function showOnlinePurchase(){
        return view('online_purchase');
    }

    public function register(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email_address' => 'required|email',
            'phone_number' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'year_of_birth' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->year_of_birth = $request->year_of_birth;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->email_address = $request->email_address;
        $user->phone_number = $request->phone_number;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/');
    }
    
    public function login(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            $request->session()->put('user_id', $user->id);

            return redirect('users');
        }
        else{
            return back()->withErrors([
                'errormessage' => 'Invalid username or password.',
            ])->onlyInput('username');
        }

        return redirect()->back();
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
            $user->role = $request->role;

            $user->email_address = $request->email_address;
            $user->phone_number = $request->phone_number;
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
