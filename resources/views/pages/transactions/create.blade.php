@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Tambah Transaksi</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="price" class="form-control-label">Nomor Transaksi</label>
                    <input type="text" 
                            name="notrans" 
                            value="{{ old('notrans') }}" 
                            class="form-control @error('notrans') is-invalid @enderror" / required>
                            @error('notrans') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Tanggal</label>
                    <input type="date" 
                            name="tanggal" 
                            value="{{ old('tanggal') }}" 
                            class="form-control @error('tanggal') is-invalid @enderror" / required>
                            @error('tanggal') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Divisi</label>
                    <input type="number" 
                            name="divisi" 
                            value="{{ old('divisi') }}" 
                            class="form-control @error('divisi') is-invalid @enderror" / required>
                            @error('divisi') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                 <div class="form-group">
                    <label for="price" class="form-control-label">Total Buah</label>
                    <input type="number" 
                            name="totalbuah" 
                            value="{{ old('totalbuah') }}" 
                            class="form-control @error('totalbuah') is-invalid @enderror" / required>
                            @error('totalbuah') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                 <div class="form-group">
                    <label for="name" class="form-control-label">Nama Kriteria</label>
                    <select name="id_buah" 
                        class="form-control"  @error('products_id') is-invalid @enderror">

                        @foreach ($buah as $data)
                             <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach

                    </select>
                    @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Jumlah</label>
                    <input type="number" 
                            name="jumlah" 
                            value="{{ old('jumlah') }}" 
                            class="form-control @error('jumlah') is-invalid @enderror" / required>
                            @error('jumlah') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
               

                <input type="hidden" name="createdate" value="<?php echo date('d-M-Y'); ?>" readonly="readonly">

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Produk
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection