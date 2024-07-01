<?php

require_once(__DIR__ . '/BaseAjax.php');

class RemoveManySubscribtions extends BaseAjax
{


        protected function remove()
    {
        $ids = implode( ',', array_map( 'absint', $this->post['ids'] ) );

        if($this->wpdb->query( "DELETE FROM " . $this->wpdb->prefix . "subscription_emails WHERE ID IN($ids)" )) {
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

            if ($this->post['ids']) {
                $this->remove();
            }
            else {
                $this->setSuccess();
            }

            
        }

    }


    
}

