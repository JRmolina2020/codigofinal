  $(document).ready(function() {
    $('#usuario_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {

            txtnombre: {
                validators: {
                   stringLength: {
                    min: 3,
                    max:15,
                    message:'Introduzca un valor entre 3  o 15 caracteres'
                },
                
                notEmpty: {
                    message: 'Por favor introduzca el nombre'
                }
            }
        },
        txtcorreo: {
            validators: {
               stringLength: {
                min: 5,
                max:30,
                message:'Introduzca un valor entre 5 y 30 caracteres'
            },
            
            notEmpty: {
                message: 'Por favor introduzca el correo'
            }
        }
    },
    txtcontrasena: {
        validators: {
           stringLength: {
            min: 6,
            max:10,
            message:'Introduzca un valor entre 6 y 20 caracteres'
        },
        
        notEmpty: {
            message: 'Por favor introduzca la contraseña'
        }
    }
}



}
})
    
});

