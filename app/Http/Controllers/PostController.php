<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("post/index");
    }
    public function show()
    {
        return view("post/show");
    }
    public function create()
    {
        return view("post/create");
    }
    public function store()
    {
        return;
    }
    public function  edit()
    {
        return view("post/edit");
    }
    public function  update()
    {
        return;
    }
    public function  delete()
    {
        return;
    }

}