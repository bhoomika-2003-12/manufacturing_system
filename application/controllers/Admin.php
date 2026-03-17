<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Order_model');
        $this->load->model('Production_model');
    }

    // Render method: always pass $view and $data
    private function render($view, $data = []) {
        $data['view'] = $view;
        $this->load->view('admin/layout', $data);
    }

    // Dashboard
    public function dashboard() {
        $data['products']   = $this->Product_model->get_all();
        $data['orders']     = $this->Order_model->get_all();
        $data['production'] = $this->Production_model->get_all();
        $this->render('admin/dashboard', $data);
    }

    // Products
    public function products() {
        $data['products'] = $this->Product_model->get_all();
        $this->render('admin/products', $data);
    }

    public function add_product() {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => $this->input->post('price'),
                'stock_quantity' => $this->input->post('stock_quantity')
            ];
            $this->Product_model->insert($data);
            redirect('admin/products');
        } else {
            $this->render('admin/add_product');
        }
    }

    public function edit_product($id) {
        $product = $this->Product_model->get_by_id($id);
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => $this->input->post('price'),
                'stock_quantity' => $this->input->post('stock_quantity')
            ];
            $this->Product_model->update($id, $data);
            redirect('admin/products');
        } else {
            $this->render('admin/edit_product', ['product' => $product]);
        }
    }

    public function delete_product($id) {
        $this->Product_model->delete($id);
        redirect('admin/products');
    }

    // Orders
    public function orders() {
        $data['orders'] = $this->Order_model->get_all();
        $this->render('admin/orders', $data);
    }

    public function add_order() {
        if ($this->input->post()) {
            $data = [
                'product_id' => $this->input->post('product_id'),
                'employee'   => $this->input->post('employee'),
                'status'     => $this->input->post('status'),
                'total'      => $this->input->post('total')
            ];
            $this->Order_model->insert($data);
            redirect('admin/orders');
        } else {
            $this->render('admin/add_order');
        }
    }

    public function edit_order($id) {
        $order = $this->Order_model->get_by_id($id);
        if ($this->input->post()) {
            $data = [
                'product_id' => $this->input->post('product_id'),
                'employee'   => $this->input->post('employee'),
                'status'     => $this->input->post('status'),
                'total'      => $this->input->post('total')
            ];
            $this->Order_model->update($id, $data);
            redirect('admin/orders');
        } else {
            $this->render('admin/edit_order', ['order' => $order]);
        }
    }

    public function delete_order($id) {
        $this->Order_model->delete($id);
        redirect('admin/orders');
    }

    // Production
    public function production() {
        $data['production'] = $this->Production_model->get_all();
        $this->render('admin/production', $data);
    }

    public function add_production() {
        if ($this->input->post()) {
            $data = [
                'product_id' => $this->input->post('product_id'),
                'start_date' => $this->input->post('start_date'),
                'end_date'   => $this->input->post('end_date'),
                'status'     => $this->input->post('status')
            ];
            $this->Production_model->insert($data);
            redirect('admin/production');
        } else {
            $this->render('admin/add_production');
        }
    }

    public function edit_production($id) {
        $production = $this->Production_model->get_by_id($id);
        if ($this->input->post()) {
            $data = [
                'product_id' => $this->input->post('product_id'),
                'start_date' => $this->input->post('start_date'),
                'end_date'   => $this->input->post('end_date'),
                'status'     => $this->input->post('status')
            ];
            $this->Production_model->update($id, $data);
            redirect('admin/production');
        } else {
            $this->render('admin/edit_production', ['production' => $production]);
        }
    }

    public function delete_production($id) {
        $this->Production_model->delete($id);
        redirect('admin/production');
    }
}
