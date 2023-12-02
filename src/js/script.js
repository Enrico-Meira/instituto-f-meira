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

    criarBotoes();

    let data;

    days = document.querySelectorAll(".days li:not(.inactive)");

    days.forEach(dia => {
        dia.addEventListener("click", () => {
            let valor = dia.innerText;
            data = currYear + "-" +  currMonth + "-" + valor;
            if (fundoExibido) {
                fundo.style.transform = 'translateX(0)'; // Retrai o fundo movendo-o para a posição original
                fundoExibido = false;
            } else {
                fundo.style.transform = 'translateX(40%)'; // Movendo o fundo para o lado direito
                fundoExibido = true;
            }
        });
    });

    function criarBotoes() 
    {
        const horasInicio = 8;
        const horasFim = 19;
        const minutosIntervalo = 30;

        const container = document.querySelector(".botoes-container"); // Substitua pelo ID real do seu contêiner

        for (let hora = horasInicio; hora < horasFim; hora++) 
        {
            for (let minuto = 0; minuto < 60; minuto += minutosIntervalo) 
            {
                const button = document.createElement("button");
                button.className = "button-hour";

                const horaFormatada = hora < 10 ? "0" + hora : hora;
                const minutoFormatado = minuto === 0 ? "00" : minuto;

                const textoBotao = horaFormatada + ":" + minutoFormatado;
                button.textContent = textoBotao;

                // Adicione o botão ao contêiner
                container.appendChild(button);
            }
        }
    }

    button = document.querySelectorAll(".botoes-container .button-hour");

    button.forEach(btn => {
        btn.addEventListener("click", () => {
            const horarioClicado = data + " " + btn.innerHTML + ":00";
            enviarParaPHP(horarioClicado);
        });
    });

    function enviarParaPHP(data_agendada) 
    {
        const xhr = new XMLHttpRequest();
        const url = "teste.php";

        alert(data_agendada);

        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() 
        {
            if (xhr.readyState == 4) 
            {
                if (xhr.status == 200) 
                {
                    console.log("Resposta da página PHP:", xhr.responseText);
                    // window.location.href = 'teste.php';  // Remova ou mova para dentro do bloco if, se necessário
                } 
                else 
                {
                    console.error("Erro na requisição AJAX:", xhr.status, xhr.statusText);
                }
            }
        };

        xhr.send("data_agendada=" + encodeURIComponent(data_agendada));
    }
}





renderCalendar();

prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { 
        // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
    });
});

        //     function criarBotoes(data) {
        //         const botoesContainer = document.querySelector('.botoes-container');
        //         botoesContainer.innerHTML = ''; // Limpa qualquer conteúdo anterior
                
        //         const botao1 = document.createElement('button');
        //         botao1.textContent = '15:00';
        //         botao1.addEventListener('click', () => {
        //             alert(data + "-" + botao1.textContent);
        //         });
        //         botoesContainer.appendChild(botao1);
                
        //         const botao2 = document.createElement('button');
        //         botao2.textContent = '15:30';
        //         botao2.addEventListener('click', () => {
        //             alert(data + "-" + botao2.textContent);
        //         });
        //         botoesContainer.appendChild(botao2);
                
        //         const botao3 = document.createElement('button');
        //         botao3.textContent = '16:00';
        //         botao3.addEventListener('click', () => {
        //             alert(data + " " + botao3.textContent);
        //         });
        //         botoesContainer.appendChild(botao3);
        //     }