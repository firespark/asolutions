$(document).ready(function () {



	$('#suscribeForm').submit(function (e) {

		e.preventDefault();

		$('.suscribeForm.errorMessage').hide().html('');
		//$('#catalogLinkBlock').hide().html('');


		let str = $('#suscribeForm').serialize();

		str += '&action=send_subscription'

		$.ajax({
			type: 'POST',
			url: adminAjaxObj.ajaxUrl,
			dataType: 'json',
			data: str,
			success: function (data) {

				if (data.success == true) {
					const modalCatalog = document.querySelector('.modal-wrapper__catalog');
					const modalConfirm = document.querySelector('.modal-wrapper__confirm');

					if (modalCatalog) {
						modalCatalog.style.display = 'none';
					}

					if (modalConfirm) {
						modalConfirm.style.display = 'flex';
					}

					if(data.attrs.fileLink) {
						let linkBlockText = `<p>${data.attrs.beforeText}</p>`;
						linkBlockText += `<a href="${data.attrs.fileLink}" target="_blank">${data.attrs.linkText}</a>`;
						$('#catalogLinkBlock').fadeIn().html(linkBlockText).css("display", "flex");
					}

				}
				else {

					$('.suscribeForm.errorMessage').fadeIn().html(data.output);
				}
			}
		});

	});

	$('#suscribeFormFooter').submit(function (e) {

		e.preventDefault();

		$('.suscribeFormFooter.errorMessage').hide().html('');


		let str = $('#suscribeFormFooter').serialize();
		str += '&action=send_subscription'

		$.ajax({
			type: 'POST',
			url: adminAjaxObj.ajaxUrl,
			dataType: 'json',
			data: str,
			success: function (data) {

				if (data.success == true) {

					const modalCatalog = document.querySelector('.modal-wrapper__catalog');
					const modalConfirm = document.querySelector('.modal-wrapper__confirm');

					if (modalCatalog) {
						modalCatalog.style.display = 'none';
					}

					if (modalConfirm) {
						modalConfirm.style.display = 'flex';
					}

				}
				else {

					$('.suscribeFormFooter.errorMessage').fadeIn().html(data.output);
				}
			}
		});

	});

});

