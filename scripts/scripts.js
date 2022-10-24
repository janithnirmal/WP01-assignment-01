// login signin page changer
function pageChnager() {
    var input1 = document.getElementById("inputFeild1");
    var input2 = document.getElementById("inputFeild2");
    var largeLogo = document.getElementById("largeLogo");
    var contenContainer = document.getElementById("contenContainer");
    var inputContainer = document.getElementById("inputContainer");


    inputContainer.style.animation = "colorChnager 1200ms";

    largeLogo.classList.toggle("hider2"); // 400ms


    input1.classList.toggle("hider1"); // 200ms
    input2.classList.toggle("hider1"); // 200ms


    setTimeout(function () {

        input1.classList.toggle("d-none");
        input2.classList.toggle("d-none");

        contenContainer.classList.toggle("flex-lg-row-reverse");

        // setInterval(() => {
        //     inputContainer.style.animation = "colorChnager 700ms";
        // }, 300);
        largeLogo.classList.toggle("hider2"); // 400s

        input1.classList.toggle("hider1"); // 200ms
        input2.classList.toggle("hider1"); // 200ms

        inputContainer.style.animation = "";

    }, 500);
}