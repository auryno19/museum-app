@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="mt-0 mb-2 font-weight-bold">List Agenda</h3>

        <hr />

        @if ($events->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Title</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <th style="vertical-align: middle;" scope="row">{{ $iteration++ }}</th>
                            <td style="vertical-align: middle;">{{ $event->title_id }}</td>
                            <td style="vertical-align: middle;">{{ $event->title_eng }}</td>
                            <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($event->date)->format('d M Y')  }}</td>
                            <td style="vertical-align: middle;">
                                <a href="/admin/event/{{ $event->id }}" type="button" class="btn btn-sm btn-primary"
                                    href=""><i class="fa-solid fa-eye"></i></a>
                                    
                                <form action="/admin/event/{{ $event->id }}" method="post" class="d-inline">
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

            <div>
                {{ $events->links() }}
            </div>
        @else
            <h1>Data belum tersedia</h1>
        @endif

    @endsection
