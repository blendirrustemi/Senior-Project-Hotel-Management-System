<?php
class Home extends Controller
{
//    use Controller;
    public function index()
    {

        $model = new Model;
        $model->test();


        $this->view('home');
    }
}