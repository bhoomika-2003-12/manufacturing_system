<?php
class Order_model extends CI_Model {

    public function get_all() {
        return $this->db->get('orders')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('orders', ['order_id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('orders', $data);
    }

    public function update($id, $data) {
        $this->db->where('order_id', $id);
        return $this->db->update('orders', $data);
    }

    public function delete($id) {
        $this->db->where('order_id', $id);
        return $this->db->delete('orders');
    }
}
