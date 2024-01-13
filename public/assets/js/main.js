let normalInput = document.querySelectorAll('#normalInput');
let selectInput = document.querySelectorAll("#selectInput");
// Select Type of ID
let typeofId = document.querySelector("#typeofId");
var checkboxes = document.querySelectorAll('input[name="salarytype[]"]');
let helthStatus = document.querySelector("#helthStatus");
let jobType = document.querySelector("#jobType");
let rent = document.querySelector("#rent");
let numberOfId = document.querySelector("input[name='numberOfId']");
let numberInput = document.querySelectorAll("input.numberInput");
let confirmationCheckbox = document.querySelector("input[name='confirmationCheckbox']");
let relationStatus = document.querySelector('#relationStatus');
let sendButton = document.querySelector("#sendButton");
let myModel = document.querySelector('.myModel');
let myModelIconClose = document.querySelector('.myModel i ');
// console.log(normalInput);
// console.log(selectInput);



if (myModelIconClose != null) {
    myModelIconClose.addEventListener("click", function () {
        myModel.classList.add("none");
    });
} else {
    console.log('hello');
}


// Validation of Inputs File TExt
let checkTextInputs = () => {
    for (let i = 0; i < normalInput.length; i++) {
        normalInput[i].addEventListener("keyup", function () {
            if (this.value.trim() == "") {

                if (!this.hasAttribute('data-text-added')) {
                    let newText = `<span class='text-danger'> هذا الحقل مطلوب </span>`;

                    this.insertAdjacentHTML('afterend', newText);

                    // Set a flag to indicate that the text has been added
                    this.setAttribute('data-text-added', 'true');
                }
            } else {
                // If the input is not empty, remove the span if it exists
                let nextElement = this.nextElementSibling;
                if (nextElement && nextElement.classList.contains('text-danger')) {
                    nextElement.remove();
                }

                // Optionally, you can remove the data-text-added attribute
                this.removeAttribute('data-text-added');
            }

        });
    }
}
checkTextInputs();

// Validation on select Inputs
let CheckselectInputs = () => {
    for (let i = 0; i < selectInput.length; i++) {
        selectInput[i].addEventListener("change", function () {
            // console.log(this.options[0]==this.value);

            if (this.options[0] == this.value) {

                if (!this.hasAttribute('data-text-added')) {
                    let newText = `<span class='text-danger'> هذا الحقل مطلوب </span>`;
                    this.insertAdjacentHTML('afterend', newText);
                    // Set a flag to indicate that the text has been added
                    this.setAttribute('data-text-added', 'true');
                }
            }

        });
    }
}
CheckselectInputs();
// Show file upload Depend on Option
for (let i = 0; i < selectInput.length; i++) {
    selectInput[i].addEventListener("change", function () {

        if (this.name == "typeofId") {
            if (this.value == "بطاقه") {
                typeofId.classList.remove("none");
                typeofId.firstElementChild.innerText = "ارفق صوره من بطاقه الاحوال"
            } else if (this.value == "العائله") {
                typeofId.classList.remove("none");
                typeofId.firstElementChild.innerText = "ارفق صوره من كرت العائله"

            } else if (this.value == "مقيم") {
                typeofId.classList.remove("none");
                typeofId.firstElementChild.innerText = "ارفق صوره من  هويه المقيم "

            }
        }
        if (this.name == "jobType") {
            if (this.value == "موظف") {
                jobType.classList.remove("none");
                jobType.firstElementChild.innerText = " ارفق صوره من افاده الراتب "
            } else if (this.value == "متقاعد") {
                jobType.classList.remove("none");
                jobType.firstElementChild.innerText = " ارفق صوره من افاده الراتب "
            } else if (this.value == "عاطل") {
                jobType.classList.remove("none");
                jobType.firstElementChild.innerText = "ارفاق افاده من ابشر بانه متسبب"
            }
        }

        if (this.name == "helthStatus") {
            if (this.value == "معاق") {
                helthStatus.classList.remove("none");
                helthStatus.firstElementChild.innerText = " ارفق    بطاقه الاعاقه "
            } else if (this.value == "مريض") {
                helthStatus.classList.remove("none");
                helthStatus.firstElementChild.innerText = " ارفق صوره  التقرير الطبي       "
            } else {
                helthStatus.classList.add("none");
            }
        }
        if (this.name == "rent") {
            if (this.value == "ايجار") {
                rent.classList.remove("none");
                rent.firstElementChild.innerText = " ارفق عقد الايجار "
            } else {
                rent.classList.add("none");
            }
        }
        if (this.name == "relationStatus") {
            if (this.value == "مطلقه") {
                relationStatus.classList.remove("none");
                relationStatus.firstElementChild.innerText = "إرفاق صك الطلاق + إرفاق صك الإعالة (للأبناء القٌصر)";
                relationStatus.lastElementChild.classList.remove("none");
            } else if (this.value == "ارمل") {
                relationStatus.classList.remove("none");
                relationStatus.firstElementChild.innerText = "إرفاق شهادة الوفاة + إرفاق صك الإعالة (للأبناء القٌصر) ";
                relationStatus.lastElementChild.classList.remove("none");
            } else if (this.value == "اعزب") {
                relationStatus.classList.remove("none");
                relationStatus.firstElementChild.innerText = "إرفاق إفادة من أبشر بأنه غير متزوج ";
                relationStatus.lastElementChild.classList.add("none");
            } else if (this.value == "متزوج") {
                relationStatus.classList.remove("none");
                relationStatus.firstElementChild.innerText = "إرفاق كرت العائلة (إجباري) + إرفاق عقد النكاح (اختياري)";
                relationStatus.lastElementChild.classList.remove("none");
            }
        }
    });
}

// Validation Check Box
function validateForm() {
    var checked = false;

    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            checked = true;
        }
    });

    if (!checked) {

        if (!this.hasAttribute('data-text-added')) {
            let newText = `<span class='text-danger'>  <br> اختر واحد علي الاقل</span>`;

            checkboxes[5].insertAdjacentHTML('afterend', newText);

            // Set a flag to indicate that the text has been added
            checkboxes[5].setAttribute('data-text-added', 'true');
        }

        return false; // Prevent form submission
    } else {
        // If the input is not empty, remove the span if it exists
        let nextElement = checkboxes[5].nextElementSibling;
        if (nextElement && nextElement.classList.contains('text-danger')) {
            nextElement.remove();
        }

        // Optionally, you can remove the data-text-added attribute
        this.removeAttribute('data-text-added');
    }

    // Continue with form submission if at least one checkbox is checked
    return true;
}
checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", validateForm)

});

// Validation on رقم الهويه
numberOfId.addEventListener("change", function () {

    if (!(!isNaN(this.value) && this.value.length === 10 && this.value > 0)) {

        if (!this.hasAttribute('data-text-added')) {
            let newText = `<span class='text-danger'>  هذا الحقل لابد ان يكون رقم صحيحا متكون من 10 ارقام </span>`;

            this.insertAdjacentHTML('afterend', newText);

            // Set a flag to indicate that the text has been added
            this.setAttribute('data-text-added', 'true');
        }
    } else {
        console.log("faalse");
        // If the input is not empty, remove the span if it exists
        let nextElement = this.nextElementSibling;
        if (nextElement && nextElement.classList.contains('text-danger')) {
            nextElement.remove();
        }

        // Optionally, you can remove the data-text-added attribute
        this.removeAttribute('data-text-added');
    }
});



// Validation On number Inputs
for (let i = 0; i < numberInput.length; i++) {
    numberInput[i].addEventListener("change", function () {
        if (!(!isNaN(this.value) && this.value > 0)) {

            if (!this.hasAttribute('data-text-added')) {
                let newText = `<span class='text-danger'>  برجاء ادخال قيمه رقميه صحيحه</span>`;

                this.insertAdjacentHTML('afterend', newText);

                // Set a flag to indicate that the text has been added
                this.setAttribute('data-text-added', 'true');
            }
        } else {
            // If the input is not empty, remove the span if it exists
            let nextElement = this.nextElementSibling;
            if (nextElement && nextElement.classList.contains('text-danger')) {
                nextElement.remove();
            }

            // Optionally, you can remove the data-text-added attribute
            this.removeAttribute('data-text-added');
        }

    });
}

// Confirmation box
let CheckConfirmation = () => {
    if (confirmationCheckbox != null) {
        confirmationCheckbox.addEventListener("change", function () {
            if (this.checked) {
                console.log("True confirmation");
                // If the input is not empty, remove the span if it exists
                let nextElement = this.nextElementSibling;
                if (nextElement && nextElement.classList.contains('text-danger')) {
                    nextElement.remove();
                }

                // Optionally, you can remove the data-text-added attribute
                this.removeAttribute('data-text-added');
            } else {
                if (!this.hasAttribute('data-text-added')) {
                    let newText = `<span class='text-danger'>   برجاءالموافقه علي هذا  </span>`;

                    this.insertAdjacentHTML('afterend', newText);

                    // Set a flag to indicate that the text has been added
                    this.setAttribute('data-text-added', 'true');
                }
            }
        })
    }


}

CheckConfirmation();


sendButton.addEventListener("click", function () {
    for (let i = 0; i < normalInput.length; i++) {

        if (normalInput[i].value.trim() == "") {

            if (!normalInput[i].hasAttribute('data-text-added')) {
                let newText = `<span class='text-danger'> هذا الحقل مطلوب </span>`;

                normalInput[i].insertAdjacentHTML('afterend', newText);

                // Set a flag to indicate that the text has been added
                normalInput[i].setAttribute('data-text-added', 'true');
            }
        } else {
            // If the input is not empty, remove the span if it exists
            let nextElement = normalInput[i].nextElementSibling;
            if (nextElement && nextElement.classList.contains('text-danger')) {
                nextElement.remove();
            }

            // Optionally, you can remove the data-text-added attribute
            normalInput[i].removeAttribute('data-text-added');
        }


    }
});



document.getElementById("myTextArea").value = "r";
