@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        <h3 class="mt-0 mb-2 font-weight-bold">Tambah Agenda</h3>

        <hr />

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
                                @enderror" id="editor_id"
                                name="deskripsi_id">{{ old('deskripsi_id') }}</textarea>
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
                                @enderror" id="editor_eng"
                                name="deskripsi_eng">{{ old('deskripsi_eng') }}</textarea>
                            @error('deskripsi_eng')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="image-preview mb-3 row d-flex justify-content-center">
                            <label for="image" class="form-label">Foto</label>
                            <input class="form-control" type="file" name="image" id="imageImg"
                                onchange="imgpreview()">
                            <img class="img-preview img-fluid mb-3 col-sm-5 ">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-3 row d-flex justify-content-center">
                    <button class="btn btn-success" type="submit" style="width: 50%">Submit</button>
                </div>
            </form>

        </div>
        
        <script>
            function imgpreview() {
                const image = document.querySelector('#imageImg');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const reader = new FileReader();
                reader.readAsDataURL(image.files[0]);

                reader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
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
