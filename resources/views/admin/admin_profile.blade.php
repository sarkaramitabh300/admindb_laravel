@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card"><br>,<br>
                    <center>
                        <img class="rounded-circle avatar-xl"
                            src="{{(!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image): url('upload/no_image.jpg')}}"
                            alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Name {{$adminData->name}}</h4>
                            <p class="card-text">Email {{$adminData->email}}</p>
                            <p class="card-text">Username {{$adminData->username}}</p>
                            <p class="card-text">
                                <small class="text-muted">Member since {{$adminData->created_at}}</small>
                            </p>
                            <a href="{{route('edit.profile')}}"
                                class="btn btn-info btn-round waves-effect waves-light">Edit Profile</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection