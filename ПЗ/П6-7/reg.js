const regBtn = document.querySelector(".regBtn");
const clearSecBtn = document.querySelector(".clearSecBtn");

class User {
    constructor(options) {
        this.surname = options.surname;
        this.name = options.name;
        this.middlename = options.middlename;
        this.contactP = options.contactP;
        this.mobileP = options.mobileP;
        this.email = options.email;
        this.country = options.country;
        this.edu = options.edu;
        this.tit = options.tit;
        this.city = options.city;
        this.loginSec = options.loginSec;
        this.passSec = options.passSec;
    }
}

localStorage.setItem("UserCount", 0);

regBtn.addEventListener("click", function () {
    localStorage.setItem(localStorage.getItem("UserCount"), JSON.stringify(Person = {
        surname: document.querySelector(".surname").value,
        name: document.querySelector(".name").value,
        middlename: document.querySelector(".middlename").value,
        contactP: document.querySelector(".contactP").value,
        mobileP: document.querySelector(".mobileP").value,
        email: document.querySelector(".email").value,
        country: document.querySelector(".country").value,
        edu: document.querySelector(".name").value,
        tit: document.querySelector(".tit").value,
        city: document.querySelector(".city").value,
        loginSec: document.querySelector(".loginSec").value,
        passSec: document.querySelector(".passSec").value,
    }))
    localStorage.setItem("UserCount", localStorage.getItem("UserCount") + 1);;

    if (
        document.querySelector(".surname").value == "" ||
        document.querySelector(".name").value == "" ||
        document.querySelector(".middlename").value == "" ||
        document.querySelector(".contactP").value == "" ||
        document.querySelector(".mobileP").value == "" ||
        document.querySelector(".email").value == "" ||
        document.querySelector(".country").value == "" ||
        document.querySelector(".name").value == "" ||
        document.querySelector(".tit").value == "" ||
        document.querySelector(".city").value == "" ||
        document.querySelector(".loginSec").value == "" ||
        document.querySelector(".passSec").value == ""
    ) {
        alert("Не все поля заполнены!");
        localStorage.setItem("UserCount", localStorage.getItem("UserCount") - 1);
    } else {
        if (document.querySelector(".passSec").value == document.querySelector(".repPassSec").value) {
            window.location.href = 'index.html'
        } else {
            alert("Неправильно введённый пароль!");
            localStorage.setItem("UserCount", localStorage.getItem("UserCount") - 1);
        };
    }
});

clearSecBtn.addEventListener("click", function () {
    document.querySelector(".surname").value = "";
    document.querySelector(".name").value = "";
    document.querySelector(".middlename").value = "";
    document.querySelector(".contactP").value = "";
    document.querySelector(".mobileP").value = "";
    document.querySelector(".email").value = "";
    document.querySelector(".country").value = "";
    document.querySelector(".name").value = "";
    document.querySelector(".tit").value = "";
    document.querySelector(".city").value = "";
    document.querySelector(".loginSec").value = "";
    document.querySelector(".passSec").value = "";
});