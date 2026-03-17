<?php
class Production_model extends CI_Model {

    public function get_all() {
        return $this->db->get('production')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('production', ['production_id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('production', $data);
    }

    public function update($id, $data) {
        $this->db->where('production_id', $id);
        return $this->db->update('production', $data);
    }

    public function delete($id) {
        $this->db->where('production_id', $id);
        return $this->db->delete('production');
    }
}
