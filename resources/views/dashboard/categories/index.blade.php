@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Categories') }}</h1>
                    <a href="{{route('categories.create')}}" class="btn btn-sm btn-dark ">Create</a>

                </div>

                <div class="card-body">
                    <table id="categorytable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)

                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{route('categories.show', $category->id)}}" class=" btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('categories.edit',$category->id)}}" class=" btn btn-primary btn-sm"><i class="fa fa-pen"></i></a>
                                    <form action="{{route('categories.destroy',$category->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="category_id" value="{{$category->id}}">
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">No Category Added</td>
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
