@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Ubah User</strong>
             <small>{{$item->name}}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('users.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama</label>
                    <input type="text" 
                            name="name" 
                            value="{{ old('nama') ? old('nama') : $item->name }}" 
                            class="form-control @error('nama') is-invalid @enderror" />
                            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="nama" class="form-control-label">Email</label>
                    <input type="email" 
                            name="email" 
                            value="{{ old('nama') ? old('nama') : $item->email }}" 
                            class="form-control @error('nama') is-invalid @enderror" />
                            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="nama" class="form-control-label">Password</label>
                    <input type="password" 
                            name="password" 
                            value="{{ old('password') ? old('password') : $item->name }}" 
                            class="form-control @error('password') is-invalid @enderror" />
                            @error('password') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah User
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection