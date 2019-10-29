@extends('layout')

@section('content')
    <table class="table table-bordered" id="pasien-table">
        <a href="user/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <thead>
            <tr>
                            <th>ID Pasien</th>
                            <th>Nomor Rawat</th>
                            <th>Nomor Rekam Medis</th>
                            <th>Nama Pasien</th>
                            <th>Alamat</th>
                            <th>Penanggung Jawab</th>
                            <th>Hubungan Penanggung Jawab</th>
                            <th>Jenis Bayar</th>
                            <th>Kamar</th>
                            <th>Tarif Kamar</th>
                            <th>Diagnosa Awal</th>
                        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#pasien-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'Pasien/json',
        columns: [
            { data: 'id_pasien', name: 'id_pasien' },
            { data: 'no_rawat', name: 'no_rawat' },
            { data: 'no_rkm_medis', name: 'no_rkm_medis' },
            { data: 'nm_pasien', name: 'nm_pasien' },
            { data: 'alamat', name: 'alamat' },
            { data: 'penaggung_jwb', name: 'penaggung_jwb' },
            { data: 'hbng_pj', name: 'hbng_pj' },
            { data: 'jenis_bayar', name: 'jenis_bayar' },
            { data: 'kamar', name: 'kamar' },
            { data: 'trf_kmr', name: 'trf_kmr' },
            { data: 'diagnosa_awal', name: 'diagnosa_awal' },
        ]
    });
});
</script>
@endpush