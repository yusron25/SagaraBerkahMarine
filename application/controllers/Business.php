<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Business extends MY_Controller
{
    public function index()
    {
		$gallery = $this->gallery();
        $this->Layout('business',$gallery);
    }


	private function gallery(){

        $path['a'] = glob("assets/images/gallery/a/*.*");
        $path['b'] = glob("assets/images/gallery/b/*.*");
        $path['c'] = glob("assets/images/gallery/c/*.*");
        $path['d'] = glob("assets/images/gallery/d/*.*");
        $path['e'] = glob("assets/images/gallery/e/*.*");
		return $path;
	}
}
