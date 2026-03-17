<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            padding: 20px;
        }
        .header {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h4 {
            margin: 0;
        }
        .header .nav-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }
        .header .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <!-- Header -->
    <div class="row">
        <div class="col-12 header">
            <h4>Welcome, Admin</h4>
            <div class="nav-links">
                <a href="<?php echo site_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4 class="text-center">Admin Panel</h4>
            <a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fas fa-home"></i> Dashboard</a>
            <a href="<?php echo site_url('admin/products'); ?>"><i class="fas fa-box"></i> Products</a>
            <a href="<?php echo site_url('admin/orders'); ?>"><i class="fas fa-shopping-cart"></i> Orders</a>
            <a href="<?php echo site_url('admin/production'); ?>"><i class="fas fa-industry"></i> Production</a>
        </div>

        <!-- Content -->
        <div class="col-md-10 content">
            <?php 
                if (isset($view)) {
                    $this->load->view($view, isset($data) ? $data : []);
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>
