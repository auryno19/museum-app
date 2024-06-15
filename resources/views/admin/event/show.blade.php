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
    <div class="p-lg-3">
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
        <h3 class="mt-0 mb-2 font-weight-bold">Agenda</h3>

        <hr />
        <div class="wrap">
            <div class="row mb-3">
                <div class="col-md-5">
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="image">
                        <img src="{{ asset('images/image-event') }}/{{ $event->image !== null ? $event->image : 'thumb.jpg' }}"
                            alt="gambar" width="100%" height="380px" style="object-fit: cover;">
                    </a>
                </div>
                <div class="col-md-7 mt-2">
                    <div class="mb-3">
                        <h3>Judul</h3>
                        <h4 class="mb-0">{{ $event->title_id }}
                            <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal"
                                data-bs-target="#editModal" id="title_id">
                                <sup><small>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </small></sup>
                            </a>
                        </h4>
                    </div>
                    <div class="mb-3">
                        <h3>Title</h3>
                        <h4 class="mb-0">{{ $event->title_eng }}
                            <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal"
                                data-bs-target="#editModal" id="title_eng">
                                <sup><small>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </small></sup>
                            </a>
                        </h4>
                    </div>
                    <div class="mb-3">
                        <h3>Tanggal Pelaksanaan</h3>
                        <h4 class="mb-0">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
                            <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal"
                                data-bs-target="#editModal" id="date">
                                <sup><small>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </small></sup>
                            </a>
                        </h4>
                    </div>


                </div>
            </div>

            <div class="mb-3">
                <h3>
                    Deskripsi Bahasa Indonesia
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="desc_id">
                        <sup><small>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </small></sup>
                    </a>
                </h3>
                @foreach (preg_split('/<\?p>/', $event->deskripsi_id) as $paragraph)
                    @if (!empty($paragraph))
                        <div class="">

                            <p>{!! $paragraph !!}</p>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="mb-3">
                <h3>
                    Deskripsi Bahasa Inggris
                    <a onclick="myFunction(this.id)" type="button" data-bs-toggle="modal" data-bs-target="#editModal"
                        id="desc_eng">
                        <sup><small>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </small></sup>
                    </a>
                </h3>
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
