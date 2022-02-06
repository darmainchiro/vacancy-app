@extends('admin.index')
 
@section('content')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Report</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Pelamar Kerja</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Basic Table</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><div style="text-align:center">NO</div></th>
                                <th><div style="text-align:center">NAMA</div></th>
                                <th><div style="text-align:center">POSISI</div></th>
                                <th><div style="text-align:center">DATA CV</div></th>
                                <th><div style="text-align:center">DOWNLOAD</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($applier as $index => $report)
                                <tr>
                                    <td style="text-align:center">{{ ++$index }}</td>
                                    <td>{{ $report->nama }}</td>
                                    <td style="text-align:center">{{ $report->posisi }}</td>
                                    <td>{{ $report->cv }}</td>
                                    <td style="text-align:center"> <a href="{{ url('cv/' . $report->cv) }}" style="float: center;" class="btn btn-success btn-sm">Download &nbsp;<i class="fa fa-download"></i>
                            </button> </td>
                                    
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="5">Pelamar Kerja Belum ada</td>
                                </tr>
                            @endforelse      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->

</div> <!-- .content -->

@endsection
