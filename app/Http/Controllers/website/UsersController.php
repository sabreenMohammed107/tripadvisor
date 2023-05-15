<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
class UsersController extends Controller
{
    //
    public function login()
    {
        $company=Company::first();
        return view('auth.webLogin',compact('company'));
    }
 public function register()
    {
        $company=Company::first();
        return view('auth.webRegister', compact('company'));
    }
    public function saveLogin(Request $request)
    {


        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);



            if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'type' => 'user'))) {

                return redirect()->intended(url('/'));

            } else {
dd('error');
                return redirect()->route('user-login')
                    ->withErrors('invalid_data');

            }


    }

    public function saveRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'unique:users'],

            'password' => ['required', 'min:8'],

        ]);
        if ($validator->fails()) {

            return redirect()->back()->withInput()
                ->withErrors($validator->messages());

        }
        DB::beginTransaction();
        try {
            // Disable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'type' => 0,
                'password' => Hash::make($request->password),
            ]);



            Auth::login($user);
            DB::commit();
            // Enable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            return redirect('/');

        } catch (\Throwable$e) {
            // throw $th;
            DB::rollback();
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // return redirect()->back()->withInput()->withErrors('حدث خطأ فى ادخال البيانات قم بمراجعتها مرة اخرى');
        }

    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        // Logic that determines where to send the user
        if (Auth::user()->type == 'user') {
            return '/';
        }

        return '/user-login';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
