@extends('dashboard.app')

@section('content')
    <a href="/dashboard/user/add" style="margin-right: 1rem"><button type="button"
            class="btn btn-success mb-2 float-end">Tambah User</button></a>
    <div class="card mb-4" style="margin-left: 1rem; margin-right:1rem;">
        <div class="card-header">

            <h3 class="card-title">List User</h3>
            <div class="card-tools gap-3">
                {{ $users->links() }}
            </div>

        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="">No</th>

                        <th style="">Nama</th>
                        <th style="">Username</th>

                        <th style="">Email</th>
                        <th style="">Role</th>
                        <th style="">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="align-middle">
                            <td> {{ $loop->iteration }} </td>

                            <td style="max-width: 20rem">{{ $user->name }}</td>
                            <td style="max-width: 20rem">{{ $user->username }}</td>
                            <td style="max-width: 35rem">
                                {{ $user->email }}
                            </td>
                            <td style="max-width: 10rem"> {{ $user->role }} </td>

                            <td><a href="/dashboard/user/{{ $user->id }}/edit"><button type="button"
                                        class="btn btn-warning mb-2">Edit</button></a>
                                <a data-confirm-delete="true" href="/dashboard/user/{{ $user->id }}/delete"><button
                                        type="button" class="btn btn-danger mb-2">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.card-body -->
    </div>
@endsection
