<?php

namespace App\Http\Controllers\API\V3;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use App\Utils\Data;
use Psy\Exception\ErrorException;
use App\Models\CricketMatch;
use App\Http\Resources\V3\CricketTeamResource;
use App\Models\CricketTeam;
use App\Http\Resources\V3\CricketMatchResource;

class CricketController extends Controller
{

    public function getMatches(){
      $matches = CricketMatchResource::collection(CricketMatch::all());
      
      return Data::jsonResponse("OK",null, $matches);
      
    }
    
    public function fetchLiveScore($id)
    {

        try{
        
           $match = CricketMatch::find($id);
            $client = new Client();
            // $crawler = $client->request('GET', "http://www.espncricinfo.com/series/19134/game/1173354/bangladesh-vs-india-world-cup-warm-up-2019");
            // $crawler = $client->request('GET', "http://www.espncricinfo.com/series/19134/scorecard/1173353/new-zealand-vs-west-indies-world-cup-warm-up-2019");
            // $crawler = $client->request('GET', "http://www.espncricinfo.com/series/19134/game/1173353/new-zealand-vs-west-indies-world-cup-warm-up-2019");
            $crawler = $client->request('GET', $match->cric_info_url);
            $cscore_name1 = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[1]/div/div[1]/a/span[1]")->text();
            $cscore_name2 = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[2]/div/div[1]/a/span[1]")->text();
           
            $cscore_score1  = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[1]/div/div[2]")->text();
            $cscore_score2 = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/ul/li[2]/div/div[2]")->text();
        
        try{
            $crr = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[2]/div[1]/p")->text();
        }catch(\InvalidArgumentException $e) {
         
        }catch(Exception $e) {

        }finally{
            $crr = 0;
        }
        try{
            $rrr = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[2]/div[2]/p")->text();
        }catch(\InvalidArgumentException $e) {
         
        }catch(Exception $e) {

        }finally{
            $rrr = 0;
        }

            $cscore_notes_game = $crawler->filterXPath("//*[@id='main-container']/div/div[3]/div[1]/div[1]/div[1]/div[1]/div[2]/div/span")->text();

           $team_1 = new CricketTeamResource(CricketTeam::where('long_name', $cscore_name1)->first());
           $team_2 = new CricketTeamResource(CricketTeam::where('long_name', $cscore_name2)->first());

            $score = array(
                'team_1'=> $team_1
            ,'team_2'=> $team_2 
            ,'cscore_score1'=> $cscore_score1
            ,'cscore_score2'=> $cscore_score2
            ,'crr' =>$crr 
            ,'rrr' =>$rrr 
            ,'cscore_notes_game' =>$cscore_notes_game 
           
        );
           return Data::jsonResponse("OK","live score",$score);  
        } catch(\InvalidArgumentException $e) {
            return Data::jsonResponse("FAILED",$e->getMessage(),"InvalidArgumentException");
        }catch(Exception $e) {
            return Data::jsonResponse("FAILED",$e->getMessage(),"Exception");
        }
    return "error";
    }
    
}
