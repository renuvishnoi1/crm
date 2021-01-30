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
        $data['records']= $this->ContactsModel->get_contacts();

      $this->load->view('admin/contacts/contact_list',$data); 
    }
    public function add_contact(){
       $data['groups'] = $this->ContactsModel->get_costomer_groups();
       $data['country'] = $this->ContactsModel->get_countries();
       $data['currencies'] = $this->ContactsModel->get_currencies();
       // echo "<pre>";
       // print_r($data);
       // die();
      $this->load->view('admin/contacts/add_contact',$data);
    }
    public function insert_contact_data(){
      // echo "<pre>";
      // print_r($_POST);
      // die();
      $this->form_validation->set_rules('company','Company','trim|required');
      if ($this->form_validation->run('add_contact') == FALSE)
                {
              $this->load->view('admin/contacts/add_contact');
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
                  'shipping_country'=>$shipping_country
                );

                $insert_contact = $this->ContactsModel->addContact($data);
                if($insert_contact){
                  if(is_array($group)){


                  foreach ($group as $key => $value) {
                    $groupdata=array();
                    $groupdata['customer_id']=$insert_contact;
                    $groupdata['groupid']=$value;
                    $this->ContactsModel->add_group($groupdata);
                  }
                   }
                }
                }
    }

    
   
   
}
