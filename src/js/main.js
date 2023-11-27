

// $('#delete-user-modal').on('show.bs.modal', function (event) {
  
//     var button = $(event.relatedTarget);
//     var id = button.data('usuario');
  
//     var modal = $(this);
//     modal.find('.modal-title').text('Excluir Usuário #' + id);
//     modal.find('#confirm').attr('href', 'delete.php?id=' + id);
// })
//   
//      NÃO APAGAR ATÉ TER CERTEZA QUE NÃO SERÁ USADO NO PROJETO!
function verificaEmail() {
    var email = document.getElementById('email').value;

    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data: { action: 'verifica_email', email: email },
        success: function(response) {
            document.getElementById('emailMessage').innerHTML = response;
        }
    });
}


function confereSenha () 
{
    const senha = document.querySelector("#senha");
    const confirma = document.querySelector("#confirma");

    // if (senha.matches(/[\"'/;<>[()~=]/))
    // {
    //     senha.setCustomValidity("Os seguites caracteres especiais não são permitidos! \"'/;<>[()~= ");
    // }

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

function addJS() 
{
    var email = document.getElementById('email').value;

    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data: { action: 'add', email: email },
        success: function(response) {
            alert(response);
        }
    });
}

let navigation = document.querySelector('.navigation');
document.querySelector('.menuToggle').onclick = function(){
    this.classList.toggle('active');
    navigation.classList.toggle('active')
}