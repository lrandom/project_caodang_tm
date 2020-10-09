@extends('layouts.admin')
@section('header')
    Category
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
                    <th>Parent Categogry</th>
                    <th>Filter Type</th>
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
                        <td>{{$r->parent['name']}}</td>
                        <td>{{$r->filterType['name']}}</td>
                        <td>
                            <a href="{{url('admin/category/delete?id='.$r->id)}}">Xoá</a>
                            <a href="{{url('admin/category/edit?id='.$r->id)}}">Sửa</a>
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
