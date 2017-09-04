  $(document).ready(function() {
    $('#equipos_form').bootstrapValidator({
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
                    message: 'Por favor introduzca el nombre del equipo'
                }
            }
        },
       



}
})
    
});

