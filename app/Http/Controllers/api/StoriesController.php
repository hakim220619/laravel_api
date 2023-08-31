<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StoriesController extends Controller
{
    function stories()
    {
        $stories = DB::table('stories')->get();
        return response()->json([
            'status' => true,
            'data' => $stories
        ]);
    }
    function storiesById($id)
    {
        $stories = DB::table('stories')->where('id', $id)->first();
        return response()->json([
            'status' => true,
            'data' => $stories
        ]);
    }
    function storiesByPlot($param)
    {
        $stories = DB::table('stories')->where('plot','like', '%'.$param.'%')->get();
        return response()->json([
            'status' => true,
            'data' => $stories
        ]);
    }
    function store(Request $request)  {
        $data = [
            'plot' => $request->plot,
            'writer' => $request->writer,
            'upvotes' => $request->upvotes,
        ];
        DB::table('stories')->insert($data);
        return response()->json([
            'status' => true,
             
        ]);
    }
    function update($id, Request $request)  {
        // dd($request->all());
        $data = [
            'plot' => $request->plot,
            'writer' => $request->writer,
            'upvotes' => $request->upvotes,
        ];
        DB::table('stories')->where('id', $id)->update($data);
        return response()->json([
            'status' => true,
             
        ]);
    }
    function destory($id)  {
        // dd($request->all());
        
        DB::table('stories')->where('id', $id)->delete();
        return response()->json([
            'status' => true,
             
        ]);
    }
}
