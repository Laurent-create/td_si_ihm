<?php

namespace app\controllers;

use Flight;

class WelcomeController {

	public function __construct() {

	}

    public function home() {
        $data = ['page' => 'Home.php'];
        //print_r($data);
        Flight::render('Template', $data);
        //print_r(Flight::get('assets.src'));
    }

	public function ChoixCaisse() {
        $data = ['page' => 'ChoixCaisse.php'];
        //print_r($data);
        Flight::render('Template', $data);
        //print_r(Flight::get('assets.src'));
    }

    public function saisieAchat() {
        $data = ['page' => 'SaisieAchat.php'];
        //print_r($data);
        Flight::render('Template', $data);
        //print_r(Flight::get('assets.src'));
    }
}