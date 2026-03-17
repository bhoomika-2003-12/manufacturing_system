<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Products</h2>
        <a href="<?php echo site_url('admin/add_product'); ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Product
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width:5%">ID</th>
                        <th style="width:25%">Name</th>
                        <th style="width:20%">Category</th>
                        <th style="width:15%">Price</th>
                        <th style="width:15%">Stock</th>
                        <th style="width:20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($products)): foreach($products as $p): ?>
                        <tr>
                            <td><?php echo $p->product_id; ?></td>
                            <td><?php echo $p->name; ?></td>
                            <td><?php echo $p->category; ?></td>
                            <td>₹<?php echo number_format($p->price, 2); ?></td>
                            <td><?php echo $p->stock_quantity; ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/edit_product/'.$p->product_id); ?>" 
                                   class="btn btn-sm btn-warning me-1">
                                   <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?php echo site_url('admin/delete_product/'.$p->product_id); ?>" 
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this product?');">
                                   <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted">No products available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
