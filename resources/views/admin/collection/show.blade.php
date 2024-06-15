@extends('admin.layout.main')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        {!! implode(
            '',
            $errors->all('    
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">:message
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    '),
        ) !!}
    @endif
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="/admin/collection/{{ $collection->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-header" id="modal-header">

                    </div>
                    <div class="modal-body" id="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
        </div>
    </div>

    <div class="p-3 text-center">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Judul
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="title_id">
                        <sup><small>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </small></sup>
                    </a>
                </h2>
                <h3>{{ $collection->title_id }}</h3>
            </div>
            <div class="col-md-6">
                <h2>
                    Title
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="title_eng">
                        <sup><small>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </small></sup>
                    </a>
                </h2>
                <h3>{{ $collection->title_eng }}</h3>
            </div>
        </div>
    </div>
    <div class="px-5">
        <div>
            <a type="button" class="btn btn-primary" href="/admin/{{ $collection->id }}/editImage"> Edit Gambar</a>
        </div>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                @foreach ($collection->Image as $image)
                    <div class="carousel-item {{ $collection->Image->first() == $image ? 'active' : '' }}">
                        <img src="{{ asset('images/image-collection/' . $image->filepath) }}" class="d-block w-100"
                            height="500vh" style="object-fit: cover" alt="image {{ $collection->title_eng }}">
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="p-5 mx-5">
        <div class="mb-3">
            <h2>
                Deskripsi Indonesia
                <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                    id="desc_id">
                    <sup><small>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </small></sup>
                </a>
            </h2>
            <p class="fs-5" style="text-align: justify">
                {{ $collection->desc_id }}
            </p>
        </div>
        <div class="mb-3">
            <h2>
                Deskripsi Inggris
                <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                    id="desc_eng">
                    <sup><small>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </small></sup>
                </a>
            </h2>
            <p class="fs-5" style="text-align: justify">
                {{ $collection->desc_eng }}
            </p>
        </div>
    </div>

    <script>
            function myFunction(id) {
            if (id == "title_id") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Judul </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="title_id" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title_id" name="title_id" 
                    value="{{ $collection->title_id }}" required/>
                </div>
                `;
            } else if (id == "title_eng") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Title </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="title_eng" class="form-label">Title</label>
                <input type="text" class="form-control" id="title_eng" name="title_eng" 
                    value="{{ $collection->title_eng }}" required/>
                </div>
                `;
            }  else if (id == "desc_id") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Deskripsi Indonesia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="desc_id" class="form-label">Descripsi</label>
                <input type="text" class="form-control" id="desc_id" name="desc_id" 
                    value="{{ $collection->desc_id }}" required/>
                </div>
                `;
            }   else if (id == "desc_eng") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Deskripsi Inggris</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="desc_eng" class="form-label">Descripsi</label>
                <input type="text" class="form-control" id="desc_eng" name="desc_eng" 
                    value="{{ $collection->desc_eng }}" required/>
                </div>
                `;
            }
        }
    </script>
@endsection
