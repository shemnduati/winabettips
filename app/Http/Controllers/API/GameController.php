<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use App\Models\Predictions;
use Carbon\Carbon;
class GameController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'match_id' => 'required|string|max:191',
            'match_time' => 'required|string',
            'league_name' => 'required|string|min:10',
            'league_id' => 'required|string',
            'match_hometeam_name' => 'required|string',
            'match_awayteam_name' => 'required|string',
            'prediction' => 'required|string',
            'tip' => 'required|string',
            'odds' => 'required|string',
            'team_home_badge' => 'required|string',
            'team_away_badge' => 'required|string',
            
        ]);
        return Predictions::create([
                'fixture_id'=>$request['match_id'],
                'start_time'=>$request['match_time'],
                'competition'=>$request['league_name'],
                'leagueId'=>$request['league_id'],
                'country'=>$request['country_name'],
                'subcribers'=>$request['subcription'],
                'flag'=>$request['country_logo'],
                'team1'=>$request['match_hometeam_name'],
                'team2'=>$request['match_awayteam_name'],
                'prediction_type'=>$request['prediction'],
                'odds'=>$request['odds'],
                'ht_score' => $request['match_hometeam_halftime_score']. ':' .$request['match_awayteam_halftime_score'],
                'final_score'=>$request['match_hometeam_ft_score']. ':' . $request['match_hometeam_ft_score'],
                'status'=>$request['match_status'],
                'date'=>$request['match_date'],
        ]);
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


    public function predictions()
    {
        return predictions::latest()->paginate(30);
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

    public function fetch()
    {
        $current_date = Carbon::now();
        $APIkey=config("app.API_FOOTBALL_TOKEN.key");
        $from = $current_date = date('Y-m-d');
        $to = $current_date = date('Y-m-d');
    
        $curl_options = array(
        CURLOPT_URL => "https://apiv3.apifootball.com/?action=get_events&from=$from&to=$to&APIkey=$APIkey",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $curl_options );
        $result = curl_exec( $curl );

        $result = (array) json_decode($result);

        return $result;
    }
    public function search()
    {
       
    }
}
