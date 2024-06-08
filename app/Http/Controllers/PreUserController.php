<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PreRegisterRequest;
use App\Models\PreRegUser;

class PreUserController extends Controller
{
    public function store(PreRegisterRequest $request)
    {
        $newsletter = new PreRegUser();
        $newsletter->email = $request['email'];
        $newsletter->save();
        
        return response()->json(200);
    }
}
