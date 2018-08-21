<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontestan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
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
       $tgl = $request->get('tgl')."-".$request->get('bln'.$request->get('tgl'));     
       $namalengkap = $request->get('name');
       $tempatlahir = $request->get('tempatlahir');
       $tgllahir = $tgl;
       $bulanlahir = $tgl;
       $tahunlahir = $tgl;
       $notelp = $request->get('notelp');
       $linkig = $request->get('linkig');
       $linkfb = $request->get('linkfb');
       $alasan = $request->get('alasan');
       
       $curl = curl_init();
       curl_setopt_array($curl, array(
         CURLOPT_PORT => "5984",
         CURLOPT_URL => "http://159.65.139.254:5984/lipice",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => "{\n  \"type\": \"kontestan\",\n  \"namalengkap\": \"bayuhari\",\n  \"tempatlahir\": \"malang\",\n  \"email\": \"bayu@gmail.com\",\n  \"tgllahir\": \"7\",\n  \"bulanlahir\": \"desember\",\n  \"tahunlahir\": \"1996\",\n  \"notelp\": \"081945314191\",\n  \"linkig\": \"blablabla\",\n  \"linkfb\": \"lalala\",\n  \"alasan\": \"passion\"\n}",
         CURLOPT_HTTPHEADER => array(
           "content-type: application/json"
         ),
       ));
       
       $response = curl_exec($curl);
       $err = curl_error($curl);
       
       curl_close($curl);
       
       if ($err) {
         echo "cURL Error #:" . $err;
       } else {
         echo $response;
       }

      
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
