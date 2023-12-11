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

}

/* End of file User_model_model.php */
/* Location: ./application/models/User_model_model.php */