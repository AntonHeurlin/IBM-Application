$(document).ready(function () {
console.log("hej1");
$("#fromServer").empty();
storeComment();


});

function storeComment() {
  console.log("hej2");
        $.getJSON("GetEntries",
                function (response) {
                  console.log("hej3");
                  for (var i = response.length - 1; i >=0; i--) {
                    var entry = response[i];
                    $("#fromServer").prepend("<p>" +"[" +entry.nick_name +" commented, " +entry.timestamp+"]:" +"</br>" +entry.msg+ "</p>");
                  }
    });
  }
