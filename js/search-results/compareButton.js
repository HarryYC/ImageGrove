var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
$("input:checkbox").click(function() {

  var bol = $("input:checkbox:checked").length >= 2;  
  $("input:checkbox").not(":checked").attr("disabled",bol);
  $("#submitBtn").prop("disabled", !bol);
  
});