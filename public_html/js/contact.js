function checkEnableMessage() {
  if(!document.getElementById("name").value) {
    document.getElementById("message").disabled = true;
  } else if(!document.getElementById("email").value) {
    document.getElementById("message").disabled = true;
  } else {
    document.getElementById("message").disabled = false;
  }
}

function updateCharCount() {
  var element = document.getElementById("message");
  var max = element.getAttribute("maxlength");
  var count = element.value.length;

  document.getElementById("charcount").innerHTML = "Enter your message here (" + count + "/" + max + " chars)";
  if(count > 0) {
    document.getElementById("send").disabled = false;
  } else {
    document.getElementById("send").disabled = true;
  }
}

function checkInput(id) {
  if(id === null) {
    alert("Error: checkInput(null)");
    return;
  }
  var emailpattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var element = document.getElementById(id);

  switch(id) {
    case 'email':
      if(!emailpattern.test(element.value)) {
        element.style.color = "red";
      } else {
        element.style.color = "black";
      }
      break;
    default:
      alert("Error: Unrecognized id 'checkInput(" + id + ")");
  }
}