@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Tambah User</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="price" class="form-control-label">Nama</label>
                    <input type="text" 
                            name="name" 
                            value="{{ old('name') }}" 
                            class="form-control @error('name') is-invalid @enderror" / required>
                            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                 <div class="form-group">
                    <label for="price" class="form-control-label">Email</label>
                    <input type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            class="form-control @error('email') is-invalid @enderror" / required>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                 <div class="form-group">
                    <label for="price" class="form-control-label">Password</label>
                    <input type="password" 
                            name="password" 
                            value="{{ old('email') }}" 
                            class="form-control @error('email') is-invalid @enderror" / required>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                </div>


                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah User
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection