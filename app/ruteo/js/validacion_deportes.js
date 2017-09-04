  $(document).ready(function() {
    $('#deportes_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {

            txtcodigo: {
                validators: {
                     stringLength: {
                        min: 2,
                        max:5,
                        message:'Introduzca un valor entre 2 y 5 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca el codigo'
                    }
                }
            },
              txtnombre: {
                validators: {
                     stringLength: {
                        min: 4,
                        max:15,
                        message:'Introduzca un valor entre 2 y 15 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca el nombre'
                    }
                }
            }
          
            }
        })
});

