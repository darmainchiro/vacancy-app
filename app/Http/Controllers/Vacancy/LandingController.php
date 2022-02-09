<?php

namespace App\Http\Controllers\Vacancy;

use App\Models\Lowongan;
use App\Models\Applier;
use App\Models\Expwork;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getLanding(){
        return view('landing/home');
    }

    public function contact(){
        return view('landing/contact');
    }

    public function visi(){
        return view('landing/visi');
    }

    public function career(){
        $lowongan = Lowongan::where('status', 'open')->get();

        return view('landing/career',['lowongan' => $lowongan]);
    }

    public function apply($id){
        $model = Lowongan::where("id",$id)->first();
        $lokasi = explode(',', $model->lokasi);
        return view('landing/formku', compact('model','lokasi'));
    }

    public function postApply(Request $request){
        $request->validate([
            'cv' => 'required',
            'cv.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('cv')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('cv')->getClientOriginalName());
            $request->file('cv')->move(public_path('cv'), $filename);
            $requestData = $request->except(['g-recaptcha-response']);
            $requestData['cv'] = $filename;
            
            $apply = Applier::create($requestData);
            $apply->id;

            foreach ($request->work as $key => $value) {
                $data = $value;
                $data['id_applier'] = $apply->id;
                Expwork::create($data);
            }

            return redirect()->route('display')->with(['success' => 'Data berhasil diinput']);
            
        }else{
            return back()->withInput();
        }
    }


    public function project(){
        return view('landing/project');
    }
}
