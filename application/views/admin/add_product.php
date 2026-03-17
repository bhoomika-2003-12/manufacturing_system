<div class="container mt-4">
    <h2>Add Product</h2>
    <form method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock Quantity</label>
            <input type="number" name="stock_quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="<?php echo site_url('admin/products'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
