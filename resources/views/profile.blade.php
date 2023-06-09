@extends('app',['title'=>'profile'])

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">

            @foreach ($data as $item)

            <div class="card card-primary col-md-5 mx-auto card-outline">

                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{ $item->image }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $item->nama }}</h3>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Nim</b> <a class="float-right">{{ $item->nim }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kelas</b> <a class="float-right">{{ $item->kelas }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor Absen</b> <a class="float-right">{{ $item->absen }}</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->

             </div>

             @endforeach

             <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
@endsection
