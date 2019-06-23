<?php

class CardsController {
    function __construct() {
        if(!empty($_GET['get'])){
            $this->show();
        }
        else if(!empty($_POST)) {
            $this->add();
        }
    }

    function show() {
        $model = new CardsModel();
        $cards = $model->getAll();
        foreach($cards as $elemenrt){
            print_r(implode(' ', $elemenrt)); echo '<br/>';
        }
    }

    function add() {
        $model = new CardsModel();
        $model->add($_POST);
    }
}