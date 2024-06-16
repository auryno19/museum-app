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
                <form action="/admin/event/{{ $event->id }}" method="post" enctype="multipart/form-data">
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
    <div class="p-lg-3">
        <div class="row text-center">
            <div class="col-md-6">
                <h2>
                    {{ $event->title_id }}
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="title_id">
                        <sup><small>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </small></sup>
                    </a>
                </h2>
            </div>
            <div class="col-md-6">
                <h2>
                    {{ $event->title_eng }}
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="title_eng">
                        <sup><small>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </small></sup>
                    </a>
                </h2>
            </div>

        </div>
        <div class="px-5">
            <div class="text-center">
                <a type="button" class="btn btn-sm btn-primary" href="/admin/event/{{ $event->id }}/editImage"> Edit
                    Gambar</a>
            </div>
            @if ($event->Image->count() > 1)
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        @foreach ($event->Image as $image)
                            <div class="carousel-item {{ $event->Image->first() == $image ? 'active' : '' }}">
                                <img src="{{ asset('images/image-event/' . $image->filepath) }}" class="d-block w-100"
                                    height="500vh" style="object-fit: cover" alt="image {{ $event->title_eng }}">
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @else   
                <div class="px-3">
                    @if ($event->Image->count())
                        <img src="{{ asset('images/image-event/' . $event->Image[0]->filepath) }}"
                            alt="{{ $event->title_eng }}" width="100%" height="400px"
                            style="object-fit: cover; border-radius: 10px">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" alt="{{ $event->title_eng }}" width="100%"
                            height="400px" style="object-fit: cover; border-radius: 10px">
                    @endif
                </div>
            @endif

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
                {{-- <p class="fs-5" style="text-align: justify">
                    {{ $collection->desc_id }}
                </p> --}}
                <div>
                    @foreach (preg_split('/<\?p>/', $event->deskripsi_id) as $paragraph)
                        @if (!empty($paragraph))
                            <div class="">

                                <p>{!! $paragraph !!}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
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
                <div>
                    @foreach (preg_split('/<\?p>/', $event->deskripsi_eng) as $paragraph)
                        @if (!empty($paragraph))
                            <div class="">

                                <p>{!! $paragraph !!}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
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
                    value="{{ $event->title_id }}" required/>
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
                    value="{{ $event->title_eng }}" required/>
                </div>
                `;
            } else if (id == "desc_id") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Deskripsi Indonesia </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="deskripsi_id" class="form-label">Deskripsi Indonesia</label>
                <textarea rows="5" class="form-control"  id="modal_editor_id"
                name="deskripsi_id">{{ $event->deskripsi_id }}</textarea>
                </div>
                `;
            } else if (id == "desc_eng") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Deskripsi Inggris </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="deskripsi_eng" class="form-label">Deskripsi Inggris</label>
                <textarea rows="5" class="form-control"  id="modal_editor_eng"
                name="deskripsi_eng">{{ $event->deskripsi_eng }}</textarea>
                </div>
                `;
            } else if (id == "date") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Title </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="date" class="form-label">Title</label>
                <input type="date" class="form-control" id="date" name="date" 
                    value="{{ $event->date }}" required/>
                </div>
                `;
            } else if (id == "image") {
                document.getElementById("modal-header").innerHTML = `
                <h1 class="modal-title fs-5" id="editModalLabel">Edit image </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                `;
                document.getElementById("modal-body").innerHTML = `
                <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input class="form-control" type="file" name="image" id="imageImg" onchange="imgpreview()">
                <img src="{{ asset('images/photo-assist') }}/{{ $event->image !== null ? $event->image : 'thumb.jpg' }}" id="editpreview" class=" img-fluid mb-3 col-sm-5 ">
                <img class="img-preview img-fluid mb-3 col-sm-5 ">
                </div>
                `;
            }
        }

        function imgpreview() {
            const recentImage = document.querySelector('#editpreview');
            const image = document.querySelector('#imageImg');
            const imgPreview = document.querySelector('.img-preview');

            recentImage.style.display = 'none';
            imgPreview.style.display = 'block';

            const reader = new FileReader();
            reader.readAsDataURL(image.files[0]);

            reader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        $(document).ready(function() {
            $('#editModal').on('shown.bs.modal', function() {
                // console.log('bisa');
                (async function() {
                    try {
                        const editor = await ClassicEditor
                            .create(document.querySelector('#modal_editor_id'), {
                                removePlugins: ['CKFinderUploadAdapter', 'CKFinder',
                                    'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                                ],
                            });
                        editor.setData(document.querySelector(' #old-deskripsi').value);
                    } catch (e) {
                        console.error(e);
                    }
                })();
            })
        })
        $(document).ready(function() {
            $('#editModal').on('shown.bs.modal', function() {
                // console.log('bisa');
                (async function() {
                    try {
                        const editor = await ClassicEditor
                            .create(document.querySelector('#modal_editor_eng'), {
                                removePlugins: ['CKFinderUploadAdapter', 'CKFinder',
                                    'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                                ],
                            });
                        editor.setData(document.querySelector(' #old-deskripsi').value);
                    } catch (e) {
                        console.error(e);
                    }
                })();
            })
        })
    </script>
@endsection
