@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Authors') }}</h1>
                    <a href="{{route('authors.create')}}" class="btn btn-sm btn-dark ">Create</a>

                </div>

                <div class="card-body">
                    <table id="categorytable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($authors as $author)

                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$author->name}}</td>
                                <td>{{$author->link}}</td>
                                <td>
                                    <a href="{{route('authors.show', $author->id)}}" class=" btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('authors.edit',$author->id)}}" class=" btn btn-primary btn-sm"><i class="fa fa-pen"></i></a>
                                    <form action="{{route('authors.destroy',$author->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="author_id" value="{{$author->id}}">
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">No Author Added</td>
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
        $('#categorytable').DataTable();
    });
</script>
@endsection
