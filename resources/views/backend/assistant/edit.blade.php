
@extends('layout.base')
@section("custom_css")
	<link href="/backend/assets/css/edit_assistants.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
@stop

  @section('content')
    <div class="container">
        <h4 class="mt-4">Edit Assitant Access</h4>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top mt-3" src=/backend/assets/images/hb.png alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Harold Black</h5>
                      <p class="card-text">8034522212</p>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white  mb-3">
                      Set and manage permissions for this assistant
                    </div>
                    <div class="card-body">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-10">
                                Add new customers
                              </div>
                              <div class="col-md-2">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-md-10">
                                    Edit reminders
                            </div>
                            <div class="col-md-2">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-md-10">
                                    Give and receive money
                            </div>
                            <div class="col-md-2">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                    </label>
                            </div>
                        </div>
                        <hr>
                            <div class="row">
                                <div class="col-md-10">
                                        Send reminders to customers
                                </div>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-2">
                            <div class="col-md-10">
                                    Edit settings and preferences
                            </div>
                            <div class="col-md-2">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                    </label>
                            </div>
                      </div>
                      </div>
                      <a href="#" class="btn btn-primary btn-block">SAVE</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  @endsection
