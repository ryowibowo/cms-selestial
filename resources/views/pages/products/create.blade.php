@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Tambah Produk</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="price" class="form-control-label">Nama Kriteria</label>
                    <input type="text" 
                            name="name" 
                            value="{{ old('name') }}" 
                            class="form-control @error('name') is-invalid @enderror" / required>
                            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
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