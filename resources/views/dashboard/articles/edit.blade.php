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
                    <form action="{{route('articles.update',$article->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" required value="{{$article->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="doi" class="form-label">DOI<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="doi" id="doi" required value="{{$article->doi}}">
                        </div>
                        <div class="mb-3">
                            <label for="catetgory_id" class="form-label">Category<span class="text-danger">*</span></label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select One</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if ($article->category->id == $category->id)
                                    selected
                                @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="author_ids" class="form-label">Authors<span class="text-danger">*</span></label>
                            <select name="author_ids[]" id="author_ids" class="form-control author_ids" required multiple="multiple">
                                @foreach ($authors as $author)
                                    @if(in_array($author->id, $authorsids))
                                        <option value="{{ $author->id }}" selected="true">{{ $author->name }}</option>
                                    @else
                                    <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="researchers" class="form-label">Resercher</label>
                            <select name="researchers[]" id="researchers" class="form-control researchers" multiple="multiple">
                                @foreach ($researchers as $researcher)
                                    @if(in_array($researcher->id, $researcherids))
                                        <option value="{{ $researcher->id }}" selected="true">{{ $researcher->name }}</option>
                                    @else
                                    <option value="{{$researcher->id}}">{{$researcher->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pub_date" class="form-label">Publication Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="pub_date" id="pub_date" required value="{{$article->pub_date}}">
                        </div>
                        <div class="mb-3">
                            <label for="abstract" class="form-label">Abstract<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="abstract" id="abstract" cols="30" rows="5" required>{{$article->abstract}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover" id="cover">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Full Link <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="link" id="link" required value="{{$article->link}}">
                        </div>
                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="publisher" id="publisher" required value="{{$article->publisher}}">
                        </div>
                        <div class="mb-3">
                            <label for="citation" class="form-label">Citation <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="citation" id="citation" required value="{{$article->citation}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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
