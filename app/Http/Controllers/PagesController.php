<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kanji;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function user(){
        return view('auth.user');
    }

    public function course(){
        return view('pages.course');
    }

    public function home(){
        return view('pages.home');
    }

    public function quiz(){
        return view('pages.quiz');
    }

    public function search(){

        $kanjis = Kanji::orderBy('K_JLPT','desc')->paginate(25);
        return view('pages.search')->with('kanjis', $kanjis);
    }

    public function searchJLPT($K_JLPT){
        $kanjis = Kanji::orderBy('K_JLPT','desc')->where('K_JLPT', $K_JLPT)->paginate(50);
        return view('pages.search')->with('kanjis', $kanjis);
    }

    public function searchJouyou($K_Jouyou){
        $kanjis = Kanji::orderBy('K_Jouyou', 'desc')->where('K_Jouyou', $K_Jouyou)->paginate(50);
        return view('pages.search')->with('kanjis', $kanjis);
    }
}
