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
   $this->db->where('email', $id);
   $query = $this->db->get('user');
   if($query->num_rows() > 0)
   {
    echo"tes";
    return true;
   }
   else
   {
   echo"false";
    return false;
   }
  }
 
  function Update_user_data($data, $id)
  {
   $this->db->where('id_user', $id);
   $this->db->update('user', $data);
  }
 
  function Insert_user_data($data)
  {
   $this->db->insert('user', $data);
  }
  function search_lowongan($table,$cariL,$lokasiL,$kategoriL){
    echo $cariL;
      $this->db->like('lowongan', $cariL, 'after');
      if($kategoriL != ''){
        $this->db->where('kategori', $kategoriL);
      }
      $this->db->where('lokasi', $lokasiL);
      
    $querry = $this ->db->get($table);

    
    return $querry->result(); 
    
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