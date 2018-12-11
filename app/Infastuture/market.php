<?php
namespace App\Infastuture;
require '../vendor/autoload.php';
use \League\Flysystem;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\EachPromise;
use Psr\Http\Message\ResponseInterface;

class market{
    private $baseUrl;
    private $apiKey;
    private $client;
    public  $exceptionMessage;
    public  $returnMessage;
    //https://www.coinlore.com/cryptocurrency-data-api
//API Key: 9DC32451-2F38-4E04-B2E7-6AF440FDD355

    function __construct(){
      $this->baseUrl="https://rest.coinapi.io/v1/";
      //4460599D-D29C-4AAA-BAB3-4DDF265D7A39
        $this->apiKey = "4460599D-D29C-4AAA-BAB3-4DDF265D7A39";
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
            'headers'=>["X-CoinAPI-Key"=>$this->apiKey],
            'http_errors' => false
            // You can set any number of default request options.
        ]);
    }
    public function GetAllAssets()
    {
        try {
            //code...
            $response = $this->client->request('GET',"assets" );
            //$response = $client->send($request, ['timeout'=>2]);
            if($response->getStatusCode()==200){

                $content = $response->getBody()->getContents();
                return $content;
            }
            return null;
        }
        catch (Exception $ex) {
            $exceptionMessage = $ex->getMessage();
            return null;
        }

    }


    public function GetAllCryptoAssetsRate($assets){

        if(is_string($assets)){
            $assets = \json_decode($assets);
        }
        $crptoAssets = array();
        $requests = function ()use($assets) {
            foreach($assets as $asset){
             yield new Request('GET', "exchangerate/".$asset->asset_id."/USD");
            }
        };
        $pool = new Pool($this->client, $requests(),
        [
            'concurrency' => 5,
            'fulfilled' => function ($response, $index) {
                // this is delivered each successful response
              //  $assetRate = \json_decode($response->getBody()->getContents());
              $assetRate = $response->getBody()->getContents();
                if($assetRate != null){
                    if(array_key_exists("asset_id_base",$assetRate)){
                   $currentAsset=
                   [
                       "asset_id"=>$asset->asset_id,
                       "name"=>$asset->name,
                       "asset_id_base"=>$assetRate->asset_id_base,
                       "rate"=>$assetRate->rate,
                       "time"=>$assetRate->time
                    ];
                   array_push($crptoAssets,$currentAsset);
              }
           }
            },
            'rejected' => function ($reason, $index) {
                // this is delivered each failed request

            },
        ]);
        // Initiate the transfers and create a promise
        $promise = $pool->promise();
      // Force the pool of requests to complete.
        $promise->wait();

        return $crptoAssets;

    }

    public function GetNAssets($numberOfAssets){
        try{
            $assets = \json_decode($this->GetAllAssets());
            $arrAssets = array();
            $countArr=0;
            foreach ($assets as $asset) {
                array_push($arrAssets,$asset);
                $countArr++;
                if($countArr==$numberOfAssets)break;
            }
            return $arrAssets;
        }
        catch(Exception $ex){
            return null;
        }
    }

    public function GetCurrentExchangeRates()
    {
       //
       try{
            $response = $this->client->request('GET',"exchangerate/BTC" );
            //$response = $client->send($request, ['timeout'=>2]);
            if($response->getStatusCode()==200){

                $content = $response->getBody()->getContents();
                return $content;
            }
            return null;
         }
            catch (Exception $ex) {
                $exceptionMessage = $ex->getMessage();
                return null;
         }
    }

    public function GetSpecificAssetRate($asset){
           try{
            $response = $this->client->request('GET',"exchangerate/".$asset."/USD" );
            //$response = $client->send($request, ['timeout'=>2]);
            if($response->getStatusCode()==200){

                $content = $response->getBody()->getContents();
                return $content;
            }
            return null;
         }
            catch (Exception $ex) {
                $exceptionMessage = $ex->getMessage();
                return null;
         }
    }


   public function testApi($url){
     try{
        $response = $this->client->request('GET',$url);
            if($response->getStatusCode()==200){
                $content = $response->getBody()->getContents();
                return $content;
            }
        // });

        return null;
     }
     catch(GuzzleHttp\Exception\ClientException $ex){
        $response = $e->getResponse();
        $responseBodyAsString = $response->getBody()->getContents();
     }
     catch(GuzzleHttp\Exception\ServerException $ex){
        $response = $e->getResponse();
        $responseBodyAsString = $response->getBody()->getContents();
     }
     catch(HttpException $ex){
        $exceptionMessage = $ex->getMessage();

     }
    catch (Exception $ex) {
        $response = $e->getResponse();

        return null;
     }

   }
   public function GetAllSpecificExchageRates($arrayAssets){
        try {
            //exchangerate/BTC/USD
            $rates = array();
            $assets= $arrayAssets;
            foreach($assets as $asset){
                $response = $this->client->request('GET',"exchangerate/".$asset."/USD" );
                if($response->getStatusCode()==200){
                    $content = $response->getBody()->getContents();
                  array_push($rates,$content);
                }
            }
            return $rates;

        } catch (Exception $ex) {
            return null;
        }
   }



}
