@extends('admin.layout.main')
@section('content')
    <div class="p-3">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="text-center mb-5">
            <h1>
                Ganti Password
            </h1>
        </div>
        <form action="/admin/password" method="post">
            @csrf
            <div class="text-center px-5">
                <div class="mb-3" style="padding-left: 9.5rem; padding-right: 9.5rem">
                    <label for="old_password" class="form-label">Masukkan Password Lama</label>
                    <input type="password"
                        class="form-control @error('old_password') is-invalid                        
                                    @enderror"
                        name="old_password" id="old_password">
                    @error('old_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3" style="padding-left: 9.5rem; padding-right: 9.5rem">
                    <label for="new_password" class="form-label">Masukkan Password Baru</label>
                    <input type="password"
                        class="form-control @error('new_password') is-invalid                        
                                    @enderror"
                        name="new_password" id="new_password">
                    @error('new_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3" style="padding-left: 9.5rem; padding-right: 9.5rem">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password"
                        class="form-control @error('password_confirmation') is-invalid                        
                                    @enderror"
                        name="password_confirmation" id="password_confirmation">
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
