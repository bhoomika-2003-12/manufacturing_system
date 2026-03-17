<?php
class Product_model extends CI_Model {

    public function get_all() {
        return $this->db->get('products')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('products', ['product_id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('products', $data);
    }

    public function update($id, $data) {
        $this->db->where('product_id', $id);
        return $this->db->update('products', $data);
    }

    public function delete($id) {
        $this->db->where('product_id', $id);
        return $this->db->delete('products');
    }
}
