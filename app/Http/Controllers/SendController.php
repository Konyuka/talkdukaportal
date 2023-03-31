<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Info;



class SendController extends Controller
{
    public function info($info)
    {
        $info = Info::where('label', $info)->select('title', 'description')->firstOrFail();
        // return dd($info);
        // return dd($info);
        return Inertia::render('SendSMS', [
            'title' => $info->title,
            'description' => $info->description
        ]);   
    }
}
