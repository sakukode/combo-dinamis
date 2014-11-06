<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_combo extends CI_Model {

	

	function get_obyek()
	{
		$query = $this->db->get('obyek');

		if($query->num_rows > 0)
		{
			return $query->result();
		}
		else
		{
			return null;
		}
	}

	function get_jenis($id)
	{
		$query = $this->db->get_where('jenis',array('id_obyek'=>$id));

		 if ($query->num_rows() > 0) { 
            foreach ($query->result() as $data) { 
                $hasil[] = $data; 
            } 
            return $hasil; 
        } 
	}

	function get_varian($id)
	{
		$query = $this->db->get_where('varian',array('id_jenis'=>$id));

		if($query->num_rows == 1)
		{
			return $query->row();
		}
		else
		{
			return null;
		}
	}

}

/* End of file m_combo.php */
/* Location: ./application/models/m_combo.php */