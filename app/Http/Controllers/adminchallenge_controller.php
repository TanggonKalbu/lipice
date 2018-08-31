<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminchallenge_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session("admin")!=null) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_PORT => "5984",
        CURLOPT_URL => "http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/day",
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
        ($data["challenge"]=json_decode($response,TRUE)["rows"]);
        }
         return view('adminchallenge',compact('data'));
        }else {
            return view("/loginadmin");
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

    public function day($day) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_PORT => "5984",
        CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/day?key="'.$day.'"',
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
          return json_decode($response,TRUE)["rows"][0]["value"];
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function edit_post($day)
    {
        $id = $this->day($day)["_id"];
        $rev = $this->day($day)["_rev"];
        $konten = $this->day($day)["konten"];
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
        CURLOPT_POSTFIELDS => "{\n  \"_id\": \"$id\",\n  \"_rev\": \"$rev\",\n  \"type\": \"day\",\n  \"day\": \"$day\",\n  \"konten\": \"$konten\",\n  \"stat_post\": \"1\",\n  \"stat_vote\": \"0\"\n}",
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
            return redirect('adminchallenge');
        }
        }


    public function edit_vote($day)
    {
        $id = $this->day($day)["_id"];
        $rev = $this->day($day)["_rev"];
        $konten = $this->day($day)["konten"];
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
        CURLOPT_POSTFIELDS => "{\n  \"_id\": \"$id\",\n  \"_rev\": \"$rev\",\n  \"type\": \"day\",\n  \"day\": \"$day\",\n  \"konten\": \"$konten\",\n  \"stat_post\": \"0\",\n  \"stat_vote\": \"1\"\n}",
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
            return redirect('adminchallenge');
        }
    }    

    public function reset($day)
    {
        $id = $this->day($day)["_id"];
        $rev = $this->day($day)["_rev"];
        $konten = $this->day($day)["konten"];
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
        CURLOPT_POSTFIELDS => "{\n  \"_id\": \"$id\",\n  \"_rev\": \"$rev\",\n  \"type\": \"day\",\n  \"day\": \"$day\",\n  \"konten\": \"$konten\",\n  \"stat_post\": \"0\",\n  \"stat_vote\": \"0\"\n}",
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
            return redirect('adminchallenge');
        }
    }  


    public function edit($id)
    {
        
    
        //return view('adminedit',compact('data','id'));
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
