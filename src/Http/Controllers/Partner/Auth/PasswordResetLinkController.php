<?php

namespace App\Http\Controllers\Partner\Auth;

use App\Models\Partner;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\Auth\PartnerResetPassword;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */

    public function create(): View
    {
        return view('partner.auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
      $request->validate([
        'email' => 'required|email'
      ]);
      
      if ($data = Partner::whereEmail($request->email)->first()){
         $token = md5(time().$data->name.$data->email);
         
         PasswordReset::updateOrCreate(
            ['email'=>$data->email, 'user_type_id'=>2],
            ['token'=> Hash::make($token)]
         );
 
         Mail::to($request->email, $data->name)
         ->send(new PartnerResetPassword($data,$token));
        Session::flash('success',__('We Have Sent a Link To Your Account!. Please Check Your Email.'));
        return redirect()->back()->with('status', __('We Have Sent a Link To Your Account!. Please Check Your Email.'));
      }
      else{
        Session::flash('error',__('No Account Found With This Email.'));
        return redirect()->back()->with('status', 'No Account Found With This Email');
      }
    }
}
