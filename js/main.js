

if($('.card-brand').text() == ''){
$('.card').css({'display': 'none'});
}

	$(document).ready(function() {

		$('#uploadFile').submit(function(event) {

			event.preventDefault();

			$.ajax({
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					$('.card').css({'display': 'block'});
					$('.price').text(data[1] + '₽' );
					$('.table-vendor').text(data[2][12]);
					$('.tara').text(data[2][13]);
					$('.card-brand').text(data[2][14]);
					$('.card-description').text(data[2][17]);
					$('.full-product-description').text(data[2][18]);
					$('.areas-of-use-title').text(data[2][7] + ':' );
					$('.areas-of-use-description').text(data[2][19]);
					$('.water-wreeding-title').text(data[2][8] + ':' );
					$('.water-wreeding-description').text(data[2][20]);
					$('.recommendations-for-use-title').text(data[2][9] + ':' );
					$('.recommendations-for-use-description').text(data[2][21]);
					$('.warning-title').text(data[2][10]);
					$('.warning-description').text(data[2][22]);
				},
			});
		});
	});
