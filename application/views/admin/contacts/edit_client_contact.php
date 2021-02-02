
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     <!--    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact List</li>
            </ol>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="content">
            <div class="card-body">
            <h4>Profile</h4>
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link" href="<?php echo base_url('admin/edit_client/') ?><?php echo $contact->userid ?>">Profile</a>
                  
                  <a class="nav-link" href="<?php echo base_url('admin/edit_contact_list/') ?><?php echo $contact->userid ?>">Contacts</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                    <div class="card">
                <div class="card-header">
                  <h4>Contacts</h4>
                </div>
        <!-- /.card-header -->
        <!-- card-body -->
         <div class="card-body">
         <div class="_buttons">
            <a href="<?php echo base_url('admin/add_contact') ?>" class="btn btn-info mright5 test pull-left display-block">
                     New Contact</a>
          </div>
         <br>
          <table id="book-table" class="table table-bordered table-striped table-hover">
         <thead>
         <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Email</th>
           <th>Position</th>
          <th>Phone</th>
          <th>Active</th>
         <th>Last Login</th>
        </tr>
         </thead>
         <tbody>
          <?php foreach($records as $value){
          
           ?>
          
          <tr>       
        <td></td>
       
         <td>
          <img src="" alt="" class="client-profile-image-small mright5">
          <?php echo $value['firstname']." ".$value['lastname']; ?>
          </td>
         
        <td><?php echo $value['email']; ?></td>
         <td><?php echo $value['title']; ?></td>
        <td><?php echo $value['phonenumber']; ?></td>
         <td></td>
        <td>
          <?php echo $value['last_login']; ?></td>
      </tr>
      <?php 
        
      } ?>
     </tbody>
     </table>      
        </div>
        <!-- /.card-body -->
        
      </form>
      </div>
       <div class="card-footer">
                 <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
               
                </div>
    </div>
                  </div>
                
                </div>
              </div>
            </div>
           
          </div>
           </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 
 <?php init_tail(); ?>

 <script type="text/javascript">
        $(document).ready(function() {
            $('.group').select2();
        });

    </script>