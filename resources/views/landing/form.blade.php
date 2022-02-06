<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - laravelcode.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Posisi : {{ $model->posisi }}</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('career') }}"><span class="glyphicon glyphicon-log-in"></span> Kembali ke Lowongan Pekerjaan</a></li>
        </ul>
    </div>
    </nav>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Lowongan
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('add-apply') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-lg-12"><h5>Data Diri</h5>
                        <hr>
                        </div>
                        <div class="col-lg-6">
                    
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="nama_mhs">Nama Lengkap :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama" required>
                                    <input type="hidden" class="form-control" name="posisi" value="{{ $model->posisi }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="tmplhr_mhs">Tempat Lahir :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tmpt_lhr" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="tgl_mhs">Tanggal Lahir :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tgl_lhr" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                                <div class="col-sm-8"><select name="gender" class="form-control select2" style="width: 100%;">
                                    <option value="-" selected="selected">---</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="jk_mhs">Status :</label>
                                <div class="col-sm-8"><select name="status" class="form-control select2" style="width: 100%;">
                                    <option value="-" selected="selected">---</option>
                                    <option value="L">Sudah Menikah</option>
                                    <option value="P">Belum Menikah</option>
                                </select>
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="agama_mhs">Agama :</label>
                                <div class="col-sm-8"><select id="agama" name="agama" class="form-control select2" style="width: 100%;">
                                    <option value="-" selected="selected">---</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="notlp" name="no_telp" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="almt_mhs">Alamat :</label>
                                <div class="col-sm-8">
                                    <textarea id="smk_almt" name="alamat" id="almt_mhs" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="notlp_mhs">Kode Pos :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kode" name="kode_pos" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h5>Pendidikan</h5>
                            <hr>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="smak">Nama Pendidikan :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="smak" name="name_pend" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="agama_mhs">Jenjang :</label>
                                <div class="col-sm-8"><select id="agama_mhs" name="jenjang" class="form-control select2" style="width: 100%;">
                                    <option value="-" selected="selected">---</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="smak_almt">Jurusan :</label>
                                <div class="col-sm-8">
                                    <input id="smak_almt" name="jurusan" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="lulus">Tahun Ijazah :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="lulus" name="thn_ijazah" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-top:20px">
                            <span>Pengalaman Kerja</span>
                            <a style="float: right;" id="add-exp" class="btn btn-success btn-sm float-right" title="Tambah Pengalaman">Tambah Pengalaman Kerja &nbsp;<i class="fa fa-plus"></i></a>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="name_perusahaan">Nama Perusahaan :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name_perusahaan" name="name_perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="deskripsi">Deskripsi Pekerjaan :</label>
                                <div class="col-sm-8">
                                    <textarea id="deskripsi" class="form-control" name="deskripsi"></textarea>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="tahun_in">Tahun Masuk :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tahun_in" name="tahun_in">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="tahun_out">Tahun Keluar :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tahun_out" name="tahun_out">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="captcha">Captcha</label>
                                <div class="col-sm-8" id="captcha">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12" id="exp-add">

                        </div>
                        
                        <div class="col-lg-12">    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="cv">Upload CV :</label>
                                    <div class="col-sm-8">
                                    <input type="file" id="cv" name="cv" class="form-control-file">
                                    @if($errors->has('filename'))
                                        <small class="error">{{ $errors->first('filename') }}</small>
                                    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="box-footer" style="margin-top: 10px">
                                        <div class="col-sm-7" style="text-align:center">
                                            <input type="submit" class="btn btn-primary" value="Register Data">
                                            <a href="{{ route('career') }}" class="btn btn-danger">Batal</a>
                                        </div>
                                    </div><!-- /.box-footer -->
                                </div>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    var i = 0;
    $("#add-exp").click(function () {
        ++i;
        $("#exp-add").append('<div id="row'+i+'"><div class="col-lg-6"><div class="form-group">\
                                <label class="control-label col-sm-4" for="name_perusahaan">Nama Perusahaan :</label>\
                                <div class="col-sm-8">\
                                    <input type="text" class="form-control" id="name_perusahaan" name="name_perusahaan">\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>\
                                <div class="col-sm-8">\
                                    <input type="text" class="form-control" id="jabatan" name="jabatan">\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label class="control-label col-sm-4" for="deskripsi">Deskripsi Pekerjaan :</label>\
                                <div class="col-sm-8">\
                                    <textarea id="deskripsi" class="form-control" name="deskripsi"></textarea>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="col-lg-6">\
                            <div class="form-group">\
                                <label class="control-label col-sm-4" for="tahun_in">Tahun Masuk :</label>\
                                <div class="col-sm-8">\
                                    <input type="text" class="form-control" id="tahun_in" name="tahun_in">\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label class="control-label col-sm-4" for="tahun_out">Tahun Keluar :</label>\
                                <div class="col-sm-8">\
                                    <input type="text" class="form-control" id="tahun_out" name="tahun_out">\
                                </div>\
                            </div>\
                        </div><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr></div>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        var button_id = $(this).attr("id");   
        console.log(button_id);
        // $('#row'+i+'').remove();
        // $(this).parents('div').remove(); 
    });
</script>
</html>
