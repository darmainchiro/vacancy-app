@extends('admin.index')
 
@section('content')


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
                    <li class="active">Lowongan</li>
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
                        <a style="float: right;" href="{{ route('create-lowongan') }}" class="btn btn-success btn-sm" title="Tambah Lowongan">Tambah Lowongan &nbsp;<i class="fa fa-plus"></i></a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><div style="text-align:center">NO</div></th>
                                    <th><div style="text-align:center">POSISI</div></th>
                                    <th><div style="text-align:center">DESKRIPSI</div></th>
                                    <th><div style="text-align:center">LOKASI</div></th>
                                    <th><div style="text-align:center">BATAS AKHIR</div></th>
                                    <th><div style="text-align:center">STATUS</div></th>                                
                                    <th><div style="text-align:center">ACTION</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lowongan as $index => $post)
                                    <tr>
                                        <td style="text-align:center">{{ ++$index }}</td>
                                        <td>{{ $post->posisi }}</td>
                                        <td>{{ $post->persyaratan }}</td>
                                        <td style="text-align:center">{{ $post->lokasi }}</td>
                                        <td style="text-align:center">{{ $post->batas_akhir }}</td>
                                        <td style="text-align:center">{{ $post->status }}</td>
                                        <td>
                                            <div style="text-align:center">
                                                @if($post->status == 'open')
                                                    <a href="{{ route('status',[$post->id, 'closed']) }}" style="float: center;" class="btn btn-primary btn-sm"><i class="fa fa-eye-slash"></i></a>
                                                @else
                                                    <a href="{{ route('status',[$post->id, 'open']) }}" style="float: center;" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                @endif
                                                <a href="{{ route('edit-lowongan',[$post->id]) }}" style="float: center;" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ route('delete-lowongan',[$post->id]) }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" style="float: center;" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center text-mute" colspan="4">Lowongan tidak tersedia</td>
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
