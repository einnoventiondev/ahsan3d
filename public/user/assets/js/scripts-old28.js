
$(function () {

    // window.scrollTo(0, 0);
    // if ($(window).width() < 768) {
    // //     $('.banner-bg').removeClass('animate__slideInRight, animate__delay-2s, animate__slower');
    // //     $('.black-bg').removeClass('animate__slideInLeft');
    // //     $('.black-bg').addClass('animate__slideInUp');
    // //     $('.banner-bg').addClass('animate__slideInUp animate_slowest');
    // $('.banner-bg, .black-bg').removeClass('animate__delay-4s');
    // $('.banner-bg, .black-bg').addClass('animate__delay-6s');
    // }
    var i = 0;

    var loader = true;
    function move() {
        $('.main-progress').css('z-index', '999');
        $('.main-progress').removeClass('d-none');
        // $('.hide-on-load').css('opacity', 0);
        if (i == 0 && loader) {

            i = 1;
            var elem = document.getElementById("barw");
            var widths = 1;
            var id = setInterval(frame, 47);
            function frame() {
                if (widths >= 100) {
                    $('.main-progress').css('z-index', '0');
                    $('.main-progress').addClass('d-none');
                    $('body').css('overflow', 'unset');
                    clearInterval(id);
                    i = 0;
                    $(".main-progress").fadeTo(1200, 0);
                    // $('#loading').fadeOut(1000);
                    // $('.hide-on-load').fadeTo(4000, 1);
                    // $('.banner-bg, .black-bg').addClass('animate__delay-1s');
                } else {
                    $('body').css('overflow', 'hidden');
                    $(".main-progress").css('display', 'block')
                    widths++;
                    $('.progress').html(widths + "%")
                    $('.progress-bar').css("width", widths + "%");
                    //   elem.style.width = widths + "%";

                }
            }
            loader = false;
        }
    }

    // move();
    if ($(window).width() < 768) {
        //     $('.banner-bg').removeClass('animate__slideInRight, animate__delay-2s, animate__slower');
        //     $('.black-bg').removeClass('animate__slideInLeft');
        //     $('.black-bg').addClass('animate__slideInUp');
        //     $('.banner-bg').addClass('animate__slideInUp animate_slowest');
        // $('.banner-bg, .black-bg').removeClass('animate__delay-4s');
        // $('.banner-bg, .black-bg').addClass('animate__delay-6s');
        // $(".move-hand").attr("data-aos","fade-down");
        // $('hands').attr(["data-aos","fade-down"],["data-aos-duration","1500"],["data-aos-delay","2000"]);
        // $('hands').attr(["data-aos","fade-down"],["data-aos-duration","1500"],["data-aos-delay","2000"]);
        }
    $(".main-slide").slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
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
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
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
            let mBlue = ((((event.pageX) * 100) / vW).toFixed(2)) - 30;
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
        } else if ($(this).hasClass('leftHand')) {
            parts.val("leftHand").trigger("change");
        } else if ($(this).hasClass('rightHand')) {
            parts.val("rightHand").trigger("change");
        } else if ($(this).hasClass('leftLeg')) {
            parts.val("leftLeg").trigger("change");
        } else if ($(this).hasClass('rightLeg')) {
            parts.val("rightLeg").trigger("change");
        } else if ($(this).hasClass('leftFoot')) {
            parts.val("leftFoot").trigger("change");
        } else if ($(this).hasClass('rightFoot')) {
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
        } else if ($(this).hasClass('neck')) {
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
            } else if (item.id === 'neck') {
                $('.male-front').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-front').find('.selected').css({ 'opacity': '1' });
                $('.male-front').removeClass('blur');
                $('.male-front .pointer.neck').addClass('selected');
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'backbones') {
                $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-back').find('.selected').css({ 'opacity': '1' });
                $('.male-back').removeClass('blur');
                $('.male-back .pointer.back').addClass('selected');
                $('.male-back .back p').css('opacity', 1);
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'leftHand') {
                $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-back').find('.selected').css({ 'opacity': '1' });
                $('.male-back').removeClass('blur');
                $('.male-back .pointer.leftHand').addClass('selected');
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'rightHand') {
                $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-back').find('.selected').css({ 'opacity': '1' });
                $('.male-back').removeClass('blur');
                $('.male-back .pointer.rightHand').addClass('selected');
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'leftLeg') {
                $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-back').find('.selected').css({ 'opacity': '1' });
                $('.male-back').removeClass('blur');
                $('.male-back .pointer.leftLeg').addClass('selected');
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'rightLeg') {
                $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-back').find('.selected').css({ 'opacity': '1' });
                $('.male-back').removeClass('blur');
                $('.male-back .pointer.rightLeg').addClass('selected');
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'leftFoot') {
                $('.male-back').find('.pointer').css({ 'opacity': '0', 'transition': 'none' });
                $('.male-back').find('.selected').css({ 'opacity': '1' });
                $('.male-back').removeClass('blur');
                $('.male-back .pointer.leftFoot').addClass('selected');
                $('.select2-selection--multiple').removeClass('select-disabled');
            } else if (item.id === 'rightFoot') {
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
        $('#memberModal .form-control, #memberModal .form-select').removeClass('disabled');
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

    $('#userVideoModal .btn-close').click(function () {
        $('#userVideoModal iframe').attr('src', $('#userVideoModal iframe').attr('src'));
    })

    $('#designerVideoModal .btn-close').click(function () {
        $('#designerVideoModal iframe').attr('src', $('#designerVideoModal iframe').attr('src'));
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

    $('#publicServiesModal .carousel').carousel({
        interval: false,
    });

    $('#healthServiesModal .carousel').carousel({
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

    // $(".imageupload1").click(function() {
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
            $('#userVideoModal iframe').attr('src', $('#publicVideoModal iframe').attr('src'));
            $('#designerVideoModal iframe').attr('src', $('#publicVideoModal iframe').attr('src'));
            $('.modal.video').modal('hide');
        }

    })
})

// new-nav


$(document).ready(function () {


    // alert message
$(".alert-icon").click(function () {
    $(".alert-overlay").hide();
})
$("body").click(function () {
    $(".alert-overlay").hide();
})

// color active choose color

$(".color-circle-main .color-circle").click(function () {
    $(this).prevAll().removeClass('active');
    $(this).nextAll().removeClass('active');
    $(this).addClass('active');

})


    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("menuDisplayed");
        $(".sec-main").toggleClass("sec-main-pos");
        $(".toggle-overlay").toggleClass("overlay");

    });

    $('#wrapper .nav-item').click(function () {
        $("#wrapper").toggleClass("menuDisplayed");
    })
    const menu = $('#menu-toggle');
    $('body').click(function (e) {
        // $("#wrapper").removeClass("menuDisplayed");
        if (!menu.is(e.target) // if the target of the click isn't the container...
            &&
            menu.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $("#wrapper").removeClass("menuDisplayed");

            $(".toggle-overlay").removeClass("overlay");
        }

    })

    // designModal mobile navbar script start
    $("#designModal #menu-toggle").click(function (e) {
        e.preventDefault();
        $("#designModal #wrapper").toggleClass("menuDisplayed");
        $("#designModal .sec-main").toggleClass("sec-main-pos");
        $("#designModal .toggle-overlay").addClass("overlay-modal");
    });

    $('#designModal #wrapper .nav-item').click(function () {
        $("#designModal #wrapper").toggleClass("menuDisplayed");
    })
    const menudesignModal = $('#designModal #menu-toggle');
    $('#designModal').click(function (e) {
        // $("#wrapper").removeClass("menuDisplayed");
        if (!menudesignModal.is(e.target) // if the target of the click isn't the container...
            &&
            menudesignModal.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $("#designModal #wrapper").removeClass("menuDisplayed");

            $("#designModal .toggle-overlay").removeClass("overlay-modal");
        }

    })


    // designModal mobile navbar script end


    // designinnerModal mobile navbar script start
    $("#designinnerModal #menu-toggle").click(function (e) {
        e.preventDefault();
        $("#designinnerModal #wrapper").toggleClass("menuDisplayed");
        $("#designinnerModal .sec-main").toggleClass("sec-main-pos");
        $("#designinnerModal .toggle-overlay").addClass("overlay-modal");
    });

    $('#designinnerModal #wrapper .nav-item').click(function () {
        $("#designinnerModal #wrapper").toggleClass("menuDisplayed");
    })
    const menudesigninnerModal = $('#designinnerModal #menu-toggle');
    $('#designinnerModal').click(function (e) {
        // $("#wrapper").removeClass("menuDisplayed");
        if (!menudesigninnerModal.is(e.target) // if the target of the click isn't the container...
            &&
            menudesigninnerModal.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $("#designinnerModal #wrapper").removeClass("menuDisplayed");

            $("#designinnerModal .toggle-overlay").removeClass("overlay-modal");
        }

    })
    // designinnerModal mobile navbar script end
     // cleanshotModal mobile navbar script start
     $("#cleanshotModal #menu-toggle").click(function (e) {
        e.preventDefault();
        $("#cleanshotModal #wrapper").toggleClass("menuDisplayed");
        $("#cleanshotModal .sec-main").toggleClass("sec-main-pos");
        $("#cleanshotModal .toggle-overlay").addClass("overlay-modal");
    });

    $('#cleanshotModal #wrapper .nav-item').click(function () {
        $("#cleanshotModal #wrapper").toggleClass("menuDisplayed");
    })
    const menucleanshotModal = $('#cleanshotModal #menu-toggle');
    $('#cleanshotModal').click(function (e) {
        // $("#wrapper").removeClass("menuDisplayed");
        if (!menucleanshotModal.is(e.target) // if the target of the click isn't the container...
            &&
            menucleanshotModal.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $("#cleanshotModal #wrapper").removeClass("menuDisplayed");

            $("#cleanshotModal .toggle-overlay").removeClass("overlay-modal");
        }

    })
    // cleanshotModal mobile navbar script end
    
    // cleanshotModal-readonly mobile navbar script start
    $("#cleanshotModal-readonly #menu-toggle").click(function (e) {
        e.preventDefault();
        $("#cleanshotModal-readonly #wrapper").toggleClass("menuDisplayed");
        $("#cleanshotModal-readonly .sec-main").toggleClass("sec-main-pos");
        $("#cleanshotModal-readonly .toggle-overlay").addClass("overlay-modal");
    });

    $('#cleanshotModal-readonly #wrapper .nav-item').click(function () {
        $("#cleanshotModal-readonly #wrapper").toggleClass("menuDisplayed");
    })
    const menucleanshotModalreadonly = $('#cleanshotModal-readonly #menu-toggle');
    $('#cleanshotModal-readonly').click(function (e) {
        // $("#wrapper").removeClass("menuDisplayed");
        if (!menucleanshotModalreadonly.is(e.target) // if the target of the click isn't the container...
            &&
            menucleanshotModalreadonly.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $("#cleanshotModal-readonly #wrapper").removeClass("menuDisplayed");

            $("#cleanshotModal-readonly .toggle-overlay").removeClass("overlay-modal");
        }

    })
    // cleanshotModal-readonly mobile navbar script end

    // navbar active class

    $("#navbarNav .nav-item").click(function () {
        $(this).addClass("active");
        $(this).nextAll().removeClass("active");
        $(this).prevAll().removeClass("active");
    })
    $(".mobile-nav .nav-item").click(function () {
        $(this).addClass("active");
        $(this).nextAll().removeClass("active");
        $(this).prevAll().removeClass("active");

    })


    // star rating
    $(".star-reating i").click(function () {
        $(this).addClass("star-active");
        $(this).prevAll().removeClass("star-active");
        $(this).nextAll().addClass("star-active");
    })

    //#starbluerModal-btn stat blur background

    $(".starbluerModal-btn").click(function () {
        
        $(".review-blur-star-rating").addClass('blur');
        $(".blur-star").show();
        $(".review-text-tog").addClass("review-text-hide");
        $(".starbluerModal-btn-hide").hide();
        $(".show-footer-btns").show();
    })

    $(".credit-btn-blur-show").click(function () {
        $(".credit-log").show();
    })
    // $(".paying-off-btn").click(function () {
    //     $(".credit-log").addClass('d-none');
    // })

    $(".bill-btn").click(function () {
        $(".bill-click-hide").addClass('d-none');
        $(".bill-click-show").addClass('d-block');
    })

    // Accept button click function
    $('#userRequestModal .credit-btn-blur-show').click(function () {
        $('#userRequestModal').find('.conditional-blur.design-payment-blur').addClass('blur');
        $('#userRequestModal').find('.payment.credit-payment').removeClass('d-none');
        // $('#userRequestModal').find('.credit-btn-blur-show, .reject, .offer-price, .reject-reason, .submit').addClass('d-none');
        // $('#userRequestModal').find('.next-one').removeClass('d-none');
        // $('#userRequestModal').find('.conditional-hide').addClass('d-xs-none');
    })

    $(".paying-off-btn").click(function () {
        $(".conditional-blur.design-payment-blur").removeClass('blur');
        $(".payment.credit-payment").addClass('d-none');
    })


    $("#userRequestModal .btn-close").click(function () {
        $(".conditional-blur.design-payment-blur").addClass('blur');
    })
    // product-save-btn change icon, color etc

    $(".product-save-btn").click(function () {
        $(".add-red-dot").removeClass('red-dot');
        $(".show-bg-pink").addClass('pink-btn-bg');
        $("#productaddformModal .camera-icon").removeClass('d-none');
        $("#productaddformModal .camera-icon.upload-cross-red").addClass('d-none');
        $('#productaddformModal form').find('.form-select , .form-control').addClass('disabled');
        $(this).addClass('uplod-rev-btn');
    })
    $(".change-zhd").click(function () {
        $(".add-red-dot").addClass('red-dot');
        $(".show-bg-pink").removeClass('pink-btn-bg');
        $("#productaddformModal .camera-icon").addClass('d-none');
        $("#productaddformModal .camera-icon.add-camera-icon").removeClass('d-none').addClass('d-block');
        $("#productaddformModal .camera-icon.upload-cross-red").removeClass('d-none');
        $('#productaddformModal form').find('.form-select , .form-control').removeClass('disabled');
        $(".product-save-btn").removeClass('uplod-rev-btn');
    })
    

    $(".btn-close").click(function () {
        $('.modal').modal('hide');
        // $(".modal-backdrop").removeClass('show');
        // $(".modal-backdrop").addClass('d-none');
    })

    $('.reg-des').click(function () {
        $('#myTab .nav-item .nav-link').removeClass('active');
        $('#myTab .nav-item:last-child .nav-link').addClass('active');
        $('#myTabContent .tab-pane').removeClass('active show');
        $('#myTabContent .tab-pane:last-child').addClass('active show');
    })

    $(".send-btn").click(function () {
        $(".blur-star").removeClass('d-block');
        $(".blur-star").addClass('d-none');
        $(".blur-star-rating").removeClass('blur');
    })

    $('.right-register').click(function() {
        $('#registerModal').removeClass('animate__fadeInRight animate__fadeInLeft');
        $('#registerModal').addClass('animate__fadeInRight');
    })

    $('.left-register').click(function() {
        $('#registerModal').removeClass('animate__fadeInRight animate__fadeInLeft');
        $('#registerModal').addClass('animate__fadeInLeft');
    })

    $('.main-register').click(function() {
        $('#registerModal').removeClass('animate__fadeInRight animate__fadeInLeft');
        $('#registerModal').addClass('animate__fadeInRight');
    })

    var healthModal = document.getElementById("healthVideoModal");
    $('.healthVideoModal').click(function(){
        $('#healthVideoModal').modal('show')
    })
    window.onclick = function(event) {
        if (event.target == healthModal) {
            healthModal.style.display = "none";
        }
    }

    var publicModal = document.getElementById("publicVideoModal");
    $('.publicVideoModal').click(function(){
        $('#publicVideoModal').modal('show')
    })
    window.onclick = function(event) {
        if (event.target == publicModal) {
            publicModal.style.display = "none";
        }
    }

    var userModal = document.getElementById("userVideoModal");
    $('.userVideoModal').click(function(){
        $('#userVideoModal').modal('show')
    })
    window.onclick = function(event) {
        if (event.target == userModal) {
            userModal.style.display = "none";
        }
    }

    var designerModal = document.getElementById("designerVideoModal");
    $('.designerVideoModal').click(function(){
        $('#designerVideoModal').modal('show')
    })
    window.onclick = function(event) {
        if (event.target == designerModal) {
            designerModal.style.display = "none";
        }
    }
    setTimeout(() => {
        $('.main-slide').css('opacity' , '1');
    },400);

});
$(".userreq-blur-bg").click(function () {
    $(".userreq-blur-bg").css('display', 'none');
});
AOS.init({
    offset: 100,
    duration: 1000,
    once: true,
});
window.addEventListener('load', AOS.refresh);
window.addEventListener('load', AOS.refresh);