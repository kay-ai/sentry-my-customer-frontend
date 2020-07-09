<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\RequestException;

// use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $host;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->host = env('API_URL', 'https://dev.api.customerpay.me');
    }

    public function index()
    {
        if (Cookie::get('api_token')) {
            return redirect()->route('dashboard');
        }
        return view('backend.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|min:6|max:16',
            'password' => 'required|min:6'
        ]);

        try {
            $client = new Client();
            $response = $client->post($this->host . '/login/user', [
                'form_params' => [
                    'phone_number' => $request->input('phone_number'),
                    'password' => $request->input('password')
                ]
            ]);

            if ($response->getStatusCode() == 200) {

                $response = json_decode($response->getBody());

                if (isset($response->success) && $response->success) {

                    $data = $response->data->user->local;

                    // store data to cookie
                    Cookie::queue('api_token', $response->data->user->api_token);
                    Cookie::queue('user_role', $response->data->user->local->user_role);
                    Cookie::queue('first_name', $response->data->user->local->first_name);
                    Cookie::queue('email', $response->data->user->local->email);
                    Cookie::queue('last_name', $response->data->user->local->last_name);
                    Cookie::queue('is_active', $data->is_active);
                    Cookie::queue('phone_number', $data->phone_number);
                    Cookie::queue('user_id', $response->data->user->_id);
                    Cookie::queue('expires', strtotime('+ 1 day'));

                    //show success message
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
        } catch (RequestException $e) {
            //log error;
            Log::error('Catch error: LoginController - ' . $e->getMessage());

            if ($e->hasResponse()) {
                // get response to catch 4xx errors
                $response = json_decode($e->getResponse()->getBody());
                $request->session()->flash('alert-class', 'alert-danger');
                $request->session()->flash('message', $response->error->description);
                return redirect()->route('login');
            }
            // check for 500 server error
            return view('errors.500');
        } catch (\Exception $e) {
            //log error;
            Log::error('Catch error: LoginController - ' . $e->getMessage());
            return view('errors.500');
        }
        return redirect()->route('login');
    }
}
