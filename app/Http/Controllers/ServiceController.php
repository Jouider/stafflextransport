<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('pages.home',compact('services'));
    }

    public function create(){
        return view('service.create');
    }
    
    public function store(ServiceRequest $request){
        //  Validation 
        $formFields = $request->validated();

        //img 
        $this->uploadImage($request,$formFields);

        //  Insertion 
        Service::create($formFields);

        // redirection
        return redirect()->route('servicespage')->with('success','Félicitations ! Votre service a été créé avec succès.');
    }

    public function destroy(Service $service){
        $service->delete();
        return to_route('servicespage')->with('success','Super ! Votre service a été supprimé avec succès.');
    }

    public function edit(Service $service){
        return view('service.edit',compact('service'));
    }

    public function update(ServiceRequest $request,Service $service){
        $formFields = $request->validated();

        //img 
        $this->uploadImage($request,$formFields);
        
        $service->fill($formFields)->save();
        return to_route('servicespage',$service->id)->with('success','Bravo ! Votre service a été modifié avec succès.');
    }

    private function uploadImage(ServiceRequest $request,array &$formFields){
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] =  $request->file('image')->store('service-img','public');
        }
    }
}
