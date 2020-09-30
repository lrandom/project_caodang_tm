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
        <form role="form" method="post">
            @csrf
            <div class="card-body">
                <input type="hidden" name="id" value="{{$product->id}}"/>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$product->title}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" value="{{$product->price}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content">{{$product->content}}</textarea>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                     
                        @foreach ($category as $r)
                        <option value="{{$r->id}}" <?php if($r->category_id==$product->id){echo 'selected';} ?>>{{$r->name}}</option>
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
