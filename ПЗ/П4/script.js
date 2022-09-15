const calcBtn = document.querySelector(".calcBtn");
const cacheBtn = document.querySelector(".cacheBtn");
const clearBtn = document.querySelector(".clearBtn");

const M = 100;
let arrayCheck = 0;
var arr = new Array(M);
for (var i = 0; i < M; i++) {
    arr[i] = new Array(1);
}
for (var i = 0; i < M; i++) {
    for (var j = 0; j < M; j++) {
        arr[i][j] = 0;
    }
}

calcBtn.addEventListener("click", function () {
    let n = document.querySelector('#value3');
    let result = document.querySelector('#value2');
    n = n.value;
    let checker = true;
    for (let i = 0; i < arrayCheck; i++) {
        if (arr[i][0] == n && arr[i][0] != 0) {
            checker = false;
            break;
        }
    }
    if (checker) {
        arr[arrayCheck++][0] = n;
    }
    for (let i = n - 1; i > 0; i--) {
        n *= i;
    }
    if (checker) {
        arr[arrayCheck - 1][1] = n;
    }
    result.value = n;
});
clearBtn.addEventListener("click", function () {
    let val1 = document.querySelector('#value1');
    let val2 = document.querySelector('#value3');
    let result = document.querySelector('#value2');
    val1.value = null;
    val2.value = null;
    result.value = null;
})
cacheBtn.addEventListener("click", function () {
    let n = document.querySelector('#value3');
    let result = document.querySelector('#value1');
    n = n.value;
    let checker = true;
    for (let i = 0; i < arrayCheck; i++) {
        if (arr[i][0] == n) {
            checker = false;
            result.value = arr[i][1];
        }
    }
    if (checker) {
        result.value = "В кеше нет нужного значения!";
    }
})