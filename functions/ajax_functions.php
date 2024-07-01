<?php
function custom_send_subscription_ajax(){
 
    global $optionsArr;
    
    require_once(__DIR__ . '/../classes/SendSubscription.php');
    
    $send = new SendSubscription($_POST);
    $data = $send->get_output();

    if($send->is_success()) {
        $send->send_email($optionsArr);
    }

    echo $data;
 
    die;
}

function admin_remove_subscription(){
    
    require_once(__DIR__ . '/../classes/RemoveSubscription.php');
    
    $rs = new RemoveSubscription($_POST);
    $data = $rs->get_output();

    echo $data;
 
    die;

}

function admin_remove_many_subscriptions(){
    
    require_once(__DIR__ . '/../classes/RemoveManySubscribtions.php');
    
    $rs = new RemoveManySubscribtions($_POST);
    $data = $rs->get_output();

    echo $data;
 
    die;
    

}