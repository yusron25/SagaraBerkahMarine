<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends MY_Controller
{
    public function index()
    {
        $this->Layout('contact');
    }
}
