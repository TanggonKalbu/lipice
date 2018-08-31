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

    function get_challenge($url) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_PORT => "5984",
          CURLOPT_URL => "$url",
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


    public function index()
    {
        return redirect("/vote");
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

    public function jumlah_vote($id){
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_PORT => "5984",
      CURLOPT_URL => 'http://159.65.139.254:5984/lipice/_design/view/_view/jumlah_vote_profile?key="'.$id.'"',
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($notelp)
    {
       if(session('kontestan') !=null || session('admin') != null) {
         if(session('kontestan')!=$notelp && session('admin') == null ) {
          return redirect('/profile/'.session('kontestan').'/edit');
         }
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
            $data["day"] = json_decode($this->get_challenge('http://159.65.139.254:5984/lipice/_design/view/_view/day'), true);
            if($data["profile"]["rows"]!=null) {
            $challenge = json_decode($this->get_challenge('http://159.65.139.254:5984/lipice/_design/view/_view/challenge?key="'.$notelp.'"'), true);
            $data["video"] = json_decode($this->get_challenge('http://159.65.139.254:5984/lipice/_design/view/_view/challenge_video?key="'.$notelp.'"'), true);
            $counter = 0;
            if($challenge["rows"] != null){
                for($counter =0 ; $counter < count($challenge["rows"]); $counter++) {
                    $url = $challenge["rows"][$counter]["value"]["link"];
                    $data["gambar"][$counter] = json_decode($this->gambar($url), TRUE);
                   
                     if(json_decode($this->jumlah_vote($data["gambar"][$counter]["thumbnail_url"]), TRUE)["rows"]==null) {
                       
                          $data["vote"][$counter] = 0;
                       } else {
                            $data["vote"][$counter] = json_decode($this->jumlah_vote($data["gambar"][$counter]["thumbnail_url"]), TRUE);
                          }
                        }
                      } else {
                        $data["gambar"] = "kosong";
                    }
                       if($data["video"]["rows"]!= null) {
                        for($counter =0 ; $counter <count ($data["video"]["rows"]); $counter++) {
                           $url = $data["video"]["rows"][$counter]["value"]["_id"];
                              if(json_decode($this->jumlah_vote($url), TRUE)["rows"]==null) {
                                $data["vote_video"][$counter] =0;
                             }else {
                              $data["vote_video"][$counter] =json_decode($this->jumlah_vote($url), TRUE)["rows"][0]["value"];
                          }
                         }
                      } else {
                        $data["video"] = "kosong";
                    }
                  }else {
                    return view('blank');
                  }
                }
              }
              else {
                return redirect('/login');
              }
              // print_r(count($data["video"]["rows"]));
              
              
                 return view('profile',compact('data','notelp'));

              }
   
          
     
        
  
  //  
  

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
        $tempatlahir =$request->get("tempatlahir");
        $umur =$request->get("umur");
        $email =$request->get("email");
        $tgllahir =$request->get("tgllahir");
        $alasan =$request->get("alasan");
        $ig = $request->get("linkig");
        $fb= $request->get("linkfb");
        $kota = $request->get("kota");

        $youtube = $request->get("linkyoutube");
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_PORT => "5984",
          CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/'.$id.'?rev='.$rev.'',
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
