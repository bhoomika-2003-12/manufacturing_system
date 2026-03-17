<div class="container mt-4">
    <h2 class="mb-4">Add Production</h2>
    <form action="<?php echo site_url('admin/save_production'); ?>" method="post">
        
        <!-- Product ID -->
        <div class="mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="text" name="product_id" id="product_id" class="form-control" required>
        </div>

        <!-- Start Date -->
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>

        <!-- End Date -->
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
        </div>

        <!-- Status (Radio Buttons) -->
        <div class="mb-3">
            <label class="form-label">Status</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status_active" value="Active" required>
                <label class="form-check-label" for="status_active">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status_inactive" value="Inactive">
                <label class="form-check-label" for="status_inactive">Inactive</label>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Save Production</button>
    </form>
</div>
