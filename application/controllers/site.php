<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yothi_000
 * Date: 9/26/13
 * Time: 11:05 PM
 * To change this template use File | Settings | File Templates.
 */

class site extends CI_Controller {

    function index(){
        $this->load->model('data_model');
        $data['rows'] = $this->data_model->getAll();
        $this->load->view('home', $data);
	
	//$this->load->model('site_model');
        //$data['records'] = $this->site_model->getAll();
        //$this->load->view('home', $data);
    }

    function about(){
        $this->load->view('about');
    }
}
