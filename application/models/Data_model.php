<?php 

class Data_model extends CI_Model {

	public function getAlldata()
	{
		return $this->db->get('batch1');
	}

	public function hapusdata($id1)
	{
		$this->db->where('id1', $id1);
		$this->db->delete('batch1');
	}

	public function hapusdata1($id2)
	{
		$this->db->where('id2', $id2);
		$this->db->delete('batch2');
	}

	public function hapusdata2($id3)
	{
		$this->db->where('id3', $id3);
		$this->db->delete('batch3');
	}

	public function hapusdata3($id4)
	{
		$this->db->where('id4', $id4);
		$this->db->delete('batch4');
	}

	public function getDataById($id1)
	{
		$this->db->get_where('batch1', ['id1' => $id1])->row_array();
	}
}

 ?>