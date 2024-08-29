

emailjs.init("VcGuJMv1wUFsje6-ocls");

const sendBtn = document.querySelector('.send-btn');
const result = document.querySelector('.result');

sendBtn.addEventListener('click', sendEmail);

function sendEmail(){
    // Get the form data
    const user_name = document.getElementById("user_name").value;
    const user_email = document.getElementById("user_email").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;

    // Check if the required fields are filled
    if (!user_name || !user_email || !subject || !message) {
        result.innerHTML = "Tous les champs sont obligatoires.";
        result.style.opacity = 1;
        return;
    }

    // Send the email using EmailJS
    emailjs.send("service_qni9uln", "template_bwnsr49", {
        user_name: user_name,
        user_email: user_email,
        subject: subject,
        message: message
    }).then(function() {
        result.innerHTML = "Message envoyé !"
        result.style.opacity = 1;
    }, function (error) {
        result.innerHTML = "Erreur lors de l'envoi"
        result.style.opacity = 1;
        console.log(error.message);
    });
}