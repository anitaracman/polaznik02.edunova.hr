<?php
class PredavacController extends AutorizacijaController
{
    public function index()
    {
        $this->view->render('privatno' . DIRECTORY_SEPARATOR . 'predavac' . DIRECTORY_SEPARATOR . 'index');
    }
}