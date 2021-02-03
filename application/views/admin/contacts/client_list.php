
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer List</h1>
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
              <a href="<?php echo base_url('admin/add_client') ?>" class="btn btn-info mright5 test pull-left display-block">
                     New Customer</a>
              <a href="" class="btn btn-info pull-left display-block mright5 hidden-xs">
                     Import Customers</a>
              <a href="<?php echo base_url('admin/all_contact') ?>" class="btn btn-info pull-left display-block mright5">
                     Contacts</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
         
         <br>
         <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped table-hover ">
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
      <th>Action</th>
    </tr>
     </thead>
     <tbody>
      <?php foreach($records as $value){
        // echo "<pre>";
        // print_r($value);
       ?>
      
      <tr>
       
        <td><?php echo $value['userid']; ?></td>
        <td><?php echo $value['company']; ?></td>
         <td><?php echo $value['firstname']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><?php echo $value['phonenumber']; ?></td>
        <td></td>
        <td></td>
        <td><?php echo $value['datecreated']; ?></td>
        <td>
          <a href="<?php echo base_url('admin/edit_client/') ?><?php echo $value["userid"]; ?>" title="show">view </a>
          <a href="<?php echo base_url('admin/edit_client/') ?><?php echo $value["userid"]; ?>" title="show">contacts</a>
          <a href="<?php echo base_url('admin/delete_client/') ?><?php echo $value["userid"]; ?>" title="show" class="">delete</a>
       </td>
      </tr>
      <?php 
        
      } ?>
     </tbody>
     </table> 
     </div>     
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 <?php init_tail(); ?>
<!-- page script -->


