@extends('layout.base')
@section("custom_css")
<link href="/backend/assets/css/transactions-report.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<div class="account-pages my-5">
  <div class="container-fluid">
      <div class="row-justify-content-center">
          <div class="h2"><i data-feather="file-text" class="icon-dual"></i> Transaction Report</div>
          <section class=" report">
            <div class='container'>
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                    <div class="card 5">
                        <!-- Card begins here -->
                        <div class="card-body">
                            <h5 class="card-title">Transactions Report</h5>
                            <p class="card-text"><span>JohnDoe Enterprises</span></p>
                            <p class="card-textx mb-5">For <span>July 1, 2020 - July 30, 2020</span></p> 
                             
                                    <div class="col">
                                    <p class='receivables'>Accounts Receivables (1200-1)</p>
                                    </div> 
                            <!-- <hr class='border-line'> -->
                                <table class="table table-responsive-sm table-responsive-md table-hover">
                                    <thead>
                                        <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Transaction/Reference</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Debit</th>
                                        <th scope="col">Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>01-01-20</td>
                                        <td>JD-0001245</td>
                                        <td>Jane Doe</td>
                                        <td>#100</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>01-01-20</td>
                                        <td>JD-0001245</td>
                                        <td>Jane Doe</td>
                                        <td>#100</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>01-01-20</td>
                                        <td>JD-0001245</td>
                                        <td>Jane Doe</td>
                                        <td>#100</td>
                                        <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                           
                        </div>
                      
                        </div>
                   
                    </div>
        
                   
                    <div class="col-md-3 col-lg-3">
                        <div class="row">
                            <div class="col-md-6 filters">
                                Filters
                            </div>
                         
                        </div>
        
                        <!-- Filter here -->
                        <form action="">
                            <div class="form-group">
                                <label for="date_range" class="savings-label mt-4">  Date Range</label>
                                <select  class=" form-control" id="date_range" required >    
                                      <option value="">10 - 30 days</option>
                                      <option value="">31 - 60 days</option>  
                                      <option value="">61 - 90 days</option>
                                      <option value="">91days to 2years</option>
                                      <option value="">Over 2 years</option>        
                                  </select>
                            </div>
        
                            <div class="form-group">
                                <label for="currency" class="savings-label mt-3">   Currency</label>
                                <select  class=" form-control" id="currency" required >    
                                      <option value="">NAIRA</option>
                                      <option value="">USD</option>  
                                      <option value=" ">YEN</option>
                                          
                                  </select>
                            </div>
        
                            <div class="form-group">
                                <label for="limit" class="savings-label mt-3">  Limit to</label>
                                <select  class=" form-control" id="limit" required >    
                                      <option value="">All Accounts</option>
                                      <option value="">Debit</option>  
                                      <option value="">Credit</option>     
                                  </select>
                            </div>
                            <button type="submit" class="btn mb-5 btn-outline-dark">Apply</button>
        
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
      </div>
  </div>
</div>


@endsection

