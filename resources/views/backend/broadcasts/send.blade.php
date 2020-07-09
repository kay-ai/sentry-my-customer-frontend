@extends('layout.base')
@section ('custom_css')
    <link rel="stylesheet" href="/backend/assets/css/compose.css">
@stop
    @section('content')
        <div class="row">
            <div class="col">
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold" style="text-align: center;">Send a Message</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label for="title"><strong>Message Title</strong></label><input class="form-control" type="text" placeholder="Enter your message title here" name="username"></div>
                                </div>
                            </div>
                            <p class="header"> Message Body</p>
                            <textarea name="message" id="body" cols="30" rows="10" placeholder="Enter message here" class="w-100"></textarea>
                            <input type="checkbox" id="temp" name="temp" value="template">
                            <label for="temp"> See templates</label><br>
                            <button type="button" class="btn-lg btn-primary  button text-center my-5">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('javascript')

    @stop
