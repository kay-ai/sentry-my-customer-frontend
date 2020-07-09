<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{


    public function __construct()
    {
        // $this->middleware('guest');
        $this->host = env('API_URL', 'https://dev.api.customerpay.me');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('backend.transaction.index');
        // $host = env('API_URL', 'https://api.customerpay.me');
        // $url = $host."/transaction/all";
        // // return $url;
        // try {
        //     $client = new Client();
        //     $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
        //     $response = $client->request('GET', $url, $headers);
        //     $statusCode = $response->getStatusCode();
        //     if ($statusCode == 200) {
        //         $body = $response->getBody()->getContents();
        //         $transaction = json_decode($body);
        //         return view('backend.transactions.index')->with('response', $transaction);
        //     } else {
        //         dd($statusCode);
        //     }
           
        // } catch (\Exception $e) {
        //     // return view('errors.500');
        //     return view('backend/dashboard')->with('error', "Unable to connect to server");
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.transaction.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function report($id)
    {
        return view('backend.transaction.report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = env('API_URL', 'https://dev.api.customerpay.me') . '/transaction/new';

        $data = $request->validate([
            'amount' => 'required',
            'interest' => 'required',
            'total_amount' => 'required',
            'description' => 'required|string',
            'transaction_name' => 'required',
            'type' => 'required',
            'store_name' => 'required',
            'phone_number' => 'required'
        ]);
        
        try{
            if ($data) {

                $client = new Client();
                $payload = [
                    'headers' => ['x-access-token' => Cookie::get('api_token')],
                    'form_params' => [
                        'amount' => $request->input('amount'),
                        'interest' => $request->input('interest'),
                        'total_amount' => $request->input('total_amount'),
                        'description' => $request->input('description'),
                        'transaction_name' => $request->input('transaction_name'),
                        'type' => $request->input('type'),
                        'store_name' => $request->input('store_name'),
                        'phone_number' => $request->input('phone_number'),
                    ],
                
                ];
                $response = $client->request("POST", $url, $payload);
                $statusCode = $response->getStatusCode();
                $body = $response->getBody();
                $data = json_decode($body);

                if ($response->getStatusCode() == 201) {
                    $request->session()->flash('alert-class', 'alert-success');
                    $request->session()->flash('message', 'Transaction successfully created');
                        return redirect()->route('transaction.index');
                }
                    $request->session()->flash('message', 'Transaction failed to create');
                    $request->session()->flash('alert-class', 'alert-danger');
                    return redirect()->route('transaction.index');
            }

        } catch (RequestException $e) {

            Log::info('Catch error: TransactionController - ' . $e->getMessage());

            // check for 5xx server error
            if ($e->getResponse()->getStatusCode() >= 500) {
                return view('errors.500');
            }
            // get response to catch 4xx errors
            $response = json_decode($e->getResponse()->getBody());
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message', $response->error->description);
            return redirect()->route('transaction.index', ['response' => []]);

        } 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.transaction.show');

        // return view('backend.transaction.show');
        // $host = env('API_URL', 'https://api.customerpay.me/');
        // $url = $host."/transaction/$id";
        // // return $url;
        // try {
        //     $client = new Client();
        //     $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
        //     $response = $client->request('GET', $url, $headers);
        //     $statusCode = $response->getStatusCode();
        //     if ($statusCode == 200) {
        //         $body = $response->getBody()->getContents();
        //         $transactions = json_decode($body);
        //         return view('backend.transactions.show')->with('response', $transactions);
        //     }
        //     if ($statusCode == 500) {
        //         return view('errors.500');
        //     }
        //     if ($statusCode == 401) {
        //         return view('backend.dashboard.index')->with('error', "Unauthoized toke");
        //     }
        //     if ($statusCode == 404) {
        //         return view('backend.dashboard.index')->with('error', "Transaction not found");
        //     }
        // } catch (\Exception $e) {
        //     // return view('errors.500');
        //     return view('backend.dashboard.index')->with('error', "Unable to connect to server");
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.transaction.edit');
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
      // return view('backend.transaction.index');
        $host = env('API_URL', 'https://dev.api.customerpay.me/');
        $url = $host."/transaction/delete/$id";
        // return $url;
        try {
            $client = new Client();
            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
            $response = $client->request('GET', $url, $headers);
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $body = $response->getBody()->getContents();
                $transactions = json_decode($body);
                return view('backend.transaction.index')->with('response', $transactions);
            }
            if ($statusCode == 500) {
                return view('errors.500');
            }
            if ($statusCode == 401) {
                return view('backend.dashboard.index')->with('error', "Unauthoized toke");
            }
            if ($statusCode == 404) {
                return view('backend.dashboard.index')->with('error', "Transaction not found");
            }
        } catch (\Exception $e) {
            // return view('errors.500');
            return view('backend.dashboard.index')->with('error', "Unable to connect to server");
        }
    }
}
