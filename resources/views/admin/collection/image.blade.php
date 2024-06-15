@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="mt-0 mb-2 font-weight-bold">Gambar {{ $images[0]->Collection->title_id }}</h3>

        <hr>

        @if ($images->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Urutan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <th style="vertical-align: middle;" scope="row">{{ $iteration++ }}</th>
                            <td style="vertical-align: middle;">{{ $image->filepath }}</td>
                            <td style="vertical-align: middle;">{{ $image->sequence }}</td>
                            <td style="vertical-align: middle;">
                                <button class="btn btn-primary">tombol</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1>Gambar Belum tersedia</h1>
        @endif
    </div>
@endsection
