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
        $image = base64_encode(file_get_contents("/private/var/folders/2q/hypc_2xs33xdcn3ngtgx67th0000gn/T/php29RGGM"));
       $tgl = $request->get('tgl')." ".$request->get('bln')." ".$request->get('tahun'); 
       if(date("n")>=$request->get('bln')){
       $umur = date("Y") - $request->get('tahun');
       }else {
        $umur = date("Y") - $request->get('tahun') - 1;
       }
       $namalengkap = $request->get('nama');
       $tempatlahir = $request->get('tempatlahir');
       $email = $request->get('email');
       $tgllahir = $tgl;
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
         CURLOPT_POSTFIELDS => "{\n  \"type\": \"kontestan\",\n  \"namalengkap\": \"$namalengkap\",\n  
             \"tempatlahir\": \"$tempatlahir\",\n 
             \"tgllahir\": \"$tgllahir\",\n 
             \"email\": \"$email\",\n 
              \"umur\": \"$umur\", \n  \"notelp\": \"$notelp\", \n  \"linkig\": \"$linkig\",\n  
             \"linkfb\": \"$linkfb\",\n  \"kota\": \" \",\n  \"image\": \"\",  \n  \"alasan\": \"$alasan\",
             \n\t\"_attachments\":\n 
                { \n  \"profile.png\":\n  {
                \n  \"content_type\": \"image/png\",
                \n    \"data\": \"$image \"
                \n  }\n}\n\t\n}}",
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
        return redirect('kontestans')->with('success', 'Information has been added');
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
