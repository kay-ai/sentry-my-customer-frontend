{{-- inherits base markup --}}
@extends('layout.base')

{{-- add in the basic styling : check the contents of these stylesheets later --}}
@section("custom_css")
  <link rel="stylesheet" href="{{asset('backend/assets/css/singleCustomer.css')}}">
@stop


{{-- yield body content --}}

@section('content')
<div class="content">
  @isset($response)
    <div class="container-fluid">
        {{-- start of page title --}}
        <div class="row page-title">
            <div class="col-md-12">
                <h4 class="mb-1 mt-0 float-left">Edit Profile Page</h4>
                <a href="/admin" class="btn btn-primary float-right" >
                    Go Back {{-- &nbsp;<i class="fa fa-plus my-float"></i> --}}
                </a>
            </div>
        </div>
         {{-- end of page title --}}

         {{-- start of content section --}}
         <div class="row contentrow">
             {{--start of person profile--}}
             <div class="col-lg-3 col-md-4 col-sm-5" id="h1IdTop">
                 <div class="card">
                     <div class="card-body text-center text-muted">
                         <img src="../../backend/assets/images/users/avatar-7.jpg" alt="Customer 1" class="img-fluid rounded-circle">
                         <h4>{{ ucfirst($response->name) }}</h4>
                          <h5 class="cust-email">{{ $response->email }}</h5>
                         this is a very very large junk of rubbush that i am just foing to type in the hopes that it casue seomth
                         ing dofferent to hppen to my file ebvery single godammmn time.
                     </div>
                     <div class="address">
                         <h5>House Address</h5>
                         <p class="customer-address">1975, Boring Lane, San <br>Francisco, California, United<br> States - 94108</p>
                     </div>
                 </div>
             </div>
             {{--end of person profile--}}

             <div class="col-lg-9 col-md-8 col-sm-7">
                 {{-- start of card --}}
                @if(Session::has('message') || $errors->any())
                  <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" role="form" method="post" action="{{ route('customer.update', $response->_id) }}" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Full Name:</label>
                              <div class="col-lg-8">
                                <input class="form-control" type="text" value="{{ ucfirst($response->name) }}" name="name">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-3 control-label">Email:</label>
                              <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{$response->email}}" name="email">
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Tel:</label>
                                <div class="col-lg-8">
                                  <input class="form-control" type="phone" value="{{$response->phone_number}}" name='phone'>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-md-8">
                                    <select class="form-control">
                                        <option selected="">Customer Type</option>
                                        <option>Good Debtor</option>
                                        <option>Bad Debtor</option>
                                        <option>Doesn't Owe</option>                                        
                                      </select>
                                  </div>                                
                              </div>  
                              <div class="form-group">
                                <div class="col-md-8">
                                    <select class="form-control">
                                        <option selected="">Status</option>
                                        <option class="text-danger">Has Debt</option>
                                        <option class="text-success">No Debt</option>                                        
                                      </select>
                                  </div>                                
                              </div>                                                           
                              
                            <div class="form-group">
                              <label class="col-md-3 control-label green-border-focus">House Adddress</label>
                              <div class="col-md-8">                                
                                <textarea class="form-control " rows="3">1975, Boring Lane, San
                                    Francisco, California, United
                                    States - 94108</textarea>
                                
                              </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Short Comment</label>
                                <div class="col-md-8">
                                  <input class="form-control" type="text" value="this is a very very large junk of rubbush that i am just foing to type">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Store Name</label>
                                <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Enter Store Name" name="store_name" required>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="col-md-8">
                                    <input type="file" id="main-input" class="form-control form-input form-style-base">                                        
                                  </div>                                
                              </div> --}}

                            <div class="form-group">
                              <label class="col-md-3 control-label"></label>
                              <div class="col-md-8">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                                <span></span>
                                <input type="reset" class="btn btn-default" value="Cancel">
                              </div>
                            </div>
                          </form>

                        {{--customer basic info end--}}
                    </div>
                </div>
                <!-- end card --> 
        </div>
         {{--End of person profile--}}
         </div>

    
        
        {{--end of column--}}
    </div>
  @endisset
</div>

@endsection
