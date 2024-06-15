@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="mt-0 mb-2 font-weight-bold">List Koleksi</h3>

        <hr />

        @if ($collections->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Title</th>
                        <th scope="col" class="col-sm-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collections as $collection)
                        <tr>
                            <th style="vertical-align: middle;" scope="row">{{ $iteration++ }}</th>
                            <td style="vertical-align: middle;">{{ $collection->title_id }}</td>
                            <td style="vertical-align: middle;">{{ $collection->title_eng }}</td>
                            <td style="vertical-align: middle;">
                                <a href="/admin/collection/{{ $collection->id }}" type="button" class="btn btn-sm btn-primary"
                                    href=""><i class="fa-solid fa-eye"></i></a>
                                    
                                <form action="/admin/collection/{{ $collection->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm border-0" 
                                    onclick="return confirm('Apakah anda yakin?')"><i
                                    class="fa-solid fa-delete-left"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $collections->links() }}
            </div>
        @else
            <h1>Data belum tersedia</h1>
        @endif

    @endsection
