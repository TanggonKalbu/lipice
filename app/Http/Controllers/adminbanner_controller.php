<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminbanner_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session("admin")!=null) {
        return view('banner');
    }else {
        return view("/loginadmin");
    }
    }

    public function getbanner() {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_PORT => "5984",
          CURLOPT_URL => "http://admin:lipice@159.65.139.254:5984/lipice/869999ee44c2ef3202a6fa489516cc71",
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
          return $response;
        }

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
        $file = base64_encode(file_get_contents($request->fileToUpload));
        $ext = $request->fileToUpload->extension();
        echo "<br>";
        echo $ext;
        echo "<br>";
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
            $type = "image/".$ext;
        }
        else {
            $type = "video/".$ext;
        }
        $banner =(json_decode($this->getbanner(), TRUE));
        $rev= $banner["_rev"];
        $konten = "banner.".$ext;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_PORT => "5984",
        CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/869999ee44c2ef3202a6fa489516cc71?rev='.$rev.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => "{\n  \"_id\": \"869999ee44c2ef3202a6fa489516cc71\",\n 
             \"_rev\": \"$rev\",\n  
             \"ext\": \"$ext\",\n  
             \"type\": \"banner\",\n  \"konten\": \"$konten\",\n 
             \"_attachments\": {\n \"$konten\": {\n 
                \"content_type\": \"$type\",\n  
                \"data\" : \"$file\"\n }\n  }\n}",
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
        return redirect("adminbanner/");
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
