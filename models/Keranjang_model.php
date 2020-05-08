<?php 
if (!defined('BASEPATH')) exit('No direct script access
allowed');
	class Keranjang_model extends CI_Model 
	{
 		public function get_produk_all(){
 			$query = $this->db->get('produk');
 			return $query->result_array();
 		}
 
 		public function get_per_kategori($id){
 			if($kategori>0){
 				$query = $this->db->getwhere('produk', 'kategori', $id);
 			}
			
 			return $query->result_array();
 		}

 		public function get_prod_kategori($kategori){
 			if($kategori>0){
 				$this->db->where('kategori',$kategori);
 			}
			$query = $this->db->get('produk');
 			return $query->result_array();
 		}
 

 		public function get_kategori_all(){
 			$query = $this->db->get('kategori');
 			return $query->result_array();
 		}
 
 		public function get_produk_id($id){
 			$this->db->select('produk.*,nama_kategori');
 			$this->db->from('produk');
 			$this->db->join('kategori','kategori=kategori.id_kategori','left');
 			$this->db->where('id_produk',$id);
 			return $this->db->get();
 		}
 
		public function tambah_pelanggan($data){
 			$this->db->insert('tbl_pelanggan', $data);
 			$id = $this->db->insert_id();
 			return (isset($id)) ? $id : FALSE;
 		}

 		public function tambah_order($data){
 			$this->db->insert('tbl_order', $data);
 			$id = $this->db->insert_id();
 			return (isset($id)) ? $id : FALSE;
 		}
 
 		public function tambah_detail_order($data){
 			$this->db->insert('tbl_detail_order', $data);
 		}

 		//ambil data produk dari database
    	function get_produk_list($limit, $start){
        $query = $this->db->get('produk', $limit, $start);
        return $query;
    }
}
?>
