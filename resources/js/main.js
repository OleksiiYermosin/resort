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
    checkInDate.value = year + "-" + month + "-" + day;
    checkInDate.min = year + "-" + month + "-" + day;
    checkOutDate.value = year + "-" + month + "-" + day;
    checkOutDate.min = year + "-" + month + "-" + day;
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
    if(comboBox.value === "1"){
        image.setAttribute('src',"../resources/img/r1.jpg");
    }else if(comboBox.value === "2"){
        image.setAttribute('src',"../resources/img/r2.jpg");
    }else if(comboBox.value === "3"){
        image.setAttribute('src',"../resources/img/r3.jpg");
    }else if(comboBox.value === "4"){
        image.setAttribute('src',"../resources/img/r4.jpg");
    }else if(comboBox.value === "5"){
        image.setAttribute('src',"../resources/img/r5.jpg");
    }else if(comboBox.value === "6"){
        image.setAttribute('src',"../resources/img/r6.jpg");
    }
}
