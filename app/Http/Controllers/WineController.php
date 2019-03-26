<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Wine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_feeds = Wine::get_feed();
        $feeds = json_decode($get_feeds->getContent());
        if (count($feeds) != 0) {
            DB::select('TRUNCATE WINES');
            foreach ($feeds as $key => $feed) {
                $wine = new Wine();
                $wine->save_feed($feed);
            }
        }
        $wine = Wine::all();

        return view('wine.index',compact('wine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wine = Wine::all();

        return view('wine.create',compact('wine'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id' => 'required',
            'date' => 'max:'.Carbon::now(),

        ];
        $validator = Validator::make($request->all(), $rules);
        $validator->SetAttributeNames([
            'id' => 'you must choose wine',
            'date' =>'your wine not available currently' ,

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()]);
        }
        else {

            return response()->json('good');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
