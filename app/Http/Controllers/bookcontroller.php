<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookmodel;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gettitle = request('btitle');
        $getauthor = request('bauthor');
        $getdescription = request('bdesc');
        $getdistributor = request('bdistri');
        $getprice = request('bprice');
        echo $gettitle;
        echo "<br>";
        echo $getauthor;
        echo "<br>";
        echo $getdescription;
        echo "<br>";
        echo $getdistributor;
        echo "<br>";
        echo $getprice;

        $book = new bookmodel();

        $book->btitle=$gettitle;
        $book->bauthor=$getauthor;
        $book->bdesc=$getdescription;
        $book->bdistri=$getdistributor;
        $book->bprice=$getprice;

        $book->save();

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
    public function update(Request $request, $id)
    {
        //
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
    }
}
