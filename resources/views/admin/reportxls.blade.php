@extends('admin.index')

@section('content')

<div class="app-main__inner">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Laporan</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Download Laporan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row" >
            <div class="col-lg-8 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header">Download Laporan</div>
                    <div class="card-body">
                        <form action="{{ route('export-xls') }}">
                            @csrf
                            <div class="col-lg-6">
                                <label class="control-label" for="thn">Tahun</label>
                                <div class="form-group">    
                                    <select id="thn" name="tahun" class="form-control select2" style="width: 100%;">
                                        <option value="all">All</option>
                                        @foreach($tahun as $thn)
                                            <option value="{{ $thn->year }}">{{ $thn->year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="lokasi">Lokasi</label>
                                <div class="form-group">
                                    <select id="lokasi" name="lokasi" class="form-control select2" style="width: 100%;">
                                        <option value="all">All</option>
                                        @foreach($lokasi as $lks)
                                            <option value="{{ $lks->lokasi }}">{{ $lks->lokasi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" style="float:center" class="btn btn-primary">Export Excel</button>
                            </div>
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
