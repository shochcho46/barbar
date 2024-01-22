<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function signup()
    {
        return view('auth::signup');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function signin()
    {
        return view('auth::singin');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    public function validLogin(Request $request)
    {

        $validated = $request->validate([
            'emailormobile' => 'required',
            'password' => 'required',
        ]);

        $emailormobile = $request->emailormobile;

        $credentialsemail = array("email" => $emailormobile, "password" => $request->password);
        $credentialsmobile = array("mobile" => $emailormobile, "password" => $request->password);

        if ((Auth::attempt($credentialsemail)) || (Auth::attempt($credentialsmobile))) {

            $user = Auth::user();

            if (($user->status == 0)) {

                return back()->with('fail', 'This accout is in black listed');
            } else {

                return redirect()->route('dashboard.home');
            }

        } else {
            return redirect()->route('dashboard.home');
            return back()->with('fail', 'Wrong credentials');
        }

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('auth::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.signin');
    }
}
