<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->data['title'] = 'Varana By Jagorawi Golf Estate';
   $this->template->load('template', 'home', $this->data);
  }

public function download() {
  force_download('assets/files/Ebrochure Varana By Jagorawi Golf Estates.pdf', NULL);
}

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */