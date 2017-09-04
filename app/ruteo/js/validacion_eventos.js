$(document).ready(function() {
$('#eventos_form').bootstrapValidator({
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
                message: 'Introduzca el codigo'
            }
        }
    },
    txtnombre: {
        validators: {
           stringLength: {
            min: 4,
            max:26,
            message:'Introduzca un valor entre 4 y 26 caracteres'
        },
        
        notEmpty: {
            message: 'Introduzca el nombre del evento'
        }
    }
},
txtlugar: {
    validators: {
       stringLength: {
        min: 4,
        max:30,
        message:'Introduzca un valor entre 4 y 30 caracteres'
    },
    
    notEmpty: {
        message: 'Introduzca la direccion del evento'
    }
}
},          

}
})

});

