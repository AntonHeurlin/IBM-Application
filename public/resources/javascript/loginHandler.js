$(document).ready(function () {
console.log("hej1");

    $("#LoginBtn").click(function () {
      console.log("hej2");
        loginRequest();
    });


});
function loginRequest() {
   console.log("hej3");
    $.getJSON("Login", $("#userinformation").serialize(),
        function (response) {
            showResult(response);
        });
}
function logOut(){
  console.log("hej7");
  $.getJSON("Logout", function (response){
      showResult(response);
  });
}
function showResult(result) {
    $("#res").text(result.value);
}
