/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $('#sky-form')[0].reset();
    $('#form_dato1').on('input', function (event) {
        event.preventDefault();
        var input = $(this);
        var is_name = input.val();
        if ($('#span-dato1')) {
            $('#span-dato1').remove();
        }
        if (is_name) {
        } else {
            errorContainer = $('<span class=".error.message" id="span-dato1"></span>').insertAfter('#form_dato1');
            errorContainer.text("You must enter an string, array, or table name");
        }
    });
    $('#form_dato2').on('input', function (event) {
        event.preventDefault();
        var input = $(this);
        var is_name = input.val();
        if ($('#span-dato2')) {
            $('#span-dato2').remove();
        }
        if (is_name) {
        } else {
            errorContainer = $('<span class=".error.message" id="span-dato2"></span>').insertAfter('#form_dato2');
            errorContainer.text("You must enter an string, array, or table name");
        }
    });
    $("#form_option").on('input', function (event) {
        event.preventDefault();
        if ($('#span-option')) {
            $('#span-option').remove();
        }
    });
    $("#form_filter").on('input', function (event) {
        event.preventDefault();
        if ($('#span-filter')) {
            $('#span-filter').remove();
        }
    });
    $('#haga').click(function (event) {
        event.preventDefault();
        var elError;
        elError = 0;
        if ($('#span-option')) {
            $('#span-option').remove();
        }
        var opcion = $("#form_option option:selected").val();
        if (opcion === "none") {
            elError = 1;
            errorContainer = $('<span class=".error.message" id="span-option"></span>').insertAfter('#form_option');
            errorContainer.text("You must select an option");
        }
        if ($('#span-filter')) {
            $('#span-filter').remove();
        }
        var opcion = $("#form_filter option:selected").val();
        if (opcion === "0") {
            elError = elError + 2;
            errorContainer = $('<span class=".error.message" id="span-filter"></span>').insertAfter('#form_filter');
            errorContainer.text("You must select an filter");
        }
        if (elError === 2) {
            var val_opcion;
            val_opcion = fn_val_opcion();
            if (!val_opcion) {
                elError = elError + 4;
            }
        }
        if (elError === 1 || elError === 3) {
            var val_filter;
            val_filter = fn_val_filter();
            if (!val_filter) {
                elError = elError + 8;
            }
        }
        if (elError === 0) {
            $("#sky-form").submit();
        }
    });
});

function fn_val_filter() {
    return true;
}

function fn_val_option() {
    if ($("#form_option option:selected").val() === "String") {
        return true;
    }
    if ($("#form_option option:selected").val() === "Array") {
        return true;
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
