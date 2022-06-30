<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PillController extends Controller
{
    public function index(){
        return view('pages.pill');
    }
    public function getName(Request $request){
        $query = $request->get('query');

        $client = new Client();
        $response = $client->request('GET', 'http://202.21.101.242/Asia/hs/FindProd/FindProd?Name='. $query);
        $content = $response->getBody()->getContents();
        $content = (string)$content;
        if (0 === strpos(bin2hex($content), 'efbbbf')) {
            $content = substr($content, 3);
         }
        $val = json_decode($content, true);
        return response()->json($val['Result']);
    }
    public function postPill(Request $request){
        Log::info($request);
        $client = new Client();
        try {
            $response =$client->request('GET','http://202.21.101.242/Asia/hs/ProductQuality/ProductQuality', [
                'query' => [
                    'person' => $request->person,
                    'birthdate' => $request->birthdate,
                    'age' => $request->age,
                    'sex' => $request->sex,
                    'height' => $request->height,
                    'previousdrugs' => $request->previousdrugs,
                    'name_int' => $request->name_int,
                    'whenbuy' => $request->whenbuy,
                    'wherebuy' => $request->wherebuy,
                    'manufacturename' => $request->manufacturename,
                    'country' => $request->country,
                    'dosage' => $request->dosage,
                    'expiredate' => $request->expiredate,
                    'serialno' => $request->serialno,
                    'formadrugs' => $request->formadrugs,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'diagnosis' => $request->diagnosis,
                    'usageinstructions' => $request->usageinstructions,
                    'onetimedosage' => $request->onetimedosage,
                    'daydosege' => $request->daydosege,
                    'startsideeffectdate' => $request->startsideeffectdate,
                    'formasideeffect' => $request->formasideeffect,
                    'writetext' => $request->writetext,

                ]

            ]);

            if ($response->getStatusCode() == 200) {
                return redirect()->back()->with('message', 'Амжилттай илгээгдлээ');
              }
            else{
                return redirect()->back()->with('error_msg', 'Амжилтгүй');
            }

        } catch (ClientException $e) {
            return redirect()->back()->with('error_msg', 'Амжилтгүй');
        } catch (ServerException $e) {
            return redirect()->back()->with('error_msg', 'Амжилтгүй');
        }
    }
}
