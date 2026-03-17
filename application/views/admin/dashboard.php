<div class="container mt-4">
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="row">
        <!-- Products Card -->
        <div class="col-md-4">
            <a href="<?php echo site_url('admin/products'); ?>" style="text-decoration:none;">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text">
                            <?php echo isset($products) ? count($products) : 0; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Orders Card -->
        <div class="col-md-4">
            <a href="<?php echo site_url('admin/orders'); ?>" style="text-decoration:none;">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Orders</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text">
                            <?php echo isset($orders) ? count($orders) : 0; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Production Card -->
        <div class="col-md-4">
            <a href="<?php echo site_url('admin/production'); ?>" style="text-decoration:none;">
                <div class="card text-dark bg-warning mb-3">
                    <div class="card-header">Production</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Production</h5>
                        <p class="card-text">
                            <?php echo isset($production) ? count($production) : 0; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
