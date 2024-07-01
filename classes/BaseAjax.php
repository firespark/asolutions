<?php

class BaseAjax
{
    protected $wpdb;
    
    protected $post;
    protected $success;
    protected $output;

    
    public function __construct(array $post)
    {
        global $wpdb;
        $this->wpdb = $wpdb;

        $this->post = $post;
        $this->success = false;
        $this->output = __('Errors occurred during script execution. Please inform the site administrator about this issue', 'asolutions');
    }


    protected function validate(): bool
    {

        if(!empty($this->post)) {

            return true;
        }
        return false;
        
    }

     protected function setSuccess() {
        $this->success = true;
        $this->output = '';
    }

    protected function setUnSuccess() {
        $this->success = false;
    }

    protected function setOutputMessage(string $message) {
        $this->output = $message;
    }

    protected function handle() {
        $this->setSuccess();
    }
    
    public function is_success(): bool
    {
        return $this->success;
    }

    public function get_output()
    {
        $this->handle();

        return json_encode(['success' => $this->success, 'output' => $this->output]);
    }

    
}
