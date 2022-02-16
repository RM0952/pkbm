<?php
class Kategori_model extends CI_Model{
    public function getKategori($id = false){
        if($id){
            $this->db->where('id_kategori',$id);
            $this->db->limit(1);
        }
        $this->db->order_by('id_kategori','DESC');
        return $this->db->get('kategori');
    }
    public function updateKategori($id,$data){
        $this->db->where('id_kategori',$id);
        return $this->db->update('kategori',$data);
    }
    public function insertKategori($data){
        return $this->db->insert('kategori',$data);
    }
    public function deleteKategori($id){
        $this->db->where('id_kategori',$id);
        return $this->db->delete('kategori');
    }
}