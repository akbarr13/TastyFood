@extends('dashboard.app')

@section('content')
    <a href="/dashboard/berita/add" style="margin-right: 1rem"><button type="button"
            class="btn btn-success mb-2 float-end">Tambah Berita</button></a>
    <div class="card mb-4" style="margin-left: 1rem; margin-right:1rem;">
        <div class="card-header">

            <h3 class="card-title">List Berita</h3>
            <div class="card-tools gap-3">
                {{$news->links()}}
            </div>

        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th style="width: 10rem"></th>
                        <th style="width: 20rem">Nama</th>
                        <th style="width: 40rem">Deskripsi</th>
                        <th style="width: 10rem">Slug</th>
                        <th style="width: 10rem">Status</th>
                        <th style="width: 20rem">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr class="align-middle">
                            <td> {{ $loop->iteration }} </td>
                            <td><img src="{{ asset('assets/images/' . $new->image) }}"
                                    style="object-fit: contain; max-width:10rem" alt=""></td>
                            <td style="max-width: 20rem">{{ $new->title }}</td>
                            <td style="max-width: 35rem">
                                {{ \Illuminate\Support\Str::limit($new->content, 100) }}
                            </td>
                            <td style="max-width: 10rem"> {{ $new->slug }} </td>
                            <td><span style="width: 100px"
                                    class="badge text-bg-@if ($new->status == 'Published')success @elseif($new->status == 'Draft')warning @elseif($new->status == 'Archived')secondary @endif">
                                    {{ $new->status }} </span> </td>
                            <td><a href="/dashboard/berita/{{ $new->slug }}/edit"><button type="button"
                                        class="btn btn-warning mb-2">Edit</button></a>
                                        <a data-confirm-delete="true" href="/dashboard/berita/{{ $new->slug }}/delete"><button type="button"
                                            class="btn btn-danger mb-2">Delete</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.card-body -->
    </div>
@endsection
