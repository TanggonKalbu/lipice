<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

 
Route::get('/', function () {
  return view('main');
});

Route::resource('kontestans','kontestan_controller');
Route::resource('profile','profile_controller');
Route::resource('about','about_controller');
Route::resource('admin','admin_controller');
Route::resource('cha_day1','cha_day1_controller');
Route::resource('cha_video','cha_video_controller');
Route::resource('vote','vote_controller');
Route::get('/form', function () {
  return view('form');
});

Route::get('/test', function () {
  return view('test');
});

Route::get('/heart', function () {
  return view('heart');
});


Route::get('/blank', function () {
  return view('blank');
});

Route::get('/login', function () {
  return view('login');
});





// Route::post('/add_kontestan', function () {
//     $data = json_decode(file_get_contents("php://input"), true);
//     $namalengkap = $data["namalengkap"];
//     $tempatlahir = $data['tempatlahir'];
//     $tgllahir = $data['tgllahir'];
//     $bulanlahir = $data['bulanlahir'];
//     $tahunlahir = $data['tahunlahir'];
//     $notelp = $data['notelp'];
//     $linkig = $data['linkig'];
//     $linkfb = $data['linkfb'];
//     $alasan = $data['alasan'];
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//     CURLOPT_PORT => "5984",
//     CURLOPT_URL => "http://127.0.0.1:5984/lipice/",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => "",
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 30,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => "POST",
//     CURLOPT_POSTFIELDS => "{\n\t\"type\" : \"kontestan\",\n\t\"namalengkap\" : \"$namalengkap\",\n\t\"tempatlahir\" : \"$tempatlahir\",\n\t\"tgllahir\" : \"$tgllahir\",\n\t\"bulanlahir\" : \"$bulanlahir\",\n\t\"tahunlahir\" : \"$tahunlahir\",\n\t\"notelp\"\t:\t\"$tahunlahir\",\n\t\"linkig\"\t: \"$linkig\",\n\t\"linkfb\"\t: \"$linkfb\",\n\t\"alasan\" \t: \"$alasan\"\n}",
//     CURLOPT_HTTPHEADER => array(
//     "content-type: application/json"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
    
// });

