<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_Controller
{
    public function index()
    {
        $this->Layout('about');
    }
}
