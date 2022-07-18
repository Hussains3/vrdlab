@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Researchers') }}</h1>
                    <a href="{{route('researchers.create')}}" class="btn btn-sm btn-dark ">Create</a>

                </div>

                <div class="card-body">
                    <table id="researchertable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>University</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($researchers as $researcher)

                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>
                                    <img src="{{asset($researcher->photo)}}" alt="{{$researcher->name}}" srcset="" width="30px" class="rounded-circle">
                                </td>
                                <td>{{$researcher->name}}</td>
                                <td>{{$researcher->designation}}</td>
                                <td>{{$researcher->uv_name}}</td>
                                <td>
                                    <a href="{{route('researchers.show', $researcher->id)}}" class=" btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('researchers.edit',$researcher->id)}}" class=" btn btn-primary btn-sm"><i class="fa fa-pen"></i></a>
                                    <form action="{{route('researchers.destroy',$researcher->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="researcher_id" value="{{$researcher->id}}">
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td class="text-center"></td>
                                <td class="text-center">No Researcher Added</td>
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
        $('#researchertable').DataTable();
    });
</script>
@endsection
