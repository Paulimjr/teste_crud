//$(document).ready(function(){
//    $("#form_cadastro").submit(function(){
//        var dados_form = $("#form_cadastro").serialize();
//        $.ajax({
//            headers: {
//                'X-CSRF-TOKEN': $('meta[name="_token"]').val()
//            },
//           type: "POST",
//           data: dados_form,
//           url: '/adm/salvar_estado',
//           success:function(dados_form){
//               console.log('Sucess:', dados_form);
//           },error: function (dados_form) {
//              console.log('Error:', dados_form);
//            }
//        });
//    });
//})
function confirm_click(){
    return confirm("Deseja realmente deletar este estado?");
}


