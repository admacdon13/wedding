<?php

namespace App\Http\Controllers;

use App\Rsvp;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RsvpRequest;

class RsvpController extends Controller
{

//    protected $rsvp;
//
//    public function __construct(Rsvp $response )
//    {
//        $rsvp = new Rsvp($response);
//
//        return view('index');
//    }

//    public function setImagePath($path){
//        $this->rsvp->imagePath = $path;
//
//    }

    public function show($id)
    {
        $rsvp = Rsvp::findOrFail($id);


        return view('pages.index' , compact('rsvp'));


    }

    public function create()
    {

        return view('pages.rsvp', compact('rsvp'));

    }

    public function store(RsvpRequest $request)
    {
//        $rsvp = new Rsvp;
//
//        $rsvp->setImagePath($request->getImagePath());
//
//        $rsvp->imagePath = $request->imagePath;

        Rsvp::create($request->all());

//        $file = null;
//        if ($request->hasFile('imageName')) {
//            $file = $request->file('imageName');
//            $ext = strtolower($file->getClientOriginalExtension());
//            $request["imagePath"] = $ext;
//        }
//        $request->file('imageName')->move(base_path() . '/public/images/catalog/', $file);
//
//        $request['imagePath'] = base_path().'/public/images/catalog/'.$file;
//
//
        return view('pages.thanks', compact('request'));

//        return view('pages.thanks', compact('rsvp'));
    }

    public function edit($id)
    {
//        $rsvp = Rsvp::findOrFail($id);

        return view('pages.rsvp');


    }

    public function update($id, RsvpRequest $request)
    {
        $rsvp = Rsvp::findOrFail($id);

        $rsvp->update($request->all());

        return redirect('pages.thanks');

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
