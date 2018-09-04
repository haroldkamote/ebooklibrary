@extends('layouts.admin')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Books
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="users" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/librarywithupload/public/viewusers/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'role_id',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'description/'+ row.id + '">' + data + '</a>';
                            }

                            return data;
                        }
                    },
                ],
                pageLength: 5,
            });
        });
    </script>

@endsection