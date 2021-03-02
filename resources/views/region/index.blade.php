@extends('layouts.app')
@section('title')
{{$data['title']}}
@endsection
@section('css')

@endsection
@section('content')





<div class="content-body">
    <section id="configuration">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$data['module']}}</h4>
                        <div class="heading-elements">
                            <div class="btn-group float-md-right">

                                <a href="{{route('region.create')}}"><button class="btn btn-info" type="button"><i class="icon-plus mr-1"></i>Add {{$data['module']}}</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">

                            <table class="table table-striped table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <!-- <th>Id</th> -->
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorys as $brand)
                                    <tr>
                                        <!-- <td>{{$brand['id']}}</td> -->
                                        <td>{{$brand['name']}}</td>

                                        <td>
                                            <a style="float: left; margin-right: 5px;" class="btn btn-sm btn-info" href="{{ url('admin/region/' . $brand->id . '/edit') }}"><i class="fa fa-pencil"></i> Edit</a>
                                            <form action="{{url('admin/region/'.$brand->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn deletebtn btn-sm btn-danger" type="submit"><i class="fa fa-trash-o"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>



@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

        $(".deletebtn").click(function(e) {
            e.preventDefault();
            swal({
                title: "Are you sure ?",
                text: 'Delete This Record',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $(this).closest("form").submit();
                }
            });
        });
        $(".dataTable").DataTable({
            "ordering": false
        });
    });
</script>
@endsection