<?php
class Posts_model extends CI_Model{
    public function getPosts($id = false,$foot = false){
        if($id){
            $this->db->where('id_posts',$id);
            $this->db->limit(1);
        }
        if($foot){
            $this->db->limit(3);
        }
        $this->db->join('kategori','posts.id_kategori = kategori.id_kategori','LEFT');
        $this->db->order_by('id_posts','DESC');
        return $this->db->get('posts');
    }
    public function updatePosts($id,$data){
        $this->db->where('id_posts',$id);
        return $this->db->update('posts',$data);
    }
    public function insertPosts($data){
        return $this->db->insert('posts',$data);
    }
    public function deletePosts($id){
        $this->db->where('id_posts',$id);
        return $this->db->delete('posts');
    }
}