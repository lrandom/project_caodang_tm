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
          </tr>
        </thead>

        <tbody>
              @foreach ($data as $r)
              <tr>
                <td>{{$r['id']}}</td>
                <td>{{$r['name']}}</td>
                <td>{{$r['fullname']}}</td>
                <td>{{$r['address']}}</td>
                <td>{{$r['email']}}</td>
                <td>{{$r['phone']}}</td>
              </tr>
              @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
@endsection
