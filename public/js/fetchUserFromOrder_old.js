$(function() {
	$('#p_order_id').change(function() {
        let order_id =  $('#p_order_id').val()
		//alert(order_id);
        userByOrderURL = userByOrder.replace(':id', order_id);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: userByOrderURL,
            success: function(user){
            $('#p_user').val(user.name)
            $('#p_user_val').val(user.name)
            $('#p_email').val(user.email)
            $('#p_email_val').val(user.email)
            $('#p_phone').val(user.phone)
            $('#p_phone_val').val(user.phone)
            }, error: function (error) {
                            }

        });

    })
  });




/*
$(function() {
    $('#p_order_id').change(function() {
        let order_id =  $('#p_order_id').val()
        userByOrderURL = userByOrder.replace(':id', order_id);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: userByOrderURL,
            success: function(user){
            $('#p_user').val(user.name)
            $('#p_user_val').val(user.name)
            $('#p_email').val(user.email)
            $('#p_email_val').val(user.email)

            }, error: function (error) {
                            }

        });

    })
  });
*/
