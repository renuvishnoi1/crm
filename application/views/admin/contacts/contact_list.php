
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
          <div class="_buttons">
              <a href="<?php echo base_url('admin/add_contact') ?>" class="btn btn-info mright5 test pull-left display-block">
                     New Customer</a>
              <a href="" class="btn btn-info pull-left display-block mright5 hidden-xs">
                     Import Customers</a>
              <a href="" class="btn btn-info pull-left display-block mright5">
                     Contacts</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         
         <br>
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
      <?php foreach($records as $value){
        // echo "<pre>";
        // print_r($value);
       ?>
      
      <tr>
       
        <td></td>
        <td><?php echo $value['company']; ?></td>
         <td><?php echo $value['firstname']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><?php echo $value['phonenumber']; ?></td>
        <td></td>
        <td></td>
        <td><?php echo $value['datecreated']; ?></td>
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

