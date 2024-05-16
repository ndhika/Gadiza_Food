
@extends('layouts.profile')
@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                <a class="nav-link" href="http://127.0.0.1:8000/profile"><i class="bi bi-arrow-left-short"></i></a>
                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius">
                                        </div>
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 mb</div>
                                            <button class="btn btn-primary" type="button">Upload new image</button>
                                            <h6 class="f-w-600">Naja</h6>
                                            <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <form>
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <label class="small mb-1" for="inputUsername">Username</label>
                                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter Your Username" value="username">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="small mb-1" for="inputPhone">Phone</label>
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter Your Phon" value="0813 2609 6375">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                        <label class="small mb-1" for="inputAddress">Address</label>
                                        <input class="form-control" id="inputAddress" type="text" placeholder="Enter Your Address" value="Jl. Pandanaran">
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                </div>
                                <div class="col-sm-6">
                                        <label class="small mb-1" for="inputEmail">Email</label>
                                        <input class="form-control" id="inputEmail" type="email" placeholder="Enter Your Email" value="vanianajwa@gmail.com">
                                </div>
                                </div>
                                </form>
                    </div>
                </div>                               
            </div>
        </div>                                      
    </div>                                
</div>             
@endsection
