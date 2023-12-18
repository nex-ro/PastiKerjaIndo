<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model User_model_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class User_model extends CI_Model
{
  public $table = 'user';

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  
  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }
  public function insert($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }
  public function insert_global($where,$data)
  {
    $this->db->insert($where, $data);
    return $this->db->insert_id();
  }
  public function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }
  // ------------------------------------------------------------------------
  function Is_already_register($id)
  {
   $this->db->where('login_oauth_uid', $id);
   $query = $this->db->get('chat_user');
   if($query->num_rows() > 0)
   {
    return true;
   }
   else
   {
    return false;
   }
  }
 
  function Update_user_data($data, $id)
  {
   $this->db->where('login_oauth_uid', $id);
   $this->db->update('chat_user', $data);
  }
 
  function Insert_user_data($data)
  {
   $this->db->insert('chat_user', $data);
  }
  function search_lowongan($table,$lokasiL,$kategoriL,$cariL){

    if ($cariL != null){
      $query = $this->db->like('lowongan', $cariL, 'after');
    }else{
      $query = $this->db->like('lokasi', $lokasiL, 'after');
    }
    if ($lokasiL != null){
      $query = $this->db->and_like('lokasi', $lokasiL, 'after');
    }
    if ($kategoriL != null){
      $query = $this->db->and_like('kategori', $kategoriL);
    }
    $query = $this->db->get($table);
    if ($query->num_rows() > 0) {
      return $query->result(); 
    } else {
      return array(); 
    }  
    
  }
  public function selectAll($table){
    $query = $this->db->get($table);
        
    if ($query->num_rows() > 0) {
        return $query->result(); 
    } else {
        return array(); 
    }  
  }

  
}

/* End of file User_model_model.php */
/* Location: ./application/models/User_model_model.php */