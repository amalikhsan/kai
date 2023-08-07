@extends('layouts.app')

@section('title', 'Kelola Angkutan Barang')
@section('desc', 'Halaman Ini Kamu Bisa Kelola Angkutan Barang.')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data Angkutan Barang</h4>
            <div class="card-header-action">
                <a href="{{ route('dataAngbar.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah Data Angkutan Barang
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Bulan</th>
                            <th colspan="3">Volume</th>
                            <th colspan="3">Pendapatan</th>
                            <th rowspan="2">Pengelola</th>
                        </tr>
                        <tr>
                            <th>Program</th>
                            <th>Realisasi</th>
                            <th>%</th>
                            <th>Program</th>
                            <th>Realisasi</th>
                            <th>%</th>
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
            exportable: true,
            order: [
                [0, 'desc'],
            ],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'bulan', name: 'bulan'},
                {data: 'volume_program', name: 'volume_program'},
                {data: 'volume_realisasi', name: 'volume_realisasi'},
                {data: 'volume_persentase', name: 'volume_persentase'},
                {data: 'pendapatan_program', name: 'pendapatan_program'},
                {data: 'pendapatan_realisasi', name: 'pendapatan_realisasi'},
                {data: 'pendapatan_persentase', name: 'pendapatan_persentase'},
                {data: 'pengelola', name: 'pengelola'},
            ],
            columnDefs: [{
                "targets": 2,
                "render": function(data, type, row, meta) {
                    return `
                        ${data}
                        <form action="{{ url('/dataAngbar') }}/${row.encrypted_id}" method="POST" class="table-links">
                            @method('DELETE')
                            @csrf
                            <a
                                href="{{ url('/dataAngbar') }}/${row.encrypted_id}/edit"
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
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'csv', 'pdf', 'print'
            ],
        });
    });
</script>
@endpush()
