@extends('layouts.admin')
@section('header')
    Users
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>
              Thao tác
            </th>
          </tr>
        </thead>
  
        <tbody>
              @foreach ($data as $r)
              <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->name}}</td>
                <td>{{$r->fullname}}</td>
                <td>{{$r->address}}</td>
                <td>{{$r->email}}</td>
                <td>{{$r->phone}}</td>
                <td>
                  <a href="users/delete?id={{$r->id}}">Xoá</a>
                  <a href="users/edit?id={{$r->id}}">Sửa</a>
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
