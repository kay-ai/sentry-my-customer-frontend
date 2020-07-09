
    @extends('layout.base')
@section("custom_css")
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

@stop
       @section('content')
       <p style="display: none;" id="api-token">
           <?php
        echo Cookie::get('api_token');
       ?>
    </p>

          <div class="content">
                <!-- Start Content-->
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none" id="alerts">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb" class="float-right mt-1">
                                <a href="{{ route('users') }}" class="btn btn-primary">Go Back</a>
                            </nav>
                            <h4 class="mb-1 mt-0">Profile</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mt-3">
                                        <img src="/backend/assets/images/users/avatar-7.jpg" alt=""
                                            class="avatar-lg rounded-circle" />
                                    <h5 class="mt-2 mb-0">{{$response->first_name. " " . substr($response->last_name,0,1) ."."}}</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-0">
                                                     @if ($response->user_role == "store_admin")
                                                            <span class="badge badge-primary">owner</span>
                                                        @elseif ($response->user_role == "store_assistant")
                                                            <span class="badge badge-secondray">assistant</span>
                                                        @else
                                                             <span class="badge badge-info">No role</span>
                                                        @endif
                                           {{isset( $response->store_name) ? $response->store_name : "Store name Here"}}
                                        </h6>
                                    </div>
                                    <div class="mt-5 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Store Address</h4>
                                        <p class="text-muted mb-4">{{isset( $response->store_address) ? $response->store_address : "Store address Here"}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-activity-tab" data-toggle="pill"
                                                href="#pills-activity" role="tab" aria-controls="pills-activity"
                                                aria-selected="true">
                                                Basic Information
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-messages-tab" data-toggle="pill"
                                                href="#pills-messages" role="tab" aria-controls="pills-messages"
                                                aria-selected="false">
                                                Transactions
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-projects-tab" data-toggle="pill"
                                                href="#pills-projects" role="tab" aria-controls="pills-projects"
                                                aria-selected="false">
                                                Customers
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel"
                                            aria-labelledby="pills-activity-tab">
                                            <h5 class="mt-3">Account Information</h5>
                                             <div class="table-responsive">
                                            <table class="table table-borderless mb-0 text-muted">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                    <td>{{$response->email}}</td>
                                                    </tr>
                                                      <tr>
                                                        <th scope="row">Total Number of Customers</th>
                                                <td id="customers-num">{{"number of customers here"}}</td>
                                                    </tr>
                                                                                                                                                            <tr>
                                                        <th scope="row">Role</th>
                                                        <td>Owner</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phone</th>
                                                        <td>{{$response->phone_number}}</td>
                                                    </tr>
                                                                                                        <tr>
                                                        <th scope="row">Store Reference Code</th>
                                                        <td>{{isset( $response->store_ref_code) ? $response->store_ref_code : "Store ref_code Here"}}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        </div>

                                        <!-- messages -->
                    <div class="tab-pane" id="pills-messages" role="tabpanel"
                                            aria-labelledby="pills-messages-tab">
                                            <h5 class="mt-3">Transactions</h5>
                                                   <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                 <thead>
                                    <tr>
                                        <td>Ref Id</td>
                                        <td>Ref Transaction Type</td>
                                        <td>Customer Ref Code</td>
                                        <td>Amount</td>
                                        <td>Expected Pay Date</td>
                                        <td>View more</td>
                                    </tr>
                                </thead>

                                <tbody id="transactions-table">


                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-projects" role="tabpanel"
                                            aria-labelledby="pills-projects-tab">

                                            <h5 class="mt-3">Customers</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">View Profile</th>
                                                </tr>
                                            </thead>
                                            <tbody id="customers-table">
                                                No Transactions to show
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->

            </div>
        @endsection


    @section("javascript")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

let api_token = document.getElementById('api-token').textContent.trim();

@php
    $apiHost = env('API_URL','https://dev.customerpay.me');
@endphp

const apiHost = "{{ $apiHost }}";

//gets customers
$.ajax({
    headers:{
        'x-access-token':api_token
    },
    url: apiHost + "/customer/all",
    statusCode: {
         401: function(responseObject, textStatus, jqXHR) {

             $("#alerts").text('Something went wrong: ' + textStatus)
              $('#alerts').css('display','inline-block')
                           setTimeout(()=>{
                  $('#alerts').hide();
             },3000)
             },
        403: function(responseObject, textStatus, errorThrown) {

             $("#alerts").text('Something went wrong: ' + textStatus)
                  $('#alerts').css('display','inline-block')
                setTimeout(()=>{
                  $('#alerts').hide();
             },3000)
            }
        }
})
.done(function(data){
    $('#customers-num').text(data.result);
    let customers = data.data;
       let text = '';
     $("#customers-table").text('');
    if(customers.length > 0){
        customers.forEach((element,index) => {

        text +=`
                  <tr>
                    <th scope="row">${index + 1}</th>
                    <td>${element.name}</td>
                    <td>${element.phone_number}</td>
                    <td><a href="/admin/customers/${element._id}">View profile</a></td>
                 </tr>
        `
        });
    }else{
        text = "You dont have any customers yet"
    }
    // console.log(text);
    $("#customers-table").append(text);
})


//gets transaction
$.ajax({
    headers:{
        'x-access-token':api_token
    },
    url: apiHost + "/transaction/all",
        statusCode: {
         401: function(responseObject, textStatus, jqXHR) {

             $("#alerts").text('Something went wrong: ' + jqXHR)
             $('#alerts').css('display','inline-block')
                 setTimeout(()=>{
                  $('#alerts').hide();
             },3000)
             },
        403: function(responseObject, textStatus, errorThrown ) {
             $("#alerts").text('Something went wrong: ' + errorThrown)
             $('#alerts').css('display','inline-block')
             setTimeout(()=>{
                  $('#alerts').hide();
             },3000)
            }
        }
})
.done(function(data){
let text = '';
  $("#transactions-table").text('');
      if(data.length > 0){
        data.forEach((element,index) => {

    text +=`
    <tr>
        <td></td>
        <td>Not available</td>
        <td>Not available</td>
        <td>${element.amount}</td>
        <td>Not available</td>
        <td><a href="/admin/transactions/${element._id}"><i data-feather="eye"></i></a></td>
    </tr>
        `;
        });
    }else{
        text = "You dont have any transactions yet";
    }
$("#transactions-table").text(text);
})
</script>

    @stop
