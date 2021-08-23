<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            'title' => 'Welcome',
            'description' => 'Simple MVC PHP framework'
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'Share your news!'
        ];
        $this->view('pages/about', $data);
    }
}
