<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cookie;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $host = env('API_URL', 'https://dev.api.customerpay.me/');
        $user_id = Cookie::get('user_id');
        $url = $host . "complaints/$user_id";
        try {
            $client = new Client();
            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
            $response = $client->request('GET', $url, $headers);
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $body = $response->getBody()->getContents();
                $complaints = json_decode($body);
                return view('backend.complaints.index')->with('responses', $complaints);
            }
            if ($statusCode == 500) {
                return view('errors.500');
            }
        } catch (\Exception $e) {
            return view('errors.500');

        }
        // return view('backend.complaints.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.complaints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $user_id = Cookie::get('user_id');
        $url = env('API_URL', 'https://dev.api.customerpay.me/') . "/complaint/new/$user_id";

        try {
            $client = new Client();

            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];

            $data = [
                "message" => $request->input('message'),
                "name" => $request->input('name'),
                "email" => $request->input('email')
            ];

            // $req = $client->request('POST', $url, $headers, $data);
            $req = $client->post($url, [
                'form_params' => $data
            ]);
            $statusCode = $req->getStatusCode();
            $response = json_decode($req->getBody()->getContents());

            if ($statusCode == 200) {
                // dd($body);
                $request->session()->flash('alert-class', 'alert-success');
                $request->session()->flash('message', $response->message);

                return redirect()->route('complaint.create');
            } else {

                $message = isset($response->Message) ? $response->Message : $response->message;
                $request->session()->flash('message', $message);
                return back();
            }

        } catch (RequestException $e) {
            //log error;
            Log::error('Catch error: ComplaintController - ' . $e->getMessage());

            if ($e->hasResponse()) {
                // get response to catch 4xx errors
                // dd($e->getMessage());
                $response = json_decode($e->getResponse()->getBody());
                $request->session()->flash('alert-class', 'alert-danger');
                $request->session()->flash('message', "Make sure all fields are filled .\n Make sure the description is more than 10 characters");
                return back();
            }
            // check for 500 server error
            return view('errors.500');
        } catch (\Exception $e) {
            //log error;
            Log::error('Catch error: ComplaintController - ' . $e->getMessage());
            $request->session()->flash('alert-class', 'alert-danger');
            $request->session()->flash('message', 'Could not connect to the server. Please try again later');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $host = env('API_URL', 'https://dev.api.customerpay.me/');
        $user_id = Cookie::get('user_id');
        $url = $host."complaint/".$user_id."/".$id;
        try {
            $client = new Client();
            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
            $response = $client->request('GET', $url, $headers);
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $body = $response->getBody()->getContents();
                $complaints = json_decode($body);
                return view('backend.complaints.show')->with('response', $complaints);
            }
            if ($statusCode == 500) {
                return view('errors.500');
            }
        } catch (\Exception $e) {
            return view('errors.500');
            
        }
            // return view('backend.complaints.index');
        }
        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url = env('API_URL', 'https://dev.api.customerpay.me/') . "/complaint/update/$complaint_id";

        try {
            $client = new Client();

            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
            $request->validate([
                'message' => 'required'
            ]);

            $data = ["message" => $request->input('message')];
            $req = $client->request('PUT', $url, $headers, $data);

            $statusCode = $req->getStatusCode();

            if ($statusCode == 200) {
                $body = $req->getBody()->getContents();
                $response = json_decode($body);
                return redirect()->route('complaint.log');
            }
            if ($statusCode == 500) {
                return view('errors.500');
            }
            if ($statusCode == 401) {
                //Uncomment this when frontend has created the form page
                //return view('backend.complaintlog.update')->with('error', "Unauthoized token");
                return response()->json([
                    "message" => "401, Unauthorized token",
                    "info" => "Please, If the frontend for the update form has been done, uncomment line 114 of ComplaintsLogController to render the page"
                ]);
            }
            if ($statusCode == 404) {
                //Uncomment this when frontend has created the form page
                //return view('backend.complaintlog.update')->with('error', "Complaint not found");
                return response()->json([
                    "message" => "401, Unauthorized token",
                    "info" => "Please, If the frontend for the update form has been done, uncomment line 122 of ComplaintsLogController to render the page"
                ]);
            }
        } catch (\Exception $e) {
            return view('errors.500');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $host = env('API_URL', 'https://dev.api.customerpay.me/');
        $user_id = Cookie::get('user_id');
        $url = $host."complaint/delete/".$user_id."/".$id;
        $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
        try {
            $client = new Client();
            $request = $client->delete($url, $headers);
            $statusCode = $request->getStatusCode();
            if ($statusCode == 200) {
                
                
                return \Redirect::back()->with('success', 'Complaint Deleted Successfully');
            }
            if ($statusCode == 500) {
                return view('errors.500');
            }
        } catch (\Exception $e) {
            return view('errors.500');
        }
    }
}
