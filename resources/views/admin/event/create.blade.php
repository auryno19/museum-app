@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        <h3 class="mt-0 mb-2 font-weight-bold">Tambah Agenda</h3>

        <hr />
        {{-- {{ dd($message) }} --}}
        <div class="container-admin">
            <form action="/admin/event" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="">
                        <div class="mb-3 row d-flex justify-content-center">
                            <label for="title_id">Judul Agenda dalam bahasa Indonesia</label>
                            <input class="form-control" type="text" placeholder="Isi Agenda..." name="title_id"
                                value="{{ old('title_id') }}">
                            @error('title_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <label for="title_eng">Judul Agenda dalam Inggris</label>
                            <input class="form-control" type="text" placeholder="Isi Agenda..." name="title_eng"
                                value="{{ old('title_eng') }}">
                            @error('title_eng')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <label for="date">Tanggal Pelaksanaan</label>
                            <input class="form-control" type="date" name="date" value="{{ old('date') }}" />
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <label for="date">Deskripsi Kegiatan Bahsasa Indonesia</label>
                            <textarea rows="5"
                                class="form-control @error('deskripsi_id') is-invalid                        
                                @enderror"
                                id="editor_id" name="deskripsi_id">{{ old('deskripsi_id') }}</textarea>
                            @error('deskripsi_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <label for="date">Deskripsi Kegiatan Bahasa Inggris</label>
                            <textarea rows="5"
                                class="form-control @error('deskripsi_eng') is-invalid                        
                                @enderror"
                                id="editor_eng" name="deskripsi_eng">{{ old('deskripsi_eng') }}</textarea>
                            @error('deskripsi_eng')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="image-preview mb-3 row d-flex justify-content-center">
                            <label for="image" class="form-label">Foto</label>
                            <input class="form-control" type="file" name="image" id="imageImg"
                                onchange="imgpreview()">
                            <img class="img-preview img-fluid mb-3 col-sm-5 ">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <div class="row">
                                <span class="form-label">Gambar</span>
                                <div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop" style="border-radius: 5px;">Tambah
                                        Gambar</button>
                                </div>
                                @error('filepath')
                                    <div class="invalid-feedback mt-3" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gambar</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="modal-body">
                                            <div class="row mb-4 gx-1 d-flex align-items-center px-3">
                                                <label for="thumbnail" class="form-label">Gambar - Thumbnail</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="file" id="thumbnailEdit1"
                                                        name="filepath[]" onchange="EditPreview(1)">
                                                </div>
                                                <div class="col-lg-3">
                                                    <img class="edit-preview1 img-fluid m-0 ">
                                                </div>
                                                <div class="col-lg-1">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="addInput()">+</button>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-3 row d-flex justify-content-center">
                    <button class="btn btn-success" type="submit" style="width: 50%">Submit</button>
                </div>
            </form>

        </div>

        <script>
            var index = 1;

            function addInput() {
                index++;
                var row = `
    <div class="row row` + index + ` mb-4 gx-1 d-flex align-items-center px-3">
        <label for="thumbnail" class="form-label">Gambar</label>
        <div class="col-lg-8">
            <input class="form-control" type="file" id="thumbnailEdit` + index + `"
                name="filepath[]" onchange="EditPreview(` + index + `)">
        </div>
        <div class="col-lg-3">
            <img class="edit-preview` + index + ` img-fluid m-0 ">
        </div>
        <div class="col-lg-1">
            <button type="button" id="` + index + `" class="btn btn-danger" onclick="removeInput(this.id)">-</button>
        </div>
    </div>
   `;

                $('#modal-body').append(function() {
                    return row;
                });
                // document.getElementById('modal-body').append(row);
            }

            function removeInput(id) {
                $(".row" + id).remove();
                console.log("#row" + id)
            }

            function EditPreview(id) {
                var thumbnail = document.querySelector('#thumbnailEdit' + id);
                var editPreview = document.querySelector('.edit-preview' + id);

                editPreview.style.display = 'block';

                // let reader = new FileReaderSync();

                var reader = new FileReader();
                reader.readAsDataURL(thumbnail.files[0]);

                reader.onload = function(changeEvent) {
                    editPreview.src = changeEvent.target.result;
                }

            }
            ClassicEditor
                .create(document.querySelector('#editor_id'), {
                    removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                        'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                    ],
                })
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#editor_eng'), {
                    removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                        'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                    ],
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
