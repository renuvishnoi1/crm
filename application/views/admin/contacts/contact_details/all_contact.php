
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
                   <div class="table-responsive">
                    <table id="book-table" class="table table-bordered table-striped table-hover">
                     <thead>
                       <tr>
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
                        <td>
                          <?php if($value['profile_image'] !=''){
                            ?> <img src="<?php echo base_url('assets/uploads/profile_image/thumbnail/'); ?><?php echo $value['profile_image']; ?>" alt="profile image"  width="40" height="40" class="rounded-circle"><?php 
                          }else{?>
                            <img src="" alt="profile image"  width="40" height="40" class="rounded-circle">
                         <?php  } ?>
                         
                          <a href="<?php echo base_url('admin/edit_contact/') ?><?php echo $value['id']; ?>"><?php echo $value['firstname']; ?></a>
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
                            <a href="<?php echo base_url('admin/delete_contact/') ?><?php echo $value['userid']; ?>/<?php echo $value['id']; ?>" title="show" class="">delete</a>
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
        <script type="text/javascript">
          $(document).ready(function() {
            $('#book-table').DataTable();
          });
        </script>

