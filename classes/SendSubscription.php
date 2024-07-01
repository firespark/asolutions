<?php

require_once(__DIR__ . '/BaseAjax.php');

class SendSubscription extends BaseAjax
{

    protected $attrs;

    protected $type;
    protected $email;
    
    public function __construct($post)
    {
        parent::__construct($post);
        $this->attrs = [];
    }


    protected function validate(): bool
    {

        if(!empty($this->post) && isset($this->post['type']) && $this->post['type'] !== null) {

            if(isset($this->post['email']) && $this->post['email'] !== null) {
                
                return true;
            }
            $this->setOutputMessage(__('Wrong Email', 'asolutions'));
            return false;
        }
        return false;
        
    }

    protected function get_save_post_data()
    {
        $this->type = get_safe_post($this->post['type']);
        $this->email = get_safe_post($this->post['email']);
    }

    protected function is_catalog(): string
    {
        return $this->type === 'catalog';
    }

    protected function set_catalog_data()
    {
        if(isset($this->post['id']) && $this->post['id']) {
            $id = get_safe_post($this->post['id']);
            if($id !== null) {
                $productArr = get_fields($id);
                if(isset($productArr['product_file'])) {
                    $this->attrs['fileLink'] = $productArr['product_file']['url'];
                    $this->attrs['linkText'] = $productArr['product_file_text'];
                    $this->attrs['beforeText'] = $productArr['product_file_text_before'];
                }
            }
        }
    }

    protected function get_subscription_id()
    {
        return $this->wpdb->get_var("SELECT id FROM " . $this->wpdb->prefix . "subscription_emails WHERE email = '" . $this->email . "'" . " AND type = '" . $this->type . "'");
    }

    protected function insert_subscription()
    {
        if($this->wpdb->insert( $this->wpdb->prefix . 'subscription_emails', [
            'email' => $this->email,
            'type' => $this->type,
        ] )) {
            $this->setSuccess();
         }
        else {
            $this->setOutputMessage($this->wpdb->last_error);
        }
    }

    protected function subscription_id_handle()
    {
        $subscription_id = $this->get_subscription_id();

        if (!$subscription_id) {
                
            $this->insert_subscription();
        }
        else {
            $this->setSuccess();
        }
    }


    protected function handle()
    {
        if($this->validate()){

            $this->get_save_post_data();

            if($this->is_catalog()) {
                $this->set_catalog_data();
            }

            $this->subscription_id_handle();
        }

    }

    

    public function send_email($optionsArr)
    {
        $title = ($this->type === 'catalog') ? $optionsArr['text_modal_title'] : $optionsArr['text_subscription_title'];
        
        $from = get_option('from');
        $to = get_option('admin_email');
        $headers = "Content-Type: text/html; charset=UTF-8";
        $subject = get_bloginfo('name') . '. ' . $title;  
                
        $msg = "<p>" . __('Subject', 'asolutions') . ": " . $title . "</p>";
        $msg .= "<p>" . __('Email', 'asolutions') . ": " . $this->email . "</p>";
                        
        wp_mail( $to, $subject, $msg, $headers ); 
    }
}

