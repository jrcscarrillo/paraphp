/* 
 * utilizando el plugin de validacion leer bien la informacion hay bastantes cosas
 * por ejemplo adicionar nuevas formas de validacion se utiliza el jquery.validator.addmethod
 * que arranca una funcion cuyos dos principales parametros son el valor del campo que se esta validando 
 * y el nombre del elemento
 * ya dentro de esta funcion anonima se puede tener cualquie tipo de proceso si retorna true no aparecera
 * el mensaje de error en la pantalla a lado del campo
 */
$(function () {
     jQuery.validator.addMethod(
           "conjunto",
           function (value, element) {
                console.log(value);
          var control;
          control = fn_val_option(value);
          if (!control) {
              return false;
          } else {
              return true;
          }
           },
           "Please enter a String, Array separated with commas, Table Name, Only Numbers"
       );
    $("#sky-form").validate({
        rules: {
            form_dato1: {
                required: true,
                minlength: 3,
                conjunto: true
            },
            form_dato2: {
                required: true,
                minlength: 3,
                conjunto: true
            },
            form_option: {
                required: true
            },
            form_filter: {
                required: true
            }
        },

        // Messages for form validation
        messages:
          {
              form_dato1:
                {
                  required: 'Please enter a valid data',
                  minlength: 'The string at least must have 3 characters'
                },
              form_dato2:
                {
                    required: 'Please enter a valid data',
                    minlength: 'The string at least must have 3 characters'
                },
              form_option:
                {
                    required: 'Please you must choose one option from list'
                },
              form_filter:
                {
                    required: 'Please you must choose one option from list'
                }
          },

        // Ajax form submition
        submitHandler: function (form) {
             form.submit();
        },

        // Do not change code below
        errorPlacement: function (error, element) {
            error.insertAfter(element.parent());
        }
    });
});


function fn_val_option(value) {
    if ($("#form_option option:selected").val() === "String") {
        return true;
    }
    if ($("#form_option option:selected").val() === "Array") {
        var arreglo;
        var elementos;
        arreglo = value.split(",");
        elementos = arreglo.length;
        if (elementos > 2) {
            return true;
        } else {
            return false;
        }
    }
    if ($("#form_option option:selected").val() === "Absolute") {
        return true;
    }
    if ($("#form_option option:selected").val() === "Numeric") {
        return true;
    }
    if ($("#form_option option:selected").val() === "DataTable") {
        return true;
    }
}
