<?php

namespace App\Http\Controllers\API\V3;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use App\Utils\Data;

class CricketController extends Controller
{
    
    public function fetchLiveScore(Request $request)
    {

        try{
        
            $client = new Client();
            $crawler = $client->request('GET', "http://www.espncricinfo.com/series/19134/game/1173354/bangladesh-vs-india-world-cup-warm-up-2019");
            // $crawler = $client->request('GET', "http://www.espncricinfo.com/series/19134/game/1173353/new-zealand-vs-west-indies-world-cup-warm-up-2019");

            $cscore_name1 = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[1]/div/div[1]/a/span[1]")->text();
            $cscore_name2 = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[2]/div/div[1]/a/span[1]")->text();
           
            $cscore_score1  = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[1]/div/div[2]")->text();
            $cscore_score2 = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[2]/div/div[2]")->text();
            $crr = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[2]/div[1]/p")->text();
            $rrr = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[2]/div[2]/p")->text();
            $cscore_notes_game = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[2]/div/span")->text();

            $score = array(
                'cscore_name1'=> $cscore_name1
            ,'cscore_name2'=> $cscore_name2 
            ,'cscore_score1'=> $cscore_score1
            ,'cscore_score2'=> $cscore_score2
            ,'crr' =>$crr 
            ,'rrr' =>$rrr 
            ,'cscore_notes_game' =>$cscore_notes_game 
           
        );

           return Data::jsonResponse("OK","live score",$score);
            
          
        
        } catch(\InvalidArgumentException $e) {
            Session::flash('message', $e->getMessage());
            // echo 'Message: ' .$e->getMessage();
        }catch(Exception $e) {
            Session::flash('message', $e->getMessage());
            // echo 'Message: ' .$e->getMessage();
        }
    return "error";
    }
}
