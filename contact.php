<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
  <!-- Bootstrap CDN and external CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="main3">
        <div class="container">
         <!-- Navbar Here -->
  
         <nav class="navbar navbar-expand-md navbar-dark bg-transparent pt-5">
              <a href="Home.php" class="navbar-brand logo">Photogra<span>phiste</span> </a>
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
              </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a href="Home.php" class="nav-link">
                          Home
                      </a>
                  </li>
                   <li  class="nav-item">
                      <a href="about.php" class="nav-link">
                         About
                      </a>
                  </li>
                   <li class="nav-item">
                      <a href="blog.php" class="nav-link">
                          Blog
                      </a>
                  </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                        Login
                    </a>
                </li>
              </ul>
             </div>
          </nav>
        </div>
         <!-- debut de contenu contact -->
  <section class="contact">
    <div class="content">
        <h2 class="contact1">CONTACT</h2>
    </div>
    <div class="container3">
      <div class="row">
        <div class="col">
          <div class="contactInfo">
            <div class="box">
              <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="text">
                     <h3>Address</h3>
                     <p style="width: 350px;">Morocco Oujda City , Lazaret C 1 street</p>
                 </div>
             </div>
             <div class="box">
                 <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                 <div class="text">
                     <h3>Phone</h3>
                     <p>0797436785  </p>
                 </div>
             </div>
             <div class="box">
                 <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                 <div class="text">
                     <h3>Email</h3>
                     <p>photographercam@gmail.com</p>
                 </div>
             </div>
         </div>   
        </div>
        <div class="col">
          
        </div>
           <div class="contactForm">
               <form action="mail.php" method="POST">
                   <h2>Send Message</h2>
                   <div class="inputBox ">
                    <span>Name</span>   
                   <input type="text" name="visitor_name" required="required">
                  
                   </div>
                   <div class="inputBox">
                    <span>Email title</span>  
                   <input type="text" name="email_title" required="required">
                    
                   </div>

                   <div class="inputBox">
                    <span>Email</span>  
                   <input type="text" name="visitor_email" required="required">
                    
                   </div>
                   <div class="inputBox">
                    <span>Message..</span>   
                   <textarea required="required" name="visitor_message"></textarea>
                   
                   </div>
                   <div class="inputBox">
                   <input type="submit" name="submit" value="Submit">
                   </div>
               </form>
           </div> 
      </div>

    </div>
    </section>
    <section id="footer" class=" ">
      <div class="row m-auto">
          <div class="col text-center">
              <p>Made by Photographer Camera &#169;</p>
          </div>
          <div class="col text-center">
              <i class="fab fa-facebook-f footer-icon"></i>
              <i class="fab fa-github footer-icon"></i>
              <i class="fab fa-linkedin footer-icon"></i>
              <i class="fab fa-instagram footer-icon"></i>
          </div>
      </div>
 
</section>
 
    </section>
     
   

     <!-- Bootstrap's Javascript -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>