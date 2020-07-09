<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Cookie;

class SettingsController extends Controller
{
    // Defining headers
    public $headers;
    public $user_id;

    // Controller action to display settings page.
    public function index()
    {

        // Setting header
        $user_details = [];
        Cookie::get('user_id') !== null ?  $user_details['id'] = Cookie::get('user_id') : "Not set";

        Cookie::get('email') !== null ?  $user_details['email'] = Cookie::get('email') : "Not set";

        Cookie::get('first_name') !== null ?  $user_details['first_name'] = Cookie::get('first_name') : "Not set";

        Cookie::get('last_name') !== null ?  $user_details['last_name'] = Cookie::get('last_name') : "Not set";

        Cookie::get('phone_number') !== null ?  $user_details['phone_number'] = Cookie::get('phone_number') : "Not set";

        Cookie::get('is_active') !== null ?  $user_details['is_active'] = Cookie::get('is_active') : "Not set";
        return view('backend.settings.settings')->with("user_details", $user_details);
        // Setting User_id
        $this->user_id = Cookie::get('user_id');
    }

    // Controller action to update user details.
    public function update(Request $request)
    {

        // Setting header


        // Setting User_id
        $this->user_id = Cookie::get('user_id');

        try {
            // check if all fields are available
            if ($request->all()) {
                $control = $request->input('control', '');

                if ($control == 'profile_update') {

                    $url = env('API_URL', 'https://dev.api.customerpay.me') . '/store-admin/update';
                    $client = new Client();
                    $phone_number = intval($request->input('phone_number'));
                    $data = [
                        "first_name" => $request->input('first_name'),
                        "last_name" => $request->input('last_name'),
                        "email" => $request->input('email'),
                        "phone_number" => $phone_number
                    ];
                    // make an api call to update the user_details
                    $this->headers = ['headers' => ['x-access-token' => Cookie::get('api_token')], 'form_params' => $data];
                    $form_response_process = $client->request('PUT', $url, $this->headers);
                } elseif ($control == 'password_change') {

                    // $url = env('API_URL', 'https://api.customerpay.me'). '/reset-password';
                    $url = env('API_URL', 'https://dev.api.customerpay.me/') . '/user/update/';
                    $client = new Client();
                    $data = [
                        // "content" => [
                        // 'current_password' => $request->input('current_password'),
                        "new_password" => $request->input('new_password')
                        // ]
                    ];
                    // make an api call to update the user_details
                    $form_response_process = $client->request('PUT', $url, $this->headers, $data);
                } else {
                    return view('errors.404');
                }
                if ($form_response_process->getStatusCode() == 500) {
                    return view('errors.500');
                }
                if ($form_response_process->getStatusCode() == 400) {
                    $response = json_decode($form_response_process->getBody(), true);
                    $message = $response->error->description;
                    return view('backend.settings.settings')->with("user_details", $message);
                }
                if ($form_response_process->getStatusCode() == 200) {
                    $user_detail_res = json_decode($form_response_process->getBody(), true);

                    $filtered_user_detail = $user_detail_res['data']['store_admin']['local'];
                    $user_details = [
                        "email" => $filtered_user_detail['email'],
                        "phone_number" => $filtered_user_detail['phone_number'],
                        "first_name" => $filtered_user_detail['first_name'],
                        "last_name" => $filtered_user_detail['last_name'],
                        "is_active" => Cookie::get('is_active')
                    ];
                    Cookie::queue('phone_number', $filtered_user_detail['phone_number']);
                    Cookie::queue('first_name', $filtered_user_detail['first_name']);
                    Cookie::queue('email', $filtered_user_detail['email']);
                    Cookie::queue('last_name', $filtered_user_detail['last_name']);
                    $request->session()->flash('alert-class', 'alert-success');
                    $request->session()->flash('message', "Profile details updated successfully");
                    return redirect()->route('setting')->with("user_details", $user_details);
                }
            } else {
                return redirect()->route('settings');
            }
        } catch (\Exception $e) {
            return view('errors.500');
        }
    }
}
