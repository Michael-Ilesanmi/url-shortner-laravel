<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'original_url'=> 'url|required'
        ]);
        $short_url = Str::random(6);

        $new_url = Url::create(['short_url'=>$short_url, 'original_url'=>$request->original_url]);
        if ($request->session()->missing('urls')) {
            session(['urls' => [$new_url]]);
        } else {
            $request->session()->push('urls', $new_url);
        }        
        
        return redirect(url()->previous().'#shorten_url');

    }


    public function show($url)
    {
        $record = Url::where("short_url", $url);
        if ($record->exists()) {
            return redirect($record->first()->original_url);
        }

        return redirect("/");

    }
    public function clear(Request $request)
    {
        $request->session()->forget('urls');
        return redirect(url()->previous().'#shorten_url');
    }
}
