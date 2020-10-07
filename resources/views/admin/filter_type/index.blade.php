@extends('layouts.admin')
@section('header')
    Filter Type
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
                    <th>Name</th>
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
                        <td>
                            <a href="{{url('admin/filter_type/delete?id='.$r->id)}}">Xoá</a>
                            <a href="{{url('admin/filter_type/edit?id='.$r->id)}}">Sửa</a>
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
