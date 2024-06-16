@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                <div class="modal-content" style="overflow-y: scroll;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gambar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/admin/event/{{ $id_event }}/addImage" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body p-3" id="modal-body">
                            <div class="row mb-4 gx-1 d-flex align-items-center">
                                <label for="thumbnail" class="form-label">Gambar</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="file" id="thumbnailEdit1" name="filepath[]"
                                        onchange="EditPreview(1)">
                                </div>
                                <div class="col-lg-3">
                                    <img class="edit-preview1 img-fluid m-0 ">
                                </div>
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-primary" onclick="addInput()">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- {{ dd($id_event) }} --}}
        <h3 class="mt-0 mb-2 font-weight-bold"><a href="/admin/event/{{ $id_event }}"><i class="fa-solid fa-arrow-left me-3"></i></a>Gambar {{ $images->count() ? $images[0]->Event->title_id : "" }}</h3>

        <hr>
        <div>
            <button class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class=" fa-solid fa-plus me-2"></i>Tambah Gambar
            </button>
        </div>
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
                            <td style="vertical-align: middle;">

                                <img src="{{ asset('images/image-event/' . $image->filepath) }}" height="60px"
                                    alt="">
                                {{-- {{ $image->filepath }} --}}
                            </td>
                            <td style="vertical-align: middle;">{{ $image->sequence }}</td>
                            <td style="vertical-align: middle;">
                                <a class="btn btn-sm btn-warning btn-xs" href="" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $image->id }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                {{-- <button class="btn btn-primary">tombol</button> --}}
                                <form action="/admin/event/{{ $image->id }}/deleteImage" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <input class="form-control" type="hidden" name="id_event"
                                    value="{{ $id_event }}">
                                    <button class="btn btn-danger btn-sm border-0"
                                        onclick="return confirm('Apakah anda yakin?')"><i
                                            class="fa-solid fa-delete-left"></i></button>
                                </form>
                            </td>
                        </tr>
                        {{-- edit modal --}}
                        <div class="modal fade" id="editModal{{ $image->id }}" tabindex="-1"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editModalLabel">Edit Gambar
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="/agen/{{ $image->id }}/updateImage" method="post"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" class="form-control" id="id_event" name="id_event"
                                                value="{{ $id_event }}">
                                            <div class="mb-3">
                                                <label for="sequence" class="form-label">Urutan Gambar</label>
                                                <input type="number" class="form-control" id="sequence"
                                                    name="sequence" value="{{ $image->sequence }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="thumbnail" class="form-label">Gambar</label>

                                                <input type="hidden" name="oldPhoto" value="{{ $image->filepath }}">
                                                @if ($image->filepath)
                                                    <img src="/images/image-event/{{ $image->filepath }}"
                                                        class="edit-preview{{ $image->id }} img-fluid mb-3 col-sm-5 d-block">
                                                @else
                                                    <img class="edit-preview{{ $image->id }} img-fluid mb-3 col-sm-5">
                                                @endif
                                                <img class="edit-preview{{ $image->id }} img-fluid mb-3 col-sm-5">

                                                <input class="form-control" type="file"
                                                    id="thumbnailEdit{{ $image->id }}" name="filepath"
                                                    onchange="EditPreview({{ $image->id }})">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1>Gambar Belum tersedia</h1>
        @endif
    </div>
    <script>
        var index = 1;

        function addInput() {
            index++;
            var row = `
        <div class="row row` + index + ` mb-4 gx-1 d-flex align-items-center">
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
    </script>
@endsection
