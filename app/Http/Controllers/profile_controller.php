<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function gambar() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.instagram.com/oembed/?url=https://www.instagram.com/p/Bk-SKN1HJW0/?taken-by=bayuharii",
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
            $data["gambar"] = json_decode($this->gambar(), TRUE);
            // $json = json_encode($data["profile"]["rows"][0]["value"]["_attachments"]);
            
            //  print_r ($json);
               // print_r($data["gambar"]["html"]);
           // print_r($data["profile"]["rows"][0]["value"]["image"]);
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
        echo 
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
          CURLOPT_POSTFIELDS => "{\n  \"_id\": \"$id\",\n  \"_rev\": \"$rev\",\n  \"type\": \"kontestan\",\n  \"namalengkap\": \"bayu hari saputro\",\n  \"tempatlahir\": \"Malang\",\n  \"email\": \"aurakanzaaa@gmail.com\",\n  \"tgllahir\": \"11  1998\",\n  \"umur\": \"20\",\n  \"notelp\": \"81945314191\",\n  \"linkig\": \"$ig\",\n  \"linkfb\": \"$fb\",\n  \"linkyoutube\": \"$youtube\",\n  \"kota\": \"$kota\",\n  \"image\": \"profile.png\", \n  \"alasan\": \"kkk\", \n\t\"_attachments\":\n{\n  \"profile.png\":\n  {\n    \"content_type\": \"image/png\",\n    \"data\": \"$image \"\n  }\n}\n\t\n}",
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
