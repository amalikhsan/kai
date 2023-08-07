@extends('layouts.app')

@section('title', 'Edit Pengguna')
@section('desc', 'Halaman Ini Kamu Bisa Edit Pengguna. ')

@section('content')
    <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengguna</h4>
                    </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('name', $item->name) }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('email', $item->email) }}" type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select name="role" id="role" class="form-control text-capitalize @error('role') is-invalid @enderror">
                                        @can("superadmin")
                                        <option value="superadmin" {{ $item->role=="superadmin"?'selected':'' }}>superadmin</option>
                                        <option value="admin" {{ $item->role=="admin"?'selected':'' }}>admin</option>
                                        @endcan
                                        <option value="pimpinan" {{ $item->role=="pimpinan"?'selected':'' }}>pimpinan</option>
                                        <option value="manager" {{ $item->role=="manager"?'selected':'' }}>manager</option>
                                        <option value="angbar" {{ $item->role=="angbar"?'selected':'' }}>angbar</option>
                                        <option value="angfas" {{ $item->role=="angfas"?'selected':'' }}>angfas</option>
                                        <option value="aset" {{ $item->role=="aset"?'selected':'' }}>aset</option>
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('username', $item->username) }}" type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Password">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Avatar</h4>
                    </div>
                    <div class="card-body">
                        @if($item->avatar)
                            <img alt="image" src="{{ asset('storage') }}/{{ $item->avatar }}" class="rounded-circle img-height w-100 mb-3">
                        @else
                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle img-height w-100 mb-3">
                        @endif
                        <div class="clearfix"></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar">
                            <label class="custom-file-label" for="avatar">Choose Avatar</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
