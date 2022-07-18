@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Create New Researcher') }}</h1>
                    <a href="{{route('researchers.index')}}" class="btn btn-sm btn-dark ">All Researcher</a>

                </div>

                <div class="card-body">
                    <form action="{{route('researchers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Researcher Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" required placeholder="Your Researcher Name">
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="photo" id="photo" required>
                        </div>
                        <div class="mb-3">
                            <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="designation" id="designation" required placeholder="Designation">
                        </div>
                        <div class="mb-3">
                            <label for="uv_name" class="form-label">University Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="uv_name" id="uv_name" required placeholder="University Name">
                        </div>
                        <div class="mb-3">
                            <label for="uv_logo" class="form-label">University Logo <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="uv_logo" id="uv_logo" required>
                        </div>
                        <div class="mb-3">
                            <label for="reserch_area" class="form-label">Research Area <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="reserch_area" id="reserch_area" cols="30" rows="5" required placeholder="Ex: Biochemistry, Bio Engineering"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="bio" id="bio" cols="30" rows="5" required placeholder="I am a bio engineer."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="website.com">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="mymail@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="me.linked.com">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
