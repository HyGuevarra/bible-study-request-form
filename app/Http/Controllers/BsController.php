<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BsController extends Controller
{
    public function index() {
    	$title = 'List of Scheduled Bible Study Requested';
    return view('requests', compact('title'));
    }

    public function form() {
        $title = 'Bible Study Request Form';
    	return view('form', compact('title'));
    }

    public function details() {
        dd($request->all());
    }

    public function thanks() {
        $title = 'Thank you';
    	return view('thanks', compact('title'));
    }
}
