<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Facility
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

class Facility extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->data['title'] = 'Fasilitas Varana By Jagorawi Golf Estate';
    $this->template->load('template', 'facility', $this->data);
  }
}


/* End of file Facility.php */
/* Location: ./application/controllers/Facility.php */