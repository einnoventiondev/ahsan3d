$(document).ready(function () {
    // $('.register-icon').click(function() {
    //     $('.btn-form').addClass('disabled');
    // })
    // Form Validation
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

    $('.form-control:not(.email)').keyup(function () {
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
            $('#publicServiesModal .carousel-item.two .spec').val().length > 1 && $('#publicServiesModal .carousel-item.two .btn-upload.public').hasClass('field-blue')) {
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
        $('.btn-upload.public').addClass('field-blue');
        if (fileName && $('#publicServiesModal .carousel-item.two .type').val().length > 1 && $('#publicServiesModal .carousel-item.two .email').val().length > 1 &&
            $('#publicServiesModal .carousel-item.two .spec').val().length > 1) { // returns true if the string is not empty
            $('#publicServiesModal .carousel-item.two .btn-form').removeClass('disabled');
        } else { // no file was selected
            $('#publicServiesModal .carousel-item.two .btn-form').addClass('disabled');
        }
    })
    $('#healthServiesModal .carousel-item.three .procedure').change(function () {
        if ($('.btn-upload.health').hasClass('field-blue')) {
            $('#healthServiesModal .carousel-item.three .btn-form').removeClass('disabled');
        }
    })

    $('#health-file').change(function () {
        var fileName = $(this).val();
        $('.btn-upload.health').addClass('field-blue');
        if (fileName && $('#healthServiesModal .carousel-item.three .procedure').hasClass('field-blue')) { // returns true if the string is not empty
            $('#healthServiesModal .carousel-item.three .btn-form').removeClass('disabled')
        } else { // no file was selected
            $('#healthServiesModal .carousel-item.three .btn-form').addClass('disabled')
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

})