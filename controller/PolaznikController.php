<?php
class PolaznikController extends AutorizacijaController
{
    public function index()
    {
    $this->view->render('privatno' . 
    DIRECTORY_SEPARATOR . 'polaznik' .
    DIRECTORY_SEPARATOR . 'index');

    }
}