<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class votesession_controller extends Controller
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
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $voter = $request->get('notelp');
        $day = 1;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_PORT => "5984",
        CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/vote?key=["'.$day.'","'.$voter.'"]',
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
            if(json_decode($response,TRUE)["rows"]==null){
                $request->session()->put('vote',$request->get('notelp'));
                echo $request->session()->get('vote');
                return redirect('/vote/day1/edit');
            }
            else {
                echo "sudah vote";
            }
        }   
      

    }

    public function delete(Request $request){
        $request->session()->forget('vote');
        return redirect('/vote/day1/edit');
     }


    public function delete_kontestan(Request $request){
        $request->session()->forget('kontestan');
        return redirect('/vote/day1/edit');
     }
     public function delete_admin(Request $request){
        $request->session()->forget('admin');
        return redirect('/adminlogin');
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

    public function sess_kontestan(Request $request, $notelp)
    {
        $request->session()->put('kontestan',$notelp);
        return redirect('/profile/'.$notelp.'/edit');
    }

    public function sess_admin(Request $request, $username)
    {
        $request->session()->put('admin',$username);
        $request->session()->get("admin");
        return redirect('/admin');
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
