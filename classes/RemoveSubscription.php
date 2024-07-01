<?php

require_once(__DIR__ . '/BaseAjax.php');

class RemoveSubscription extends BaseAjax
{

    protected $subscription_id;


    protected function validate(): bool
    {

        if(!empty($this->post) && isset($this->post['subscription_id']) && $this->post['subscription_id'] !== null) {

            return true;
        }
        return false;
        
    }

    protected function get_save_post_data()
    {
        $this->subscription_id = get_safe_post($this->post['subscription_id']);
    }


    protected function remove()
    {
        if($this->wpdb->delete($this->wpdb->prefix . 'subscription_emails', [ 'id' => $this->subscription_id ] )) {
            $this->setSuccess();
        }
        else {
            if ($this->wpdb->last_error) {
                $this->setOutputMessage($this->wpdb->last_error);
            }
        }
    }

    

    protected function handle()
    {
        if($this->validate()){

            $this->get_save_post_data();

            $this->remove();
        }

    }



    
}
