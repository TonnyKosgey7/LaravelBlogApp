<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     // ...

    public function login()
    {
        // Show the login form
    }

    public function authenticate(Request $request)
    {
        // Authenticate the user
    }

    public function register()
    {
        // Show the registration form
    }

    public function store(Request $request)
    {
        // Store the new user in the database
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
        //
    }
}
