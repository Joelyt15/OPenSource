<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        if(Auth::user()->usertype=='0')
        {
            return view('user.home');
        }
        else
        {
            return view('admin.home');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }

    public function candidates()
    {
        return view('user.candidates');
    }

    public function jessica()
    {
        return view('user.jessica');
    }

    public function blog2()
    {
        return view('user.blog2');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function message(Request $request)
    {
        $data = new Message;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;

        $data->save();

        return redirect()->back();

    }

    public function board()
    {
        return view('user.board');
    }

    public function agreement()
    {
        return view('user.agreement');
    }

    public function volunteers()
    {
        return view('user.volunteers');
    }

    public function association()
    {
        return view('user.association');
    }

    public function history()
    {
        return view('user.history');
    }

    public function trademark()
    {
        return view('user.trademark');
    }

    public function terms()
    {
        return view('user.terms');
    }

    public function license()
    {
        return view('user.license');
    }

    public function definition()
    {
        return view('user.definition');
    }

    public function category()
    {
        return view('user.category');
    }

    public function name()
    {
        return view('user.name');
    }

    public function review()
    {
        return view('user.review');
    }

    public function community()
    {
        return view('user.community');
    }

    public function individuals()
    {
        return view('user.individuals');
    }

    public function sponsor()
    {
        return view('user.sponsor');
    }

    public function mailing()
    {
        return view('user.mailing');
    }

    public function resources()
    {
        return view('user.resources');
    }

    public function help()
    {
        return view('user.help');
    }

    public function education()
    {
        return view('user.education');
    }

    public function articles()
    {
        return view('user.articles');
    }

    public function news()
    {
        return view('user.news');
    }

    public function boardmember()
    {
        return view('user.boardmember');
    }

    public function osilinks()
    {
        return view('user.osilinks');
    }

    public function stefano()
    {
        return view('user.stefano');
    }

    public function talkboss()
    {
        return view('user.talkboss');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function newsletter()
    {
        return view('user.newsletter');
    }

    public function join()
    {
        return view('user.join');
    }
}