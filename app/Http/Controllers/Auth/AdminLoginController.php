<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }


    public function login2(Request $request)
    {

        try {
            User::logIn($request->get("email"), $request->get("password"));

            return response()->json(['status_code' => 200], 200);
        } catch (ParseException $e) {
            return response()->json(['errors' => $e->getMessage(), "status_code" => 400], 200);
        } catch (\Exception $e) {
            return response()->json(['errors' => $e->getMessage(), "status_code" => 400], 200);
        }
    }

    public function login(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if ($validator->fails()) {
            return response()->json(["errors" => $validator->messages(), "status_code" => 400], 200);
        }
        try {

            $url = Redirect::back();

            // Attempt to log the user in
            if (Auth::guard('admin')->attempt(['email' => $request->get("email"), 'password' => $request->get("password")], $request->get("remember"))) {
                // if successful, then redirect to their intended location
                //return redirect()->intended(route('admin.dashboard'));
                $url = Redirect::intended(route('admin.dashboard'))->getTargetUrl();

                return response()->json(['status_code' => 200, 'target' => $url], 200);
            }
            // if unsuccessful, then redirect back to the login with the form data
            //return redirect()->back()->withInput($request->only('email', 'remember'));

            return response()->json(['status_code' => 200, 'target' => $url], 200);


        } catch (\Exception $e) {
            return response()->json(['errors' => $e->getMessage(), "status_code" => 400], 200);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.login');
    }

}