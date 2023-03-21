<?php
class Rooms
{
    use Controller;
    public function index()
    {

        $this->view('rooms');
    }
}