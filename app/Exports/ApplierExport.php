<?php

namespace App\Exports;

use App\Models\Applier;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ApplierExport implements FromView
{

    public function __construct(string $key_tahun, string $key_loc)
    {
        $this->tahun = $key_tahun;
        $this->lokasi = $key_loc;
    }
    public function view(): View
    {
        if($this-> tahun == 'all'){
            $tahun = '';
        } else {
            $tahun = "AND EXTRACT(YEAR FROM CREATED_AT) = '".$this->tahun."'";
        }

        if($this-> lokasi == 'all'){
            $lokasi = '';
        } else {
            $lokasi = "AND LOKASI = '".$this->lokasi."'";
        }

        return view('admin/export', [
            'data' => Applier::select(DB::raw('nama, no_telp, posisi, lokasi, EXTRACT(YEAR FROM CREATED_AT) AS tahun, EXTRACT(MONTH FROM CREATED_AT) AS bulan'))->whereRaw('1=1 '.$lokasi.''. $tahun)->get()
        ]);
    }
}
