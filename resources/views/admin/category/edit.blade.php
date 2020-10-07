@extends('layouts.admin')
@section('header')
    Category
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

                <input type="hidden" value="{{$category->id}}" name="id"/>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Filter Type</label>
                    <select class="form-control" name="parent_id">
                        {{--                        <option value="0">No parent</option>--}}
                        @foreach ($filter_type as $r)
                            <option <?php if ($r->id === $category->filter_type_id) {
                                echo 'selected';
                            } ?> value="{{$r->id}}">{{$r->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Parents</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">No parent</option>
                        @foreach ($parentCategory as $r)
                            <option <?php if ($r->id == $category->parent_id) {
                                echo 'selected';
                            } ?> value="{{$r->id}}">{{$r->name}}</option>
                        @endforeach

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
