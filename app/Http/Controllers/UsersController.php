<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Support\Facades\Cookie;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('backend.user.index');
        // try {

        //     $url = env('API_URL', 'https://api.customerpay.me'). '/user/all' ;
        //     $client = new Client();
        //     $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
        //     $user_response = $client->request('GET', $url, $headers);

        //     if ( $user_response->getStatusCode() == 200 ) {

        //         $users = json_decode($user_response->getBody()->getContents(), true);

        //         $perPage = 10;
        //         $page = $request->get('page', 1);
        //         if ($page > count($users) or $page < 1) {
        //             $page = 1;
        //         }
        //         $offset = ($page * $perPage) - $perPage;
        //         $articles = array_slice($users, $offset, $perPage);
        //         $datas = new Paginator($articles, count($users), $perPage);

        //         return view('backend.user.index')->with('response', $datas->withPath('/'.$request->path()));
        //     }
        //     if ($user_response->getStatusCode() == 500) {

        //         return view('errors.500');
        //     }
        // } catch(\Exception $e) {
        //     $user_response = $e->getResponse();
        //     //log error;
        //     Log::error('Catch error: UserController - ' . $e->getMessage());

        //     return view('errors.500');
        // }

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
    	//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // return view('backend.dashboard.index');
       $host = env('API_URL', 'https://dev.api.customerpay.me/');
       $url = $host."/user/delete/$id";
       // return $url;
       try {
           $client = new Client();
           $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
           $response = $client->request('GET', $url, $headers);
           $statusCode = $response->getStatusCode();
           if ($statusCode == 200) {
               $body = $response->getBody()->getContents();
               $users = json_decode($body);
               return view('backend.dashboard.index')->with('response', $users);
           }
           if ($statusCode == 500) {
               return view('errors.500');
           }
           if ($statusCode == 401) {
               return view('backend.dashboard.index')->with('error', "Unauthoized toke");
           }
           if ($statusCode == 404) {
               return view('backend.dashboard.index')->with('error', "User not found");
           }
       } catch (\Exception $e) {
           // return view('errors.500');
           return view('backend.dashboard.index')->with('error', "Unable to connect to server");
       }
    }
}