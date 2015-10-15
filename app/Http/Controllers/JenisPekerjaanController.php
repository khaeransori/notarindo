<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\JenisPekerjaan;
use Response;
use Input;

class JenisPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenis = JenisPekerjaan::all();
        return Response::json($jenis, 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jenis = new JenisPekerjaan;
        $jenis->nama_pekerjaan = Input::get('nama_pekerjaan');
        $jenis->jenis_akta = Input::get('jenis_akta');
        $jenis->jenis_aktor = Input::get('jenis_aktor');
        $jenis->hapus = Input::get('hapus');
        $jenis->id_notaris = Input::get('id_notaris');

        $success = $jenis->save();

        if (!$success) {
            return Response::json("error saving", 500);
        }

        return Response::json("success", 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jenis = JenisPekerjaan::find($id);
        if (is_null($jenis)) {
            return Response::json("Not Found", 404);
        }

        return Response::json($jenis, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $jenis = JenisPekerjaan::find($id);

        if (!is_null(Input::get('nama_pekerjaan'))) {
            $jenis->nama_pekerjaan = Input::get('nama_pekerjaan');
        }

        if (!is_null(Input::get('jenis_akta'))) {
            $jenis->jenis_akta = Input::get('jenis_akta');
        }

        if (!is_null(Input::get('jenis_aktor'))) {
            $jenis->jenis_aktor = Input::get('jenis_aktor');
        }       

        if (!is_null(Input::get('hapus'))) {
            $jenis->hapus = Input::get('hapus');
        } 

        if (!is_null(Input::get('id_notaris'))) {
            $jenis->id_notaris = Input::get('id_notaris');
        }

        $success = $jenis->save();

        if (!$success) {
            return Response::json("Error Update", 500);
        }

        return Response::json("Success Update", 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jenis = JenisPekerjaan::find($id);

        if (is_null($jenis)) {
            return Response::json("Not Found", 404);
        }

        $success = $jenis->delete();

        if (!$success) {
            return Response::json("Error Delete", 500);
        }

        return Response::json("Success Delete", 200);
    }
}
