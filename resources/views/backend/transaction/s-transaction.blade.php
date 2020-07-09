@extends('layout.base')
@section("custom_css")
<link rel="stylesheet" href="/backend/assets/css/s-transaction.css">
@stop

@section('content')

<div class="account-pages my-5">
  <div class="container-fluid">
      <div class="row-justify-content-center">
          <div class="h2"><i data-feather="file-text" class="icon-dual"></i> Transaction Details</div>

          <div class="jumbotron">
            <div class="container">
                <table class="table table-bordered">
                    <div class="table_img_para list-inline">
                        <img class="table_img list-inline-item mb-3" src="/frontend/assets/img/S_transtn-img/man.png" alt="">
                        <div class="list-inline-item">
                            <p class="font-weight-bold">Hon. Ahmed Musa</p>
                            <p class="font-weight-bold">+099933300073</p>
                        </div>
                    </div>
    
                    <thead class=" ">
                        <tr>
                            <th>Product/item Ordered</th>
                            <th>Number Ordered</th>
                            <th>Cost per item</th>
                            <th>Total Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Crates of egg</td>
                            <td>20 crates</td>
                            <td>&#8358; 1000</td>
                            <td>&#8358; 20,000</td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="btn_div list-inline">
                    <button class="btn btn-warning btn-lg list-inline-item">Review Order</button>
                    <button class="btn btn-success btn-lg list-inline-item">Continue to Checkout</button>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
    
   
   
    
@endsection


@section("javascript")


@stop