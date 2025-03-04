
<h1><?php echo $admin_title;?></h1>



<form class="form-inline mb-3" id="searchSubscription">
	<input id="searchInputPage" type="hidden" value="<?php echo $searchInputPage;?>">
  
  	<div class="form-group mb-2">
   
    	<input id="searchInputSubscription" type="text" class="form-control mr-2" placeholder="<?php _e('Search', 'asolutions');?>" autocomplete="off" value="">
  	</div>
  	<button type="submit" class="btn btn-primary mb-2"><?php _e('Find Email', 'asolutions');?></button>
</form>

<div class="text-right mb-2 mr-2"><a href="#" id="deleteSelectedSubscriptions"><?php _e('Delete selected posts', 'asolutions');?></a></div>
<div class="table-responsive">
	<table id="clients" class="table table-striped table-bordered table-hover">
		<tr>
			<th>#</th>
			<th><?php _e('Email', 'asolutions');?></th>
			<th><?php _e('Date', 'asolutions');?></th>
			<th></th>
			<th><input type="checkbox" class="form-check-input" autocomplete="off" id="checkAllInputs"></th>
			
		</tr>
		<?php if(!empty($subscriptions)):?>
		<?php foreach ($subscriptions as $key => $subscription):?>
			<tr class="trLine tr<?php echo $subscription->id;?>">
				<td><?php echo $key + 1;?></td>
				<td><?php echo $subscription->email;?></td>
				<td><?php echo $subscription->create_date;?></td>
				<td class="delete_subscription" data-id="<?php echo $subscription->id;?>"><span style="cursor: pointer">&#10008;</span></td>
				<td><input type="checkbox" class="checkCargoInput" autocomplete="off" data-id="<?php echo $subscription->id;?>"></td>
				
			</tr>
			

		<?php endforeach;?>
		<?php endif;?>
		
	</table>
</div>
<div id="pagination"><?php echo $navi;?></div>