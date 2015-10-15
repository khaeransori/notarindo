<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ListNotaris;
use Response;
use Input;

class ListNotarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notaris = ListNotaris::all();
        return Response::json($notaris, 200);
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
    public function store()
    {
        //
        $notaris = new ListNotaris;
        $notaris->nama_notaris = Input::get('nama_notaris');
        $notaris->status = Input::get('status');
        $notaris->registered = Input::get('registered');
        $notaris->expired = Input::get('expired');
        $success = $notaris->save();

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
        $notaris = ListNotaris::find($id);
        if (is_null($notaris)) {
            return Response::json("Not Found", 404);
        }

        return Response::json($notaris, 200);
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
        $notaris = ListNotaris::find($id);

        if (!is_null(Input::get('nama_notaris'))) {
            $notaris->nama_notaris=Input::get('nama_notaris');
        }

        if (!is_null(Input::get('status'))) {
            $notaris->status=Input::get('status');
        }

        if (!is_null(Input::get('registered'))) {
            $notaris->registered=Input::get('registered');
        }

        if (!is_null(Input::get('expired'))) {
            $notaris->expired=Input::get('expired');
        }

        $success = $notaris->save();

        if (!$success) {
            return Response::json("error update",500);
        }

        return Response::json("success update", 201);
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
        $notaris = ListNotaris::find($id);

        if (is_null($notaris)) {
            return Response::json("Not Found", 404);
        }

        $success = $notaris->delete();

        if (!$success) {
            return Response::json("Error delete", 500);
        }

        return Response::json("success delete", 200);
    }
}
