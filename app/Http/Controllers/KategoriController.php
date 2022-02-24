<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kategori;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;

class KategoriController extends Controller
{
    public function index()
    {
        // mengambil semua data properti
        $datas = DB::table('kategori')->orderBy('id','asc')->get();         
        $countdatas = DB::table('kategori')->count();         
        $datas2 = DB::table('kategori_status')->get();         
        $countdatas2 = DB::table('kategori_status')->groupby('Data_default')->count();         
        $no = 1;         
        return view('kategori',['datas' => $datas,'countdatas' => $countdatas,'countdatas2' => $countdatas2,'datas2' => $datas2,'no' => $no]);
    }
    public function detail($id)
    {
        // mengambil semua data properti
        $datas = DB::table('kategori')->where('ID',$id)->get();
        $datas2 = DB::table('kategori_status')->where('ID',$id)->get();
        $no = 1;
        return view('detail',['datas' => $datas,'datas2' => $datas2,'no' => $no]);
    }
    public function insert(Request $request){
        $data = DB::table('kategori')->count();
		// insert data ke table kategori
        DB::table('kategori')->insert([
            'Nama' => $request->nama,
            'Deskripsi' => $request->deskripsi,
            'Status_ID' => $data+1
        ]);
        // insert data ke table kategori_status
        DB::table('kategori_status')->insert([
            'ID' => $data+1,
            'Nama' => $request->nama,
            'Data_default' => $request->status
        ]);
        // mengalihkan halaman ke halaman users
        return redirect('kategori');
    }
    public function createkategori()
    {
        //
        return view('kelolakategori');
    }
    public function updatekategori($id)
    {
        $datas = DB::table('kategori')->where('ID',$id)->get();
        $datas2 = DB::table('kategori_status')->get();
        return view('ubahkategori',['datas' => $datas,'datas2' => $datas2]);
    }
    public function ubahkategori(Request $request)
    {
        DB::table('kategori')->where('ID',$request->id)->update([
            'Nama' => $request->nama,
            'Deskripsi' => $request->deskripsi,
            'Status_ID' => $request->id
        ]);
        // insert data ke table kategori_status
        DB::table('kategori_status')->where('ID',$request->id)->update([
            'ID' => $request->id,
            'Nama' => $request->nama,
            'Data_default' => $request->status
        ]);
        // mengalihkan halaman ke halaman users
        return redirect('kategori');
    }
}
