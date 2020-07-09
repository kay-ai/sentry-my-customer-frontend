<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ComplaintlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $url = env('API_URL', 'https://api.customerpay.me/'). "/user/$id";

        try {
            $client = new Client();
            
            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
            $request->validate([
    			'message' => 'required'
			]);
			
            $data = [ "message" => $request->input('message') ];
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
