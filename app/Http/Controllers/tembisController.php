<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\data_konbis;
use App\Models\dt_user;
use App\Models\vw_sp;
use App\Models\detil_sp;
use App\Models\users;
use App\Models\tbl_sp;
use App\Models\tbl_aset;
use App\Models\tbl_detil;
use App\Models\kategori;

class tembisController extends Controller
{
    public function dtuser()
    {
        /*
        $npk='';
        $nm='';
        $uknm='';
        $usertb = DB::table('usertb')
                ->join('uk_user','usertb.user_id','=','uk_user.user_id')
                ->join('unit_kerja','uk_user.uk_id','=','unit_kerja.uk_id')
                ->where('usertb.user_id','LIKE','%'.$npk.'%')
                ->where('usertb.user_nm','LIKE','%'.$nm.'%')
                ->where('unit_kerja.uk_nm','LIKE','%'.$uknm.'%')
                ->get();
        */
        $usertb = dt_user::all();                
        return view('user', ['usertb'=>$usertb]);
    }

    public function dash()
    {
        session()->flush();
        $data_konbis = data_konbis::all();

        $sortjsp = data_konbis::select('jenis_sp')->groupBy('jenis_sp')->get();
        $sortsksp = data_konbis::select('skema_sp')->groupBy('skema_sp')->get();
        $sortkas = data_konbis::select('kategori_aset')->groupBy('kategori_aset')->get();
        $sortlosp = data_konbis::select('lokasi_obj_sp')->groupBy('lokasi_obj_sp')->get();
        $sortuser = data_konbis::select('user')->groupBy('user')->get();
        return view('dashboard', compact('data_konbis', 'sortsksp', 'sortjsp', 'sortkas', 'sortlosp', 'sortuser'));
    }

    public function konbis()
    {
        $sp_tb = vw_sp::all();
        $sp_tb_detil = detil_sp::all();
        return view('/admin/sp', compact('sp_tb', 'sp_tb_detil'));
    }

    public function konbisuser()
    {
        $sp_tb = vw_sp::all();
        $sp_tb_detil = detil_sp::all();
        return view('/user/spuser', compact('sp_tb', 'sp_tb_detil'));
    }

    public function detilsp($id)
    {
        $add = 'Addendum';
        $sp_tb_detil = detil_sp::where('id_sp', 'LIKE', $id. '%')->first();
        $sp_tb_add = detil_sp::where('id_sp', 'LIKE', $id. '%')
                             ->where('jenis', 'LIKE', $add. '%')
                             ->get();
        return view('/admin/detilsp', compact('sp_tb_detil', 'sp_tb_add'));
    }

    public function user()
    {
        $user = users::all();
        return view('/admin/muser', ['user' => $user]);
    }

    public function kategori()
    {
        $kategori = kategori::all();
        return view('/admin/mkategori', ['kategori' => $kategori]);
    }

    public function aset()
    {
        $tbl_aset = tbl_aset::join('tbl_unit_kerja','tbl_aset.id_unit_kerja','=','tbl_unit_kerja.id')->get();
        return view('/admin/maset', ['tbl_aset' => $tbl_aset]);
    }

    public function history()
    {
        $data_konbis = data_konbis::all();
        return view('history', ['data_konbis' => $data_konbis]);
    }


    public function filter()
    {
        $filter1 = request()->input('filter1');
        $filter2 = request()->input('filter2');
        $filter3 = request()->input('filter3');
        $filter4 = request()->input('filter4');
        $filter5 = request()->input('filter5');
        $filter6 = request()->input('filter6');
        $filter7 = request()->input('filter7');
        
        $data_konbis = data_konbis::where('jenis_sp', 'LIKE', $filter1 . '%')
                                  ->where('skema_sp', 'LIKE', $filter2 . '%')
                                  ->where('kategori_aset', 'LIKE' , $filter3 . '%')
                                  ->where('lokasi_obj_sp', 'LIKE', $filter4 . '%')
                                  ->where('user', 'LIKE', $filter5 . '%')
                                  ->where('tgl_mulai', '>=', $filter6)
                                  ->where('tgl_akhir', '<=', $filter7)
                                  ->get();

        /*dd($filter1,$filter2,$filter3,$filter4,$filter5, $filter6, $filter7, $data_konbis);*/

        $sortjsp = data_konbis::select('jenis_sp')->groupBy('jenis_sp')->get();
        $sortsksp = data_konbis::select('skema_sp')->groupBy('skema_sp')->get();
        $sortkas = data_konbis::select('kategori_aset')->groupBy('kategori_aset')->get();
        $sortlosp = data_konbis::select('lokasi_obj_sp')->groupBy('lokasi_obj_sp')->get();
        $sortuser = data_konbis::select('user')->groupBy('user')->get();

        return view('dashboard', compact('data_konbis', 'sortjsp', 'sortsksp', 'sortkas', 'sortlosp', 'sortuser'));
    }

    public function report()
    {
        $data_konbis = data_konbis::all();
        return view('report', ['data_konbis' => $data_konbis]);
    }

    public function sortjsp($data_id)
    {   
        if (!is_null(session('sksp')))
        {
            $sksp = session('sksp');
            $data_konbis = data_konbis::where('jenis_sp', 'LIKE', $sksp . '%')->where('skema_sp', 'LIKE', $data_id . '%')->get();
            session()->flashInput(['jsp' => $data_id]);
        }else{
            $data_konbis = data_konbis::where('jenis_sp', 'LIKE',$data_id . '%')->get();
            session()->flashInput(['jsp' => $data_id]);
        }
        $sortjsp = data_konbis::select('jenis_sp')->groupBy('jenis_sp')->get();
        $sortsksp = data_konbis::select('skema_sp')->groupBy('skema_sp')->get();
        return view('dashboard', compact('data_konbis', 'sortsksp', 'sortjsp'));
    }

    public function sortsksp($data_id)
    {
        if (!is_null(session('jsp')))
        {
            $jsp = session('jsp');
            $data_konbis = data_konbis::where('skema_sp', 'LIKE', $jsp . '%')->where('skema_sp', 'LIKE', $data_id . '%')->get();
            session()->flashInput(['sksp' => $data_id]);
        }else{
            $data_konbis = data_konbis::where('skema_sp', 'LIKE',$data_id . '%')->get();
            session()->flashInput(['sksp' => $data_id]);
        }

        $sortjsp = data_konbis::select('jenis_sp')->groupBy('jenis_sp')->get();
        $sortsksp = data_konbis::select('skema_sp')->groupBy('skema_sp')->get();
        return view('dashboard', compact('data_konbis', 'sortsksp', 'sortjsp'));
    }

    public function tambah()
    {
        $kategori = kategori::all();
        return view ('/admin/tambahsp', ['kategori' => $kategori]);
    }

    public function tambahdetil(Request $request, $id)
    {
        $tbl_sp = tbl_sp::find($id);
        $tbl_aset = tbl_aset::all();
        return view('/admin/tambahdetil', compact('tbl_sp','tbl_aset'));
    }

    public function tambahaset()
    {
        $tbl_uk = DB::table('tbl_unit_kerja')->get();
        return view ('/admin/tambahaset', ['tbl_uk' => $tbl_uk]);
    }

    public function tambahkategori()
    {
        return view ('/admin/tambahkategori');
    }

    public function store(Request $request)
    {
        data_konbis::create($request -> all());
        return redirect('/dashboard');
    }

    public function store2(Request $request)
    {
        $tbl_sp = tbl_sp::create($request -> all());
        return redirect('/sp')->with('Sukses','No. SP '.$tbl_sp->no.' Telah dibuat');
    }

    public function store3(Request $request)
    {
        $tbl_detil = tbl_detil::create($request -> all());
        return redirect('/sp')->with('Sukses','Detil No. '.$tbl_detil->id_sp.' Telah Ditambahkan');
    }    

    public function store4(Request $request)
    {
        tbl_aset::create($request -> all());
        return redirect('/maset');
    }

    public function store5(Request $request)
    {
        kategori::create($request -> all());
        return redirect('/mkategori');
    }

    public function edit($data_id)
    {
        $data_konbis = data_konbis::find($data_id);
        return view('editsp2',['data_konbis' => $data_konbis]);
    }

    public function update(Request $request, $data_id)
    {
        $data_konbis = data_konbis::find($data_id);
        $data_konbis->update($request->all());
        $d = data_konbis::find($data_id);
        return redirect('/dashboard/'.$d->data_id.'/edit')->with('Sukses','DATA BERHASIL DIUBAH');
    }

    public function delete($data_id)
    {
        $data_konbis = data_konbis::find($data_id);
        $data_konbis->delete();
        return redirect('/dashboard')->with('Sukses','DATA DENGAN NO. SP ( '.$data_konbis->no_sp.' ) TELAH DIHAPUS');
    }

    public function delete2($id)
    {
        $tbl_sp = tbl_sp::find($id);
        $tbl_sp->delete();
        return redirect('/')->with('Sukses','DATA DENGAN NO. SP ( '.$tbl_sp->no.' ) TELAH DIHAPUS');
    }

}




            /* fungsi store
            data_konbis::create([
                'data_id' => $request -> data_id,
                'no_urut_sp' => $request -> no_urut_sp,
                'no_sp' => $request -> no_sp,
                'kode_sp' => $request -> kode_sp,
                'tahun_sp' => $request -> tahun_sp,
                'perusahaan' => $request -> perusahaan,
                'judul_sp' => $request -> judul_sp,
                'jenis_sp' => $request -> jenis_sp,
                'objek_sp' => $request -> objek_sp,
                'skema_sp' => $request -> skema_sp,
                'kategori_aset' => $request -> kategori_aset,
                'lokasi_obj_sp' => $request -> lokasi_obj_sp,
                'nilai_formula' => $request -> nilai_formula,
                'nilai_fix' => $request -> nilai_fix,
                'tgl_mulai' => $request -> tgl_mulai,
                'tgl_akhir' => $request -> tgl_akhir,
                'ket_perubahan' => $request -> ket_perubahan,
                'user' => $request -> user,
                'email' => $request -> email,
                'notifikasi' => $request -> notifikasi
            ]); 
            $this->validate($request,[
                'no_urut_sp' => 'required',
                'no_sp' => 'required',
                'kode_sp' => 'required',
                'tahun_sp' => 'required',
                'perusahaan' => 'required',
                'judul_sp' => 'required',
                'jenis_sp' => 'required',
                'objek_sp' => 'required',
                'skema_sp' => 'required',
                'kategori_aset' => 'required',
                'lokasi_obj_sp' => 'required',
                'nilai_formula' => 'required',
                'nilai_fix' => 'required',
                'tgl_mulai' => 'required',
                'tgl_akhir' => 'required',
                'ket_perubahan' => 'required',
                'user' => 'required',
                'email' => 'required',
                'notifikasi' => 'required'
            ]);



            DB::table('data_konbis')->insert([
                'data_id' => $request -> data_id,
                'user_id' => $request -> user_id,
                'no_urut_sp' => $request -> no_urut_sp,
                'no_sp' => $request -> no_sp,
                'kode_sp' => $request -> kode_sp,
                'tahun_sp' => $request -> tahun_sp,
                'perusahaan' => $request -> perusahaan,
                'judul_sp' => $request -> judul_sp,
                'jenis_sp' => $request -> jenis_sp,
                'objek_sp' => $request -> objek_sp,
                'skema_sp' => $request -> skema_sp,
                'kategori_set' => $request -> kategori_aset,
                'lokasi_obj_sp' => $request -> lokasi_obj_sp,
                'nilai_formula' => $request -> nilai_formula,
                'nilai_fix' => $request -> nilai_fix,
                'tgl_mulai' => $request -> tgl_mulai,
                'tgl_akhir' => $request -> tgl_akhir,
                'ket_perubahan' => $request -> ket_perubahan,
                'user' => $request -> user,
                'email' => $request -> email,
                'notifikasi' => $request -> notifikasi
            ]);
            */