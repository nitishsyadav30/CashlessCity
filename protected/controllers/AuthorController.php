<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AuthorController extends Controller {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index'),
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {

        $this->render('index');
    }

}
