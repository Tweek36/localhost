$(document).ready(function () {
	$("#form").on("submit", function (e) {
		$('.message').text('');
		if(!$('#phonechekbox').is(':checked')) {
			$('#tel').val('')
		}
		e.preventDefault();
		if ($('#login').val().length > 5 && $('#password').val() === $('#passwordchek').val() && $('#password').val().length > 5 && $('#email').val().length > 0 && (($('#phonechekbox').is(':checked') && $('#tel').val().length > 10) || !$('#phonechekbox').is(':checked'))) {
			let data = $(this).serialize()
			$.ajax({
				type: "POST",
				url: "/handler.php",
				data: data,
				success: function () {
					console.log(data)
				}
			});
		} else {
			$('.message').text('Не правильно. Попробуй ещё раз.');
		}
		
	});
})

$('#phonechekbox').on('click', function(){
	if ($('#phonechekbox').is(':checked')){
		$('.phoneinput').show(500)
	} else {
		$('.phoneinput').hide(500)
	}
})
