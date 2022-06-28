$(function() {
    $('.perposalAccepted').click(function() {
        var approve = 1;
        var id = $(this).data('id');
        perposalAcceptedURL = perposalAccepted.replace(':id', id);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: perposalAcceptedURL,
            data:  {"approve": approve},
            success: function(data){
                $('#identityModal').modal('show')
            if (approve == 1) {
                    $('.perposalAccepted').html('Accepted');
                    $('.perposalAccepted').removeClass("text-theme-6");
                    $('.perposalAccepted').addClass("text-theme-9");
                    $('.perposalAccepted').attr('checked',1);
                    

            } else {
                    $('.perposalAccepted').html('Accept');
                    $('.perposalAccepted').removeClass("text-theme-9");
                    $('.perposalAccepted').addClass("text-theme-6");
                    $('.perposalAccepted').attr('unchecked',0);
                }
            }, error: function (error) {

                            }

        });

    })
  });

