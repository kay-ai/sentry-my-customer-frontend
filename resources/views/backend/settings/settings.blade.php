@extends('layout.base')

@section("custom_css")

    <style>
        .line-head {
            border-bottom: solid 1px #dddddd;
            margin-top: 0 !important;
            margin-bottom: 15px;
        }

        nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #495057;
            background-color: #FFF;
            border-color: #dee2e6 #dee2e6 #FFF;
        }

        .nav-tabs li a.active {
            border-left: 5px solid #5369f8 !important;
            border-bottom: none !important;
        }
    </style>

@stop

@section('content')

    <div class="account-pages my-5">
        <div class="container-fluid">
            <div class="row-justify-content-center">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }} inline">{{ Session::get('message') }}</p>
                @endif
                <div class="h2"><i data-feather="file-text" class="icon-dual"></i> Settings Page</div>
                <div class="col-md-12">
                    <div class="profile">
                        <div class="info"><img class="user-img" src="">
                            <h4>{{ isset($user_details['first_name'])  &&  isset($user_details['last_name']) ? $user_details['first_name'] ." ". $user_details['last_name']: "full name" }}</h4>
                        </div>
                        <div class="cover-image"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <ul class="nav flex-column nav-tabs user-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#user-details" data-toggle="tab">Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="#user-profile" data-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="#password-change" data-toggle="tab">Password</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="card p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="user-details">
                                    <div class="tile user-settings">
                                        <h4 class="line-head">Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Fullname</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ isset($user_details['first_name'])  &&  isset($user_details['last_name']) ? $user_details['first_name'] ." ". $user_details['last_name']: "full name" }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Email</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ isset($user_details['email']) ? $user_details['email'] : "Email" }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Status</b></label>
                                            </div>
                                            <div class="col-md-6">
                                               @isset($user_details['is_active'])
                                                    @if (  $user_details['is_active'] )
                                                    Activated
                                                @else
                                                    Not Activated
                                                @endif
                                               @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Removed by Eni4sure because Node is no longer giving CreatedAt and UpdatedAt --}}
                                    {{-- @php
                                        function time_relative_to_time($ts) {
                                            if(!ctype_digit($ts))
                                                $ts = strtotime($ts);

                                            $diff = time() - $ts;
                                            if($diff == 0)
                                                return 'now';
                                            elseif($diff > 0)
                                            {
                                                $day_diff = floor($diff / 86400);
                                                if($day_diff == 0)
                                                {
                                                    if($diff < 60) return 'just now';
                                                    if($diff < 120) return '1 minute ago';
                                                    if($diff < 3600) return floor($diff / 60) . ' minutes ago';
                                                    if($diff < 7200) return '1 hour ago';
                                                    if($diff < 86400) return floor($diff / 3600) . ' hours ago';
                                                }
                                                if($day_diff == 1) return 'Yesterday';
                                                if($day_diff < 7) return $day_diff . ' days ago';
                                                if($day_diff < 31) return ceil($day_diff / 7) . ' weeks ago';
                                                if($day_diff < 60) return 'last month';
                                                return date('F Y', $ts);
                                            }
                                            else
                                            {
                                                $diff = abs($diff);
                                                $day_diff = floor($diff / 86400);
                                                if($day_diff == 0)
                                                {
                                                    if($diff < 120) return 'in a minute';
                                                    if($diff < 3600) return 'in ' . floor($diff / 60) . ' minutes';
                                                    if($diff < 7200) return 'in an hour';
                                                    if($diff < 86400) return 'in ' . floor($diff / 3600) . ' hours';
                                                }
                                                if($day_diff == 1) return 'Tomorrow';
                                                if($day_diff < 4) return date('l', $ts);
                                                if($day_diff < 7 + (7 - date('w'))) return 'next week';
                                                if(ceil($day_diff / 7) < 4) return 'in ' . ceil($day_diff / 7) . ' weeks';
                                                if(date('n', $ts) == date('n') + 1) return 'next month';
                                                return date('F Y', $ts);
                                            }
                                        }
                                    @endphp
                                    <div class="tab-pane" id="user-timeline">
                                        <div class="tile user-settings">
                                            <h4 class="line-head">Timeline</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Created</b></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ time_relative_to_time($user_details['local']['createdAt']) }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Last Updated</b></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ time_relative_to_time($user_details['local']['updatedAt']) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                {{-- Removed by Eni4sure because Node is no longer giving CreatedAt and UpdatedAt --}}

                                <div class="tab-pane fade" id="user-profile">
                                    <div class="tile user-settings">
                                        <h4 class="line-head">Profile</h4>
                                        <form method="POST"  action="{{ route('setting') }}">
                                            @csrf
                                            <div class="row mb-12">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>First Name</label>
                                                            <input class="form-control" type="text" name="first_name" value="{{ isset($user_details['first_name']) ? $user_details['first_name'] : "Not Set" }}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div><br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Last Name</label>
                                                            <input class="form-control" type="text" name="last_name" value="{{ isset($user_details['last_name']) ? $user_details['last_name'] : "Not Set" }}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div><br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text" name="email" value="{{ isset($user_details['email']) ? $user_details['email'] : "Not set" }}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div><br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Phone Number</label>
                                                            <input class="form-control" type="text" name="phone_number" value="{{ isset($user_details['phone_number']) ? $user_details['phone_number'] : "not set" }}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div><br>
                                                    <input type="text" value="profile_update" name="control" hidden>
                                                </div>

                                                {{-- <div class="col-md-3">
                                                    <img id="preview" class="img img-responsive img-thumbnail" src="{{('backend/assets/images/users/avatar-7.jpg')}}" />

                                                    <div class="form-group">
                                                        <label for="exampleInputFile">File input</label>
                                                        <input class="form-control-file" id="profile_image" type="file" aria-describedby="fileHelp" name="image">
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <br>
                                            <div class="row mb-12">
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="password-change">
                                    <div class="tile user-settings">
                                        <h4 class="line-head">Change Password</h4>
                                        <form action="#" method="POST">
                                            {{ csrf_field() }}
                                            <label class="control-label">Current Password</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class=" fa fa-lock"></i></span></div>
                                                    <input class="form-control" name="current_password" type="password">
                                                </div>
                                            </div>
                                            <label class="control-label">New Password</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class=" fa fa-lock"></i></span></div>
                                                    <input class="form-control" name="new_password" type="password">
                                                </div>
                                            </div>
                                            <input type="text" value="password_change" name="control" hidden>

                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                                {{-- <div class="tab-pane" id="assistant">
                                    <div class="tile user-settings">
                                        <h4 class="line-head">Staff Assistant</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p><b>Staff Assigned to You:</b></p>
                                            </div>
                                            <div class="col-md-6">Sean Jones</div>
                                            <div class="col-md-6">
                                                <p>seanjones@customerpay.me</p>
                                                <p>+2345667788912</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section("javascript")

@stop
