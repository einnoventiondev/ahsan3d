$(function() {
    $('#p_order_id').change(function() {

        $('#p_order_id_pub').val(' ');
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
			$('#p_phone').val(user.phone)
            $('#p_phone_val').val(user.phone)
            }, error: function (error) {
                            }

        });

    });


    $('#p_order_id_pub').change(function() {
        $('#p_order_id').val(' ');
        let order_id_pub =  $('#p_order_id_pub').val()
        userByOrderURL_pub = userByOrder_pub.replace(':id', order_id_pub);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: userByOrderURL_pub,
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

