<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function Layout($content, $galery=null)
    {
        $data['content'] = $content;
        $data['gallery'] = $galery;
        $this->load->view('_Layout', $data);
    }
}
