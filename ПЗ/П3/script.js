const buttonClear = document.querySelector(".calcBtn")

buttonClear.addEventListener("click", function () {
    let F = document.querySelector(".value1")
    F = F.value;
    let C = document.querySelector(".value2")
    C = C.value;
    let result = document.querySelector(".resulttext")
    if (F != "" && C == "") {
        result.textContent = ((5 / 9) * (F - 32))
    }
    else if (F == "" && C != "") {
        result.textContent = ((9 / 5) * C + 32)
    }
    else {
        result.textContent = "Оставьте поле пустым"
    }
})

const clearBtn = document.querySelector(".clearBtn")

clearBtn.addEventListener("click", function () {
    let F = document.querySelector(".value1")
    let C = document.querySelector(".value2")
    let result = document.querySelector(".resulttext")
    F.value = null;
    C.value = null;
    result.textContent = ""
})