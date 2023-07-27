<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        // $team = Team::all();
        // return view('pages.home');
    }

    public function create(){
        return view('team.create');
    }

    public function store(TeamRequest $request){
        //  Validation 
        $formFields = $request->validated();

        //img 
        $this->uploadImage($request,$formFields);

        //  Insertion 
        Team::create($formFields);

        // redirection
        return redirect()->route('homepage');
    }
    public function edit(Team $team){
        return view('team.edit',compact('team'));
    }

    public function update(TeamRequest $request,Team $team){
        $formFields = $request->validated();

        //img 
        $this->uploadImage($request,$formFields);
        
        $team->fill($formFields)->save();
        return to_route('homepage',$team->id);
    }

    public function destroy(Team $team){
        $team->delete();
        return to_route('homepage');
    }
    
    private function uploadImage(TeamRequest $request,array &$formFields){
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] =  $request->file('image')->store('service-img','public');
        }
    }



}
