@extends('dashboard.app')

@section('content')
<a href="/dashboard/galeri/add" style="margin-right: 5rem"><button type="button"
    class="btn btn-success mb-2 float-end">Tambah Foto</button></a>
    <div class="container mt-4">


        <div class="row">
            <!-- Example of Gallery Item -->
            @foreach ($photos as $photo)
                <div class="col-md-4 mb-4">
                    <div class="card" style="height: 600px">
                        <img src="{{ asset('assets/images/' . $photo->filename) }}" class="card-img-top" style="object-fit: cover; height:450px; object-position:center;"  alt="photo">
                        <div class="card-body">
                            <h5 class="card-title">Title : {{ $photo->title }}</h5>

                            <p class="card-text"><br>Author : {{ $photo->user->name }}</p>

                            <a data-confirm-delete="true" href="/dashboard/galeri/{{$photo->id}}/delete"><button  type="button"
                                class="btn btn-danger mb-2">Delete</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
