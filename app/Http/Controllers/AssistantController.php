<?php


namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        try {
            $user_id = Cookie::get('user_id');
            $url = env('API_URL', 'https://api.customerpay.me/') . '/user/all/' . $user_id;
            //$url = "http://localhost:3000/user/all/" . $user_id;
            $client = new Client();
            $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
            $user_response = $client->request('GET', $url, $headers);
            if ($user_response->getStatusCode() == 200) {
                $response = json_decode($user_response->getBody(), true);
                $assistants = $response['data']['assistants'];
                $perPage = 10;
                $page = $request->get('page', 1);
                if ($page > count($assistants) or $page < 1) {
                    $page = 1;
                }
                $offset = ($page * $perPage) - $perPage;
                $articles = array_slice($assistants, $offset, $perPage);
                $datas = new Paginator($articles, count($assistants), $perPage);
                return view('backend.assistant.index')->with('response', $datas->withPath('/' . $request->path()));
            }
            if ($user_response->getStatusCode() == 500) {
                return view('errors.500');
            }
        } catch (\Exception $e) {
            $request->session()->flash('message', 'Sorry could not get assistants, please check your connection');
            return view('backend.assistant.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/assistant/create');
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

        $url = env('API_URL', 'https://dev.api.customerpay.me') . '/assistant/new';

        if ($request->isMethod('post')) {
            $request->validate([
                'phone_number' => 'required',
                'name' =>  'required',
            ]);

            try {

                $client =  new Client();
                $payload = [
                    'headers' => ['x-access-token' => Cookie::get('api_token')],
                    'form_params' => [
                        'name' => $request->input('name'),
                        'phone_number' => $request->input('phone_number'),
                    ],

                ];

                $response = $client->request("POST", $url, $payload);

                $statusCode = $response->getStatusCode();
                $body = $response->getBody();
                $data = json_decode($body);

                if ($statusCode == 201  && $data->success) {
                    $request->session()->flash('alert-class', 'alert-success');
                    Session::flash('message', $data->message);
                    return redirect()->route('assistant.create');
                } else {
                    $request->session()->flash('alert-class', 'alert-waring');
                    Session::flash('message', $data->message);
                    return redirect()->route('assistant.create');
                }
            } catch (ClientException $e) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();

                if ($statusCode  == 500) {
                    Log::error((string) $response->getBody());
                    return view('errors.500');
                }

                $data = json_decode($response->getBody());
                Session::flash('message', $data->message);
                return redirect()->route('assistant.create');
            } catch (Exception $e) {
                // dd( $e->getMessage());
                Log::error($e->getMessage());
                return view('errors.500');
            }
        }
        return view('backend.assistant.create');
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
        return view('backend/assistant/edit');
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
    public function destroy($user_id)
    {
       $url = env('API_URL', 'https://api.customerpay.me/') . '/assistant/delete/' . $user_id;
       $client = new Client();
       $headers = ['headers' => ['x-access-token' => Cookie::get('api_token')]];
       try {
	       $delete = $client->delete($url, $headers);

	      if($delete->getStatusCode() == 200 || $delete->getStatusCode() == 201) {
		    	$request->session()->flash('alert-class', 'alert-success');
                Session::flash('message', "Store assistant successfully deleted");
                return redirect()->route('assistant.index');
	        }
        	else if($delete->getStatusCode() == 401){
		    	$request->session()->flash('alert-class', 'alert-danger');
		    	Session::flash('message', "You are not authorized to perform this action, please check your details properly");
                return redirect()->route('assistant.index');
	       }
           else if($delete->getStatusCode() == 500){
		   		$request->session()->flash('alert-class', 'alert-danger');
		    	Session::flash('message', "A server error encountered, please try again later");
                return redirect()->route('assistant.index');
	      	}
       	  }
       	  catch(ClientException $e) {
				$request->session()->flash('alert-class', 'alert-danger');
				Session::flash('message', "A technical error occured, we are working to fix this.");
                return redirect()->route('assistant.index');
       }
    }
}
