<?php

namespace App\Http\Controllers\Vacancy;
use App\Models\Lowongan;
use App\Models\Applier;
use App\Models\Chart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        if (isset($_GET['bulan'])&&isset($_GET['tahun'])) {
            $selbulan = $_GET['bulan'];
            $seltahun = $_GET['tahun'];
            $lowongan = DB::table('applier')->select('posisi', DB::raw('count(*) as total'))->whereMonth('created_at',$selbulan)->whereYear('created_at',$seltahun)->groupBy('posisi')->pluck('total', 'posisi')->all();
            
        } else {
            $selbulan = date('n');
            $seltahun = date('Y');
            $lowongan = DB::table('applier')->select('posisi', DB::raw('count(*) as total'))->whereMonth('created_at',date('n'))->whereYear('created_at',date('Y'))->groupBy('posisi')->pluck('total', 'posisi')->all();
        }

        // Generate random colours for the groups
        for ($i=0; $i<=count($lowongan); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $chart = new Chart;
        $chart->labels = (array_keys($lowongan));
        $chart->dataset = (array_values($lowongan));
        $chart->colours = $colours;

        return view('admin/dashboard',compact('chart','selbulan','seltahun'));
        // return view('admin/dashboard');
    }

    public function koko(){
        return view('admin/koko');
    }

    public function lowongan(){
        $lowongan = Lowongan::all();

        return view('admin/lowongan',['lowongan' => $lowongan]);
    }

    public function createLowongan(){
        return view('admin/form');
    }

    public function postLowongan(Request $request){
        Lowongan::create($request->all());
        return redirect('admin/lowongan')->with('sukses', 'Data berhasil diinput');
    }

    public function updateStatus($id, $status){
        $lowongan = Lowongan::where("id",$id)->update(['status' => $status]);
        return redirect('admin/lowongan')->with('sukses', 'Data berhasil diupdate');
    }

    public function editLowongan($id){
        $model = Lowongan::where("id",$id)->first();
        return view('admin.edit', compact('model'));
    }

    public function updateLowongan(Request $request, $id){
        $lowongan = Lowongan::where("id",$id)->update($request->except(['_token','_method']));
        return redirect('admin/lowongan')->with('sukses', 'Data berhasil diupdate');
    }

    public function deleteLowongan($id){
        $lowongan = Lowongan::where("id",$id)->delete();
        return redirect('admin/lowongan')->with('sukses', 'Data berhasil dihapus');
    }

    public function report(){
        $applier = Applier::all();
        return view('admin/report',['applier' => $applier]);
    }
}
