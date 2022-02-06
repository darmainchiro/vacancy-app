@extends('admin.index')

@section('content')

<div class="app-main__inner">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Lowongan Kerja</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Tambah Lowongan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row" >
            <div class="col-lg-8 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header">Tambah Lowongan</div>
                    <div class="card-body">
                        <form action="{{ route('add-lowongan') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name_unit">Posisi</label>
                                <input type="text" name="posisi" class="form-control" placeholder="Masukkan Posisi">
                                <input type="hidden" class="form-control" name="status" value="open">
                            </div>
                            <div class="form-group">
                                <label for="id_jenis_bayar">Persyaratan</label>
                                <textarea rows="9" type="text" name="persyaratan" class="form-control" placeholder="Masukkan Persyaratan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Batas Akhir</label>
                                <div class="input-group date" id='datetimepicker'>
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input class="form-control" autocomplete="off" name="batas_akhir">
                                </div>
                            </div>
                            <button type="submit" style="float:center" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

<script type="text/javascript">
    ( function ( $ ) {
        $('#datetimepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        });
    })( jQuery );
</script>
@endpush
