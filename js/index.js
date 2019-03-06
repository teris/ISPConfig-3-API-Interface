  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Bitte Vorname eintragen.'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Bitte Nachname eintragen'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Bitte eine E-Mail Adresse eingeben.'
                    },
                    emailAddress: {
                        message: 'Bitte eine gültige E-Mail Adresse'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Bitte Telefonnummer / Handynummer angeben'
                    },
                    phone: {
                        country: 'DE',
                        message: 'Bitte eine gültige Nummer angeben.'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Bitte Adresse angeben'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Bitte Stadt angeben'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Bitte Land angeben'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Bitte PLZ angeben'
                    },
                    zipCode: {
                        country: 'DE',
                        message: 'Bitte echte PLZ angeben'
                    }
                }
            },
			website1: {
                validators: {
                    notEmpty: {
                        message: 'Bitte Webname oder Benutzername angeben'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Bitte Projektbeschreibung von mindestens 10 bis 200 Zeichen eingeben.'
                    },
                    notEmpty: {
                        message: 'Bitte Projektbeschreibung angeben'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});