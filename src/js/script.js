const daysTag = document.querySelector(".days");
const fundo = document.querySelector(".fundo");
currentDate = document.querySelector(".current-date");
prevNextIcon = document.querySelectorAll(".icons span");
let fundoExibido = false;

// getting new date, current year and month
let date = new Date(),

currYear = date.getFullYear(),
currMonth = date.getMonth();

// storing full name of all months in array
const months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
"Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

criarBotoes();

let data;
let horario;

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";


    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                    && currYear === new Date().getFullYear() ? "" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;





    days = document.querySelectorAll(".days li:not(.inactive)");

    days.forEach(dia => {
        dia.addEventListener("click", () => {
            let valor = dia.innerText;
            data = currYear + "-" +  (currMonth + 1) + "-" + valor;
            if (fundoExibido) {
                fundo.style.transform = 'translateX(0)'; // Retrai o fundo movendo-o para a posição original
                fundoExibido = false;
            } else {
                fundo.style.transform = 'translateX(40%)'; // Movendo o fundo para o lado direito
                fundoExibido = true;
            }
        });
    });

    
    function sincronizarAltura() {
        var btnContainer = document.querySelector('.botoes-container');
        var divFrente = document.querySelector('.wrapper');
        var divTras = document.querySelector('.fundo');

        var alturaFrente = divFrente.getBoundingClientRect().height + 'px'; // Get the computed height of the .wrapper div
        var alturaTras = divTras.getBoundingClientRect().height + 'px';
        divTras.style.height = alturaFrente; // Set the height of the .fundo div equal to the .wrapper div
        btnContainer.style.height = alturaTras;
    }

    sincronizarAltura(); // Call the function to synchronize heights
}


function criarBotoes() 
{
    const horasInicio = 8;
    const horasFim = 19;
    const minutosIntervalo = 30;

    const container = document.querySelector(".botoes-container");

    for (let hora = horasInicio; hora < horasFim; hora++) 
    {
        for (let minuto = 0; minuto < 60; minuto += minutosIntervalo) 
        {
            const button = document.createElement("button");
            button.className = "button-hour";
            button.dataset.bsToggle = "modal"
            button.dataset.bsTarget = "#agenda_modal";

            const horaFormatada = hora < 10 ? "0" + hora : hora;
            const minutoFormatado = minuto === 0 ? "00" : minuto;

            const textoBotao = horaFormatada + ":" + minutoFormatado;
            button.textContent = textoBotao;

            container.appendChild(button);
        }
    }
}

button = document.querySelectorAll(".botoes-container .button-hour");
const confirma = document.querySelector("#confirm");

button.forEach(btn => {
    btn.addEventListener("click", () => {
        horario = btn.innerHTML;
        // $("agenda_modal").modal('toggle');
    });
});

function confirmar() 
{
        const horarioClicado = data + " " + horario + ":00";
        enviarParaPHP(horarioClicado);
}


function enviarParaPHP(data_agendada) {
    const url = "functions.php";
 
    $.ajax({
        type: "POST",
        url: url,
        data: {
            data_agenda: JSON.stringify(data_agendada)
        },
        success: function(response) {
            console.log("Resposta da página PHP:", response);
        },
        error: function(xhr, status, error) {
            console.error("Erro na requisição AJAX:", xhr.status, xhr.statusText);
        }
    });
 }

renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => { 
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) { 
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear();
            currMonth = date.getMonth();
            date = new Date();
        }
        renderCalendar();
    });
});
