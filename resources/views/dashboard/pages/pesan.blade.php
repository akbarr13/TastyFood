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
    <div class="card mx-4">
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
                        <div class="col-10" style="max-width: 90rem"> <span href="javascript:void(0)" class="fw-bold">
                                {{ $message->subject }}
                                @if ($message->is_readed == 0)
                                    <span class="badge text-bg-success float-end">
                                        new

                                    </span>
                                @endif
                            </span>
                            <div class="" style="max-width: 80rem">
                                {{ $message->content }}
                            </div>
                            @if ($message->is_readed == 0)
                                <a class="float-end" href="/dashboard/message/{{ $message->id }}/read">Mark as read</a>
                            @endif
                        </div>
                    </div> <!-- /.item -->
                </div>
            @endforeach
        </div> <!-- /.card-body -->

    </div>
@endsection
