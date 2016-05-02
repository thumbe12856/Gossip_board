$(document).ready(function() {
    var accountData;
    $.ajax({
        url: '/api/getAccount',
        type: "GET",
        error: function(error){
            alert('伺服器错误(ajax contract data error)');
            return;
        },
        success: function(data)
        {
            accountData = data;
        }
    });

    $('#register #confirm_password, #register #password').keyup(function(){
        if($(this).val() !== $('#password').val()) {
            $('#confirm_password').addClass('error')
                .parent().find('.material-icons, label').addClass('color-red');
        } else {
            $('#confirm_password').removeClass('error')
                .parent().find('.material-icons, label').removeClass('color-red');
        }
    });

    $('#register #account').keyup(function(){
        if(accountData.indexOf($(this).val()) != -1) {
            $('#account').addClass('error')
                .parent().find('.material-icons, label').addClass('color-red');
        } else {
            $('#account').removeClass('error')
                .parent().find('.material-icons, label').removeClass('color-red');
        }
    });
});