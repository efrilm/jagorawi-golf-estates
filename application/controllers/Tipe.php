<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Tipe
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

class Tipe extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function tipeStandar()
  {
    $this->data['title'] = "Tipe Standar - Jagorawi Golf Estate";
    $this->template->load('template', 'tipe/tipe_standar', $this->data);
  }

  public function tipeMedium()
  {
    $this->data['title'] = "Tipe Medium - Jagorawi Golf Estate";
    $this->template->load('template', 'tipe/tipe_medium', $this->data);
  }

  public function tipeBesar()
  {
    $this->data['title'] = 'Tipe Besar - Jagorawi Golf Estate';
    $this->template->load('template', 'tipe/tipe_besar', $this->data);

  }

}


/* End of file Tipe.php */
/* Location: ./application/controllers/Tipe.php */