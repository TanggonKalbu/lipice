<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about_controller extends Controller
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
    public function update(Request $request, $notelp)
    {
        $image = base64_encode(file_get_contents($request->get('img')));
        $split = explode( '.', $request->get("img") );
        $ext = $split[4];
        $about = $request->get('about');
        $rev = $request->get('rev');
        $id = $request->get('id');
        $nama =$request->get("nama");
        $ig = $request->get("linkig");
        $fb= $request->get("linkfb");
        $kota = $request->get("kota");
        $tempatlahir =$request->get("tempatlahir");
        $umur =$request->get("umur");
        $email =$request->get("email");
        $tgllahir =$request->get("tgllahir");
        $alasan =$request->get("alasan");
        $youtube = $request->get("linkyoutube");
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_PORT => "5984",
          CURLOPT_URL => 'http://159.65.139.254:5984/lipice/'.$id.'?rev='.$rev.'',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "PUT",
          CURLOPT_POSTFIELDS => "{\n  \"_id\": \"$id\",\n  \"_rev\": \"$rev\",
            \n  \"type\": \"kontestan\",\n  \"namalengkap\": \"$nama\",
            \n  \"tempatlahir\": \"$tempatlahir\",
            \n  \"email\": \"$email\",
            \n  \"tgllahir\": \"$tgllahir\",
            \n  \"umur\": \"$umur\",
            \n  \"notelp\": \"$notelp\",
            \n  \"linkig\": \"$ig\",
            \n  \"linkfb\": \"$fb\",
            \n  \"linkyoutube\": \"$youtube\",
            \n  \"kota\": \"$kota\",
            \n  \"about\": \"$about\",
            \n  \"image\": \"profile.png\",
             \n  \"alasan\": \"$alasan\",
              \n\t\"_attachments\":\n 
                { \n  \"profile.png\":\n  {
                \n  \"content_type\": \"image/$ext\",
                \n    \"data\": \"$image \"
                \n  }\n}\n\t\n}",
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
            
            return redirect('/profile/'.$notelp.'/edit/');

        }
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
