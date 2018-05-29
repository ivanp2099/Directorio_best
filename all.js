function validateMail(em) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(em);
};

function validRegF(e){
        if(validateMail(e)){
            $(".regpanel").show();
            $(".elem").prop("disabled", false);
        }else{
            $(".regpanel").hide();
            $(".elem").prop("disabled", true);
        }
}

$(document).ready(function(){
	$("#searchform .input-search").click(function(){
		$("#searchform").submit();
	});
    $(".loginretry").click(function(){
        $(".listing-login-form").show();
    });

    $(".logPOP").submit(function(e){

    uName = $("#login input[name='user_name']").val();
    uPass = $("#login input[name='user_pass']").val();
    $.ajax({
        type: "POST",
        url: "registro.php?accion=login",
        data:{ user_name: uName, user_password: uPass }, 
        success: function(data){
            $( ".logPOPResult" ).html( data );
            $(".listing-login-form").hide();
        }
    })
       
        e.preventDefault();
        
    });
    
   if ($('input[name="usuario"]').length) {
        validRegF($('input[name="usuario"]').val());
   }
    $('input[name="usuario"]').bind('input propertychange', function() {
        validRegF($(this).val());
    });
});
