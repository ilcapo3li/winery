<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ArandiLopez\Feed\Facades\Feed;
use Carbon\Carbon;
use DB;
class Wine extends Model
	{

    protected $table = "wines";

    public static function get_feed()
    {
        $feed = Feed::make('https://www.winespectator.com/rss/rss?t=dwp');
        return response()->json($feed);

    }

    public function save_feed($feed)
    {
        $this->title = $feed->title;
        $this->date = Carbon::parse($this->date);
        $this->link = $feed->permalink;
        $this->save();
    }



	 }
		


	
