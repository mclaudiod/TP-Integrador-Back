if (window.location.pathname === '/') {
    const ticketInputs = Array.from(document.querySelectorAll("#ticketForm .val"));
    const messageInputs = Array.from(document.querySelectorAll("#messageForm .val-message"));
    const categoryTicket = document.querySelector("#category-ticket");
    const totalSpan = document.querySelector("#total-ticket");
    const submitTicket = document.querySelector("#submitTicket");
    const submitMessage = document.querySelector("#submitMessage");
    let alphabeticCheck = /^[a-zA-ZÀ-ÿ\s]{3,21}$/;
    let alphabeticCheckLong = /^[a-zA-ZÀ-ÿ\s]{21,420}$/;
    let emailCheck = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    let total = 0;
    let ticket = 200;

    window.addEventListener("load", cleanTicketForm);
    window.addEventListener("load", cleanMessageForm);

    ticketInputs.forEach((ticketInput) => {
        ticketInput.addEventListener("input", validateInput);
    });

    messageInputs.forEach((messageInput) => {
        messageInput.addEventListener("input", validateMessageInput);
    });

    categoryTicket.addEventListener("change", totalToPay);

    function totalToPay() {
        switch (categoryTicket.value) {
            case "general":
                total = ticketInputs[3].value * ticket;
                break;
            case "students":
                total = ticketInputs[3].value * (ticket * 0.2);
                break;
            case "trainees":
                total = ticketInputs[3].value * (ticket * 0.5);
                break;
            case "juniors":
                total = ticketInputs[3].value * (ticket * 0.85);
                break;
        };

        totalSpan.textContent = total;
    };

    function validateInput(event) {
        const input = event.target;
        const value = input.value;

        switch (input.id) {
            case "name-ticket":
            case "surname-ticket":
                input.classList.toggle("is-valid", alphabeticCheck.test(value));
                input.classList.toggle("is-invalid", !alphabeticCheck.test(value));
                break;
            case "email-ticket":
                input.classList.toggle("is-valid", emailCheck.test(value));
                input.classList.toggle("is-invalid", !emailCheck.test(value));
                break;
            case "quantity-ticket":
                input.value = Math.max(0, Math.min(10, value));
                totalToPay();
                break;
        };

        function validateMessageInput(event) {
            const input = event.target;
            const value = input.value;
    
            switch (input.id) {
                case "name":
                case "surname":
                    input.classList.toggle("is-valid", alphabeticCheck.test(value));
                    input.classList.toggle("is-invalid", !alphabeticCheck.test(value));
                    break;
                case "textarea":
                    input.classList.toggle("is-valid", alphabeticCheckLong.test(value));
                    input.classList.toggle("is-invalid", !alphabeticCheckLong.test(value));
                    break;
            };
    
            const allMessageInputsValid =
                messageInputs[0].classList.contains("is-valid") &&
                messageInputs[1].classList.contains("is-valid") &&
                messageInputs[2].classList.contains("is-valid");
    
            submitMessage.disabled = !allMessageInputsValid;
        };

        const allInputsValid =
            ticketInputs[0].classList.contains("is-valid") &&
            ticketInputs[1].classList.contains("is-valid") &&
            ticketInputs[2].classList.contains("is-valid") &&
            !(ticketInputs[3].value > 10 || ticketInputs[3].value < 1);

        submitTicket.disabled = !allInputsValid;
    };

    function cleanTicketForm() {
        ticketInputs[0].value = "";
        ticketInputs[0].classList.remove("is-valid");
        ticketInputs[0].classList.remove("is-invalid");
        ticketInputs[1].value = "";
        ticketInputs[1].classList.remove("is-valid");
        ticketInputs[1].classList.remove("is-invalid");
        ticketInputs[2].value = "";
        ticketInputs[2].classList.remove("is-valid");
        ticketInputs[2].classList.remove("is-invalid");
        ticketInputs[3].value = 1;
        categoryTicket.value = "general";
        totalToPay();
        submitTicket.disabled = true;
    };

    function cleanMessageForm() {
        messageInputs[0].value = "";
        messageInputs[0].classList.remove("is-valid");
        messageInputs[0].classList.remove("is-invalid");
        messageInputs[1].value = "";
        messageInputs[1].classList.remove("is-valid");
        messageInputs[1].classList.remove("is-invalid");
        messageInputs[2].value = "";
        messageInputs[2].classList.remove("is-valid");
        messageInputs[2].classList.remove("is-invalid");
        submitMessage.disabled = true;
    };
};