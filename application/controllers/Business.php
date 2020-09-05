<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Business extends MY_Controller
{
    public function index()
    {
        $this->Layout('business');
    }
}
