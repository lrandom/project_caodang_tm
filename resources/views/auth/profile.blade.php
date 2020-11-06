@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <form method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" readonly value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" readonly value="{{$user->email}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Full name</label>
                                <div class="col-md-6">
                                    <input type="text" name="fullname" value="{{$user->fullname}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" name="phone" value="{{$user->phone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <input type="text" name="address" value="{{$user->address}}">
                                </div>
                            </div>


                            <div>
                                <input type="submit" value="Save"/>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
