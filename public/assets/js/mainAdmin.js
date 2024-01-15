

function printDiv(divId) {
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}

let MyTableViewImage = document.querySelectorAll(".MyTableView img");
let model2 = document.querySelector(".model2");

let bigDive = document.querySelector(".bigImage");
let allImages = document.querySelectorAll(".allImages img");
let smallImage = document.querySelector(".smallImage img");
let smallDiv = document.querySelector(".smallImage");

for (let index = 0; index < allImages.length; index++) {
    allImages[index].addEventListener("click", function () {

        bigDive.style.display = 'flex ';
        console.log(bigDive.display);
        oldSrc = allImages[index].src;
        smallImage.src = oldSrc;
    });
}

smallDiv.parentElement.addEventListener("click", function () {

    bigDive.style.display = 'none ';
})
