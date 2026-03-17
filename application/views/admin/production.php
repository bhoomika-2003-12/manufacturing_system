<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Production</h2>
        <a href="<?php echo site_url('admin/add_production'); ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Production
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width:5%">ID</th>
                        <th style="width:15%">Product ID</th>
                        <th style="width:20%">Start Date</th>
                        <th style="width:20%">End Date</th>
                        <th style="width:15%">Status</th>
                        <th style="width:25%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($production)): foreach($production as $pr): ?>
                        <tr>
                            <td><?php echo $pr->production_id; ?></td>
                            <td><?php echo $pr->product_id; ?></td>
                            <td><?php echo $pr->start_date; ?></td>
                            <td><?php echo $pr->end_date; ?></td>
                            <td><?php echo $pr->status; ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/edit_production/'.$pr->production_id); ?>" 
                                   class="btn btn-sm btn-warning me-1">
                                   <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?php echo site_url('admin/delete_production/'.$pr->production_id); ?>" 
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this record?');">
                                   <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted">No production records available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
