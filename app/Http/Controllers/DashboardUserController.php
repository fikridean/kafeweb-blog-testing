<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required', 'max:255'],
        ];

        if ($user->email != $request->email) {
            $rules['email'] = ['required', 'email:dns', 'unique:users'];
        }

        if ($user->username != $request->username) {
            $rules['username'] = ['required', 'min:3', 'max:255', 'unique:users'];
        }

        if ($request->image) {
            $rules['image'] = ['image', 'file', 'max:3072'];
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = $user->password;

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user-profiles');
        } else {
            $validatedData['image'] = $user->image;
        }

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/user')->with('success', 'User Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
