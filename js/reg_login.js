$('._regbtn').click(function (action) {
    action.preventDefault();
    $('.errorMsg').addClass('none');

    let email = $('input[name="email_reg"]').val();
    let login = $('input[name="username"]').val();
    let pass = $('input[name="password_reg"]').val();
    let confpass = $('input[name="confpassword"]').val();
    let terms = '';
    if ($('input[name="terms"]').prop('checked') === true) {
        terms = "conf"; 
    }

    $.ajax({
        url: "php/reg.php",
        type: "POST",
        dataType: "json",
        data: {
            email: email,
            username: login,
            password: pass,
            confpassword: confpass,
            terms: terms,
        },
        success(data) {
            console.log(data);
            if (data['status'] === 'false') {
                for (key in data['error_fields']) {
                    console.log(data['error_fields'][key]);
                    $(`#${data['error_fields'][key]}`).removeClass("none");
                };
            } else {
                document.location.href = "profile.php";
            }
            
        }
    })
})

$('._loginbtn').click(function (action) {
    action.preventDefault();
    $('.errorMsg').addClass('none');

    let email = $('input[name="email_login"]').val();
    let pass = $('input[name="password_login"]').val();

    $.ajax({
        url: "php/login.php",
        type: "POST",
        dataType: "json",
        data: {
            email: email,
            password: pass,
        },
        success(data) {
            if (data['status'] === 'false') {
                for (key in data['error_fields']) {
                    console.log(data['error_fields'][key]);
                    $(`#${data['error_fields'][key]}`).removeClass("none");
                };
            } else {
                document.location.href = "profile.php";
            }
        }
    })
})















// var FormLog = document.querySelector('.formlogin');
// var LogBtn = FormLog.querySelector('._loginbtn');

// var FormReg = document.querySelector('.formregistration');
// var RegBtn = FormReg.querySelector('._regbtn');

// var CheckLogin = FormLog.querySelectorAll('._reqforlogin');

// var CheckRegEmail = FormReg.querySelector('._email');
// var CheckRegUsername = FormReg.querySelector('._username');
// var CheckRegPassword = FormReg.querySelector('._password');
// var CheckRegConf = FormReg.querySelector('._confpassword');


// var CheckBox = FormReg.querySelectorAll('._reqcheckbox');

// var generateError = function (text) {
//     var error = document.createElement('div')
//     error.className = 'error'
//     error.style.color = 'red'
//     error.innerHTML = text
//     return error
//   }

// LogBtn.addEventListener('click', function (Login){
//     Login.preventDefault();

//     var errors = document.querySelectorAll('.error')
//     for (var i = 0; i < errors.length; i++){
//         errors[i].remove()
//     }

//     for (i = 0; i < CheckLogin.length; i++){
//         if (!CheckLogin[i].value){
//             var error = generateError('Обязательно')
//             FormLog[i].parentElement.insertBefore(error, CheckLogin[i].nextSibling)
//         }
//     }
// })

// RegBtn.addEventListener('click', function (Registration){
//     Registration.preventDefault();
//     var emailcheck = document.getElementById("EmailIncorrect")
//     if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailcheck.value)){
//         var error = document.getElementById("EmailIncorrect")
//         error.classList.remove("none");
//     }else{
//         var error = document.getElementById("EmailIncorrect")
//         error.classList.add("none");
//     }

//     if (!CheckRegEmail.value){
//         var error = document.getElementById("NoneEmail")
//         error.classList.remove("none");
//     }else{
//         var error = document.getElementById("NoneEmail")
//         error.classList.add("none");
//     }

//     if (!CheckRegUsername.value){
//         var error = document.getElementById("NoneUsername")
//         error.classList.remove("none");
//     }else{
//         var error = document.getElementById("NoneUsername")
//         error.classList.add("none");
//     }

//     if (!CheckRegPassword.value){
//         var error = document.getElementById("NonePass")
//         error.classList.remove("none");
//     }else{
//         var error = document.getElementById("NonePass")
//         error.classList.add("none");
//     }

//     if (!CheckRegConf.value){
//         var error = document.getElementById("NoneConfPass")
//         error.classList.remove("none");
//     }else{
//         var error = document.getElementById("NoneConfPass")
//         error.classList.add("none");
//     }

//     if (CheckRegPassword.value !== CheckRegConf.value) {
//         var error = document.getElementById("ConfPassError")
//         error.classList.remove("none");  
//     }else{
//         var error = document.getElementById("ConfPassError")
//         error.classList.add("none");
//     }
// })








































































// "use strict"

// document.addEventListener('DOMContentLoaded', function(){
//     const form = document.getElementById('dsadasfvafsdfsdfs');
//     form.addEventListener('submit', formSend);

//         async function formSend(e){ 
//             e.preventDefault();

//             let error = formValidate(form);
//         }

//         function formValidate(form){
//             let error = 0;
//             let formReq = document.querySelectorAll('._req');

//             for (let index = 0; index < formReq.length; index++){
//                 const input = formReq[index];
//                 formRemoveError(input);

//                 if(input.classList.contains('_email')){
//                     if (emailTest(input)){
//                         formAddError(input);
//                         error++;
//                     }
//                 } 
//                 else if (input.getAttribute("type") === "checkbox" && input.checked === false){
//                     formAddError(input);
//                     error++;
//                 }
//                 else{
//                     if (input.value === ''){
//                         formAddError(input);
//                         error++;
//                     }
//                 }
//             }
//         }

//         function formAddError(input){
//             input.parentElement.classList.add('_error');
//             input.classList.add('_error');
//         }
//         function formRemoveError(input){
//             input.parentElement.classList.remove('_error');
//             input.classList.remove('_error');
//         }
//         function emailTest(input){
//             return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(input.value);
//         }
//     }
// );