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
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Filter</th>
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
                        <td>
                            @if ($r->images!=null && count($r->images)>0)
                                <img src="{{asset('storage/'.$r->images[0]->path)}}" style="width:100px"/>
                            @endif
                        </td>
                        <td>{{$r->title}}</td>
                        <td>{{$r->price}}</td>
                        <td>

                            <?php
                            $category = $r->category;
                            $filters = $category->groupBy('filter_type_id');
                            ?>

                            @foreach($filters as $item)

                                @if($item[0]->filterType['name']!=null)
                                    <label for="">{{$item[0]->filterType['name']}}</label>
                                @endif
                                <div>
                                    @foreach($item as $i)
                                        <span class="badge badge-warning"> {{$i->name}}</span>
                                    @endforeach
                                </div>
                            @endforeach
                        </td>
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
