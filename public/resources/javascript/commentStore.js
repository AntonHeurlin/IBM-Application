$(document).ready(function () {
console.log("hej1");

readReviews();

$("#SendComment").click(function () {
    console.log("hej2");
      storeComment();
  });

$("#DeleteComment").click(function () {
    console.log("hej5");
    deleteComment();
  });

});

function storeComment() {
  console.log("hej3");
    $.getJSON("StoreEntry",$("#msgDetails").serialize(),
    function (response) {
      readReviews();
});
}

function readReviews() {
  $("#fromServer").empty();
  console.log("hej2");
        $.getJSON("GetEntries", "recipeSite=" +$("#recipeSite").text(),
                function (response) {
                  console.log("hej3");
                  for (var i = response.length - 1; i >=0; i--) {
                    console.log("skriv ut");
                    var entry = response[i];
                    $("#fromServer").prepend("<div><p>" +"[" +entry.nick_name +" commented, " +entry.timestamp+"]:" +"</br>" +entry.msg +"</p>");
                    if($("#session_username").text() == entry.nick_name){
                      console.log("är vi inne?");
                      +$("#fromServer").prepend("<form id='deleteForm'>"
                      +"<input type='hidden' name='timestamp' value='" +entry.timestamp +"'/>"
                      +"<input type='hidden' name='recipeSite' value='AmericanPancake'/>"
                      + "</p>"
                      +"</form>");
                      $("#fromServer").prepend("<button onclick='deleteComment()' class='deletebtn'>Delete Comment Below</button>");
                    }
                  }
    });
  }

function deleteComment() {
  console.log("goodbye");
  $.getJSON("DeleteEntry", $("#deleteForm").serialize(), function (response) {
    readReviews();
  });
}
