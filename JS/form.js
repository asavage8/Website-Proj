
      var nameIn = document.getElementById("name");
      var emailIn = document.getElementById("email");
      var messageIn = document.getElementById("Message");

      nameIn.addEventListener("change", chkName, false);
      emailIn.addEventListener("change", chkEmail, false);
      messageIn.addEventListener("change", chkMessage, false);

//----------------------------------------------------------------------------------------------------------
      function chkName(event) {
        var myName = event.currentTarget;
        if (myName.value.length == 0) {
          alert("The name you entered " + myName.value +
                " is empty\n");
         }
      }

      function chkEmail(event){
        var myEmail = event.currentTarget;
        if (myEmail.value.length == 0) {
          alert("Please enter a vaid email. \n" );
         }
      }

      function chkMessage(event){
        var myMes = event.currentTarget;
        if(myMes.value.length == 0){
          alert("Please insert message.\n");
        }
      }
