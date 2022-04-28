document.getElementById("contactForm").addEventListener("submit", (e) => {
    e.preventDefault();
    sendMail(getData());
});

function getData () {
    /*let csNev = document.getElementById("csNev");
    let kerNev = document.getElementById("kerNev");
    let email = document.getElementById("email");
    let message = document.getElementById("message");

    let data = {};
    data.csNev = csNev.value;
    data.kerNev = kerNev.value;
    data.email = email.value;
    data.message = message.value;*/

    let formData = new FormData(document.getElementById("contactForm"));

    formData.forEach((a) => {
        console.log("form data: " + a);
    })

    return formData;
}

function sendMail (adatok) {
    console.log(adatok)
    fetch("../server/mailSender.php" , {
        method: 'POST',
        body: adatok
    })
        .then((data) => data.text())
        .then((data) => {
            console.log(data);
            document.getElementById("msg").innerHTML="Sikeresen elküldtük az üzenetét, köszönjük!";
        });
}