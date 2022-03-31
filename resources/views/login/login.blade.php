@extends('master.front.master')

@section('title')
    User Login Page
@endsection

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-info py-4">Login Form</div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" value="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" value="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-md-3">Login As</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="check" value="1" />Teacher</label>
                                    <label><input type="radio" name="check" value="0" />Student</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-success" name="btn" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection
