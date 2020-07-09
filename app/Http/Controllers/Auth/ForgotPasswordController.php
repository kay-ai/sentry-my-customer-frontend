<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->host = env('API_URL', 'https://api.customerpay.me/');
    }

    public function index()
    {
        return view('backend.password.recover');
    }

    public function authenticate(Request $request)
    {
        $validation = Validator::make(request()->all(), [
            'phone_number' => 'required|min:6|max:16',
        ]);

        if ($validation->fails()) {
            $request->session()->flash('message', 'Invalid Phone number');
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect()->route('login');
        }

        try {
            $client =  new \GuzzleHttp\Client();
            $response = $client->post($this->host . '/forgot-password', [
                'form_params' => [
                    'phone_number' => $request->input('phone_number'),
                ]
            ]);

            if ($response->getStatusCode() == 200) {

                $response = json_decode($response->getBody());

                if (isset($response->success) && $response->success) {

                    $data = $response->data->user->local;

                    // store data to cookie
                    Cookie::queue('api_token', $data->api_token);
                    Cookie::queue('phone_number', $data->phone_number);
                    Cookie::queue('user_id', $response->data->user->_id);
                    Cookie::queue('expires', strtotime('+ 1 day'));

                    $request->session()->flash('alert-class', 'alert-success');
                    $request->session()->flash('message', $response->message);

                    //check if active
                    if ($data->is_active == false) {
                        return redirect()->route('activate.user');
                    }

                    return redirect()->route('dashboard');
                } else {
                    $message = isset($response->Message) ? $response->Message : $response->message;
                    $request->session()->flash('message', $message);
                    return redirect()->route('login');
                }
            }

            $message = isset($response->Message) ? $response->Message : $response->message;
            $request->session()->flash('message', $message);
            return redirect()->route('login');
        } catch (\Exception $e) {

            if ($e->getCode() == 400) {
                $request->session()->flash('message', 'Invalid Phone number or password. Ensure Your phone number uses internations format.e.g +234');
                $request->session()->flash('alert-class', 'alert-danger');
                return redirect()->route('login');
            }

            Log::error("catch error: LoginController - " . $e->getMessage());
            $request->session()->flash('message', 'Something bad happened, please try again');
            return redirect()->route('login');
        }
        return redirect()->route('login');
    }
}
