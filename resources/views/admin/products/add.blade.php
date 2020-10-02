@extends('layouts.admin')
@section('header')
    Products
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" class="form-control">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                     
                        @foreach ($category as $r)
                        <option value="{{$r->id}}">{{$r->name}}</option>
                        @endforeach
                    
                    </select>
                </div>

                <input type="file" name="file_1"/>
                <br>
                <input type="file" name="file_2"/>
                <br>
                <input type="file" name="file_3"/>
                <br>
                <input type="file" name="file_4"/>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
