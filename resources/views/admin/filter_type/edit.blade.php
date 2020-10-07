@extends('layouts.admin')
@section('header')
    Filter Type
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
                <input type="hidden" value="{{$filterType->id}}" name="id"/>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$filterType->name}}" class="form-control">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
