<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class testingApi extends Controller
{
  //Key from PagSeguro API
   protected $KeyApi = "#";

   //Credential to create app from PagSeguro API
   protected $appID = "#";
   protected $AppKey = "#";  

   //Selling Testing from PagSeguro API
  protected $emailSelling = "#";
  protected $passwordSelling = "#";
  protected $publicKeySelling = "#";
   
    public function createAplication(){
      $response = http::withHeaders([
        'Accept' => 'application/json',
        'Authorization' => $this->KeyApi,
        'Content-Type' => 'application/json',
      ])->send("POST",'https://sandbox.api.pagseguro.com/oauth2/application',[ 
                    'json' => [
                     'name' => 'Jose da silva',
                     'description' => 'Service LotoMania',
                    ],
        ])->json();

          return $response;
    }

    public function managerChange($case){
     switch($case){
      case 1:
       return $this->getAllByReferenceChange("ex-00001");
      break;

      case 2:
       return $this->getOneChange("#");
      break;
     }
    }
    
  
    public function getAllByReferenceChange($reference_id){
      $response = http::withHeaders([
                   'Authorization' => $this->KeyApi,
                 ])->send('GET','https://sandbox.api.pagseguro.com/charges?reference_id={reference_id}', [
                  'query' => [ 'reference_id' => $reference_id ]
                 ]);

      return $response->json();
    }

    public function getOneChange($change_id){
      
      $response = http::withHeaders([
        'Authorization' => $this->KeyApi
      ])->send('GET','https://sandbox.api.pagseguro.com/charges/'.$change_id);
        
       return $response->json();
    }

    public function captureCharge(){
      $response = http::withHeaders([
        'Accept' => 'application/json',
        'Authorization' => $this->KeyApi,
        'Content-Type' => 'application/json',
        'x-api-version' => '4.0',
      ])->send('POST','https://sandbox.api.pagseguro.com/charges/CHAR_19E2302D-6BCF-49D2-807F-AA5CA776A2D7/capture',[
         'json' => [
           'amount' =>[
             'value' => '60'
           ]
         ]
      ]);
     
      dd($response);
    }

    public function getPublicKey(){

      $response = http::withHeaders([
        'Accept' => 'application/json',
        'Authorization' => $this->KeyApi,
        'Content-Type' => 'application/json',
      ])->get('https://sandbox.api.pagseguro.com/public-keys/card');
     
      return $response->json();
    }

    public function home(){        
     return view('welcome');
    }

}
