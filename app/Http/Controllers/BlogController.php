<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
        return view('admin.blog.create');
    }
    public function show(){
        return view('admin.blog.show');
    }
    public function store(){

    }
}
