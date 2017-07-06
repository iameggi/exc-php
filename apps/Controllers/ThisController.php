<?php


class ThisController extends Controller{

    public function index()
    {
        return $this->view('home');
    }
}