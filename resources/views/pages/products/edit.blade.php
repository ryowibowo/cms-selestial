@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Ubah Barang</strong>
             <small>{{$item->name}}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="nama" class="form-control-label">Kriteria Buah</label>
                    <input type="text" 
                            name="name" 
                            value="{{ old('nama') ? old('nama') : $item->name }}" 
                            class="form-control @error('nama') is-invalid @enderror" />
                            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <input type="hidden" name="lastupdate" value="<?php echo date('d-M-Y'); ?>" readonly="readonly">

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection