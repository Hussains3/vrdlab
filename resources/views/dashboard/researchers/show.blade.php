@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ $researcher->name}}</h1>
                    <div class="">
                        <a href="" class="btn btn-sm btn-dark ">Profile</a>
                        <a href="{{route('researchers.index')}}" class="btn btn-sm btn-dark ">All</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- Edit Form --}}
                        <div class="col-6">
                            <form action="{{route('researchers.update',$researcher->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Researcher Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Your Researcher Name" value="{{$researcher->name}}">
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photo">
                                </div>
                                <div class="mb-3">
                                    <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="designation" id="designation" required placeholder="Designation" value="{{$researcher->designation}}">
                                </div>
                                <div class="mb-3">
                                    <label for="uv_name" class="form-label">University Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="uv_name" id="uv_name" required placeholder="University Name" value="{{$researcher->uv_name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="uv_logo" class="form-label">University Logo</label>
                                    <input type="file" class="form-control" name="uv_logo" id="uv_logo">
                                </div>
                                <div class="mb-3">
                                    <label for="reserch_area" class="form-label">Research Area <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="reserch_area" id="reserch_area" cols="30" rows="5">{{$researcher->reserch_area}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="bio" class="form-label">Bio <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="bio" id="bio" cols="30" rows="5" required >{{$researcher->reserch_area}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" id="website" value="{{$researcher->website ?? ''}}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$researcher->email ?? ''}}">
                                </div>
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$researcher->linkedin ?? ''}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        {{-- Researcher view --}}
                        <div class="col-6 bg-dark rounded d-flex flex-column">
                            <div class="d-flex justify-content-center pt-5">
                                <img src="{{asset($researcher->photo)}}" alt="" class="rounded-circle">
                            </div>
                            <div class="text-light text-center mt-5">
                                <h2>{{$researcher->name}}</h2>
                                <p>{{$researcher->designation}}</p>
                            </div>
                            <div class="">
                                <div class="text-light d-flex">
                                    <i class="fa-solid fa-building-columns me-3"></i>
                                    <div class="rtext">
                                        <p>{{$researcher->uv_name}}</p>
                                    </div>
                                </div>
                                <div class="text-light d-flex">
                                    <i class="fa-solid fa-file me-3"></i>
                                    <p>{{$researcher->reserch_area}}</p>
                                </div>
                            </div>

                            <hr class="text-light">
                            <div class="">
                                <div class="bg-light p-2 position-relative rounded" style="margin-top: 50px">
                                    <div class="position-absolute end-0" style="top: -50px">
                                        <img src="{{asset($researcher->uv_logo)}}" alt="" width="100px" class="rounded-circle">
                                    </div>
                                    <div class="">
                                        <h3>About</h3>
                                        <p>{{$researcher->bio}}</p>
                                    </div>
                                    <div class="">
                                        @if ($researcher->website)
                                        <a href="#" class="text-dark"><i class="fa-solid fa-globe me-2"></i>{{$researcher->website}}</a>
                                        @endif
                                        @if ($researcher->email)
                                        <a href="#" class="text-dark"><i class="fa-solid fa-envelope me-2"></i>{{$researcher->email}}</a>
                                        @endif
                                        @if ($researcher->linkedin)
                                        <a href="#" class="text-dark"><i class="fa-brands fa-linkedin me-2"></i>{{$researcher->linkedin}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
