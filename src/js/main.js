

// $('#delete-user-modal').on('show.bs.modal', function (event) {
  
//     var button = $(event.relatedTarget);
//     var id = button.data('usuario');
  
//     var modal = $(this);
//     modal.find('.modal-title').text('Excluir Usuário #' + id);
//     modal.find('#confirm').attr('href', 'delete.php?id=' + id);
// })
//   
//      NÃO APAGAR ATÉ TER CERTEZA QUE NÃO SERÁ USADO NO PROJETO!


function confereSenha() 
{

    $('#btnCad').submit (function(e) {
        e.preventDefault(); //

        const senha = document.querySelector("#senha");
        const confirma = document.querySelector("#confirma");

        if (senha.value === confirma.value) 
        {
            confirma.setCustomValidity('');
            btnCad.submit();
        } else 
        {
            senha.value = '';
            confirma.value = '';
            confirma.setCustomValidity('Senhas não conferem!');
        }
    });
}


let navigation = document.querySelector('.navigation');
document.querySelector('.menuToggle').onclick = function(){
    this.classList.toggle('active');
    navigation.classList.toggle('active')
}

