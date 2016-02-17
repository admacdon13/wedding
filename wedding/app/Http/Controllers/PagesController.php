<?php

namespace App\Http\Controllers;

use App\Music;
use App\Rsvp;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Html\HtmlFacade;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function bridalparty()
    {
        return view('pages.bridalparty');

    }

    public function music()
    {
        return view('pages.music', compact('songs'));
    }

    public function musicrequests()
    {
        $songs = Music::all();
        return view('pages.musicrequests', compact('songs'));
    }

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function rsvp()
    {
        return view('pages.rsvp');
    }

    public function dates()
    {
        return view('pages.dates');
    }

    public function thanks()
    {
        return view('pages.thanks');
    }

    public function special()
    {
        return view('pages.specialthanks');
    }

    public function registry()
    {
        return view('pages.registry');
    }

    public function guestlist()
    {
        $rsvps = Rsvp::all();

        return view('pages.guestlist', compact('rsvps'));
    }

//    public function about()
//    {
//
//        $people = [
//            'Don Juan',
//            'Albert Einstien',
//            'Teddy Roosevelt'
//        ];
//
//        return view('pages.about', compact('people'));
//
//    }

//    public function contact()
//    {
//        return view('pages.contact');
//
//    }
}
