
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <!-- <div class="_buttons">
              <a href="<?php //echo base_url('admin/add_contact'); ?>" class="btn btn-info mright5 test pull-left display-block">
                     Add Contact</a>
             
          </div> -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         
         <br>
      <table id="book-table" class="table table-bordered table-striped table-hover">
     <thead>
     <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Position</th>
      <th>Last Login</th>
      <th>Active</th>
      <th>Action</th>  
     
    </tr>
     </thead>
     <tbody>
      <?php foreach($records as $value){
      
       ?>
      
      <tr>
       
        <td></td>
       
         <td>
          <img src="" alt="" class="client-profile-image-small mright5">
          <a href="<?php echo base_url(); ?>"><?php echo $value['firstname']; ?></a>
          </td>
         <td><?php echo $value['lastname']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><?php echo $value['phonenumber']; ?></td>
        
        <td><?php echo $value['title']; ?></td>
        <td>
          <?php echo $value['last_login']; ?></td>
          <td></td>
        <td>
          <a href="<?php echo base_url('admin/edit_contact/') ?><?php echo $value['id']; ?>" title="show">
                            Edit
                        </a>
                        <a href="" title="show" class="">
                            delete
                        </a>
       </td>
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

