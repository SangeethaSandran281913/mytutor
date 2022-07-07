<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../css/style.css" />
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

  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }

  .mySlides {
    display: none;
  }

  img {
    vertical-align: middle;
  }

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

  .container {


    position: relative;

  }

  .center {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }
        </style>
    </head>

    <script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

 
</script>


<script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
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
        
        <!-- Navigation bar -->

        <div class="w3-top">
    <div class="w3-bar w3-purple w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"> </i></a>
      <a href="{{ url('mainpage') }}" class="w3-bar-item w3-button w3-padding-large w3-cursive"><i class="fa fa-cogs"></i><b> MY TUTOR</b> </a>
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right">
      </a>

        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button">Logout</a>
              </div>
    </div>
  </div>

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-flat-wisteria w3-hide w3-hide-large w3-hide-medium w3-top"
  style="margin-top: 46px">
  <a href="{{ url('logout') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><i class="fa fa-lock"></i> Logout</a>
  </div>


        
            
       

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-64 w3-white">
        <img class="w3-image w3-margin" src="../images/6.png" ><br>
        </header>

        <section>
            <!-- Modal button -->
            <div>
            <button class="w3-button w3-teal w3-round w3-right w3-margin" onclick="document.getElementById('newsubject').style.display= 'block';return false;">New Subject
            </button>
            </div>
            <br><br>
           <!-- Display data -->
           <div class="w3-padding">
                <table class="w3-table w3-striped w3-bordered">
                <thead class="w3-teal">
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price (RM) </th>      
                    <th>Learning Hours</th>
                </thead>
                @foreach ($subjectItems as $subjectItem)
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td> -->
                    <td>{{ $subjectItem->id}}</td>
                    <td>{{ $subjectItem->subject_title}}</td>
                    <td>{{ $subjectItem->subject_description}}</td>
                    <td>{{ $subjectItem->subject_price}}</td>
                    <td>{{ $subjectItem->subject_learningHours}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </section>

        <!-- Pop out add product modal -->
        <div id="newsubject" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row w3-teal"> <span onclick="document.getElementById('newsubject').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                    <h4 class="w3-margin-left">New Subject Form</h4>
                </header>
                <div class="w3-padding">
                <form action="{{ route('createSubject') }}" method="post">
                    {{csrf_field()}}
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="sbj_title">Title</label>
                            <input class="w3-input w3-round w3-border" type="text" name="sbj_title">
                        </div>
                    </div>
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="sbj_descr">Description</label>
                            <textarea class="w3-input w3-border w3-round" name="sbj_descr" rows="4" cols="50"></textarea>
                        </div>
                    </div>                 
                    <div class="w3-row-padding">
                        <div class="w3-half">
                            <label for="sbj_price">Price</label>
                            <input class="w3-input w3-round w3-border" type="number" min="0" step="any" name="sbj_price">
                        </div>
                        <div class="w3-half">
                            <label for="sbj_learnHours">Learning hours</label>
                            <input class="w3-input w3-round w3-border" type="number" min="0" step="1" name="sbj_learnHours">
                        </div>
                    </div>
                    <br />
                    <button class="w3-button w3-teal w3-round" type="submit">Register Subject</button>
                </form>
                </div>
            </div>
        </div>
        <br>
        <br>
    
        
      <style>
.footer {
  position: static;
  left: 0;
  bottom: 0;
  width: 100%;
  
  text-align: center;
}
.footer a {
  text-decoration: none;
}
</style>  
        <!-- Footer -->
      <div class="footer">
      <footer class="footer w3-center w3-flat-wisteria" >
      <br>
    
      <p class="w3-center">&#169; MY TUTOR. 2022</p><br>
    </footer>
</div>
</body>
</html>