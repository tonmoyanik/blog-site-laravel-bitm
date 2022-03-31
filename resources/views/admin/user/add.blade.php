@extends('master.admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add User Form</h4>
                        <p class="text-center text-success">{{ Session::get('message') }}</p>
                        <form action="{{route('new-user')}}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" id="horizontal-firstname-input">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="horizontal-email-input">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="horizontal-password-input">
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Create New User</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
