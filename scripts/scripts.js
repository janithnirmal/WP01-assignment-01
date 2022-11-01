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




// home page category changer

function categoryChanger(event) {
    var targetedSection = event.target.value;
    var clickedButton = event.target.id;
    var contentHolder = document.getElementById("contentHolder");
    var count = 4;

    if (document.getElementById("navigation-default").classList.contains("default-category")) {
        document.getElementById("navigation-default").classList.toggle("default-category");
    }

    for (let x = 0; x < count; x++) {
        document.getElementById("ctb" + x).style.backgroundColor = "transparent";
        document.getElementById("ctb" + x).style.color = "white";
    }
    document.getElementById(clickedButton).style.backgroundColor = "white";
    document.getElementById(clickedButton).style.color = "rgb(248, 56, 56)";

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            contentHolder.innerHTML = t;
            // alert(t);
        }
    }

    r.open("GET", "../pages/categories/" + targetedSection + ".php", true);
    r.send();
}



// single product view
function singleProductView() {
    window.location = "singleProdcutView.php";
}