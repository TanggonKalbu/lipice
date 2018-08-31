<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminapproval_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session("admin")!=null) {
        return view('approval');
    }else {
        return view("/loginadmin");
    }
    }

    function gambar($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.instagram.com/oembed/?url=' . $url . '',
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

    public function jumlah_vote($kontestan, $day)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5984",
            CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/jumlah_vote?key=["' . $kontestan . '","' . $day . '"]',
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

    public function challenge($day)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5984",
            CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/challenge_all?key="' . $day . '"',
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

    public function day($day)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5984",
            CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/day?key="' . $day . '"',
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

    public function dayall()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5984",
            CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/day',
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


    public function profile($telp)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5984",
            CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/_design/view/_view/profile?key="' . $telp . '"',
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
    public function edit($day)
    {
        if(session("admin")!=null) {
        $data[1] = json_decode($this->challenge($day), true)["rows"];
        $data["day"] = json_decode($this->day($day), true)["rows"][0]["value"];
        $data["dayall"] = json_decode($this->dayall(), true)["rows"];
        if ($data["day"]["konten"] == "youtube") {
            if ($data[1] == null) {
                $data["cha_1"] = "kosong";
            } else {
                for ($counter = 0; $counter < count($data[1]); $counter++) {
                    $url = $data[1][$counter]["value"];
                    $telp = $data[1][$counter]["value"]["notelp"];
                    $data["cha_1"][$counter] = $url;
                    $data["profile_cha_1"][$counter] = json_decode($this->profile($telp), true)["rows"][0]["value"];
                    if (json_decode($this->jumlah_vote($telp, $day), true)["rows"] == null) {
                        $data["jumlahvote"][$counter] = 0;
                    } else {
                        $data["jumlahvote"][$counter] = json_decode($this->jumlah_vote($telp, $day), true)["rows"][0]["value"];
                    }
                }
            }
        } elseif ($data["day"]["konten"] == "gambar") {
            if ($data[1] == null) {
                $data["cha_1"] = "kosong";
            } else {
                for ($counter = 0; $counter < count($data[1]); $counter++) {
                    $url = $data[1][$counter]["value"]["link"];
                    $telp = $data[1][$counter]["value"]["notelp"];
                    $data["cha_1"][$counter] = json_decode($this->gambar($url), true);
                    $data["profile_cha_1"][$counter] = json_decode($this->profile($telp), true)["rows"][0]["value"];
                    if (json_decode($this->jumlah_vote($telp, $day), true)["rows"] == null) {
                        $data["jumlahvote"][$counter] = 0;
                    } else {
                        $data["jumlahvote"][$counter] = json_decode($this->jumlah_vote($telp, $day), true)["rows"][0]["value"];
                    }
                }
            }
        }
            //  echo $day;
            // print_r($telp);
            // echo "<br>";
            //  print_r($data["cha_1"]);
            //  print_r($url);

            // echo "<br>";
            // print_r($data["dayall"]);
        return view('approval', compact('data'));
    }else {
        return redirect("/adminlogin");
    }
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
    public function delete($id)
    {
        $rev = (json_decode($this->post_kons($id), true)["rows"][0]["value"]["_rev"]);
        $day = (json_decode($this->post_kons($id), true)["rows"][0]["value"]["day"]);
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_PORT => "5984",
        CURLOPT_URL => 'http://admin:lipice@159.65.139.254:5984/lipice/'.$id.'?rev='.$rev.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
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
        redirect("adminapproval/".$day."edit");
        }
        }

public function post_kons($id) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "5984",
    CURLOPT_URL => 'http://159.65.139.254:5984/lipice/_design/view/_view/challenge_admin?key="'.$id.'"',
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
}