
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact List</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact List</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Contact List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
      <table id="book-table" class="table table-bordered table-striped table-hover">
     <thead>
     <tr>
      <th>#</th>
      <th>Company</th>
      <th>Primary Contact</th>
      <th>Primary Email</th>
      <th>Phone</th>
      <th>Active</th>
      <th>Groups</th>
      <th>Date Created</th>
    </tr>
     </thead>
     <tbody>
      <?php foreach($data as  $customer) {
        echo "<pre>";
        print_r($customer);
        die;
       ?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php 
        
      } ?>
     </tbody>
     </table>      
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="<?php echo base_url() ?>assets/plugins/jsgrid/demos/db.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable();
});
</script>

