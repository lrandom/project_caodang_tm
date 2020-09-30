@extends('layouts.admin')
@section('header')
    Products
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Title</th>
            <th>Price</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Sell Count</th>
            <th>
              Thao tác
            </th>
          </tr>
        </thead>
  
        <tbody>
              @foreach ($data as $r)
              <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->title}}</td>
                <td>{{$r->price}}</td>
                <td>{{$r->category->name}}</td>
                <td>{{$r->quantity}}</td>
                <td>{{$r->sell_count}}</td>
                <td>
                  <a href="{{url('admin/products/delete?id='.$r->id)}}">Xoá</a>
                  <a href="{{url('admin/products/edit?id='.$r->id)}}">Sửa</a>
                </td>
              </tr>
              @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      {{ $data->links() }}
    </div>
  </div>
@endsection
