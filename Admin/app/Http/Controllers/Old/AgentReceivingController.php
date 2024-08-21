<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use App\Models\AgentReceiving;
use Illuminate\Http\Request;

class AgentReceivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
         $data = AgentReceiving::orderBy('created_at', 'desc')->get();
         return view('AgentReceiving.list', compact('data'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $agents = Agent::all();
         return view('AgentReceiving.add', compact('agents'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
         $input = $request->all();
         AgentReceiving::create($input);
         return redirect()->route('AgentReceiving.index');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Agent  $receiving
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
         $receiving = AgentReceiving::find($id);
         return view('AgentReceiving.show', compact('receiving'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Agent  $receiving
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
         $agents = Agent::all();
         $receiving = AgentReceiving::find($id);
         return view('AgentReceiving.edit', compact('receiving', 'agents'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Agent  $receiving
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
         $receiving = AgentReceiving::find($id);
         $input = $request->all();
         $receiving->fill($input);
         $receiving->save();
         return redirect()->route('AgentReceiving.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Agent  $receiving
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
         $receiving = AgentReceiving::find($id);
         $receiving->delete();
         return redirect()->route('AgentReceiving.index');
     }

     public function receivings($id)
     {
         $data = AgentReceiving::where('agent_id', '=', $id)->orderBy('created_at', 'desc')->get();
         return view('AgentReceiving.list', compact('data'));
     }
}
