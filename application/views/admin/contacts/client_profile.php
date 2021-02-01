
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
                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Profile</a>
                  <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Contacts</a>
                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Statements</a>
                  <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Invoices</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                    <div class="card">
        <div class="card-header">
          <h4>Profile</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="<?php echo base_url('admin/add_client_data'); ?>" method="POST" enctype="multipart/form-data">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Customer Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Billing & Shipping</a>
              </li>
           
            </ul>
            <!-- <div class="tab-custom-content">
              <p class="lead mb-0">Custom Content goes here</p>
            </div> -->
            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Company</label>
               <input type="text" name="company" class="form-control" >
               <span class="text-danger"><?php echo form_error('company'); ?></span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Vat Numnber</label>
                     <input type="text" name="vat" class="form-control" >               
                </div>
                 <div class="form-group">
                  <label>Phone</label>
                 <input type="text" name="phonenumber" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Website</label>
                 <input type="text" name="website" class="form-control" >                
                </div>
                  <div class="form-group">
                  <label>Groups</label>
                  <select class="form-control group" name="groups[]" style="width: 100%;" multiple>
                    <?php foreach($groups as $group) {
                      ?>
                    <option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>
                    <?php 
                    }?>
                    
                  </select>            
                </div>
                  <div class="form-group">
                  <label>Currency</label>
                  <select class="form-control select2bs4" name="default_currency" style="width: 100%;">
                   <?php foreach($currencies as $currency) {
                      ?>
                    <option value="<?php echo $currency['id']; ?>"><?php echo $currency['name']; ?></option>
                    <?php 
                    }?>
                  </select>            
                </div>
                <div class="form-group">
                  <label>Default Language</label>
                 <!--  <select class="form-control select2bs4" name="default_language" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    
                  </select>  -->  
                  <select name="default_language" id="default_language" class="form-control selectpicker" >
                      
                        <?php foreach($this->app->get_available_languages() as $availableLanguage){
                           $selected = '';
                           if(isset($client)){
                              if($client->default_language == $availableLanguage){
                                 $selected = 'selected';
                              }
                           }
                           ?>
                        <option value="<?php echo $availableLanguage; ?>" <?php echo $selected; ?>><?php echo ucfirst($availableLanguage); ?></option>
                        <?php } ?>
                     </select>         
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                 <textarea id="w3review" class="form-control" name="address" >
                </textarea>
                </div>
                 <div class="form-group">
                  <label>State</label>
                 <input type="text" name="state" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>City</label>
                 <input type="text" name="city" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                 <input type="text" name="zip" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control select2bs4" name="country" style="width: 100%;">
                    <?php foreach($country as $countries){
                      ?>
                    <option value="<?php echo $countries['country_id'] ?>"><?php echo $countries['short_name'] ?></option>
                    <?php 
                    } ?>
                  </select>            
                </div>
              </div>

              <!-- /.col -->
            </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
              <div class="row">
              
                <div class="col-md-6">
                <div class="form-group">
                  <label>Street</label>
                 <textarea id="w3review" class="form-control" name="billing_street" >

                </textarea>
                </div>
                 <div class="form-group">
                  <label>State</label>
                 <input type="text" name="billing_state" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>City</label>
                 <input type="text" name="billing_city" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                 <input type="text" name="  billing_zip" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control select2bs4" name="billing_country" style="width: 100%;">
                    <?php foreach($country as $countries){
                      ?>
                    <option value="<?php echo $countries['country_id'] ?>"><?php echo $countries['short_name'] ?></option>
                    <?php 
                    } ?>
                  </select>            
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
               <div class="col-md-6">
                <div class="form-group">
                  <label>Street</label>
                 <textarea id="w3review" class="form-control" name="shipping_street" >

                </textarea>
                </div>
                 <div class="form-group">
                  <label>State</label>
                 <input type="text" name="shipping_state" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>City</label>
                 <input type="text" name="shipping_city" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Zip Code</label>
                 <input type="text" name="shipping_zip" class="form-control" >                
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control select2bs4" name="shipping_country" style="width: 100%;">
                    <?php foreach($country as $countries){
                      ?>
                    <option value="<?php echo $countries['country_id'] ?>"><?php echo $countries['short_name'] ?></option>
                    <?php 
                    } ?>
                  </select>            
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            
              </div>
            
            </div>
        </div>
        <!-- /.card-body -->
        <div class="btn-bottom-toolbar btn-toolbar-container-out text-right">
            <button class="btn btn-info only-save customer-form-submiter">
            Save            </button>
                        <button class="btn btn-info save-and-add-contact customer-form-submiter">
            Save and create contact            </button>
                     </div>
      </form>
      </div>
       <div class="card-footer">
                 <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
               
                </div>
    </div>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                     Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
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