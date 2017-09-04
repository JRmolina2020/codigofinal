  $(document).ready(function() {
    $('#deportistas_form').bootstrapValidator({
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
                        min: 5,
                        max:12,
                        message:'Introduzca un valor entre 5 y 11 caracteres'
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
            },
            txtapellido: {
                validators: {
                     stringLength: {
                        min: 3,
                        max:17,
                        message:'Introduzca un valor entre 3 y 17 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca el apellido'
                    }
                }
            },
            txtsexo: {
                validators: {
                     stringLength: {
                        min: 1,
                        max:8,
                        message:'Introduzca un valor entre 1 y 8 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca el sexo'
                    }
                }
            },
            txttelefono: {
                validators: {
                     stringLength: {
                        min: 5,
                        max:12,
                        message:'Introduzca un valor entre 2 y 12 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca el telefono MOVIL/FIJO'
                    }
                },
      
            },
            txtdireccion: {
                validators: {
                     stringLength: {
                        min: 2,
                        max:20,
                        message:'Introduzca un valor entre 2 y 20 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca la direccion'
                    }
                },
      
            },
            txtedad: {
                validators: {
                     stringLength: {
                        min: 1,
                        max:3,
                        message:'Introduzca un valor entre 1 y 3 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca la edad'
                    }
                },
      
            },
             txtsemestre: {
                validators: {
                     stringLength: {
                        min: 1,
                        max:3,
                        message:'Introduzca un valor entre 1 y 3 caracteres'
                    },
                    
                    notEmpty: {
                        message: 'Por favor introduzca el semestre'
                    }
                },
      
            }

          
            }
        })
    
});

