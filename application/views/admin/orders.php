<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Orders</h2>
        <a href="<?php echo site_url('admin/add_order'); ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Order
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width:5%">ID</th>
                        <th style="width:15%">Product ID</th>
                        <th style="width:25%">Employee</th>
                        <th style="width:15%">Status</th>
                        <th style="width:15%">Total</th>
                        <th style="width:25%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($orders)): foreach($orders as $o): ?>
                        <tr>
                            <td><?php echo $o->order_id; ?></td>
                            <td><?php echo $o->product_id; ?></td>
                            <td><?php echo $o->employee; ?></td>
                            <td><?php echo $o->status; ?></td>
                            <td>₹<?php echo number_format($o->total, 2); ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/edit_order/'.$o->order_id); ?>" 
                                   class="btn btn-sm btn-warning me-1">
                                   <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?php echo site_url('admin/delete_order/'.$o->order_id); ?>" 
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this order?');">
                                   <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted">No orders available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
