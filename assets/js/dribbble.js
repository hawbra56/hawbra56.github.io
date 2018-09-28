// Set the Access Token
var accessToken = '3be692bf52faba1a2d5d828c927b0116ec27756187e025d84ce9e44552c2d687';

// Call Dribble v2 API
$.ajax({
    url: 'https://api.dribbble.com/v2/user/shots?per_page=4&access_token='+accessToken,
    dataType: 'json',
    type: 'GET',
    success: function(data) {  
      if (data.length > 0) { 
        $.each(data.reverse(), function(i, val) {                
          $('#shots').prepend(
            '<a class="shot" target="_blank" href="'+ val.html_url +'" title="' + val.title + '"><div class="title">' + val.title + '</div><img src="'+ val.images.hidpi +'"/></a>'
            )
        })
      }
      else {
        $('#shots').append('<p>No shots yet!</p>');
      }
    }
});


// API Variables

//Image width 800x600 (Animated)
  // val.images.hidpi 
//Image width 400x300
  // val.images.normal
//Image width 200x150
  // val.images.teaser
//Title
  // val.title
//Description
  // val.description
//URL
  // val.html_url