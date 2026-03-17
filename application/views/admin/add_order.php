<div class="container mt-4">
    <h2>Add Order</h2>
    <form method="post">
        <div class="mb-3">
            <label>Product ID</label>
            <input type="number" name="product_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Employee</label>
            <input type="text" name="employee" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Total</label>
            <input type="number" step="0.01" name="total" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="<?php echo site_url('admin/orders'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
