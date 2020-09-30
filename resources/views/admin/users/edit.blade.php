@extends('layouts.admin')
@section('header')
    Users
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
            @csrf
            <div class="card-body">
                <input type="hidden" value="{{$user->id}}" name="id"/>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="phone" name="phone" value="{{$user->phone}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Fullname</label>
                    <input type="text" name="fullname" value="{{$user->fullname}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$user->address}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level">
                        <option value="0" <?php if($user->level==0){echo 'selected';} ?>>Admin</option>
                        <option value="1" <?php if($user->level==1){echo 'selected';} ?>>Staff</option>
                        <option value="2" <?php if($user->level==2){echo 'selected';} ?>>Customer</option>
                    </select>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
