<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    public function index(){
        $services = Service::all();
        $team = Team::all();
        return view('pages.home',compact('services','team'));
    }
    public function service(){
        $services = Service::all();
        return view('pages.services',compact('services'));
    }
}
