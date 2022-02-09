@extends('admin.index')
 
@section('content')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
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
                    <div class="card-body">
						<div class="col-lg-8" style="margin-top:20px">
							<div class="row form-group">
								<label class="control-label" for="bulan">Bulan :</label>
								<select id="bulan" name="bulan" class="form-control select2" style="width: 20%; display:inline;margin-left:20px">
									<option value="1" {{ ( isset($selbulan) && 1 == $selbulan) ? 'selected' : '' }}>Januari</option>
									<option value="2" {{ ( isset($selbulan) && 2 == $selbulan) ? 'selected' : '' }}>Februari</option>
									<option value="3" {{ ( isset($_GET['bulan']) && 3 == $_GET['bulan']) ? 'selected' : '' }}>Maret</option>
									<option value="4" {{ ( isset($_GET['bulan']) && 4 == $_GET['bulan']) ? 'selected' : '' }}>April</option>
									<option value="5" {{ ( isset($_GET['bulan']) && 5 == $_GET['bulan']) ? 'selected' : '' }}>Mei</option>
									<option value="6" {{ ( isset($_GET['bulan']) && 6 == $_GET['bulan']) ? 'selected' : '' }}>Juni</option>
									<option value="7" {{ ( isset($_GET['bulan']) && 7 == $_GET['bulan']) ? 'selected' : '' }}>Juli</option>
									<option value="8" {{ ( isset($_GET['bulan']) && 8 == $_GET['bulan']) ? 'selected' : '' }}>Agustus</option>
									<option value="9" {{ ( isset($_GET['bulan']) && 9 == $_GET['bulan']) ? 'selected' : '' }}>September</option>
									<option value="10" {{ ( isset($_GET['bulan']) && 10 == $_GET['bulan']) ? 'selected' : '' }}>Oktober</option>
									<option value="11" {{ ( isset($_GET['bulan']) && 11 == $_GET['bulan']) ? 'selected' : '' }}>November</option>
									<option value="12" {{ ( isset($_GET['bulan']) && 12 == $_GET['bulan']) ? 'selected' : '' }}>Desember</option>
								</select>
								<label class="control-label" for="tahun" style="margin-left:20px">Tahun :</label>
								<select id="tahun" name="tahun" class="form-control select2" style="width: 20%;margin-left:20px">
										<option value="2022" selected="selected">2022</option>
									</select>
									<button type="submit" style="margin-left:20px" class="btn btn-primary" onclick="test_button()">Submit</button>

							</div>
						</div>
                        <canvas id="barChart"></canvas>
						<div class="col-lg-6" style="margin-top:30px">
                            <table  id="bootstrap-data-table" class="table table-striped table-bordered">
                                <tr>
                                    <th style="text-align:center">Posisi</th>
                                    <th style="text-align:center">Jumlah</th>
                                </tr>
								@forelse ($lowongan as $key => $value)
									<tr>
										<td>{!! $key !!}</td>
										<td style="text-align:center">{!! $value !!}</td>										
									</tr>
									@empty
									<tr>
										<td class="text-center text-mute" colspan="4">Pelamar belum ada</td>
									</tr>
								@endforelse 
                            </table>  
                        </div>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    function test_button() {
        var bulan  = $("#bulan").val();
        var tahun = $("#tahun").val();
        location.href = "<?=url('admin-page');?>?bulan="+bulan+"&tahun="+tahun;
    }
</script>
@endsection

@push('scripts')
<!--  Chart js -->
<script src="{{ asset('admin/assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/chart-js/chartjs-init.js') }}"></script>
<script>
    
	var ctx = document.getElementById("barChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: {!! json_encode($chart->labels) !!},
			datasets: [{
				label: "Jumlah Pelamar",
				data: {!! json_encode($chart->dataset) !!},
				backgroundColor: {!! json_encode($chart->colours) !!},
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			},
			plugins: {
        legend: {
          position: 'bottom',
          labels: {
              boxWidth: 12
          }
        }
      }
		}
	});
</script>

@endpush