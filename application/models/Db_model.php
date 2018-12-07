<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Db_model extends CI_Model {
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
    }

  public function getLoginData($usr,$pwd){
    $u = $this->db->escape_str($usr);
    $p = md5($this->db->escape_str($pwd));
    $cek_login = $this->db->get_where('tbl_admin',array('username' => $u, 'password' => $p));
    if ($cek_login->num_rows()>0) {
      $qad = $cek_login->row();
      if ($u == $qad->username && $p == $qad->password) {
        $sess = array(
          'nip' => $qad->nip,
          'username' => $qad->username,
          'status' => $qad->status,
        );
        $this->session->set_userdata($sess);
        if($qad->status == 'admin')
          header('location:' .base_url().'Admin');
        else
          header('location:' .base_url());
      }
    }
    //else {
    //   echo "<script>alert('Username/Password Salah')";
    //   echo "windows.location.href= '".base_url()."';";
    //   echo "</script>";
    // }
  }
}
