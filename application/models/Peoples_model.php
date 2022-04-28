<?php
class Peoples_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getpeoples($limit, $offset, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('email', $keyword);
        }
        return $this->db->get('peoples', $limit, $offset)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('peoples')->num_rows();
    }
    public function deletePeople($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('peoples', ['id' => $id]);
    }
}
