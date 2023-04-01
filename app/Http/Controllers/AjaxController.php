<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
class AjaxController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function vmInfo(Request $request,$id)
    {

        $node = DB::table('vserver')->where('uid', $id)->value('node');
        $vpsid = DB::table('vserver')->where('uid', $id)->value('vpsid');
        $curl = curl_init();
        curl_setopt_array($curl, array
        (
            CURLOPT_URL => 'https://prox.dnic.network/vserver/' . $node . '/' . $vpsid . '/getInfo',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjg4NzkwOTM1ODcsInVzZXJfaWQiOjI1fQ.syHAnlfFxuyYmxgFjTKwTPcm3mH3wx-lJ09weowNHcs'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        header('Content-Type: application/json');

        return $response;
    }
    public function vmStats(Request $request,$id){
        $node = DB::table('vserver')->where('uid', $id)->value('node');
        $vpsid = DB::table('vserver')->where('uid', $id)->value('vpsid');


        $curl = curl_init();
        curl_setopt_array($curl, array
        (
            CURLOPT_URL => 'https://prox.dnic.network/statistik/' . $node.'/' . $vpsid,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjg4NzkwOTM1ODcsInVzZXJfaWQiOjI1fQ.syHAnlfFxuyYmxgFjTKwTPcm3mH3wx-lJ09weowNHcs'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        header('Content-Type: application/json');
        return $response;

    }
    public function getStatus(Request $request,$id){

        $curl = curl_init();
        curl_setopt_array($curl, array
        (
            CURLOPT_URL => 'https://api.dnic.it/monitoring/check/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJsdW1lbi1qd3QiLCJzdWIiOjEsImlhdCI6MTY3ODM5ODE1NSwiZXhwIjoxNjc4NDAxNzU1fQ.dLBW2Y6hmCt1JLcqa3VHtQwq8gw-MkYsaJunMJG6PXo'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        header('Content-Type: application/json');
        return $response;

    }
    public function addMonitor(Request $request, $id=null){

        if ($request->has(['description', 'check', 'host'])) {


            $response = Http::withHeaders([
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJsdW1lbi1qd3QiLCJzdWIiOjEsImlhdCI6MTY3ODM5ODE1NSwiZXhwIjoxNjc4NDAxNzU1fQ.dLBW2Y6hmCt1JLcqa3VHtQwq8gw-MkYsaJunMJG6PXo'

            ])->post('https://api.dnic.it/monitoring/addcheck', [
                'name' => $request->input('description'),
                'typ'  => $request->input('check'),
                'host' => $request->input('host'),
                'ip'=>    $request->input('ip')

            ]);

            $resp= $response->getBody();
            $res= json_decode($resp);

            if($res->status=='Success'){
            DB::table('monitoring')->insert([
                'user' => Auth::user()->email,
                'name' => $request->input('description'),
                'service'=> $request->input('check'),
                'port'  =>$request->input('port'),
                'ip'=> $request->input('ip'),
                'host'=>$request->input('host'),
              	'sid'=> $res->sid

            ]);
                echo 'success';
        }
        else
        {
            return 'failed';
        }
        }





    }
}
