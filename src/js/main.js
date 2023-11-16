

// $('#delete-user-modal').on('show.bs.modal', function (event) {
  
//     var button = $(event.relatedTarget);
//     var id = button.data('usuario');
  
//     var modal = $(this);
//     modal.find('.modal-title').text('Excluir Usuário #' + id);
//     modal.find('#confirm').attr('href', 'delete.php?id=' + id);
// })
//   
//      NÃO APAGAR ATÉ TER CERTEZA QUE NÃO SERÁ USADO NO PROJETO!


function confereSenha () 
{
    // const senha = document.querySelector("input[name=senha]");
    // const confirma = document.querySelector("input[name=confirma]");
    const senha = document.querySelector("#senha");
    const confirma = document.querySelector("#confirma");

    
    if (senha.matches(/[\"'/;<>[()~=]/))
    {
        senha.setCustomValidity("Os seguites caracteres especiais não são permitidos! \"'/;<>[()~= ");
    }

    if (senha.value === confirma.value) 
    {
        confirma.setCustomValidity('');
    }
    else
    {
        document.getElementById("senha").value = '';
        document.getElementById("confirma").value = '';
        confirma.setCustomValidity('Senhas não conferem!');
    }
}
