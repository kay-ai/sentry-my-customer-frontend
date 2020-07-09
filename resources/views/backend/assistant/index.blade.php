
@extends('layout.base')
@section("custom_css")
<link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <link rel="stylesheet" href="/backend/assets/build/css/all_users.css">
@stop
        @section('content')
                <div class="content">
                    <a href="#" class="float" data-toggle="modal"
                                                    data-target="#myModal">
<i class="fa fa-plus my-float" ></i>
</a>
                    <div class="container-fluid">
                        <div class="row page-title">
            
                                        @if(Session::has('message'))
                                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                        
                                        @endif
                            
                            <div class="col-md-12">
                                <h4 class="mb-1 mt-0">Assitants</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <h4 class="header-title mt-0 mb-1">Basic Data Table</h4> --}}
                                            <p class="sub-header">
                                           Find Assistant
                                                </p>
                                            <div class="container-fluid">
                                                <div class="row">

                                            <div class="form-group col-lg-4 mt-4">
                                                <div class="row">
                                                <label class="form-control-label">Email</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="password" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 mt-4">
                                                <label class="form-control-label">Name</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="password" >
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 mt-4">
                                                <label class="form-control-label">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="tel" id="phone" class="form-control">

                                            </div>
                                            </div class="form-group col-lg-4 mt-4">
                                                <button type="button" class="btn btn-primary">Search</button>
                                             </div>


                                            </div>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <h4 class="header-title mt-0 mb-1">Basic Data Table</h4> --}}
                                            <p class="sub-header">
                                            List of all assistants
                                                </p>
                                            <div class="table-responsive">
                                     @isset($response)
                                        @if(count($response) > 0)
                                         <table class="table mb-0" id="basic-datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                     <th scope="col">Phone Number</th>
                                                     <th scope="col">Email</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           @for ($i = 0; $i < count($response); $i++)
                                        <tr>
                                        <th>{{$i + 1 }}</th>
                                                    <td>{{$response[$i]->first_name ." ". $response[$i]->last_name}}<br> <span>{{$response[$i]->_id}}</span>

                                                        @if ($response[$i]->user_role == "store_admin")
                                                            <span class="badge badge-primary">owner</span>
                                                        @elseif ($response[$i]->user_role == "store_assistant")
                                                            <span class="badge badge-secondray">assistant</span>
                                                        @else
                                                             <span class="badge badge-info">No role</span>
                                                        @endif
                                                        @if($response[$i]->is_active)
                                                        <span class="badge badge-success">Activated</span>
                                                         </td>
                                                         @else
                                                          <span class="badge badge-secondary">Not activated</span>
                                                        </td>
                                                        @endif
                                                    <td>
                                                       @if(isset($response[$i]->email))
                                                       {{$response[$i]->email}} <br>
                                                       @else
                                                       assistant email here<br>
                                                       @endif
                                                    {{-- <span class="badge badge-primary">Store Reference Code:
                                                        @if(isset($response[$i]->store_ref_code))
                                                       {{$response[$i]->store_ref_code}} <br>
                                                       @else
                                                        ST145M455 <br>
                                                       @endif
                                                    </span> --}}
                                                 </td>
                                                    <td><div class="btn-group mt-2 mr-1">
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                            @isset($response[$i]->_id)
                                            <a class="dropdown-item" href="{{ route('assistants.show',['assistant'=>$response[$i]->_id]) }}">View Profile</a>
                                                <a class="dropdown-item" href="{{route('assistants.show',['assistant'=>$response[$i]->_id])}}">Edit Assistant</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            @endisset
                                                </div>
                                                </div></td>
                                                </tr>
                                            @endfor
                                            </tbody>
                                        </table>
                                            @else
                                            <P>You dont have any assistant yet, click on the plus button to create one.</P>
                                            @endif
                                       @endisset
                                      @if(!isset($response))
                                        <P>Ooops could not get assistant to display</P>
                                      @endif
                                 
                                    </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                         @isset($response)
                        {{$response->links()}}
                        @endisset
                    </div>
                </div>
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Add Assistant</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                      
                        <form class="mt-4 mb-3 form-horizontal">
                            <div class="form-group row mb-3">
                                <label for="name" class="col-3 col-form-label">Name</label> <br> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter name here">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="number" class="col-3 col-form-label">Phone Number</label> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter phone number">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-3 col-form-label">Email</label> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter email">
                                </div>
                            </div>
                            <br>
                            <div class="form-group mb-0 justify-content-end row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                                                </div>
                                                                                                <div class="modal-footer">
                                                </div>

                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
        @endsection


    @section("javascript")
<script src="/backend/assets/build/js/intlTelInput.js"></script>
<script>
var input = document.querySelector("#phone");
window.intlTelInput(input, {
    // any initialisation options go here
});
</script>
    @stop
