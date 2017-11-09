<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Segiempat_model extends CI_Model {

  private $panjang;
  private $lebar;

  public function set_panjang($p)
  {
      #code
      $this->panjang = $p;
  }

  public function get_panjang()
  {
      #code
      return $this->panjang;
  }

  public function set_lebar($l)
  {
      #code
      $this->lebar = $l;
  }

  public function get_lebar()
  {
      #code
      return $this->lebar;
  }

  public function hitung_luas()
  {
      #code
      return $this->panjang * $this->lebar;
  }

  public function hitung_keliling()
  {
    return 2 * ($this->panjang + $this->lebar);
      #code
  }

}
