	$(document).ready(function () {		
	$.jribbble.getShotsByPlayerId('BradleyHawkins', function (playerShots) {
	    var html = [];
	
	    $.each(playerShots.shots, function (i, shot) {
	        html.push('<li class="grid-4"><a href="' + shot.url + '">');
	        html.push('<img src="' + shot.image_url + '" ');
	        html.push('alt="' + shot.title + '"></a></li>');
	    });
	
	    $('#portfolio').html(html.join(''));
	}, {page: 1, per_page: 6});
});	
