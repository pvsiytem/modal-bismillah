@extends('layout.master')

@section('title', 'Profile')

@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span>
                </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{route("profile")}}" class="btn btn-success rounded-pill">Your Profile</a>
                    <a href="{{route("profileUpdate")}}" class="btn btn-success rounded-pill">Update Profile</a>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-6"><label class="labels">Last Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Email</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">Old Password</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">New Password</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<style>
    body {
        background: rgb(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>



@endsection