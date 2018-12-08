$(document).ready(function() {
    $('#test-form').bootstrapValidator({
        //submitButtons: '#postForm',
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },        
        fields: {
            test1: {
             message: 'The First Name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Your First Name is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The first name must be more than 1 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[A-z -]+$/,
                        message: 'The first name can only accept alphabetical input'
                    },
                }
            },
            test2: {
                message: 'Last Name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Your Last Name is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'Last Name must be more than 1 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[A-z -]+$/,
                        message: 'Last Names can only consist of alphabetical characters'
                    },
                }
            },
            test3: {
                validators: {
                    notEmpty: {
                        message: 'The Email Address is required'
                    },
                    emailAddress: {
                        message: 'The Email Address is not a valid'
                    }
                }
            },
            test4: {
                message: 'Team Name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Team Name is required'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'Team Name must be more than 1 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[A-z -]+$/,
                        message: 'Team Name can only consist of alphabetical characters'
                    },
                }
            },
            test5: {
                message: 'Contact Address is not valid',
                validators: {
                    notEmpty: {
                        message: 'Contact Address is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 50,
                        message: 'Contact Address must be at least 10 characters long'
                    },
                    regexp: {
                        regexp: /^[A-z -]+$/,
                        message: 'Team Name cannot contain special characters'
                    },
                }
            }, 
            test6: {
                message: 'Mobile Number is not valid',
                validators: {
                    notEmpty: {
                        message: 'Mobile Number is required'
                    },
                    stringLength: {
                        min: 11,
                        max: 11,
                        message: 'Mobile Number must be a valid GSM Number'
                    },
                    regexp: {
                        regexp: /^(\d{11})$/,
                        message: 'Mobile Number can only consist of numbers'
                    },
                }
            }, 

        }
    })
    .on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        var url = 'https://script.google.com/macros/s/AKfycbxtn3GrFfezrswcPQdZbSS7msNxZXKXzrZXRUrXG8unML3Xzs4/exec';
        var redirectUrl = 'success.html';
        // show the loading 
        $('#postForm').prepend($('<span></span>').addClass('glyphicon glyphicon-refresh glyphicon-refresh-animate'));
        var jqxhr = $.get(url, $form.serialize(), function(data) {
            jqxhr.crossDomain = true;
            console.log("Success! Data: " + data.statusText);
            $(location).attr('href',redirectUrl);
        })
            .fail(function(data) {
                console.warn("Error! Data: " + data.statusText);
                // HACK - check if browser is Safari - and redirect even if fail b/c we know the form submits.
                if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                    //alert("Browser is Safari -- we get an error, but the form still submits -- continue.");
                    $(location).attr('href',redirectUrl);                
                }
            });
    });
});