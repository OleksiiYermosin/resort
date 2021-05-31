$(function () {
    $('.menuGam').click(function () {
        $('.menu').toggleClass('showMenu')
    })
});

document.addEventListener('DOMContentLoaded', function(){
    var d = new Date();
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    if(month<10){
        month = "0"+month;
    }
    var checkInDate = document.getElementById('start');
    var checkOutDate = document.getElementById('end');
    if (checkInDate != null && checkOutDate != null) {
        checkInDate.value = year + "-" + month + "-" + day;
        checkInDate.min = year + "-" + month + "-" + day;
        checkOutDate.value = year + "-" + month + "-" + day;
        checkOutDate.min = year + "-" + month + "-" + day;
    }
});

function changeCheckOutDate(){
    console.log('Here')
    var checkInDate = document.getElementById('start');
    var checkOutDate = document.getElementById('end');
    var date = checkInDate.value;
    checkOutDate.value = date;
    checkOutDate.min = date;
}

function changeImage(){
    const comboBox = document.getElementById("roomType");
    const image = document.getElementById("roomChangeableImage");
    if(comboBox.value === "Standard Room"){
        image.setAttribute('src',"public/img/r1.jpg");
    }else if(comboBox.value === "Standard Jac. Room"){
        image.setAttribute('src',"public/img/r2.jpg");
    }else if(comboBox.value === "Superior Standard"){
        image.setAttribute('src',"public/img/r3.jpg");
    }else if(comboBox.value === "Family Room"){
        image.setAttribute('src',"public/img/r4.jpg");
    }else if(comboBox.value === "Suite"){
        image.setAttribute('src',"public/img/r5.jpg");
    }else if(comboBox.value === "Honey Moon Suite"){
        image.setAttribute('src',"public/img/r6.jpg");
    }
}

function hideRead(){
    const comboBox = document.getElementById("combo2");
    var parent = document.getElementsByClassName("messIn");
    for(let i = 0; i < parent.length; i++){
        var value = parent[i].getElementsByClassName('status')[0].getAttribute('data-value');
        if(value==1&&comboBox.value==="Всі повідомлення"){
            parent[i].hidden = false;
        }else if(value==1&&comboBox.value==="Непрочитані"){
            parent[i].hidden = true;
        }
    }
}


var phone = document.getElementById("phoneId");
if (phone != null) {
    phone.addEventListener("input", function (event) {
  if (phone.validity.patternMismatch) {
    phone.setCustomValidity("Будь ласка, введіть дані в форматі '+380123456789' ");
  } else {
    phone.setCustomValidity("");
  }
});
}

var nameSurname = document.getElementById("nameSurname");
if (nameSurname != null) {
nameSurname.addEventListener("input", function (event) {
  if (nameSurname.validity.patternMismatch) {
    nameSurname.setCustomValidity("Будь ласка, введіть дані в форматі 'Єрмосін Олексій Олександрович' ");
  } else {
    nameSurname.setCustomValidity("");
  }
});
}

var email = document.getElementById("email");
if (email != null) {
email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("Будь ласка, введіть дані в форматі 'email@gmail.com' ");
  } else {
    email.setCustomValidity("");
  }
});
}
