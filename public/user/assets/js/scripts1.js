$(function () {

  window.scrollTo(0, 0);

  var i = 0;
  function move() {

    $('.hide-on-load').css('opacity', 0);
    if (i == 0) {

      i = 1;
      var elem = document.getElementById("barw");
      var widths = 1;
      var id = setInterval(frame, 10);
      function frame() {
        if (widths >= 100) {
          clearInterval(id);
          i = 0;
          $(".main-progress").fadeTo(1200, 0);
          // $('#loading').fadeOut(1000);
          $('.hide-on-load').fadeTo(4000, 1);

    // Public Services Reject button click function
    $("#publicPaymentModal .reject").click(function () {
        $("#publicPaymentModal .conditional-blur").addClass("blur");
        $("#publicPaymentModal .reject-reason").removeClass("d-none");
        $("#publicPaymentModal")
            .find(".accept, .reject, .offer-price, .payment, .next-one")
            .addClass("d-none");
        $("#publicPaymentModal").find(".submit").removeClass("d-none");
        $("#publicPaymentModal").find(".conditional-text").addClass("d-none");
        $("#publicPaymentModal")
            .find(".conditional-hide")
            .addClass("d-xs-none");
    });

    $("#publicPaymentModal .next").click(function () {
        setTimeout(function () {
            $("#loaderModal").modal("hide");
            $("#publicFullSubmittedModal").modal("show");
        }, 1000);
    });

    $(".register-btn").click(function () {
        setTimeout(function () {
            $("#registerLoaderModal").modal("hide");
        }, 1000);
    });

    // Navigation responsive
    $(".nav-link").click(function () {
        $(".navbar-collapse").removeClass("show");
    });

    function normalizeSlideHeights() {
        $(".carousel").each(function () {
            var items = $(".carousel-item", this);
            // reset the height
            items.css("min-height", 0);
            // set the height
            var maxHeight = Math.max.apply(
                null,
                items
                    .map(function () {
                        return $(this).outerHeight();
                    })
                    .get()
            );
            items.css("min-height", maxHeight + "px");
        });
    }

    normalizeSlideHeights();

    $("#publicVideoModal .btn-close").click(function () {
        $("#publicVideoModal iframe").attr(
            "src",
            $("#publicVideoModal iframe").attr("src")
        );
    });

    $("#healthVideoModal .btn-close").click(function () {
        $("#healthVideoModal iframe").attr(
            "src",
            $("#healthVideoModal iframe").attr("src")
        );
    });

    // Form Validation
    $(".form-select").change(function () {
        $(this).addClass("field-blue");
    });
    $(".form-control").keyup(function () {
        if ($(this).val().length === 0) {
            $(this).val($.trim($(this).val()));
            $(this).removeClass("field-blue");
            $(this).removeClass("field-red");
        } else if ($(this).val().length > 1) {
            $(this).addClass("field-blue");
        } else {
            $(this).val($.trim($(this).val()));
            $(this).removeClass("field-blue");
            $(this).addClass("field-red");
        }
    });
    $("#healthServiesModal .age").keyup(function () {
        if ($(this).val().length > 0) {
            $(this).addClass("field-blue");
            $(this).removeClass("field-red");
        }
        if ($(this).val().length > 2) {
            $("#healthServiesModal .carousel-item.one .btn-form").addClass(
                "disabled"
            );
            $(this).removeClass("field-blue");
            $(this).addClass("field-red");
        } else {
            $("#healthServiesModal .carousel-item.one .btn-form").removeClass(
                "disabled"
            );
        }
    });
    $("#healthServiesModal .carousel-item.one .form-control").keyup(
        function () {
            if (
                $("#healthServiesModal .carousel-item.one .name").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .spec").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .email").hasClass(
                    "field-blue"
                ) &&
                $("#healthServiesModal .carousel-item.one .phone").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .hospital").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .p_name").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .age").val().length <
                    3 &&
                $("#healthServiesModal .carousel-item.one .desc").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .id").val().length > 1
            ) {
                $(
                    "#healthServiesModal .carousel-item.one .btn-form"
                ).removeClass("disabled");
            } else {
                $("#healthServiesModal .carousel-item.one .btn-form").addClass(
                    "disabled"
                );
            }
        }
    );

    $("#healthServiesModal .email").keyup(function () {
        var email = $(this).val();
        if (
            $("#healthServiesModal .carousel-item.one .name").val().length >
                1 &&
            $(this).hasClass("field-blue") &&
            $("#healthServiesModal .carousel-item.one .spec").val().length >
                1 &&
            $("#healthServiesModal .carousel-item.one .phone").val().length >
                1 &&
            $("#healthServiesModal .carousel-item.one .p_name").val().length >
                1 &&
            $("#healthServiesModal .carousel-item.one .id").val().length > 1 &&
            $("#healthServiesModal .carousel-item.one .age").val().length > 0
        ) {
            $("#healthServiesModal .carousel-item.one .btn-form").removeClass(
                "disabled"
            );
        } else {
            $("#publicServiesModal .carousel-item.one .btn-form").addClass(
                "disabled"
            );
        }
        healthValidateEmail(email);
    });

    function healthValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (
            !emailReg.test(email) ||
            $("#healthServiesModal .email").val().length == 0
        ) {
            $(".email-error").removeClass("d-none");
            $("#healthServiesModal .carousel-item.one .email").removeClass(
                "field-blue"
            );
            $("#healthServiesModal .carousel-item.one .email").addClass(
                "field-red"
            );
            $("#healthServiesModal .carousel-item.one .btn-form").addClass(
                "disabled"
            );
        } else {
            $(".email-error").addClass("d-none");
            $("#healthServiesModal .carousel-item.one .email").addClass(
                "field-blue"
            );
            $("#healthServiesModal .carousel-item.one .email").removeClass(
                "field-red"
            );
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
      }
    }
  }

  move();

  $(".main-slide").slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 1000,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  // $('.main-slide').slick({
  //   infinite: true,
  //   slidesToShow: 3,
  //   slidesToScroll: 3
  //   });

  // $('.modal .carousel').carousel({
  //   interval: false,
  // });

  // Radio button active functionality 
  $('.payment .form-check-label').click(function () {
    $(this).addClass('active');
    $(this).parent().prev().find('.form-check-label').removeClass('active');
    $(this).parent().next().find('.form-check-label').removeClass('active');
    $(this).nextAll().removeClass('active');
    $(this).prevAll().removeClass('active');
  })

  // Accept button click function
  $('#allRequestsResultModal .accept').click(function () {
    $('#allRequestsResultModal').find('.conditional-blur').addClass('blur');
    $('#allRequestsResultModal').find('.payment').removeClass('d-none');
    $('#allRequestsResultModal').find('.accept, .reject, .offer-price, .reject-reason, .submit').addClass('d-none');
    $('#allRequestsResultModal').find('.next-one').removeClass('d-none');
    $('#allRequestsResultModal').find('.conditional-hide').addClass('d-xs-none');
  })

  // Reject button click function
  $('#allRequestsResultModal .reject').click(function () {
    $('#allRequestsResultModal .conditional-blur').addClass('blur');
    $('#allRequestsResultModal .reject-reason').removeClass('d-none');
    $('#allRequestsResultModal').find('.accept, .reject, .offer-price, .payment, .next-one').addClass('d-none');
    $('#allRequestsResultModal').find('.form-action, .form-action p').css('padding-top', 0);
    $('#allRequestsResultModal').find('.conditional-hide').addClass('d-xs-none');
  })

  $('#allRequestsResultModal .next-one').click(function () {
    setTimeout(function () {
      $('#loaderModal').modal('hide');
      $('#healthPaymentAfterModal').modal('show');
    }, 1000);
  })

  $('.orderDetails-btn').click(function () {
    $('#allrequestsModal').modal('hide');
    $('#healthPaymentResultModal').modal('show');
  })

  $('.showRequests').click(function () {
    $('#allRequestsModal').modal('hide');
    $('#allRequestsResultModal').modal('hide');
    $('#requestsModal').modal('show');
  })

  $('.showHealthRequests').click(function () {
    $('.modal').modal('hide');
    $('#requestsModal').modal('show');
  })

  $('.complete-other').click(function () {
    setTimeout(function () {
      $('#otherLoaderModal').modal('hide');
      $('#otherStageOneModal').modal('show');
    }, 1000);
  })

  let vW = $(document).width();
  if ($(window).width() > 768) {
    $(document).on("mousemove", function (event) {
      let mW = ((((event.pageX) * 100) / vW).toFixed(2)) - 200;
      // $(".main").css('transform',	'translate(scale(1.2)');
      $(".move").css('transform', 'translateX(' + (mW / 30) + '%)');
      let mH = ((((event.pageX) * 500) / vW).toFixed(2)) - 200;
      $(".move-hand").css('transform', 'translateX(' + (mH / 30) + '%)');
      let mB = ((((event.pageX) * 500) / vW).toFixed(2)) - 200;
      $(".move-box").css('transform', 'translateX(' + (mB / 30) + '%)');
      let mBlack = ((((event.pageX) * 50) / vW).toFixed(5)) + 200;
      $(".move-black").css('transform', 'translateX(' + (mBlack / 30) + '%)');
      let mBlue = ((((event.pageX) * 100) / vW).toFixed(2)) - 200;
      $(".move-blue").css('transform', 'translateX(' + (mBlue / 30) + '%)');
    }).on("mouseleave", function () {
      $(".move").css('transform', 'translateX(1)');
    })
  }


  var parts = $('.body-parts').select2({
    dropdownParent: $('#healthServiesModal'),
    placeholder: "الجمجمة",
  })

  $('.select2-selection--multiple').addClass('select-disabled');

  // Health Services Radio buttons functionality
  $('.male-back .pointer').click(function () {
    $('.male-front').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
    $('.male-front').addClass('blur');
    $('#healthServiesModal .carousel-item.two .btn-form').removeClass('disabled');
    if ($(this).hasClass('back')) {
      parts.val("backbones").trigger("change");
      $('.male-back .back p').css('opacity', 1);
    }
    else if ($(this).hasClass('leftHand')) {
      parts.val("leftHand").trigger("change");
    }
    else if ($(this).hasClass('rightHand')) {
      parts.val("rightHand").trigger("change");
    }
    else if ($(this).hasClass('leftLeg')) {
      parts.val("leftLeg").trigger("change");
    }
    else if ($(this).hasClass('rightLeg')) {
      parts.val("rightLeg").trigger("change");
    }
    else if ($(this).hasClass('leftFoot')) {
      parts.val("leftFoot").trigger("change");
    }
    else if ($(this).hasClass('rightFoot')) {
      parts.val("rightFoot").trigger("change");
    }
  });

  $('.male-front .pointer').click(function () {
    $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
    $('.male-back').addClass('blur');
    $('#healthServiesModal .carousel-item.two .btn-form').removeClass('disabled');
    if ($(this).hasClass('head')) {
      parts.val("skull").trigger("change");
      $('.male-front .head p').css('opacity', 1);
    }
    else if ($(this).hasClass('neck')) {
      parts.val("neck").trigger("change");
    }
  });

  $('.body-parts').change(function () {
    $('.select2-container--default .select2-selection--multiple').addClass('active-select');
    $('#healthServiesModal .carousel-item.two .btn-form').removeClass('disabled');
    var data = $('.body-parts').select2('data');
    data.forEach(function (item, index) {
      if (item.id === 'skull') {
        $('.male-front').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-front').find('.selected').css({ 'opacity': '1' });
        $('.male-front').removeClass('blur');
        $('.male-front .pointer.head').addClass('selected');
        $('.male-front .head p').css('opacity', 1);
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'neck') {
        $('.male-front').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-front').find('.selected').css({ 'opacity': '1' });
        $('.male-front').removeClass('blur');
        $('.male-front .pointer.neck').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'backbones') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.back').addClass('selected');
        $('.male-back .back p').css('opacity', 1);
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'leftHand') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.leftHand').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'rightHand') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.rightHand').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'leftLeg') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.leftLeg').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'rightLeg') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.rightLeg').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'leftFoot') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.leftFoot').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      else if (item.id === 'rightFoot') {
        $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
        $('.male-back').find('.selected').css({ 'opacity': '1' });
        $('.male-back').removeClass('blur');
        $('.male-back .pointer.rightFoot').addClass('selected');
        $('.select2-selection--multiple').removeClass('select-disabled');
      }
      console.log(item.id)
    })
  })


  // Close Modal when click on contact us link
  $('.nav-link.close-modal').click(function () {
    $('#contact-us')[0].scrollIntoView();
    $('.modal').modal('hide');
  })


  // Edit Profile
  $('.edit-profile').click(function () {
    $('#memberModal .form-control').removeClass('disabled');
    $('#memberModal .form-action').find('.disabled').removeClass('disabled');
    $(this).addClass('disabled').css('transition', '.6s')
  })

  // Public Services
  $('.btn.public-service').click(function () {
    $('#myTab li:first-child .nav-link').removeClass('active');
    $('#myTab li:last-child .nav-link').addClass('active');
    $('#myTabContent #medical-services').removeClass('active show');
    $('#myTabContent #public-services').addClass('active show');
    window.scrollTo(0, 0);
  })

  $('.public-offerPrice').click(function () {
    $('.publicServiesFinalModal .form-action').addClass('d-none');
    $('.publicServiesFinalModal .form-action.payment-public').removeClass('d-none');
    $('#publicPaymentModal').find('.reject-text').addClass('d-none');

  })

  // Public Services Final Modal payment and rejection
  $('#publicPaymentModal .accept').click(function () {
    $('#publicPaymentModal').find('.payment').removeClass('d-none');
    $('#publicPaymentModal').find('.payment-public').addClass('d-none');
    $('#publicPaymentModal').find('.conditional-blur').addClass('blur');
    $('#publicPaymentModal').find('.form-action.next').removeClass('d-none');
    $('#publicPaymentModal').find('.reject-text').addClass('d-none');
    $('#publicPaymentModal').find('.conditional-hide').addClass('d-xs-none');
  })

  // Public Services Reject button click function
  $('#publicPaymentModal .reject').click(function () {
    $('#publicPaymentModal .conditional-blur').addClass('blur');
    $('#publicPaymentModal .reject-reason').removeClass('d-none');
    $('#publicPaymentModal').find('.accept, .reject, .offer-price, .payment, .next-one').addClass('d-none');
    $('#publicPaymentModal').find('.submit').removeClass('d-none');
    $('#publicPaymentModal').find('.conditional-text').addClass('d-none');
    $('#publicPaymentModal').find('.conditional-hide').addClass('d-xs-none');
  })

  $('#publicPaymentModal .next').click(function () {
    setTimeout(function () {
      $('#loaderModal').modal('hide');
      $('#publicFullSubmittedModal').modal('show');
    }, 1000);
  })

  $('.register-btn').click(function () {
    setTimeout(function () {
      $('#registerLoaderModal').modal('hide');
    }, 1000);
  })

  // Navigation responsive
  $('.nav-link').click(function () {
    $('.navbar-collapse').removeClass('show');
  })

  function normalizeSlideHeights() {
    $('.carousel').each(function () {
      var items = $('.carousel-item', this);
      // reset the height
      items.css('min-height', 0);
      // set the height
      var maxHeight = Math.max.apply(null,
        items.map(function () {
          return $(this).outerHeight()
        }).get());
      items.css('min-height', maxHeight + 'px');
    })
  }

  normalizeSlideHeights()

  $('#publicVideoModal .btn-close').click(function () {
    $('#publicVideoModal iframe').attr('src', $('#publicVideoModal iframe').attr('src'));
  })

  $('#healthVideoModal .btn-close').click(function () {
    $('#healthVideoModal iframe').attr('src', $('#healthVideoModal iframe').attr('src'));
  })

  // Form Validation
  $('.form-select').change(function () {
    $(this).addClass('field-blue')
    $(this).removeClass('field-red');
  })
  $('.form-control').keyup(function () {
    if ($(this).val().length === 0) {
      $(this).val($.trim($(this).val()));
      $(this).removeClass('field-blue');
      $(this).removeClass('field-red');
    }

    else if ($(this).val().length > 1) {
      $(this).addClass('field-blue');
      $(this).removeClass('field-red');
    }
    else {
      $(this).val($.trim($(this).val()));
      $(this).removeClass('field-blue');
      $(this).addClass('field-red');
    }
  })
  $('#healthServiesModal .age').keyup(function () {
    if ($(this).val().length > 0) {
      $(this).addClass('field-blue');
      $(this).removeClass('field-red');
    }
    if ($(this).val().length > 2) {
      $('#healthServiesModal .carousel-item.one .btn-form').addClass('disabled');
      $(this).removeClass('field-blue');
      $(this).addClass('field-red');
    }
    else {
      $('#healthServiesModal .carousel-item.one .btn-form').removeClass('disabled');

    $("#publicServiesModal .form-select.spec").change(function () {
        if (
            $("#publicServiesModal .carousel-item.one .name").val().length >
                1 &&
            $("#publicServiesModal .carousel-item.one .email").hasClass(
                "field-blue"
            ) &&
            $("#publicServiesModal .carousel-item.one .phone").val().length >
                1 &&
            $("#publicServiesModal .carousel-item.one .gender").hasClass(
                "field-blue"
            )
        ) {
            $("#publicServiesModal .carousel-item.one .btn-form").removeClass(
                "disabled"
            );
        } else {
            $("#publicServiesModal .carousel-item.one .btn-form").addClass(
                "disabled"
            );
        }
    });
    $("#publicServiesModal .carousel-item.two .form-control").keyup(
        function () {
            if (
                $("#publicServiesModal .carousel-item.two .type").val().length >
                    1 &&
                $("#publicServiesModal .carousel-item.two .email").val()
                    .length > 1 &&
                $("#publicServiesModal .carousel-item.two .spec").val().length >
                    1 &&
                $(
                    "#publicServiesModal .carousel-item.two .btn-upload.public"
                ).hasClass("field-blue")
            ) {
                $(
                    "#publicServiesModal .carousel-item.two .btn-form"
                ).removeClass("disabled");
            } else {
                $("#publicServiesModal .carousel-item.two .btn-form").addClass(
                    "disabled"
                );
            }
        }
    );

    $("#public-file").change(function () {
        var fileName = $(this).val();
        $(".btn-upload.public").addClass("field-blue");
        if (
            fileName &&
            $("#publicServiesModal .carousel-item.two .type").val().length >
                1 &&
            $("#publicServiesModal .carousel-item.two .email").val().length >
                1 &&
            $("#publicServiesModal .carousel-item.two .spec").val().length > 1
        ) {
            // returns true if the string is not empty
            $("#publicServiesModal .carousel-item.two .btn-form").removeClass(
                "disabled"
            );
        } else {
            // no file was selected
            $("#publicServiesModal .carousel-item.two .btn-form").addClass(
                "disabled"
            );
        }
    });
    $("#healthServiesModal .carousel-item.three .procedure").change(
        function () {
            if ($(".btn-upload.health").hasClass("field-blue")) {
                $(
                    "#healthServiesModal .carousel-item.three .btn-form"
                ).removeClass("disabled");
            }
        }
    );

    $("#health-file").change(function () {
        var fileName = $(this).val();
        $(".btn-upload.health").addClass("field-blue");
        if (
            fileName &&
            $("#healthServiesModal .carousel-item.three .procedure").hasClass(
                "field-blue"
            )
        ) {
            // returns true if the string is not empty
            $("#healthServiesModal .carousel-item.three .btn-form").removeClass(
                "disabled"
            );
        } else {
            // no file was selected
            $("#healthServiesModal .carousel-item.three .btn-form").addClass(
                "disabled"
            );
        }
    });

    $("#publicServiesModal .email").keyup(function () {
        var email = $(this).val();
        if (
            $("#publicServiesModal .carousel-item.one .name").val().length >
                1 &&
            $(this).hasClass("field-blue") &&
            $("#publicServiesModal .carousel-item.one .phone").val().length >
                1 &&
            $("#publicServiesModal .carousel-item.one .gender").hasClass(
                "field-blue"
            ) &&
            $("#publicServiesModal .carousel-item.one .spec").hasClass(
                "field-blue"
            )
        ) {
            $("#publicServiesModal .carousel-item.one .btn-form").removeClass(
                "disabled"
            );
        } else {
            $("#publicServiesModal .carousel-item.one .btn-form").addClass(
                "disabled"
            );
        }
        publicValidateEmail(email);
    });

    function validateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email) || $(".email").val().length == 0) {
            $(".email-error").removeClass("d-none");
        } else {
            $(".email-error").addClass("d-none");
        }
    }
  })
  $('#healthServiesModal .carousel-item.one .form-control').keyup(function () {
    if ($('#healthServiesModal .carousel-item.one .name').val().length > 1 && $('#healthServiesModal .carousel-item.one .spec').val().length > 1
      && $('#healthServiesModal .carousel-item.one .email').hasClass('field-blue') && $('#healthServiesModal .carousel-item.one .phone').val().length > 1 && $('#healthServiesModal .carousel-item.one .hospital').val().length > 1 &&
      $('#healthServiesModal .carousel-item.one .p_name').val().length > 1 && $('#healthServiesModal .carousel-item.one .age').val().length < 3 && $('#healthServiesModal .carousel-item.one .desc').val().length > 1 &&
      $('#healthServiesModal .carousel-item.one .id').val().length > 1) {
      $('#healthServiesModal .carousel-item.one .btn-form').removeClass('disabled');
    }
    else {
      $('#healthServiesModal .carousel-item.one .btn-form').addClass('disabled');
    }
  })

  $('#healthServiesModal .email').keyup(function () {
    var email = $(this).val();
    if ($('#healthServiesModal .carousel-item.one .name').val().length > 1 && $(this).hasClass('field-blue')
      && $('#healthServiesModal .carousel-item.one .spec').val().length > 1 && $('#healthServiesModal .carousel-item.one .phone').val().length > 1 &&
      $('#healthServiesModal .carousel-item.one .p_name').val().length > 1 && $('#healthServiesModal .carousel-item.one .id').val().length > 1 &&
      $('#healthServiesModal .carousel-item.one .age').val().length > 0) {
      $('#healthServiesModal .carousel-item.one .btn-form').removeClass('disabled');
    }
    else {
      $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
    }
    healthValidateEmail(email);
  })

  function healthValidateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(email) || $('#healthServiesModal .email').val().length == 0) {
      $('.email-error').removeClass('d-none');
      $('#healthServiesModal .carousel-item.one .email').removeClass('field-blue');
      $('#healthServiesModal .carousel-item.one .email').addClass('field-red');
      $('#healthServiesModal .carousel-item.one .btn-form').addClass('disabled');
    } else {
      $('.email-error').addClass('d-none');
      $('#healthServiesModal .carousel-item.one .email').addClass('field-blue');
      $('#healthServiesModal .carousel-item.one .email').removeClass('field-red');
      // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
    }
  }

    function publicValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (
            !emailReg.test(email) ||
            $("#publicServiesModal .email").val().length == 0
        ) {
            $(".email-error").removeClass("d-none");
            $("#publicServiesModal .carousel-item.one .email").removeClass(
                "field-blue"
            );
            $("#publicServiesModal .carousel-item.one .email").addClass(
                "field-red"
            );
            $("#publicServiesModal .carousel-item.one .btn-form").addClass(
                "disabled"
            );
        } else {
            $(".email-error").addClass("d-none");
            $("#publicServiesModal .carousel-item.one .email").addClass(
                "field-blue"
            );
            $("#publicServiesModal .carousel-item.one .email").removeClass(
                "field-red"
            );
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

    function loginValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (
            !emailReg.test(email) ||
            $("#loginModal .email").val().length == 0
        ) {
            $(".email-error").removeClass("d-none");
            $("#loginModal .email").removeClass("field-blue");
            $("#loginModal .email").addClass("field-red");
            $("#loginModal .btn-form").addClass("disabled");
        } else {
            $(".email-error").addClass("d-none");
            $("#loginModal .email").addClass("field-blue");
            $("#loginModal .email").removeClass("field-red");
            $("#loginModal .btn-form").removeClass("disabled");
        }
    }

    //  Login Form Validation
    $("#loginModal .email").keyup(function () {
        var email = $(this).val();
        if ($("#loginModal .pass").val().length > 0) {
            $("#loginModal .btn-form").removeClass("disabled");
        } else {
            $("#loginModal .btn-form").addClass("disabled");
        }
        loginValidateEmail(email);
    });

    $("#loginModal .pass").keyup(function () {
        if (
            $(this).val().length > 0 &&
            $("#loginModal .email").hasClass("field-blue")
        ) {
            $("#loginModal .btn-form").removeClass("disabled");
        } else {
            $("#loginModal .btn-form").addClass("disabled");
        }
    });

    // Register Form Validation
    function registerValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (
            !emailReg.test(email) ||
            $("#registerModal .email").val().length == 0
        ) {
            $(".email-error").removeClass("d-none");
            $("#registerModal .email").removeClass("field-blue");
            $("#registerModal .email").addClass("field-red");
            $("#registerModal .btn-form").addClass("disabled");
        } else {
            $(".email-error").addClass("d-none");
            $("#registerModal .email").addClass("field-blue");
            $("#registerModal .email").removeClass("field-red");
            $("#registerModal .btn-form").removeClass("disabled");
        }
    }
    $("#registerModal .email").keyup(function () {
        var email = $(this).val();
        if (
            $("#registerModal .pass").val().length > 0 &&
            $("#registerModal .side").val().length > 0 &&
            $("#registerModal .name").val().length > 0 &&
            $(this).hasClass("field-blue")
        ) {
            $("#registerModal .btn-form").removeClass("disabled");
        } else {
            $("#registerModal .btn-form").addClass("disabled");
        }
        registerValidateEmail(email);
    });

    $("#registerModal .form-control").keyup(function () {
        if (
            $("#registerModal .pass").val().length > 0 &&
            $("#registerModal .side").val().length > 0 &&
            $("#registerModal .name").val().length > 0 &&
            $("#registerModal .email").hasClass("field-blue")
        ) {
            $("#registerModal .btn-form").removeClass("disabled");
        } else {
            $("#registerModal .btn-form").addClass("disabled");
        }
    });

    // asim
    $(".authmasg").click(function () {
        $(".koib").toggleClass("d-none");
    });

    $(".authmasg-health").click(function () {
        $(".koib-health").toggleClass("d-none");
    });

  $('#registerModal .form-control').keyup(function () {
    if ($('#registerModal .pass').val().length > 0 && $('#registerModal .side').val().length > 0 && $('#registerModal .name').val().length > 0 && $('#registerModal .email').hasClass('field-blue')) {
      $('#registerModal .btn-form').removeClass('disabled');
    }
    else {
      $('#registerModal .btn-form').addClass('disabled');
    }
  })

  // asim
  $(".authmasg").click(function () {
    $(".koib").toggleClass("d-none");
  });

  $(".authmasg-health").click(function () {
    $(".koib-health").toggleClass("d-none");
  });

  // setTimeout(() => {
  //   $('.client-counter').each(function () {
  //     console.log($(this).toString().length)
  //     $(this).prop('Counter', 0).animate({
  //       Counter: $(this).text()
  //     }, {
  //       duration: 5000,
  //       easing: 'swing',
  //       step: function (now) {
  //         $(this).text(Math.ceil(now));

  //       }
  //     });
  //   });

  // }, 2000);

  $('#publicServiesModal .carousel, #healthServiesModal .carousel').carousel({
    interval: false,
  });

  $(".imageupload").click(function () {
    $(".chose").click();
  });
  // imgInp.onchange = (evt) => {
  //     const [file] = imgInp.files;
  //     if (file) {
  //         blah.src = URL.createObjectURL(file);
  //     }
  // };

  // $(".imageupload1").click(function () {
  //     $(".chose1").click();
  // });
  // imgInp1.onchange = (evt) => {
  //     const [file] = imgInp1.files;
  //     if (file) {
  //         blah1.src = URL.createObjectURL(file);
  //     }
  // };


  $('body').click(function () {
    if ($('.modal.video').hasClass('show')) {
      $('#healthVideoModal iframe').attr('src', $('#healthVideoModal iframe').attr('src'));
      $('#publicVideoModal iframe').attr('src', $('#publicVideoModal iframe').attr('src'));
      $('.modal.video').modal('hide');
    }
  })
})
