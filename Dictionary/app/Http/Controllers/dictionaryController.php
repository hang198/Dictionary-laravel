<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class dictionaryController extends Controller
{
    public function index() {
        return view('home');
    }
    public function translate(Request $request) {
            $wordSearch = $request->word;
            $dictionary = array('hello' => 'xin chào','cat' => 'con mèo','dog' => 'con chó');
            foreach ($dictionary as $word => $description) {
                if ($word == $wordSearch) {
                    return view('result', compact('word', 'description'));
                }
            }
            return view('error');
    }
}
