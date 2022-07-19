@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Create New Article') }}</h1>
                    <a href="{{route('articles.index')}}" class="btn btn-sm btn-dark ">All Article</a>

                </div>

                <div class="card-body">
                    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" required placeholder="Your Article Title">
                        </div>
                        <div class="mb-3">
                            <label for="doi" class="form-label">DOI<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="doi" id="doi" required placeholder="Your Article DOI">
                        </div>
                        <div class="mb-3">
                            <label for="catetgory_id" class="form-label">Category<span class="text-danger">*</span></label>
                            <select name="catetgory_id" id="catetgory_id" class="form-control" required>
                                <option value="">Select One</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="author_ids" class="form-label">Authors<span class="text-danger">*</span></label>
                            <select name="author_ids[]" id="author_ids" class="form-control author_ids" required multiple="multiple">
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="researchers" class="form-label">Resercher</label>
                            <select name="researchers[]" id="researchers" class="form-control researchers" multiple="multiple">
                                @foreach ($researchers as $researcher)
                                <option value="{{$researcher->id}}">{{$researcher->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pub_date" class="form-label">Publication Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="pub_date" id="pub_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="abstract" class="form-label">Abstract<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="abstract" id="abstract" cols="30" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="cover" id="cover" required>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Full Link <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="link" id="link" required placeholder="Full link of this article">
                        </div>
                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="publisher" id="publisher" required placeholder="Publisher">
                        </div>
                        <div class="mb-3">
                            <label for="citation" class="form-label">Citation <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="citation" id="citation" required>
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
<script>
    $(document).ready(function() {
        $('.author_ids').select2();
        $('.researchers').select2();
    });
</script>
@endsection
