const daysTag = document.querySelector(".days");
const fundo = document.querySelector(".fundo");
currentDate = document.querySelector(".current-date");
prevNextIcon = document.querySelectorAll(".icons span");
periodo = document.querySelectorAll(".pPeriodo");
const containerManha = document.querySelector(".botoes-container-manha");
const containerTarde = document.querySelector(".botoes-container-tarde");
const div_data = document.querySelector(".data");

let fundoExibido = false;

// getting new date, current year and month
let date = new Date(),

currYear = date.getFullYear(),
currMonth = date.getMonth();

// storing full name of all months in array
const months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
"Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];


let data;
let data_exibe;
let horario;


criarBotoesManha();
criarBotoesTarde();

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
            data_exibe = valor + "/" + (currMonth + 1) + "/" + currYear;
            if (fundoExibido) {
                fundo.style.transform = 'translate(0, 0)'; // Retrai o fundo movendo-o para a posição original
                fundoExibido = false;
            } else {
                fundo.style.transform = 'translate(100%, 0 )'; // Movendo o fundo para o lado direito
                fundoExibido = true;
            }
        });
    });


    const buttonsPeriod = document.querySelectorAll(".period");

    buttonsPeriod.forEach(btn => {
        btn.addEventListener("click", () => {
            const period = btn.innerText;

            if (period === "<") {
                periodo[0].innerText = "Manhã";
                containerManha.style.display = "flex";
                containerTarde.style.display = "none";
            } else if (period === ">") {
                periodo[0].innerText = "Tarde";
                containerManha.style.display = "none";
                containerTarde.style.display = "flex";
            }
            else if (periodo[0].innerText = "Período") {
                containerManha.style.display = "none";
                containerTarde.style.display ="none";
            }
        });
    });

    
    sincronizarAltura(); // Call the function to synchronize heights
}


function criarBotoesManha() 
{
   const horasInicio = 8;
   const horasFim = 12;
   const minutosIntervalo = 30;

   for (let hora = horasInicio; hora < horasFim; hora++) 
   {
       for (let minuto = 0; minuto < 60; minuto += minutosIntervalo) 
       {
           const button = document.createElement("button");
           button.className = "button-hour";
           button.dataset.bsToggle = "modal";
           button.dataset.bsTarget = "#agenda_modal";

           const horaFormatada = hora < 10 ? "0" + hora : hora;
           const minutoFormatado = minuto === 0 ? "00" : minuto;

           const textoBotao = horaFormatada + ":" + minutoFormatado;
           button.textContent = textoBotao;

           containerManha.appendChild(button);
       }
   }
}

function sincronizarAltura() {

            var divFrente = document.querySelector('.wrapper');
            var divTras = document.querySelector('.fundo');

            var alturaFrente = divFrente.offsetHeight; // Use offsetHeight instead of getBoundingClientRect().height
            var alturaTras = divTras.offsetHeight; // Use offsetHeight instead of getBoundingClientRect().height
            divTras.style.height = alturaFrente + 'px'; // Set the height of the .fundo div equal to the .wrapper div

        }

function criarBotoesTarde() 
{
   const horasInicio = 12;
   const horasFim = 18;
   const minutosIntervalo = 30;

   for (let hora = horasInicio; hora < horasFim; hora++) 
   {
       for (let minuto = 0; minuto < 60; minuto += minutosIntervalo) 
       {
           const button = document.createElement("button");
           button.className = "button-hour";
           button.dataset.bsToggle = "modal";
           button.dataset.bsTarget = "#agenda_modal";

           const horaFormatada = hora < 10 ? "0" + hora : hora;
           const minutoFormatado = minuto === 0 ? "00" : minuto;

           const textoBotao = horaFormatada + ":" + minutoFormatado;
           button.textContent = textoBotao;

           containerTarde.appendChild(button);
       }
   }
}

button = document.querySelectorAll(".fundo .button-hour");

button.forEach(btn => {
    btn.addEventListener("click", () => {
        horario = btn.innerHTML;
        div_data.textContent = "Data e horário: " + data_exibe + " " + horario + ":00";
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
           alert(response);
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
        // sincronizarAltura();
    });
});
