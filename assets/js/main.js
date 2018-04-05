$(function () {

	$("#country_id").change(function () {
		$("#state_id > option").remove();
		$("#state_id").append('<option value="0">Select State/Region</option>');

		$.ajax({
			url: "/search/regions/" + $("#country_id").val(),
			success: function (result) {
				var regions = JSON.parse(result);

				for (var i = 0; i < regions.length; i++) {
					$('#state_id').append('<option value="' + regions[i].id + '">'
							+ regions[i].region + '</option>');
				}
			}
		});
	});

	$("#state_id").change(function () {
		$("#city_id > option").remove();
		$("#city_id").append('<option value="0">Select City</option>');

		$.ajax({
			url: "/search/cities/" + $("#state_id").val(),
			success: function (result) {
				var cities = JSON.parse(result);

				for (var i = 0; i < cities.length; i++) {
					$('#city_id').append('<option value="' + cities[i].id + '">'
							+ cities[i].city + '</option>');
				}
			}
		});
	});

});
