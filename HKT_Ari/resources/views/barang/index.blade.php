@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Barang') }}
                    <div style="float: right">
                        <a href="{{route('barang.create')}}" class="btn btn-sm btn-primary">+</a>
                        <a href="" class="btn btn-sm btn-success">
                            <img src="{{asset('printer.png')}}" width="18px" height="18px" style="">
                        </a>
                    </div>
                </div>

                <div class="card-body">
                   <table class="table table-bordered table-sm">
                       <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                       </thead>
                       <tbody>
                            @foreach ($barang as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>Rp. {{number_format($item->harga)}}</td>
                                    <td>
                                        <a href="{{route('barang.edit',$item->id)}}" class="btn btn-warning btn-sm">
                                            <img src="{{asset('edit.png')}}" width="18px" height="18px" style="">
                                        </a>
                                        <a href="{{route('barang.delete',$item->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"class="btn btn-danger btn-sm">
                                            <img src="{{asset('delete.png')}}" width="18px" height="18px" style="">
                                        </a>
                                      
                                    </td>
                                </tr>
                            @endforeach
                       </tbody>
                   </table>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
