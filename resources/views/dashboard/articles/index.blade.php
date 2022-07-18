@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Articles') }}</h1>
                    <a href="{{route('articles.create')}}" class="btn btn-sm btn-dark ">Create</a>

                </div>

                <div class="card-body">
                    <table id="articletable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Title</th>
                                <th>DOI</th>
                                <th>Citation</th>
                                <th>Link</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)

                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->doi}}</td>
                                <td>{{$article->citation}}</td>
                                <td>{{$article->link}}</td>
                                <td>
                                    <a href="{{route('articles.show', $article->id)}}" class=" btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('articles.edit',$article->id)}}" class=" btn btn-primary btn-sm"><i class="fa fa-pen"></i></a>
                                    <form action="{{route('articles.destroy',$article->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="article_id" value="{{$article->id}}">
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">No article Added</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#articletable').DataTable();
    });
</script>
@endsection
