<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dompet;
use App\Http\Requests\StoredompetRequest;
use App\Http\Requests\UpdatedompetRequest;

class DompetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil semua data properti
        $datas = DB::table('dompet')->orderBy('id','asc')->get();         
        $countdatas = DB::table('dompet')->count();         
        $datas2 = DB::table('dompet_status')->get();         
        $countdatas2 = DB::table('dompet_status')->groupby('Data_default')->count();         
        $no = 1;         
        return view('dompet',['datas' => $datas,'countdatas' => $countdatas,'countdatas2' => $countdatas2,'datas2' => $datas2,'no' => $no]);
    }
    public function detail($id)
    {
        // mengambil semua data properti
        $datas = DB::table('dompet')->where('ID',$id)->get();
        $datas2 = DB::table('dompet_status')->where('ID',$id)->get();
        $no = 1;
        return view('detail',['datas' => $datas,'datas2' => $datas2,'no' => $no]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredompetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredompetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function show(dompet $dompet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function edit(dompet $dompet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedompetRequest  $request
     * @param  \App\Models\dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedompetRequest $request, dompet $dompet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function destroy(dompet $dompet)
    {
        //
    }
}
