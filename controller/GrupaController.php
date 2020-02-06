<?php
class GrupaController extends AutorizacijaController
 {
     public function index()
     {
        $this->view->render('privatno' . 
        DIRECTORY_SEPARATOR . 'grupa' .
        DIRECTORY_SEPARATOR . 'index', ["ime"=>'Anita',"prezime"=>'Račman']);
     }

}