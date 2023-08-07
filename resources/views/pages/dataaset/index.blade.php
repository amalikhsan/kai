@extends('layouts.app')

@section('title', 'Kelola Pengguna')
@section('desc', 'Halaman Ini Kamu Bisa Kelola Pengguna.')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data Pengguna</h4>
            <div class="card-header-action">
                <a href="{{ route('user.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah Data Pengguna
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        var datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: "{!! url()->current() !!}"
            },
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, 'ALL']
            ],
            responsive: true,
            order: [
                [0, 'desc'],
            ],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'avatar', name: 'avatar'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'username'},
                {data: 'username', name: 'username'},
                {data: 'role', name: 'role'},
                {data: 'email_verified_at', name: 'email_verified_at'},
            ],
            columnDefs: [{
                "targets": 1,
                "render": function(data, type, row, meta) {
                    let img = `assets/img/avatar/avatar-5.png`;
                    if(data) {
                        img = `storage/${data}`;
                    }

                    return `<img alt="image" src="{{ asset('/') }}${img}" class="rounded-circle profile-pic" width="35">`;
                }
            },{
                "targets": 2,
                "render": function(data, type, row, meta) {
                    return `
                        ${data}
                        <form action="{{ url('/user') }}/${row.encrypted_id}" method="POST" class="table-links">
                            @method('DELETE')
                            @csrf
                            <a
                                href="{{ url('/user') }}/${row.encrypted_id}/edit"
                                class="btn btn-sm"
                            >
                                Edit
                            </a>
                            <button
                                type="submit"
                                class="text-danger btn-delete btn btn-sm"
                            >
                                Hapus
                            </button>
                        </form>
                    `;
                }
            },{
                "targets": -1,
                "render": function(data, type, row, meta) {
                    if(data){
                        return `<div class="badge badge-success">Verified</div>`;
                    } else {
                        return `<div class="badge badge-danger">Unverified</div>`;
                    }
                }
            }],
            rowId: function(a) {
                return a;
            },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            },
        });
    });
</script>
@endpush()
