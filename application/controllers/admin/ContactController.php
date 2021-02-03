<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactsModel');
       
    }

    public function index()
    {
        $data['title'] = "Customers";
        $data['records']= $this->ContactsModel->getClients();

      $this->load->view('admin/contacts/client_list',$data); 
    }
    public function addClient(){
       $data['groups'] = $this->ContactsModel->get_costomer_groups();
       $data['country'] = $this->ContactsModel->get_countries();
       $data['currencies'] = $this->ContactsModel->get_currencies();
       $data['title'] = "Add Customers";
      $this->load->view('admin/contacts/add_client',$data);
    }
    public function insertClient(){
      
      if ($this->form_validation->run('add_client') == FALSE)
                {
                  $data['title'] = "Add Customers";
              $this->load->view('admin/contacts/add_client',$data);
                }
                else
                {

                $company= $this->input->post('company');
                $vat= $this->input->post('vat');
                $phonenumber= $this->input->post('phonenumber');
                $website= $this->input->post('website');               
                $group = $this->input->post('groups');
                $default_currency = $this->input->post('default_currency');
                $default_language = $this->input->post('default_language');
                $address = $this->input->post('address');
                $state= $this->input->post('state');
                $city = $this->input->post('city');
                $zip = $this->input->post('zip');
                $country = $this->input->post('country');
                $billing_street = $this->input->post('billing_street');
                $billing_state = $this->input->post('billing_state');
                $billing_city = $this->input->post('billing_city');
                $billing_zip = $this->input->post('billing_zip');
                $billing_country = $this->input->post('billing_country');
                $shipping_street = $this->input->post('shipping_street');
                $shipping_state = $this->input->post('shipping_state');
                $shipping_city = $this->input->post('shipping_city');
                $shipping_zip = $this->input->post('shipping_zip');
                $shipping_country = $this->input->post('shipping_country');
                $datecreated = date('Y-m-d H:i:s');
                $data = array(
                  'company'=>$company,
                  'vat'=>$vat,
                  'phonenumber'=>$phonenumber,
                  'website'=>$website,
                  'default_currency'=>$default_currency,
                  'default_language' =>$default_language,
                  'address'=>$address,
                  'state'=>$state,
                  'city'=>$city,
                  'zip'=>$zip,
                  'country'=>$country,
                  'billing_street'=>$billing_street,
                  'billing_state'=>$billing_state,
                  'billing_city'=>$billing_city,
                  'billing_zip' =>$billing_zip,
                  'billing_country'=>$billing_country,
                  'shipping_street'=>$shipping_street,
                  'shipping_state' =>$shipping_state,
                  'shipping_city'=>$shipping_city,
                  'shipping_zip'=>$shipping_zip,
                  'shipping_country'=>$shipping_country,
                  'datecreated'=>$datecreated
                );

                $insert_contact = $this->ContactsModel->addClient($data);
                if($insert_contact){
                  if(is_array($group)){

                  foreach ($group as $key => $value) {
                    $groupdata=array();
                    $groupdata['customer_id']=$insert_contact;
                    $groupdata['groupid']=$value;
                    $group= $this->ContactsModel->add_group($groupdata);
                    // print_r($group);
                    // die('hi');
                    if($group){
                      redirect('admin/clients');
                    }
                  }
                   }
                   redirect('admin/clients');
                }
                }
            }
            public function allContact(){
              $data['title'] = "Contacts";
               $data['records']= $this->ContactsModel->get_all_contacts();
              $this->load->view('admin/contacts/contact_details/all_contact',$data);
            }
            /****edit customer *****/
            public function editClient($id){
              if($id != ''){
                $data['title'] = "Edit Costomer";
                $data['contact'] = $this->ContactsModel->getDataById($id);
                 $data['groups'] = $this->ContactsModel->get_costomer_groups();
                 $data['country'] = $this->ContactsModel->get_countries();
                 $data['currencies'] = $this->ContactsModel->get_currencies();
              
                 $this->load->view('admin/contacts/edit_client_profile',$data);
              }
              /********update customer *****/

            }
            // delete customer and customer's contacts
            public function deleteClient($customer_id){
              $deleteClient = $this->ContactsModel->deleteClient($customer_id);
              if($deleteClient){
                return redirect('admin/clients');
              }
            }

             public function viewContactlistById($id){

              $data['contact'] = $this->ContactsModel->getDataById($id);
              $data['records']= $this->ContactsModel->get_all_contacts($id);
            //   echo "<pre>";
            // print_r($data);
            // die;
              $this->load->view('admin/contacts/edit_client_contact',$data);
        
      }
      // delete contact by customer id and contact id
         public function deleteContact($customer_id,$contact_id){
              $contactDelete = $this->ContactsModel->deleteContact($customer_id,$contact_id);
              if($contactDelete){
                return redirect('admin/all_contact');
              }

            }
        public function addContact(){
            $data['title'] = "Add Contact";
              $this->load->view('admin/contacts/contact_details/add_contact',$data);
            }
            public function inserContact(){

            }   
       public function editContact($id){
        $data['title'] = "Edit Contact";
        $data['contact'] = $this->ContactsModel->getContactById($id);
        $this->load->view('admin/contacts/contact_details/edit_contact',$data);
      }
       


      public function updateContact(){
       if ($this->form_validation->run('edit_contact') == FALSE){
           
       }else{
         $f_name = $this->input->post('firstname');
         $l_name = $this->input->post('lastname');
         $phone = $this->input->post('phonenumber');
         $email = $this->input->post('email');
         $position = $this->input->post('title');
         $direction = $this->input->post('direction');
         $pass = $this->input->post('password');
         $id = $this->input->post('id');
         $data['firstname'] = $f_name;
         $data['lastname'] = $l_name;
         $data['email'] = $email;
         $data['title'] = $position;
         $data['direction'] = $direction;

         if(!empty($_FILES['image']['name'])){ 
          // File upload config 
                 $filename =$_FILES['image']['name'];
                $config['upload_path']   = 'uploads/client_profile_image/'; 
                $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PN'; 
                  // print_r($config);
                  // die;
                // Load and initialize upload library 
                $this->load->library('upload', $config);
                $image=$this->upload->do_upload();

                 
         }
         print_r($image);
         $udateData = $this->ContactsModel->updateContact($id,$data);
       }
      }
     
      public function updateClientStatus($client_id){

    $status = $this->input->post('status');
   
    $status= $this->ContactsModel->updateClientStatus($client_id,$status);
    if($status){
      redirect('admin/clients');
    }
      }
      public function updateClient(){


      }
      public function resizeImage($filename)
   {
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/thumbnail/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '_thumb',
          'width' => 150,
          'height' => 150
      );


      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }


      $this->image_lib->clear();
   }

    
   
   
}
