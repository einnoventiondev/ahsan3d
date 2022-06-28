$(function() {
    $('.perposalNotAccepted').click(function() {
        var approve = 0;
        var id = $(this).data('id');
        perposalNotAcceptedURL = perposalAccepted.replace(':id', id);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: perposalNotAcceptedURL,
            data:  {"approve": approve},
            success: function(data){
                if (approve == 0) {
                    $('.perposalNotAccepted').html('Declined');
                    $('.perposalAccepted').html('Accept');
                    $('.perposalNotAccepted').removeClass("text-theme-9");
                    $('.perposalNotAccepted').addClass("text-theme-6");
                    $('.perposalNotAccepted').attr('unchecked',0);
                } 
                
            }, error: function (error) {

                            }

        });

    })
  });

