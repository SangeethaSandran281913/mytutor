<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/login.js"></script>
</head>

<style>

.checked {
      color: rgb(233, 131, 233);
    }

    /* Style buttons */
    .btn {
      background-color: rgb(155, 2, 194);
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: rgb(218, 89, 218);
    }

    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
      position: relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active {
      background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
    /* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #7E1CFF;
}

input:focus + .slider {
  box-shadow: 0 0 1px #7E1CFF;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


</style>



 

<script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunc() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
      </script>

<body>

@if (session('save'))
            <script>alert("Success");</script>
        @endif
        @if (session('error'))
            <script>alert("Failed");</script>
        @endif

  <!-- Navigation Bar -->
  <div class="w3-top">
    <div class="w3-bar w3-flat-wisteria w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)"
        onclick="myFunc()" title="Toggle Navigation Menu"><i class="fa fa-bars"> </i></a>
      <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-cursive"><i class="fa fa-cogs"></i><b> MY TUTOR</b> </a>
      <a href="{{ url('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-lock"></i> Login 
        </a>
      <a href="{{ url('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-group"></i> Register
         </a>

     
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right">
    </a>
    </div>
  </div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-flat-wisteria w3-hide w3-hide-large w3-hide-medium w3-top"
  style="margin-top: 46px">
  <a href="{{ url('login') }}"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunc()"><i class="fa fa-lock"></i> Login</a>
  <a href="{{ url('register') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunc()"><i class="fa fa-group"></i> Register</a>
</div>


    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding w3-center" style="max-width:1500px;margin-top:30px">
        <div style="display:flex; justify-content: center">
            <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
                <form action="{{ route('register.post') }}" method="post" accept-charset="UTF-8">
                {{csrf_field()}}
            <div class="w3-container w3-center">
                <img class="w3-center w3-image w3-margin" src="../images/4.png" style="height:350px;width:350px"><br>
            </div>
                    <p>
                    <i class="fa fa-address-book"></i> <label><b> Name</b></label>
                        <input class="w3-input w3-round w3-border" type="text" name="name" id="idname"
                            placeholder="Your name" required>
                    </p>
                    @if ($errors->has('name'))
                                <span class="w3-red">{{ $errors->first('name') }}</span>
                            @endif
                    <p>
                    <i class="fa fa-envelope-open"></i> <label><b> Email</b></label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" id="idemail"
                            placeholder="Your email" required>
                    </p>
                    @if ($errors->has('email'))
                                <span class="w3-red">{{ $errors->first('email') }}</span>
                            @endif
                    <p>
                    <i class="fa fa-volume-control-phone"></i> <label><b> Phone Number</b></label>
                        <input class="w3-input w3-round w3-border" type="tel" name="phone" id="idphone"
                            placeholder="Your phone number" required>
                    </p>
                    @if ($errors->has('phone'))
                                <span class="w3-red">{{ $errors->first('phone') }}</span>
                            @endif
                    <p>
                    <i class="fa fa-lock"></i><label for ="idpass" ><b> Password</b></label><br>
                        <input class="w3-input w3-round w3-border" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  id="idpass" placeholder="Your password" required> 
                        </p>
                     
                  <div id="message">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                  </div>
                     
                         @if ($errors->has('password'))
                                <span class="w3-red">{{ $errors->first('password') }}</span>
                            @endif
                  <p>
                    <i class="fa fa-unlock"></i><label><b> Confirm Password</b></label><br>
                        <input class="w3-input w3-round w3-border" type="password" name="confirm_idpass" id="confirm_idpass"
                      placeholder="Confirm Password" onchange="confirm_pw()"required>
                    </p>
                    <b>Show Password  </b><label class="switch" >
                        <input type="checkbox" onclick="myFunction()">
                        <span class="slider round" ></span> </label>
              

                   <p>
                    <i class="fa fa-map-marker"></i> <label><b> Address</b></label>
                        <input class="w3-input w3-round w3-border" type="text" name="address" id="idaddress"
                            placeholder="Your address" required>
                    </p>
                    @if ($errors->has('address'))
                                <span class="w3-red">{{ $errors->first('address') }}</span>
                            @endif
                    <p>
                    <label for="state">State</label>
                            <select class="w3-select w3-border" name="state">
                                <option value="" disabled selected>Choose your state</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Malacca">Malacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>   
                    </p>
                    @if ($errors->has('state'))
                            <span class="w3-red">{{ $errors->first('state') }}</span>
                        @endif
                   
                        <div class="w3-row">
                        <button class="w3-button w3-blue-gray w3-round w3-right" value="submit">Register</button>
                    </div>
                    <p style="font-size:16px;"> Already have an account? <a href="{{ url('login') }}">Login</a></p>
                </form>
            </div>
            
        </div>
        <script>

function myFunction() {
  var x = document.getElementById("idpass" );
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

  var x = document.getElementById("confirm_idpass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        var myInput = document.getElementById("idpass");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {  
            letter.classList.remove("invalid");
            letter.classList.add("valid");
          } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
          }
          
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {  
            capital.classList.remove("invalid");
            capital.classList.add("valid");
          } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
          }

          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {  
            number.classList.remove("invalid");
            number.classList.add("valid");
          } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
          }
          
          // Validate length
          if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
          } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
          }
        }
        </script>

        </body>
        <footer class="footer w3-center w3-flat-wisteria">
      <br>
      
      <p class="w3-center">&#169; MY TUTOR. 2022</p>
    </footer>

<script src="../js/script.js"></script>
</html>