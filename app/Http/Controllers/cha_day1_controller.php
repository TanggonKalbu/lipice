<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cha_day1_controller extends Controller
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

    public function add_cha(Request $request, $day) {
        $notelp = $request->get('notelp');
        $challenge = json_decode($this->get_challenge('http://159.65.139.254:5984/lipice/_design/view/_view/challenge?key="'.$notelp.'"'), true);
       if($challenge["rows"]==null){
        $link = $request->get('upload');
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
          CURLOPT_POSTFIELDS => "{\n  \"type\": \"challenge\",\n  \"day\" :\"$day\",\n  \"notelp\": \"$notelp\",\n  \"link\" : \"$link\"\n}",
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
    else {
        return redirect('/profile/'.$notelp.'/edit/')->with('error', 'Kamu sudah post untuk hari ini');;
      
        
    }

       
    }

    public function add_cha_youtube(Request $request, $day) {
        $notelp = $request->get('notelp');
        $challenge = json_decode($this->get_challenge('http://159.65.139.254:5984/lipice/_design/view/_view/challenge_video?key="'.$notelp.'"'), true);
       if($challenge["rows"]==null){
        $notelp = $request->get('notelp');
        $link = $request->get('upload');
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
          CURLOPT_POSTFIELDS => "{\n  \"type\": \"youtube challenge\",\n  \"day\" :\"$day\",\n  \"notelp\": \"$notelp\",\n  \"link\" : \"$link\"\n}",
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
    else {
        return redirect('/profile/'.$notelp.'/edit/')->with('error', 'Kamu sudah post untuk hari ini');;
      
        
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
