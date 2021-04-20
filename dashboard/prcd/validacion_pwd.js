$(document).ready(function () {
    // $('#txtPassword').keyup(function () {
    $('#exampleInputPassword1').keyup(function () {
        // $('#strengthMessage').html(checkStrength($('#txtPassword').val()))
        $('#strengthMessage').html(checkStrength($('#exampleInputPassword1').val()))
    })
    function checkStrength(password) {
        var strength = 0
        if (password.length < 6) {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Short')
            return '<div class="alert alert-danger" role="alert"><i class="bi bi-bookmark-x-fill"></i> ¡Alerta! Contraseña muy corta. Debe tener al menos 7 caractéres</div><style>#boton_submit{display:none;}</style>'
        }
        if (password.length > 7) strength += 1
        // If password contains both lower and uppercase characters, increase strength value.
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
        // If it has numbers and characters, increase strength value.
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
        // If it has one special character, increase strength value.
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        // If it has two special characters, increase strength value.
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        // Calculated strength value, we can return messages
        // If value is less than 2
        if (strength < 2) {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Weak')
            // return 'Weak'
            return '<div class="alert alert-danger" role="alert"><i class="bi bi-bookmark-x-fill"></i> ¡Alerta! Contraseña débil. debe contener al menos un número y un caractér especial(!,%,&,@,#,$,^,*,?,_,~)</div><style>#boton_submit{display:none;}</style>'
        } else if (strength == 2) {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Good')
            return '<div class="alert alert-warning" role="alert"><i class="bi bi-bookmark-dash-fill"></i>Contraseña aceptable</div>'
        } else {
            $('#strengthMessage').removeClass()
            $('#strengthMessage').addClass('Strong')
            return '<div class="alert alert-success" role="alert"><i class="bi bi-bookmark-check-fill"></i> Contraseña segura</div>'
        }
    }
});

