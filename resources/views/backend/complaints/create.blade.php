@extends('layout.base')

@section("custom_css")
    <!-- <link href="/frontend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="/backend/assets/css/materialize.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">


@stop



@section('content')

    <style type="text/css">
        @media screen and (max-width: 670px) {
            .container {
                max-width: 500px;
                /*margin: 0px;*/
                padding: 0px;
            }
        }
    </style>
    <div class="container" style="padding: 20px; background-color: white; margin-top: 15px; border-radius: 10px;">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{route('complaint.store')}}">
            @csrf
            <h5>Log your Complain</h5><br>
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input id="name" name="name" type="text" class="validate" value="{{old('name')}}">
                <label for="name">Name</label>
            </div>
            <br>
            <div class="input-field">
                <i class="material-icons prefix">store</i>
                <input id="email" name="email" type="email" class="validate" value="{{old('email')}}">
                <label for="email">Email</label>
            </div>
            <br>
            <div class="input-field">
                <i class="material-icons prefix">edit</i>
                <textarea id="message" name="message" class="materialize-textarea">{{old('message')}}</textarea>
                <label for="message">Message</label>
            </div>
            <br>
            <div style="margin-bottom: 50px;">
                <button style="color: white;" name="btn" class="waves-effect waves-light btn right"><i
                            class="material-icons left">send</i>SUBMIT
                </button>
            </div>
        </form>
    </div>

@endsection


@section("javascript")
    <script type="text/javascript" src="/backend/assets/js/materialize.min.js"></script>


@stop

