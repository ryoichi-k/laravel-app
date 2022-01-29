<?php

namespace App\Http\Controllers;

use App\Information;
use App\Http\Requests\InformationRequest;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $items = Information::all();
        return view('Informations.index', ['items' => $items]);
    }

    public function create()
    {
        return view('informations.create');
    }

    public function store(InformationRequest $request, Information $information)
    {
        $information->title = $request->title;
        $information->body = $request->body;
        $information->user_id = $request->user()->id;
        //$information->name = $request->user()->name;
        $information->save();
        return redirect()->route('informations.index');
    }
}
