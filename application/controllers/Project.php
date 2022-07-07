<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Project
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

class Project extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function arkananta()
  {
    $this->data['title'] = 'Arkananta';
    $this->template->load('template', 'projects/arkananta', $this->data);
  }

  public function the_awa()
  {
    $this->data['title'] = 'The Awa';
    $this->template->load('template', 'projects/the_awa', $this->data);
  }

  public function varana()
  {
    $this->data['title'] = 'Varana';
    $this->template->load('template', 'projects/varana', $this->data);
  }
}


/* End of file Project.php */
/* Location: ./application/controllers/Project.php */