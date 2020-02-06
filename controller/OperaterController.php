<?php

class OperaterController extends AdminController
{
    public function index()
    {
        $this->view->render('privatno' . 
     DIRECTORY_SEPARATOR . 'operater' .
     DIRECTORY_SEPARATOR . 'index');
    }
}