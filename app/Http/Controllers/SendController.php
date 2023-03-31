<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Info;



class SendController extends Controller
{
    public function info(Info $info)
    {
        return Inertia::render('Post/Show', [
            'title' => $info->title,
            'description' => $info->description
        ]);   
    }
}
