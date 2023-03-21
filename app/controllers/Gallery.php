<?php
class Gallery
{
    use Controller;
    public function index()
    {

        $this->view('gallery');
    }
}