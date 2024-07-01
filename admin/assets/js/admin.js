
$(document).ready(function () {
  
  	$('#searchSubscription').submit(function(e){
  		e.preventDefault();
  		const search = $('#searchInputSubscription').val();
  		const page = $('#searchInputPage').val();
  		if(search) {
  			window.location.href="/wp-admin/admin.php?page=" + page + "&search=" + search;
  		}
  	});

  	$('#checkAllInputs').change(function() {
        if(this.checked) {
            $( '.checkCargoInput' ).prop( 'checked', true );
        }
        else {
        	$( '.checkCargoInput' ).prop('checked', false);
        }
             
    });

    

	$('.delete_subscription').click(function(){
		if (confirm(adminAjaxObj.textDeletePost)) {
			var subscription_id = $(this).data('id');
			$.ajax({
					type: "POST",
					url: adminAjaxObj.ajaxUrl,
					dataType: 'json',
					data: {subscription_id, action: 'admin_remove_subscription'},
					success: function(data) {
						if (data.success == true) {
							$(".tr" + subscription_id).fadeOut();
						}
						else alert(data.output);
						
						
						
					}
				});
		} else {
		return false;
		}

	});

	$('#deleteSelectedSubscriptions').click(function(e){
    	e.preventDefault();
		if (confirm(adminAjaxObj.textDeletePosts)) {
			const ids = [];
			$( ".checkCargoInput" ).each(function() {
				if(this.checked) {
					ids.push($( this ).data('id'));
			  	}
			});


			$.ajax({
				type: "POST",
				url: adminAjaxObj.ajaxUrl,
				dataType: 'json',
				data: {ids, action: 'admin_remove_many_subscriptions'},
				success: function(data) {
					if (data.success == true) {
						window.location.reload();
					}
					else alert(data.output);
				}
			});
		} else {
		return false;
		}

	});

		
});