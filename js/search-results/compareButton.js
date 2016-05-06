var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}

var limit = 2;
$('input.single-checkbox').on('change', function (evt) {
    if ($(this).siblings(':checked').length >= limit) {
        this.checked = false;
    }
});

var chks = [];
getBoxes();

function getBoxes() {
    var form = document.getElementById("compare");
    var inputs = form.getElementsByTagName("input");

    for (var i = 0, len = inputs.length; i < len; i++) {
        if (inputs[i].type == "checkbox")
            chks.push(inputs[i]);
        inputs[i].onclick = checkBoxes;
    }
}

function checkBoxes() {
    var count = 0;
    for (var i = 0, len = chks.length; i < len; i++) {
        if (chks[i].checked)
            count++;
    }
    if (count === 2) {
        document.getElementById("submitBtn").disabled = false;
        return;
    } else {
        document.getElementById("submitBtn").disabled = true;
    }
}

