@extends('dashboard.app')

@section('content')
    @if ($type == 'edit')
        <div class="" style="margin-inline: 1rem;"> <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->

                <form action="/dashboard/user/{{$user->id}}/edit" method="POST" enctype="multipart/form-data">
                    @csrf <!--begin::Body-->
                    <div class="card-body">
                        <div class=" mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" required class="form-control" name="nama" value="{{ $user->name }}"
                                id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>

                        <div class=" mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" required class="form-control" name="username"
                                value="{{ $user->username }}" id="username" aria-describedby="emailHelp">
                        </div>
                        <div class=" mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" required class="form-control" value="{{ $user->email }}" name="email"
                                id="Email" aria-describedby="emailHelp">
                        </div>
                        <div class=" mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="text"  class="form-control" name="password" id="password"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Role</span>
                            <select class="form-select" aria-label="Default select example" name="role">

                                <option value="admin" @if($user->role == "admin") selected @endif>Admin</option>
                                <option value="superadmin" @if($user->role == "superadmin") selected @endif>Super Admin

                            </select>
                        </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>
                    <!--end::Footer-->
                </form> <!--end::Form-->
            </div> <!--end::Quick Example--> <!--begin::Input Group-->
        </div>
    @else
        <div class="" style="margin-inline: 1rem;"> <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->

                <form action="/dashboard/user/add" method="POST" enctype="multipart/form-data">
                    @csrf <!--begin::Body-->
                    <div class="card-body">
                        <div class=" mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" required class="form-control" name="nama" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>

                        <div class=" mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" required class="form-control" name="username" id="username"
                                aria-describedby="emailHelp">
                        </div>
                        <div class=" mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" required class="form-control" name="email" id="Email"
                                aria-describedby="emailHelp">
                        </div>
                        <div class=" mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" required class="form-control" name="password" id="password"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Role</span>
                            <select class="form-select" aria-label="Default select example" name="role">

                                <option value="admin" >Admin</option>
                                <option value="superadmin">Super Admin
                                </option>

                            </select>
                        </div>




                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>
                    <!--end::Footer-->
                </form> <!--end::Form-->
            </div> <!--end::Quick Example--> <!--begin::Input Group-->
        </div>
    @endif
@endsection
