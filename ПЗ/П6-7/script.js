const clearBtn = document.querySelector(".clearBtn");
const logBtn = document.querySelector(".logBtn");

var UserCount = localStorage.getItem("UserCount");
console.log(UserCount);
let UserArr = [];
for (var i = 0; i < UserCount; i++) {
    UserArr[i] = JSON.parse(localStorage.getItem(i))
}

console.log(UserArr[UserCount - 1]);

logBtn.addEventListener("click", function () {
    console.log(UserArr[UserCount - 1]);
    let logCheck = false;
    let passCheck = false;
    let index = 0;

    for (var i = 0; i < UserCount; i++) {
        if (UserArr[i].loginSec == document.querySelector(".login").value) {
            logCheck = true;
            index = i;
            break;
        }
    }
    if (document.querySelector(".login").value == "" || document.querySelector(".password").value == "") {
        alert("Не все поля заполнены!");
    } else {
        if (logCheck) {
            if (UserArr[i].passSec == document.querySelector(".password").value) {
                passCheck = true;
            } else {
                alert("Неправильно введённый пароль!");
            }
        } else {
            alert("Такого логина нет в базе!");
        }
        if (logCheck && passCheck) {
            window.location.href = 'profile.html'
        }
    }
}
);
clearBtn.addEventListener("click", function () {
    document.querySelector(".login").value = "";
    document.querySelector(".password").value = "";
});