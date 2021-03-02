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

                                <a href="{{route('slider.create')}}"><button class="btn btn-info" type="button"><i class="icon-plus mr-1"></i>Add {{$data['module']}}</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table style="width: 100%;" id="default-datatable" class="table table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <!-- <th style="min-width: 180px;"><input type='checkbox' class='checkall' id='checkall'>Select All</th>
                                            <th style="width: 40px;">Id</th>
                                            <th style="max-height: 100px;">Body</th>
                                            <th style="width: 100px;">Added Date</th> -->
                                            <!-- <th>Id</th> -->
                                            <th style="max-width: 300px;">Title</th>
                                            <th>Sequence</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categorys as $brand)
                                        <tr>
                                            <!-- <td>{{$brand['id']}}</td> -->
                                            <td style="max-width: 300px;">{{$brand['title']}}<br>
                                                @if($brand['link'] != "")
                                                Link : <a href="{{$brand['link']}}">{{$brand['link']}}</a>
                                                @endif
                                            </td>
                                            <td>{{ $brand['sequence'] }}</td>
                                            <td>
                                                <img style="width: 150px; height: 70px;" src="../uploads/slider/{{$brand['image']}}" style="width: 100px; height:100px;" />
                                            </td>
                                            <td>
                                                <a style="float: left; margin-right: 5px;" class="btn btn-sm btn-info" href="{{ url('admin/slider/' . $brand->id . '/edit') }}"><i class="fa fa-pencil"></i> Edit</a>
                                                <form action="{{url('admin/slider/'.$brand->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="margin-top: 2px;" class="btn deletebtn btn-sm btn-danger" type="submit"><i class="fa fa-trash-o"></i> Delete</button>
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
        $(".datatable").DataTable({
            "ordering": false,
            "scrollX": true,
            'autoWidth': false
        });
    });
</script>
@endsection