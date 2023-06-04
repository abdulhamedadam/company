@extends('admin.layouts.master')
@section('title')
    Admin | Add user
@endsection

@section('css')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Create Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-user me-1"></i>
                            All Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-connections.html"><i
                                class="bx bx-link-alt me-1"></i> Connections</a>
                    </li>
                </ul>
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                <div class="card mb-4">
                    <h5 class="card-header">Account Details</h5>
                    <!-- Account -->

                        @csrf
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded"
                                    height="100" width="100" id="img" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="img" name="img" class="account-file-input"
                                            hidden accept="image/png, image/jpeg" />
                                    </label>


                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />

                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Account Layout</h5>

                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="fristname">Frist Name</label>
                                            <input type="text" class="form-control" name="fristname" id="fristname" placeholder="John" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="lastname">Last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Doe" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="email" name="email" class="form-control"
                                                    placeholder="john.doe" aria-label="john.doe"
                                                    aria-describedby="basic-default-email2" />
                                                <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                            </div>
                                            <div class="form-text">You can use letters, numbers & periods</div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="city">city</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Cairo." />
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">US (+20)</span>
                                                <input type="number" id="phone" name="phone"
                                                    class="form-control" placeholder="202 555 0111" />
                                            </div>

                                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                    <h6 class="mb-0 me-4">Gender: </h6>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="femaleGender"
                                                            id="femaleGender"  value="option1" />
                                                        <label class="form-check-label" for="femaleGender">Female</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="maleGender"
                                                            id="maleGender" value="option2" />
                                                        <label class="form-check-label" for="maleGender">Male</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                    <h6 class="mb-0 me-4">Status: </h6>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="active"
                                                            id="active" value="active" />
                                                        <label class="form-check-label" for="active">Active</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="not_active"
                                                            id="not_active" value="not_active" />
                                                        <label class="form-check-label" for="not_active">Not
                                                            Active</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>




            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="{{ URL::asset('assets/js/pages-account-settings-account.js') }}"></script>
    @endsection
