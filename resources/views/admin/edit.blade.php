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
                        <li class="active">Edit Lowongan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row" >
            <div class="col-lg-8 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header">Edit Lowongan</div>
                    <div class="card-body">
                        <form action="{{ route('update-lowongan',[$model->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name_unit">Posisi</label>
                                <input type="text" name="posisi" class="form-control" placeholder="Masukkan Posisi" value="{{ $model->posisi }}">
                            </div>
                            <div class="form-group">
                                <label for="id_jenis_bayar">Persyaratan</label>
                                <textarea rows="9" type="text" name="persyaratan" class="form-control" placeholder="Masukkan Persyaratan">{{ $model->persyaratan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Batas Akhir</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input class="form-control datepicker" name="batas_akhir" value="{{ $model->batas_akhir }}">
                                </div>
                            </div>
                            <button type="submit" style="float:center" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('admin/assets/plugins/datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>
@endpush
