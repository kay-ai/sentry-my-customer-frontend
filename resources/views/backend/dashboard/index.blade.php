@extends('layout.base')
@section("custom_css")


@stop


@section('content')
<div class="container-fluid">
    <div class="row page-title align-items-center">
        <div class="col-sm-4 col-xl-6">
            <h4 class="mb-1 mt-0">Dashboard</h4>
        </div>
        <div class="col-sm-8 col-xl-6">
            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                <div class="form-group mb-sm-0 mr-2">
                    <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class='uil uil-file-alt mr-1'></i>Export Report
                        <i class="icon"><span data-feather="chevron-down"></span></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item notify-item">
                            <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                            <span>Email</span>
                        </a>
                        <a href="#" class="dropdown-item notify-item">
                            <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                            <span>Print</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item notify-item">
                            <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                            <span>Re-Generate</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- content -->
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                                Revenue</span>
                            <h2 class="mb-0">$0</h2>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                                0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                                Sold</span>
                            <h2 class="mb-0">0</h2>
                        </div>
                        <div class="align-self-center">
                            <div id="today-product-sold-chart" class="apex-charts"></div>
                            <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                                0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                Customers</span>
                            <h2 class="mb-0">0</h2>
                        </div>
                        <div class="align-self-center">
                            <div id="today-new-customer-chart" class="apex-charts"></div>
                            <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                                0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                Visitors</span>
                            <h2 class="mb-0">0</h2>
                        </div>
                        <div class="align-self-center">
                            <div id="today-new-visitors-chart" class="apex-charts"></div>
                            <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                                0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- stats + charts -->
    {{-- <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mt-0 mb-0 header-title">Transaction Overview</h5>
                    <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body pb-0">

                    <h5 class="card-title mb-0 header-title">Revenue Overview</h5>

                    <div id="revenue-chart" class="apex-charts mt-3" dir="ltr"></div>
                </div>
            </div>
        </div>


    </div> --}}
    <!-- row -->

    <!-- products -->
    <div class="row">

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-sm float-right">
                        <i class='uil uil-export ml-1'></i> Export
                    </a>
                    <a href="#" class="btn btn-primary btn-sm float-right">
                        View All
                    </a>
                    <h5 class="card-title mt-0 mb-0 header-title">Recent Transactions</h5>

                    <div class="table-responsive mt-4">
                        <table class="table table-hover table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>#0</td>
                                    <td>Debt</td>
                                    <td>Otto B</td>
                                    <td>$0</td>
                                    <td> <a href="#"><span class="badge badge-soft-warning py-1">View</span></a> </td>
                                </tr>
                                <tr>
                                    <td>#0</td>
                                    <td>Debt</td>
                                    <td>Otto B</td>
                                    <td>$0</td>
                                    <td> <a href="#"><span class="badge badge-soft-warning py-1">View</span></a> </td>
                                </tr>
                                <tr>
                                    <td>#0</td>
                                    <td>Debt</td>
                                    <td>Otto B</td>
                                    <td>$0</td>
                                    <td> <a href="#"><span class="badge badge-soft-warning py-1">View</span></a> </td>
                                </tr>
                                <tr>
                                    <td>#0</td>
                                    <td>Debt</td>
                                    <td>Otto B</td>
                                    <td>$0</td>
                                    <td> <a href="#"><span class="badge badge-soft-warning py-1">View</span></a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->


        <div class="col-xl-5">
            <div class="card">
                <div class="card-body pt-2">
                    <h5 class="mb-4 header-title">Latest Debts</h5>
                    <div class="media border-top pt-3">
                        <div class="media-body">
                            <h6 class="mt-1 mb-0 font-size-15">Shreyu N</h6>
                            <h6 class="text-muted font-weight-normal mt-1 mb-3">September 11, 2011</h6>
                        </div>
                        <div class="dropdown align-self-center float-right">
                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="uil uil-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="uil uil-edit-alt mr-2"></i>View</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="uil uil-exit mr-2"></i>Send Reminder</a>
                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                        class="uil uil-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-1 border-top pt-3">
                        <div class="media-body">
                            <h6 class="mt-1 mb-0 font-size-15">Greeva Y</h6>
                            <h6 class="text-muted font-weight-normal mt-1 mb-3">September 11, 2011</h6>
                        </div>
                        <div class="dropdown align-self-center float-right">
                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="uil uil-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="uil uil-edit-alt mr-2"></i>View</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="uil uil-exit mr-2"></i>Send Reminder</a>
                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                        class="uil uil-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-1 border-top pt-3">
                        <div class="media-body">
                            <h6 class="mt-1 mb-0 font-size-15">Nik G</h6>
                            <h6 class="text-muted font-weight-normal mt-1 mb-3">September 11, 2011</h6>
                        </div>
                        <div class="dropdown align-self-center float-right">
                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="uil uil-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="uil uil-edit-alt mr-2"></i>View</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="uil uil-exit mr-2"></i>Send Reminder</a>
                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                        class="uil uil-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
    <!-- end row -->


</div>

@endsection


@section("javascript")



@stop