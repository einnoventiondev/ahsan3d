$(function() {
    $('.approved').change(function() {
console.log('ok');
        var approve = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        reigisterApproveURL = reigisterApprove.replace(':id', id);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: reigisterApproveURL,
            data: approve,
            success: function(data){
              if (data == 1) {
                    $('.text-'+id).html('Approved');
                    $('.text-'+id).removeClass("text-theme-6");
                    $('.text-'+id).addClass("text-theme-9");
                    $('.text-'+id).attr('checked',1);

             } else {
                    $('.text-'+id).html('Not Approved');
                    $('.text-'+id).removeClass("text-theme-9");
                    $('.text-'+id).addClass("text-theme-6");
                    $('.text-'+id).attr('unchecked',0);
                }
            }, error: function (error) {

                            }

        });

    })
  });

