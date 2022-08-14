// vendor/signin.php

// Авторизация

$(".login_btn").click(function (e) {
  e.preventDefault();
  $("input").removeClass("error");

  let login = $('input[name="login"]').val();
  let pass = $('input[name="pass"]').val();

  $.ajax({
    url: "vendor/signin.php",
    type: "POST",
    dataType: "json",
    data: {
      login: login,
      pass: pass,
    },
    success(data) {
      if (data.status) {
        document.location.href = "profile.php";
      } else {
        if (data.type === 1) {
          data.fields.forEach(function (field) {
            $(`input[name="${field}"]`).addClass("error");
          });
        }
        $(".message").removeClass("none").text(data.message);
      }
    },
  });
});

//Получение аватарки
let avatar = false;

$('input[name="avatar"]').change(function (e) {
  avatar = e.target.files[0];
});

//Регистрация
$(".reg_btn").click(function (e) {
  e.preventDefault();
  $("input").removeClass("error");
  let email = $('input[name="email"]').val();
  let login = $('input[name="login"]').val();
  let pass = $('input[name="pass"]').val();
  let pass_confirm = $('input[name="pass_confirm"]').val();

  let formData = new FormData();
  formData.append("login", login);
  formData.append("pass", pass);
  formData.append("pass_confirm", pass_confirm);
  formData.append("email", email);
  formData.append("avatar", avatar);

  $.ajax({
    url: "vendor/signup.php",
    type: "POST",
    dataType: "json",
    processData: false,
    contentType: false,
    cache: false,
    data: formData,
    success(data) {
      if (data.status) {
        document.location.href = "profile.php";
      } else {
        if (data.type === 1) {
          data.fields.forEach(function (field) {
            $(`input[name="${field}"]`).addClass("error");
          });
        }
        $(".message").removeClass("none").text(data.message);
      }
    },
  });
});
