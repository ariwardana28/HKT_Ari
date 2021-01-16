@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Barang') }}
                    <div style="float: right">
                        <a href="{{route('barang.index')}}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                   <form action="{{route('barang.store')}}" method="post">
                       @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Nama Barang :</label>
                        <input type="text" class="form-control" required name="nama" id="" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Stok :</label>
                        <input type="text" class="form-control" id="" required name="qty" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Harga :</label>
                        <input type="text" class="form-control" name="harga" required id="" placeholder="">
                      </div>
                      <div class="mb-3">
                        <input type="submit" class="btn btn-sm btn-primary" id="" value="Tambah">
                      </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
