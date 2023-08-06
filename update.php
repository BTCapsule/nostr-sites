<!DOCTYPE html>
<html>
<head>
	<title>Nostr Sites Premium</title>
	<meta charset="UTF-8">
	<style>
	body {
            font-size: 100%;
            font-family: "Lucida Console", monospace;
            line-height: 1;
            background-color: black;
						
					}
	
input {
	
	color:white;
}
				
				
					
	
		.center {
			text-align: center;
			margin-top: 10px;
			font-size: 40px;
			
			
		}
		
		.fcf-form-control {
			
			height:50px;
			font-size:30px;
			width: 90%;
			color:black;
			
		}
		#fcf-button {
			
			height: 75px;
			width: 250px;
			font-size: 40px;
			background-color: white;
	color: #202020;
	margin-left: 10px;
	margin-bottom: 10px;
	margin-top: 10px;
		}
		
	
		
		.privacy {
			
			text-decoration: none;
		}
		
    h1 {
			font-family: "Helvetica";
            font-weight: 700;
						transform: scaleY(1.4);
            text-align: center;
            margin-top: 120px;
            font-size: 90px;
						color: #9966CB;
        }

        a {
            color: #9966CB;
            text-decoration: none;
            font-size: 40px;
            font-weight: bold;
					}

	

.text	{
	
	color: white; 
	text-align: center;

	line-height: 1.3em; 
	display:inline-block;
	font-size: 45px;
	margin-left: 40px;
	margin-right: 40px;
	
	
	
}

        .follow {
					font-family: "Helvetica";
            font-weight: 500;
						transform: scaleY(1.4);
            color: #9966CB;
            text-decoration: none;
            font-size: 50px;
            font-weight: bold;
						margin-bottom: -20px;
					}
					
					
#zapper
{
						font-family: "Helvetica";
            font-weight: bold;
						transform: scaleY(1.2);
	margin-top: 30px;
  margin-right: 20px;
  float: right;
	text-decoration: none;
	height: 60px;
	font-size: 40px;
}	


 .checkbox-label {
     
            margin-bottom: 10px;
            font-size: 45px;
            color: white;

        }

        .checkbox-label input[type="checkbox"] {
					
					height:30px;
					width:30px;

					}
					
				
					
				.input-description {
            font-size: 20px;
            color: white;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .url-input-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .url-input-prefix {
            color: white;
            font-size: 50px;
            margin-right: 5px;
						margin-left: 10px;
        }

        .url-input-field {
            height: 50px;
            font-size: 30px;
            width: 30%;
            color: black;
					}	



	</style>
</head>
<body>
	
	
		<a href="#" onclick="launchBitcoinWallet()" id="zapper">⚡️TIPS</a>

	
<script>
function launchBitcoinWallet() {
  var fallbackLink = 'https://getalby.com/p/btcapsule';
  var fallbackTimeout = setTimeout(function() {
    window.location.href = fallbackLink;
  }, 1000); 
  window.location.href = 'walletofsatoshi://bronzeping54@walletofsatoshi.com';
  window.onblur = function() {
    clearTimeout(fallbackTimeout);
  };
}
</script>	



	
 	<script>
		
	
	function launchClient(link) {
		
		if (link[0] == "h"){
			console.log(link[0])
			window.location.href = link
		} else{
		
  var fallbackLink = 'https://snort.social/' + link;
  var fallbackTimeout = setTimeout(function() {
    document.location.assign(fallbackLink);
  }, 4000); 
  var damus = window.location.href = 'damus://' + link;
	console.log(damus)
  setTimeout(function() {
    window.location.href = 'nostr://' + link;
  }, 2000); 
  window.onblur = function() {
    clearTimeout(fallbackTimeout);
  };
	
}	

}



</script>	


	
	
	<br>
	
<h1>NOSTR SITES</h1>

<div class="center" style="margin-top:-90px">
<p class = "text">PREMIUM</p>
</div>	

<p class = "text">If you already own a URL, use this form to update your page.</p>

<div class="center">
    <p class="follow">ENTER YOUR NPUB:</p><br><br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
        <input class="fcf-form-control" maxlength="63" type="text" name="npub" required><br><br>

        <div class="center">
            <p class="follow">ENTER A NOTEID:</p><br><br>
            <input class="fcf-form-control" maxlength="3500" type="text" name="note" required><br><br>

            <div class="center">
                <p class="follow">CUSTOM URL</p>
            </div>
            <br>
            <br>
            <span class="url-input-prefix">nostrsites.com/</span>
            <input class="url-input-field" type="text" name="title" required><br><br>

            <label class="checkbox-label">
                <input type="checkbox" name="jqueryCheckbox"> jQuery
            </label>

            <label class="checkbox-label">
                <input type="checkbox" name="phaserCheckbox"> Phaser
            </label><br><br>

            <label class="checkbox-label">
                <input type="checkbox" name="bootstrapCheckbox"> Bootstrap
            </label><br><br>

            <label class="checkbox-label">
                <input type="checkbox" name="reactCheckbox"> React
            </label><br><br>
						
						    <label class="checkbox-label">
                <input type="checkbox" name="regNote"> Regular Note
							</label><br><br>

            <input type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block" value="Submit">
        </div>
    </form>
</div>

<p id="validation-error" style="color: red; font-weight: bold; display: none; margin-top: 10px; text-align:center; font-size:50px">PLEASE ENTER A VALID NOTE</p>
</div>

<br>
<br>

<script>
function validateForm() {
  var npubInput = document.getElementsByName("npub")[0];
  var npubValue = npubInput.value;

  var noteInput = document.getElementsByName("note")[0];
  var noteValue = noteInput.value;

  var titleInput = document.getElementsByName("title")[0];
  var titleValue = titleInput.value;

  
  if (npubValue.length !== 63 || npubValue.substr(0, 4) !== "npub") {
    document.getElementById("validation-error").textContent = "PLEASE ENTER A VALID NPUB";
    document.getElementById("validation-error").style.display = "block";
    document.getElementById("validation-error").style.color = "red";
    return false;
  }

  
  if (noteValue.length !== 63 || noteValue.substr(0, 4) !== "note") {
    document.getElementById("validation-error").textContent = "PLEASE ENTER A VALID NOTE";
    document.getElementById("validation-error").style.display = "block";
    document.getElementById("validation-error").style.color = "red";
    return false;
  }
	
var regex = /^[a-zA-Z0-9_-]+$/;
    if (!regex.test(titleValue)) {
        document.getElementById("validation-error").textContent = "PLEASE ENTER A VALID URL NAME (CHECK FOR EMPTY SPACE)";
        document.getElementById("validation-error").style.display = "block";
        return false;
			}	
	
	

  var formData = new FormData();
  formData.append("note", noteValue);

  fetch("write_note.php", {
    method: "POST",
    body: formData
  })
    .then(response => {
      if (response.ok) {
        console.log("write_note.php executed successfully");
				
      } else {
        console.error("write_note.php execution failed");
        
      }
    })
    .catch(error => {
      console.error("Error executing write_note.php:", error);
      
    });

  document.getElementById("validation-error").textContent = "PLEASE WAIT ABOUT 10 SECONDS WHILE WE BUILD YOUR SITE";
  document.getElementById("validation-error").style.display = "block";
  document.getElementById("validation-error").style.color = "#9966CB";

	
	
	
	
	
	         setTimeout(() => {
    fetch("https://nostrsites.com/client/")
      .then(response => response.json())
      .then(clientData => {
        var submittedNote = null;
console.log('fetched data')
        
        clientData.forEach(obj => {
          if (obj.note === noteValue) {
            submittedNote = obj;
          }
        });

        if (submittedNote) {
          
          var submittedNpub = submittedNote.npub;

          if (submittedNpub === npubValue) {
            fetch("https://nostrsites.com/urls.txt")
              .then(response => response.text())
              .then(urlsData => {
                var titlePattern = new RegExp("^" + titleValue + "$", "m");
                var titleMatch = urlsData.match(titlePattern);

                if (titleMatch) {
                  var nextLineStartIndex = urlsData.indexOf("\n", titleMatch.index + titleMatch[0].length) + 1;
                  var nextLineEndIndex = urlsData.indexOf("\n", nextLineStartIndex);

                  if (nextLineEndIndex !== -1) {
                    var nextLine = urlsData.substring(nextLineStartIndex, nextLineEndIndex).trim();
                    
                  } else {
                    var nextLine = urlsData.substring(nextLineStartIndex).trim();
                    
                  }

                  console.log(submittedNpub + " submittedNpub");
                  console.log(nextLine + " nextLine");

                  if (nextLine === submittedNpub) {
                    executePremiumCreation();
                  } else {
                    document.getElementById("validation-error").textContent = "NPUB NOT AUTHORIZED";
                  document.getElementById("validation-error").style.display = "block";
									document.getElementById("validation-error").style.color="red";
                }
              } else {
                document.getElementById("validation-error").textContent = "URL NOT FOUND";
                  document.getElementById("validation-error").style.display = "block";
									document.getElementById("validation-error").style.color="red";
              }
            })
            .catch(error => {
              console.error("Error retrieving URLs data:", error);
							
							document.getElementById("validation-error").textContent = "ERROR RETRIEVING DATA. PLEASE TRY AGAIN";
					document.getElementById("validation-error").style.display = "block";
					document.getElementById("validation-error").style.color="red";
              
            });
        } else {
					document.getElementById("validation-error").textContent = "URL ALREADY TAKEN";
					document.getElementById("validation-error").style.display = "block";
					document.getElementById("validation-error").style.color="red";
          console.log("npub data not found");
        }
      } else {
				
				document.getElementById("validation-error").textContent = "ERROR RETRIEVING DATA. PLEASE TRY AGAIN";
					document.getElementById("validation-error").style.display = "block";
					document.getElementById("validation-error").style.color="red";
        console.log("note variable not found");
      }
    })
    .catch(error => {
      console.error("Error retrieving client data:", error);
			document.getElementById("validation-error").textContent = "ERROR RETRIEVING DATA. PLEASE TRY AGAIN";
					document.getElementById("validation-error").style.display = "block";
					document.getElementById("validation-error").style.color="red";
      
    });
	}, 12000);
	
	
	
	
	
	
	

    return false; 
}

function executePremiumCreation() {
    
    console.log("Executing create_file_premium.php");

    var npubValue = document.getElementsByName("npub")[0].value;
    var titleValue = document.getElementsByName("title")[0].value;
    var noteValue = document.getElementsByName("note")[0].value;

    var formData = new FormData();
    formData.append("npub", npubValue);
    formData.append("title", titleValue);
    formData.append("note", noteValue);

    var checkboxes = document.querySelectorAll("input[type=checkbox]:checked");
    checkboxes.forEach(function (checkbox) {
        formData.append(checkbox.name, checkbox.value);
    });

    fetch("create_file_premium.php", {
        method: "POST",
        body: formData
    })
        .then(response => {
            if (response.ok) {
                console.log("create_file_premium.php executed successfully");
                
                document.getElementById("validation-error").textContent = "SUCCESS!";
                document.getElementById("validation-error").style.display = "block";
                document.getElementById("validation-error").style.color = "green";
                
                var redirectURL = "https://nostrsites.com/" + titleValue;
                window.location.href = redirectURL;
            } else {
                console.error("create_file_premium.php execution failed");
                
            }
        })
        .catch(error => {
            console.error("Error executing create_file_premium.php:", error);
            
        });
			}
			
	</script>
	
<br>
<br>
<br>
<br>


	<br>
	<br>
	
	<p class="text">
		


Don't know HTML? Try our <a class="follow" href="https://nostrsites.com/write">Markdown to HTML converter</a>
<br><br>

If you like Nostr Sites please consider throwing some sats in my <a href="#" onclick="launchBitcoinWallet()" style="color:#9966CB; font-size:42px; font-weight:bold">tip jar 🤙💜</a>
		
		<br>
		<br>
		
Also, don't forget to <br>follow me on nostr:
	
<br><br>		
		<a class="follow" href="#" onclick="launchClient('npub1v6xwae25wh6etmqw3m6yce9lnk5dnhtqpzk9fhxjfvjsryctjc8q2kxk5t')" >
		BTCapsule 🏴🧡
		</a>		
		
	
	
	<br>
<br>
	<br>
	<br>
	
<br>
<br>
	</p>
	
	
	
	
	
</body>
</html>