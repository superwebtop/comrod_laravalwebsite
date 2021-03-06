@extends('layouts.admin')

@section('title', 'Inactive YouTube')
@section('description', 'Inactive YouTube')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Inactive YouTube</h3>
            <table class="table table-bordered table-striped table-hover" id="contents-table" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Uploader</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Actions</th>                                
                    </tr>
                </thead>                    
            </table>
        </div>
    </div>
@stop

@section ('external_js')
    <script type="text/javascript">
    $(function () {
        $('#contents-table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin::getDatatablesInactiveEmbed') }}',
            columns: [
                {data: 'content_id', name: 'content_id'},
                {data: 'title', name: 'title'},
                {data: 'uploader', name: 'uploader'},
                {data: 'type', name: 'type', sClass: 'text-center', orderable: 'false'},
                {data: 'status', name: 'status', orderable: false, width: '5%', sClass: 'text-center'},
                {data: 'actions', name: 'actions', orderable: false, width: '5%'}                
            ],
            order: [[0, 'desc']]
        });
    });
    </script>
@stop