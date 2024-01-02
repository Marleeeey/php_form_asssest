const form = document.querySelector('.form'),
statusTxt = document.querySelector('.form-submit-btn');


form.onsubmit = (e) => {
    e.preventDefault();


    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'message.php', true); //send the post methode to the message.php
    xhr.onload = () => {
        if(xhr.readyState == 4 && xhr.status == 200 ) {
            let response = xhr.response;
            console.log(response);
        }
    }
    let formData = new FormData(form); //this is a new object is used to send data
    xhr.send(formData); //sendding from formData
}
