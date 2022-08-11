<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.index', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function pricing()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.pricing', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.contact', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function howtopay()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.howtopay', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function predictions()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.predictions', compact('body_class'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }
}
