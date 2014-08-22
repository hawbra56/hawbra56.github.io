$().ready(function() {
  
  $.validator.addMethod(
            'defaultCheck', function (value, element) {
                if (element.value == element.defaultValue) {
                    return false;
                }
                return true;
  });

	// validate first form or any basic form
	$("#ContactForm").validate({
		rules: {
			email: {
				required: true,
				email: true
			}
			
		},
		
		messages: {
			FirstName: "Please enter your First Name",
			LastName: "Please enter your Last Name",
			email: "Please enter a valid email address",
			Message: "Please enter a message"
		}
	});
	
	
});