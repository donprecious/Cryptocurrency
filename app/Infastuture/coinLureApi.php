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

class CoinRankingApi{

    private $baseUrl;
    private $apiKey;
    private $client;
    public  $exceptionMessage;
    public  $returnMessage;
    //https://www.coinlore.com/cryptocurrency-data-api
//API Key: 9DC32451-2F38-4E04-B2E7-6AF440FDD355

    function __construct(){
      $this->baseUrl="https://api.coinranking.com/v1/public/";
      //4460599D-D29C-4AAA-BAB3-4DDF265D7A39
     //   $this->apiKey = "4460599D-D29C-4AAA-BAB3-4DDF265D7A39";
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
          //  'headers'=>["X-CoinAPI-Key"=>$this->apiKey],
            'http_errors' => false
            // You can set any number of default request options.
        ]);
    }

    public function GetMarketData(){

            try {
                //code...
                $response = $this->client->request('GET',"coins/" );
                //$response = $client->send($request, ['timeout'=>2]);
                if($response->getStatusCode()==200){

                    $content = $response->getBody()->getContents();
                    return \json_decode($content);
                }
                return null;
            }
            catch (Exception $ex) {
                $exceptionMessage = $ex->getMessage();
                return null;
            }

        }




}
