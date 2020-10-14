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
                    @foreach ($category as $r)
                        <div>
                            <span>{{$r->name}}</span>
                            <input type="checkbox" name="filter[]" value="{{$r->id}}|{{$r->filter_type_id}}"/>
                        </div>
                    @endforeach
                </div>

                <div>
                    @foreach ($options as $r)
                        <div>
                            <label>{{$r[0]->filterType['name']}}</label>
                            @foreach ($r as $r1)
                                <div>
                                    <span>{{$r1->name}}</span>
                                    <input type="checkbox" name="filter[]" value="{{$r1->id}}|{{$r1->filter_type_id}}"/>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
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
