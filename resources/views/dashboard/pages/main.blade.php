@extends('dashboard.app')

@section('content')
    <style>
        .clickable-item {
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .clickable-item:hover {
            background-color: #e0e0e0;
            /* Light gray color */
        }
    </style>
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row justify-content-center"> <!--begin::Col-->
                @if (Auth::user()->role == 'superadmin')
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                        <div class="small-box text-bg-primary">
                            <div class="inner">
                                <h3>{{ $totalUser }}</h3>
                                <p>Users</p>
                            </div> <svg class="small-box-icon" style="opacity: 30%" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 7C9.65685 7 11 5.65685 11 4C11 2.34315 9.65685 1 8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7Z"
                                    fill="#000000" />
                                <path d="M14 12C14 10.3431 12.6569 9 11 9H5C3.34315 9 2 10.3431 2 12V15H14V12Z"
                                    fill="#000000" />
                            </svg> <a href="#"
                                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                Lihat Selengkapnya <i class="bi bi-link-45deg"></i> </a>
                        </div> <!--end::Small Box Widget 1-->
                    </div> <!--end::Col-->
                @endif
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ $totalNews }}</h3>
                            <p>Berita</p>
                        </div><svg class="small-box-icon" style="opacity: 30%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_429_11031)">
                                <path d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17"
                                    stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20" stroke="#292929" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 8L7 8" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13 12L9 12" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_429_11031">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg> <a href="/dashboard/berita"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Lihat Selengkapnya <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ $totalPhotos }}</h3>
                            <p>Foto</p>
                        </div> <svg xmlns="http://www.w3.org/2000/svg" class="small-box-icon" style="opacity: 100%"
                            fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z" />
                        </svg> <a href="/dashboard/galeri"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            Lihat Selengkapnya <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 3-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{ $totalMessages }}</h3>
                            <p>Pesan</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                            </path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                            </path>
                        </svg> <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Lihat Selengkapnya <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 4-->
                </div> <!--end::Col-->
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pesan terbaru</h3>
                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i
                                data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse"
                                class="bi bi-dash-lg"></i> </button> </div>
                </div> <!-- /.card-header -->
                <div class="card-body p-0">
                    @foreach ($messages as $message)
                        <div class="px-2 clickable-item" onclick="window.location.href=''" style="cursor: pointer">
                            <div class="d-flex border-top py-2 px-1">
                                <div class="col-2"> <span href="javascript:void(0)" class="fw-bold">
                                        {{ $message->name }}
                                        <span>
                                            <div class="text-truncate">
                                                <a href="" class="fw-bold">{{ $message->email }}</a>
                                            </div>
                                </div>
                                <div class="col-10" style="max-width: 90rem"> <span href="javascript:void(0)"
                                        class="fw-bold">
                                        {{ $message->subject }}
                                        @if ($message->is_readed == 0)
                                            <span class="badge text-bg-success float-end">
                                                new
                                            </span>
                                        @endif
                                    </span>
                                    <div class="" style="max-width: 80rem">
                                       {{$message->content}}
                                    </div>
                                </div>
                            </div> <!-- /.item -->
                        </div>
                    @endforeach
                </div> <!-- /.card-body -->
                <div class="card-footer text-center"> <a href="javascript:void(0)" class="uppercase">
                        Lihat semua pesan
                    </a> </div> <!-- /.card-footer -->
            </div>
        </div> <!--end::Container-->
    </div>
@endsection
