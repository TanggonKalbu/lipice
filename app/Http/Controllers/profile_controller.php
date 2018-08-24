<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class profile_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function gambar($url) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.instagram.com/oembed/?url='.$url.'',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_COOKIE => "rur=ATN; mid=W31AYQAEAAEhFGLnHLjt971io9mV; urlgen=%22%7B%7D%3A1fsQkL%3AimDV8ZWT6XfxU8rFVkCn8LT-Aho%22; mcd=3; csrftoken=mZFYWBYL39DkXbk8KKD7r4EzPZ0R1wk2",
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
          return $response;
        }

    }


    public function index()
    {
        return redirect("/votetest");
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($notelp)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_PORT => "5984",
        CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/profile?key="'.$notelp.'"',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
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
            $data["profile"]= json_decode($response,TRUE);
            $data["gambar"] = json_decode($this->gambar("https://www.instagram.com/p/Bk-SKN1HJW0/?taken-by=bayuharii"), TRUE);
            return view('profile',compact('data','notelp'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$notelp)
    {
        if($request->fileToUpload) {
        $image = base64_encode(file_get_contents($request->fileToUpload));
        $ext = $request->fileToUpload->extension();
        }
        else {
        $image = base64_encode(file_get_contents($request->get('img')));
        $split = explode( '.', $request->get("img") );
        $ext = $split[4];
        }
        $about = $request->get('about');
        $rev = $request->get('rev');
        $id = $request->get('id');
        $nama =$request->get("nama");
        $ig = $request->get("linkig");
        $fb= $request->get("linkfb");
        $kota = $request->get("kota");
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
            \n  \"tempatlahir\": \"Malang\",
            \n  \"email\": \"aurakanzaaa@gmail.com\",
            \n  \"tgllahir\": \"11  1998\",
            \n  \"umur\": \"20\",
            \n  \"notelp\": \"81945314191\",
            \n  \"linkig\": \"$ig\",
            \n  \"linkfb\": \"$fb\",
            \n  \"linkyoutube\": \"$youtube\",
            \n  \"kota\": \"$kota\",
            \n  \"about\": \"$about\",
            \n  \"image\": \"profile.png\",
             \n  \"alasan\": \"kkk\",
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
