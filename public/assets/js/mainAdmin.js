

function printDiv(divId) {
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}

let MyTableViewImage = document.querySelectorAll(".MyTableView img");
let model2 = document.querySelector(".model2");

 


