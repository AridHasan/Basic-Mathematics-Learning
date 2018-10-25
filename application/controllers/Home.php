<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Himel
 * Date: 8/2/2018
 * Time: 10:08 PM
 */
class Home extends CI_Controller
{
    public function Index(){
        $this->load->view('container');
    }

}
