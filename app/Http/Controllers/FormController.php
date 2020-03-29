<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    public function message(Request $request)
    {
        // To prevent spam submissions with dangerous links
        $regex = '/(http|ftp|https):\/\/([\w_-]+(?:(?:\.[\w_-]+)+))([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])?/';

        if(preg_match($regex, $request->input('messageBody'))) {
            return ['message', 'Sorry, there was a problem submitting the form. Try again or rather send me an email, check the About section on my home page for the address.'];
        } else {
            $this->validate(request(), [
                'firstname' => 'required|alpha',
                'lastname' => 'required|alpha',
                'email' => 'required|email',
                'assistanceType' => 'required',
                'messageBody' => 'required'
            ]);

            $data = [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'assistanceType' => $request->input('assistanceType'),
                'messageBody' => $request->input('messageBody')
            ];

            Mail::send('mail.message', $data, function($message) use($request) {
                $message->to('c@chilldsgn.com', "Christie")->subject('Contact request from website');
                $message->from('c@chilldsgn.com', 'chilldsgn.com');
            });
    
            return ['message', 'Thanks! I will be in touch soon.'];
        }

    }
}
