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

                                <a href="{{route('packages.create')}}"><button class="btn btn-info" type="button"><i class="icon-plus mr-1"></i>Add {{$data['module']}}</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table style="width: 100%;" id="default-datatable" class="table table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th style="max-width: 300px;">Name</th>
                                            <th>Destination</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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

<div class="modal modal fade" name="ViewModal" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title package_title">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body packageData"></div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {




        $(document).on("click", ".view_btn", function() {


            $('#ViewModal').modal('show');

            var id = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: '{{ route("admin.viewPackage")}}',
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {

                    $(".packageData").html('');
                    $(".packageData").html(data.html);

                }
            });
        });

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

        var table = $('.datatable').DataTable({
            "scrollX": true,
            'autoWidth': false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('packages.index') }}",
            "order": [
                [0, "desc"]
            ],
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'main_image',
                    name: 'main_image'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'destination_id',
                    name: 'destination_id'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
@endsection