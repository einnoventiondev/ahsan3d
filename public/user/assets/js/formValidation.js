$(document).ready(function () {
    // $('.register-icon').click(function() {
    //     $('.btn-form').addClass('disabled');
    // })
    // Form Validation

  // #healthServiesModal dropzon
    // $(document).on('click', '#health-dropzone', (function(){

    //     if( $('#health-dropzone').hasClass('dz-started') ){
    //             $('#health-dropzone').addClass('field-blue');
    //             alert('aaa');
    //         }
    // }))


    function loginValidateemail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if ($('.login-email').val().length === 0) {

            $('.login-email').removeClass('field-blue');
            $('.login-email').removeClass('field-red');
            $('.login-submit-btn').addClass('disabled');
        }
        else if (!emailReg.test(email)) {
            $('.login-email').removeClass('field-blue');
            $('.login-email').removeClass('field-red');
            $('.login-submit-btn').addClass('disabled');
        }
        else {
            $('.login-email').addClass('field-blue');
            $('.login-email').removeClass('field-red');
            $('.login-submit-btn').removeClass('disabled');
        }
    }

    $('.login-email').keyup(function () {
        var email = $(this).val();
        if ($('.login-password').val().length > 1  && $(this).hasClass('field-blue')) {
            $('.login-submit-btn').removeClass('disabled');
        } else {
            $('.login-submit-btn').addClass('disabled');
        }
        loginValidateemail(email);

    })


    $('.login-password').keyup(function () {
        if ($(this).val().length > 1 && $('.login-email').hasClass('field-blue')) {
            $('.login-submit-btn').removeClass('disabled');
        } else {
            $('.login-submit-btn').addClass('disabled');
        }
    })
// login validation end


    $('.form-select').change(function () {
        var option = $(this).find(':selected').text();
        if(option ==='') {
            $(this).removeClass('field-blue')
            $(this).addClass('field-red');
        }
        else {
            $(this).addClass('field-blue')
            $(this).removeClass('field-red');
        }
    })

    $('.form-control').not('.email').not('.login-email').keyup(function () {
        if ($(this).val().length === 0) {
            $(this).val($.trim($(this).val()));
            $(this).removeClass('field-blue');
            $(this).removeClass('field-red');
        } else if ($(this).val().length > 1) {
            $(this).addClass('field-blue');
            $(this).removeClass('field-red');
        } else {
            $(this).val($.trim($(this).val()));
            $(this).removeClass('field-blue');
            $(this).addClass('field-red');
        }
    })

    function loginModal2LoginValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($('#userloginModal2 .email').val().length === 0) {
            $('#userloginModal2 .email').removeClass('field-blue');
            $('#userloginModal2 .email').removeClass('field-red');
            $('#userloginModal2 .btn-form').addClass('disabled');
        }
        else if (!emailReg.test(email)) {
            $('#userloginModal2 .email').removeClass('field-blue');
            $('#userloginModal2 .email').addClass('field-red');
            $('#userloginModal2 .btn-form').addClass('disabled');
        } else {
            $('#userloginModal2 .email').addClass('field-blue');
            $('#userloginModal2 .email').removeClass('field-red');
            $('#userloginModal2 .btn-form').removeClass('disabled');
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    // Email Validation Methods
    function validateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email) || $('.email').val().length == 0) {
            $('.email-error').removeClass('d-none');
        } else {
            $('.email-error').addClass('d-none');
        }
    }

    function registerValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email) || $('#registerModal .email').val().length == 0) {
            $('.email-error').removeClass('d-none');
            $('#registerModal .email').removeClass('field-blue');
            $('#registerModal .email').addClass('field-red');
            $('#registerModal .btn-form').addClass('disabled');
        } else {
            $('.email-error').addClass('d-none');
            $('#registerModal .email').addClass('field-blue');
            $('#registerModal .email').removeClass('field-red');
            $('#registerModal .btn-form').removeClass('disabled');
        }
    }

    function publicValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email) || $('#publicServiesModal .email').val().length == 0) {
            $('.email-error').removeClass('d-none');
            $('#publicServiesModal .carousel-item.one .email').removeClass('field-blue');
            $('#publicServiesModal .carousel-item.one .email').addClass('field-red');
            $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
        } else {
            $('.email-error').addClass('d-none');
            $('#publicServiesModal .carousel-item.one .email').addClass('field-blue');
            $('#publicServiesModal .carousel-item.one .email').removeClass('field-red');
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

    function designerloginModal2ValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($('#designerloginModal2 .email').val().length === 0) {
            $('#designerloginModal2 .email').removeClass('field-blue');
            $('#designerloginModal2 .email').removeClass('field-red');
            $('#designerloginModal2 .btn-form').addClass('disabled');
        }
        else if (!emailReg.test(email)) {
            $('#designerloginModal2 .email').removeClass('field-blue');
            $('#designerloginModal2 .email').addClass('field-red');
            $('#designerloginModal2 .btn-form').addClass('disabled');
        }
        else {
            $('#designerloginModal2 .email').addClass('field-blue');
            $('#designerloginModal2 .email').removeClass('field-red');
            $('#designerloginModal2 .btn-form').removeClass('disabled');
        }
    }

    function loginModal2LoginValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($('#userloginModal2 .email').val().length === 0) {
            $('#userloginModal2 .email').removeClass('field-blue');
            $('#userloginModal2 .email').removeClass('field-red');
            $('#userloginModal2 .btn-form').addClass('disabled');
        }
        else if (!emailReg.test(email)) {
            $('#userloginModal2 .email').removeClass('field-blue');
            $('#userloginModal2 .email').addClass('field-red');
            $('#userloginModal2 .btn-form').addClass('disabled');
        } else {
            $('#userloginModal2 .email').addClass('field-blue');
            $('#userloginModal2 .email').removeClass('field-red');
            $('#userloginModal2 .btn-form').removeClass('disabled');
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

    function userLoginValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($('#userloginModal .email').val().length === 0) {
            $('#userloginModal .email').removeClass('field-blue');
            $('#userloginModal .email').removeClass('field-red');
            $('#userloginModal .btn-form').addClass('disabled');
        }
        else if (!emailReg.test(email)) {
            $('#userloginModal .email').removeClass('field-blue');
            $('#userloginModal .email').addClass('field-red');
            $('#userloginModal .btn-form').addClass('disabled');
        } else {
            $('#userloginModal .email').addClass('field-blue');
            $('#userloginModal .email').removeClass('field-red');
            $('#userloginModal .btn-form').removeClass('disabled');
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

    function desLoginValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($('#designerloginModal .email').val().length === 0) {
            $('#designerloginModal .email').removeClass('field-blue');
            $('#designerloginModal .email').removeClass('field-red');
            $('#designerloginModal .btn-form').addClass('disabled');
        }
        else if (!emailReg.test(email)) {
            $('#designerloginModal .email').removeClass('field-blue');
            $('#designerloginModal .email').addClass('field-red');
            $('#designerloginModal .btn-form').addClass('disabled');
        } else {
            $('#designerloginModal .email').addClass('field-blue');
            $('#designerloginModal .email').removeClass('field-red');
            $('#designerloginModal .btn-form').removeClass('disabled');
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

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

    function userProfileValidateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if ($('#memberModal .email').val().length === 0) {
            $('#memberModal .email').removeClass('field-blue');
            $('#memberModal .email').removeClass('field-red');
        }
        else if (!emailReg.test(email)) {
            $('#memberModal .email').removeClass('field-blue');
            $('#memberModal .email').addClass('field-red');
        } else {
            $('#memberModal .email').addClass('field-blue');
            $('#memberModal .email').removeClass('field-red');
            // $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        }
    }

    // Register Form Validation
    // $('#registerModal .email').keyup(function() {
    //     var email = $(this).val();
    //     if ($('#registerModal .pass').val().length > 0 && $('#registerModal .side').val().length > 0 && $('#registerModal .name').val().length > 0 && $(this).hasClass('field-blue')) {
    //         $('#registerModal .btn-form').removeClass('disabled');
    //     } else {
    //         $('#registerModal .btn-form').addClass('disabled');
    //     }
    //     registerValidateEmail(email)
    // })

    // $('#registerModal .form-control').keyup(function() {
    //     if ($('#registerModal .pass').val().length > 0 && $('#registerModal .side').val().length > 0 && $('#registerModal .name').val().length > 0 && $('#registerModal .email').hasClass('field-blue')) {
    //         $('#registerModal .btn-form').removeClass('disabled');
    //     } else {
    //         $('#registerModal .btn-form').addClass('disabled');
    //     }
    // })

    //  Login Form Validation
    // $('#loginModal .email').keyup(function() {
    //     var email = $(this).val();
    //     if ($('#loginModal .pass').val().length > 0) {
    //         $('#loginModal .btn-form').removeClass('disabled');
    //     } else {
    //         $('#loginModal .btn-form').addClass('disabled');
    //     }
    //     loginValidateEmail(email)
    // })

    $('#healthServiesModal .age').keyup(function () {
        if ($(this).val().length > 0) {
            $(this).addClass('field-blue');
            $(this).removeClass('field-red');
        }
        if ($(this).val().length > 2) {
            $('#healthServiesModal .carousel-item.one .btn-form').addClass('disabled');
            $(this).removeClass('field-blue');
            $(this).addClass('field-red');
        } else {
            $('#healthServiesModal .carousel-item.one .btn-form').removeClass('disabled');

        }
    })
    $('#healthServiesModal .carousel-item.one .form-control').keyup(function () {
        if ($('#healthServiesModal .carousel-item.one .name').val().length > 1 && $('#healthServiesModal .carousel-item.one .spec').val().length > 1 &&
            $('#healthServiesModal .carousel-item.one .email').hasClass('field-blue') && $('#healthServiesModal .carousel-item.one .phone').val().length > 1 && $('#healthServiesModal .carousel-item.one .hospital').val().length > 1 &&
            $('#healthServiesModal .carousel-item.one .p_name').val().length > 1 && $('#healthServiesModal .carousel-item.one .age').val().length < 3 && $('#healthServiesModal .carousel-item.one .desc').val().length > 1 &&
            $('#healthServiesModal .carousel-item.one .id').val().length > 1) {
            $('#healthServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        } else {
            $('#healthServiesModal .carousel-item.one .btn-form').addClass('disabled');
        }
    })

    // /* Designer Register Validation
    $('#designerloginModal2 .form-control').each(function () {
        $(this).keyup(function () {
            if ($(this).val().length > 1 && $(this).hasClass('field-blue') && $('#designerloginModal2 .pass').val().length > 1 && $('#designerloginModal2 .email').hasClass('field-blue')) {
                $('#designerloginModal2 .btn-form').removeClass('disabled');
            } else {
                $('#designerloginModal2 .btn-form').addClass('disabled');
            }
        })
    })

    $('#designerloginModal2 .email').keyup(function () {
        var email = $(this).val();
        if ($('#designerloginModal2 .pass').val().length > 1 && $('#designerloginModal2 .form-control:not(.email)').val().length > 1 && $('#designerloginModal2 .form-control').hasClass('field-blue') && $(this).hasClass('field-blue')) {
            $('#designerloginModal2 .btn-form').removeClass('disabled');
        } else {
            $('#designerloginModal2 .btn-form').addClass('disabled');
        }
        designerloginModal2ValidateEmail(email);
    })
    // Designer Register Validation */

    // /* User Register Validation
    $('#userloginModal2 .form-control').each(function () {
        $(this).keyup(function () {
            if ($(this).val().length > 1 && $(this).hasClass('field-blue') && $('#userloginModal2 .pass').val().length > 1 && $('#userloginModal2 .email').hasClass('field-blue')) {
                $('#userloginModal2 .btn-form').removeClass('disabled');
            } else {
                $('#userloginModal2 .btn-form').addClass('disabled');
            }
        })
    })

    $('#userloginModal2 .email').keyup(function () {
        var email = $(this).val();
        if ($('#userloginModal2 .pass').val().length > 1 && $('#userloginModal2 .form-control:not(.email)').val().length > 1 && $('#userloginModal2 .form-control').hasClass('field-blue') && $(this).hasClass('field-blue')) {
            $('#userloginModal2 .btn-form').removeClass('disabled');
        } else {
            $('#userloginModal2 .btn-form').addClass('disabled');
        }
        loginModal2LoginValidateEmail(email);
    })
    // /* User Register Validation

    // /* User Login Validation
    $('#userloginModal .pass').keyup(function () {
        if ($(this).val().length > 1 && $('#userloginModal .email').hasClass('field-blue')) {
            $('#userloginModal .btn-form').removeClass('disabled');
        } else {
            $('#userloginModal .btn-form').addClass('disabled');
        }
    })
    $('#userloginModal .email').keyup(function () {
        var email = $(this).val();
        if ($('#userloginModal .pass').val().length > 1 && $(this).hasClass('field-blue')) {
            $('#userloginModal .btn-form').removeClass('disabled');
        } else {
            $('#userloginModal .btn-form').addClass('disabled');
        }
        userLoginValidateEmail(email);
    })
    // /* User Login Validation

    // /* Designer Login Validation
    $('#designerloginModal .pass').keyup(function () {
        if ($(this).val().length > 1 && $('#designerloginModal .email').hasClass('field-blue')) {
            $('#designerloginModal .btn-form').removeClass('disabled');
        } else {
            $('#designerloginModal .btn-form').addClass('disabled');
        }
    })
    $('#designerloginModal .email').keyup(function () {
        var email = $(this).val();
        if ($('#designerloginModal .pass').val().length > 1 && $(this).hasClass('field-blue')) {
            $('#designerloginModal .btn-form').removeClass('disabled');
        } else {
            $('#designerloginModal .btn-form').addClass('disabled');
        }
        desLoginValidateEmail(email);
    })
    // /* Designer Login Validation

    $('#memberModal .email').keyup(function () {
        var email = $(this).val();
        userProfileValidateEmail(email);
    })

    $('#healthServiesModal .email').keyup(function () {
        var email = $(this).val();
        if ($('#healthServiesModal .carousel-item.one .name').val().length > 1 && $(this).hasClass('field-blue') &&
            $('#healthServiesModal .carousel-item.one .spec').val().length > 1 && $('#healthServiesModal .carousel-item.one .phone').val().length > 1 &&
            $('#healthServiesModal .carousel-item.one .p_name').val().length > 1 && $('#healthServiesModal .carousel-item.one .id').val().length > 1 &&
            $('#healthServiesModal .carousel-item.one .age').val().length > 0) {
            $('#healthServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        } else {
            $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
        }
        healthValidateEmail(email);
    })

    $('#publicServiesModal .carousel-item.one .form-control').keyup(function () {
        if ($('#publicServiesModal .carousel-item.one .name').val().length > 1 && $('#publicServiesModal .carousel-item.one .email').val().length > 1 &&
            $('#publicServiesModal .carousel-item.one .phone').val().length > 1 && $('#publicServiesModal .carousel-item.one .gender').hasClass('field-blue') &&
            $('#publicServiesModal .carousel-item.one .spec').hasClass('field-blue')) {
            $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        } else {
            $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
        }
    })

    $('#publicServiesModal .form-select.gender').change(function () {
        if ($('#publicServiesModal .carousel-item.one .name').val().length > 1 && $('#publicServiesModal .carousel-item.one .email').hasClass('field-blue') &&
            $('#publicServiesModal .carousel-item.one .phone').val().length > 1 && $('#publicServiesModal .carousel-item.one .spec').hasClass('field-blue')) {
            $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        } else {
            $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
        }
    })

    $('#publicServiesModal .form-select.spec').change(function () {
        if ($('#publicServiesModal .carousel-item.one .name').val().length > 1 && $('#publicServiesModal .carousel-item.one .email').hasClass('field-blue') &&
            $('#publicServiesModal .carousel-item.one .phone').val().length > 1 && $('#publicServiesModal .carousel-item.one .gender').hasClass('field-blue')) {
            $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        } else {
            $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
        }
    })
    $('#publicServiesModal .carousel-item.two .form-control').keyup(function () {
        if ($('#publicServiesModal .carousel-item.two .type').val().length > 1 && $('#publicServiesModal .carousel-item.two .print-resolution').val().length > 1 &&
            $('#publicServiesModal .carousel-item.two .spec').val().length > 1 && $('#publicServiesModal .carousel-item.two #public-upload-btn').hasClass('field-blue')) {
            $('#publicServiesModal .carousel-item.two .btn-form').removeClass('disabled');
        } else {
            $('#publicServiesModal .carousel-item.two .btn-form').addClass('disabled');
        }
    })

    $('#public-file').change(function () {
        if ($('#publicServiesModal .carousel-item.two .type').val().length > 1 && $('#publicServiesModal .carousel-item.two .print-resolution').val().length > 1 &&
            $('#publicServiesModal .carousel-item.two .spec').val().length > 1) {
            $('#publicServiesModal .carousel-item.two .btn-form').removeClass('disabled');
        }
    })


    $('#public-file').change(function () {
        var fileName = $(this).val();
        // $('.btn-upload.public').addClass('field-blue');
        $('#public-upload-btn').addClass('field-blue');
        $('#publicServiesModal .upload-btn-wrapper.btn-upload .upload-icon').addClass('d-none');
        if (fileName && $('#publicServiesModal .carousel-item.two .type').val().length > 1 && $('#publicServiesModal .carousel-item.two .email').val().length > 1 &&
            $('#publicServiesModal .carousel-item.two .spec').val().length > 1) { // returns true if the string is not empty
            $('#publicServiesModal .carousel-item.two .btn-form').removeClass('disabled');
        } else { // no file was selected
            $('#publicServiesModal .carousel-item.two .btn-form').addClass('disabled');
        }
    })
    $('#publicServiesModal .pip.remove').click(function () {
        $('#publicServiesModal .upload-icon').removeClass('d-none');
    })

    $('#health-file').change(function () {
        // var fileName = $(this).val();
        // $('#health-dropzone').addClass('field-blue');
        $('#healthServiesModal .upload-btn-wrapper.btn-upload').addClass('field-blue');
        $('#healthServiesModal .upload-btn-wrapper.btn-upload .upload-icon').addClass('d-none');
        if ($('#healthServiesModal .carousel-item.three .procedure').hasClass('field-blue')) { // returns true if the string is not empty
            $('#healthServiesModal .carousel-item.three .btn-form').removeClass('disabled')
        } else { // no file was selected
            $('#healthServiesModal .carousel-item.three .btn-form').addClass('disabled')
        }
    })
    $('#healthServiesModal .pip.remove').click(function () {
        $('#healthServiesModal .upload-icon').removeClass('d-none');
    })
    // $('#healthServiesModal .carousel-item.three .procedure').change(function () {
    //     if ($('.btn-upload.health').hasClass('field-blue')) {
    //         $('#healthServiesModal .carousel-item.three .btn-form').removeClass('disabled');
    //     }
    // })
    $('#healthServiesModal .carousel-item.three .procedure').change(function () {
        if ($('#health-upload-btn').hasClass('field-blue')) {
            $('#healthServiesModal .carousel-item.three .btn-form').removeClass('disabled');
        }
    })

    $('#publicServiesModal .email').keyup(function () {
        var email = $(this).val();
        if ($('#publicServiesModal .carousel-item.one .name').val().length > 1 && $(this).hasClass('field-blue') &&
            $('#publicServiesModal .carousel-item.one .phone').val().length > 1 && $('#publicServiesModal .carousel-item.one .gender').hasClass('field-blue') &&
            $('#publicServiesModal .carousel-item.one .spec').hasClass('field-blue')) {
            $('#publicServiesModal .carousel-item.one .btn-form').removeClass('disabled');
        } else {
            $('#publicServiesModal .carousel-item.one .btn-form').addClass('disabled');
        }
        publicValidateEmail(email);
    })

    // Products Modal Form
        $('#productaddModal .form-control').keyup(function () {
            if ($('#productaddModal input').val().length < 1 && $('#productaddModal textarea').val().length < 1) {
                $('.ahs-profile-plus-btn').addClass('disabled');
            }
            else if ($('#productaddModal .form-control').val().length > 1 && $('#productaddModal textarea').val().length > 1 && $('#productaddModal .form-select.a').hasClass('field-blue') && $('#productaddModal .form-select.b').hasClass('field-blue') && $('#productaddModal .form-select.c').hasClass('field-blue') && $('#productaddModal .form-select.d').hasClass('field-blue')) {
                $('.ahs-profile-plus-btn').removeClass('disabled');
            }
            else if ($('#productaddModal .form-control').val().length > 1 && $('#productaddModal textarea').val().length > 1 && $('#productaddModal .form-select.a').hasClass('field-blue') && $('#productaddModal .form-select.b').hasClass('field-blue') && $('#productaddModal .form-select.c').hasClass('field-blue') && $('#productaddModal .form-select.d').hasClass('field-blue')) {
                $('.ahs-profile-plus-btn').removeClass('disabled');
            }
            else {
                $('.ahs-profile-plus-btn').addClass('disabled');
            }
        })

    // $('#productaddModal .form-select').each(function () {
        $('#productaddModal .form-select').change(function () {
            if ($('#productaddModal .form-control').val().length > 1 && $('#productaddModal textarea').val().length > 1 && $('#productaddModal .form-select.a').hasClass('field-blue') && $('#productaddModal .form-select.b').hasClass('field-blue') && $('#productaddModal .form-select.c').hasClass('field-blue') && $('#productaddModal .form-select.d').hasClass('field-blue')) {
                $('#productaddModal .ahs-profile-plus-btn').removeClass('disabled');
            }
        })
    // })


    // product add modal validation start here



    $('.product-add-validate-address').keyup(function () {
        if ($(this).val().length > 1 && $('.product-add-validate-disc').val().length > 1 && $('.product-add-validate-printing').hasClass('field-blue')  && $('.product-add-validate-software').hasClass('field-blue')  && $('.product-add-validate-colors').hasClass('field-blue')  && $('.product-add-validate-sizes').hasClass('field-blue') ) {
            $('.product-add-validate-submit').removeClass('disabled');
        }
        else {
            $('.product-add-validate-submit').addClass('disabled');
        }
    })

    $('.product-add-validate-disc').keyup(function () {
        if ($('.product-add-validate-address').val().length > 1 && $(this).val().length > 1 && $('.product-add-validate-printing').hasClass('field-blue')  && $('.product-add-validate-software').hasClass('field-blue')  && $('.product-add-validate-colors').hasClass('field-blue')  && $('.product-add-validate-sizes').hasClass('field-blue') ) {
            $('.product-add-validate-submit').removeClass('disabled');
        }
        else {
            $('.product-add-validate-submit').addClass('disabled');
        }
    })

    $('.product-add-validate-printing').change(function () {
        if ($('.product-add-validate-address').val().length > 1 && $('.product-add-validate-disc').val().length > 1 && $(this).hasClass('field-blue')  && $('.product-add-validate-software').hasClass('field-blue')  && $('.product-add-validate-colors').hasClass('field-blue')  && $('.product-add-validate-sizes').hasClass('field-blue') ) {
            $('.product-add-validate-submit').removeClass('disabled');
        }
        else {
            $('.product-add-validate-submit').addClass('disabled');
        }
    })

    $('.product-add-validate-software').change(function () {
        if ($('.product-add-validate-address').val().length > 1 && $('.product-add-validate-disc').val().length > 1 && $('.product-add-validate-printing').hasClass('field-blue')  && $(this).hasClass('field-blue')  && $('.product-add-validate-colors').hasClass('field-blue')  && $('.product-add-validate-sizes').hasClass('field-blue') ) {
            $('.product-add-validate-submit').removeClass('disabled');
        }
        else {
            $('.product-add-validate-submit').addClass('disabled');
        }
    })


    $('.product-add-validate-colors').change(function () {
        if ($('.product-add-validate-address').val().length > 1 && $('.product-add-validate-disc').val().length > 1 && $('.product-add-validate-printing').hasClass('field-blue')  && $('.product-add-validate-software').hasClass('field-blue')  && $(this).hasClass('field-blue')  && $('.product-add-validate-sizes').hasClass('field-blue') ) {
            $('.product-add-validate-submit').removeClass('disabled');
        }
        else {
            $('.product-add-validate-submit').addClass('disabled');
        }
    })

    $('.product-add-validate-sizes').change(function () {
        if ($('.product-add-validate-address').val().length > 1 && $('.product-add-validate-disc').val().length > 1 && $('.product-add-validate-printing').hasClass('field-blue')  && $('.product-add-validate-software').hasClass('field-blue')  && $('.product-add-validate-colors').hasClass('field-blue')  && $(this).hasClass('field-blue') ) {
            $('.product-add-validate-submit').removeClass('disabled');
        }
        else {
            $('.product-add-validate-submit').addClass('disabled');
        }
    })


    if($('.product-add-validate-software').hasClass('field-blue')){
        alert('sfda')
        $(this).parents('#select-product-parent').find('.select2-selection--multiple').addClass('field-blue');
    }



    // Register Form Validation


    $('.register-printing-tech').change(function () {
        $(this).addClass('field-blue');
      })

      $('.register-printing-tech').change(function () {
        $(this).parents('#selectSoftwares-parent').find('.select2-selection').addClass('field-blue');
      })

      $('.clean-shot-print-format').change(function () {
        $(this).addClass('field-blue');
      })

      $('.clean-shot-printing-tech').change(function () {
        $(this).addClass('field-blue');
      })






    // checked payment radio btn

    $('.user-add-payment').keyup(function () {
            // if ($(this).val().length === 0) {
            //     $(this).val($.trim($(this).val()));
            //     $(this).removeClass('field-blue');
            //     $(this).removeClass('field-red');
            // } else if ($(this).val().length > 0) {
            //     $(this).addClass('field-blue');
            //     $(this).removeClass('field-red');
            // } else {
            //     $(this).val($.trim($(this).val()));
            //     $(this).removeClass('field-blue');
            //     $(this).addClass('field-red');
            // }

        if ($(this).val().length > 1 && $('.payment-user .form-check-label').hasClass('active')) {
            $('.user-payment-submit').removeClass('disabled');
        }
        else {
            $('.user-payment-submit').addClass('disabled');
        }
    })

        // if ($('.user-add-payment').val().length > 1 && $('.payment-user .form-check-label').hasClass('active')) {
        //     $('.user-payment-submit').removeClass('disabled');
        // }
        // else {
        //     $('.user-payment-submit').addClass('disabled');
        // }


    $('.payment-user .form-check-label').click(function(){
        if ($('.user-add-payment').hasClass('field-blue')) {
            $('.user-payment-submit').removeClass('disabled');
        }
        else {
            $('.user-payment-submit').addClass('disabled');
        }
        
        $(this).find('.form-check-input').prop("checked", true);
        $(this).prevAll().find('.form-check-input').prop("checked", false);
        $(this).nextAll().find('.form-check-input').prop("checked", false);
    })
    

// ====== health Update ======
if (window.File && window.FileList && window.FileReader) {
    $("#health-file").on("change", function(e) {
        var files = e.target.files,
            filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
                var file = e.target;
                $("<span class=\"pip\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                    "<br/><span class=\"remove\"><i class='fa-solid fa-circle-xmark'></i></span>" +
                    "</span>").insertAfter("#health-file");
                $(".remove").click(function() {
                    $(this).parent(".pip").remove();
                });
            });
            fileReader.readAsDataURL(f);
        }
    });
} else {
    alert("Your browser doesn't support to File API")
}

// ====== public Update ======
if (window.File && window.FileList && window.FileReader) {
    $("#public-file").on("change", function(e) {
        var files = e.target.files,
            filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
                var file = e.target;
                $("<span class=\"pip\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                    "<br/><span class=\"remove\"><i class='fa-solid fa-circle-xmark'></i></span>" +
                    "</span>").insertAfter("#public-file");
                $(".remove").click(function() {
                    $(this).parent(".pip").remove();
                });
            });
            fileReader.readAsDataURL(f);
        }
    });
} else {
    alert("Your browser doesn't support to File API")
}




})
