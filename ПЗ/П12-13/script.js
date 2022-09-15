const clearBtn = document.querySelector(".clearBtn");


clearBtn.addEventListener("click", function () {
    document.querySelector(".login").value = "";
    document.querySelector(".password").value = "";
});