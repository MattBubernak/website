<!DOCTYPE html>

  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<html >
<head>
  <title>Matt Bubernak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<script>
    $(document).ready(function(){
    $("#submitForm").click(function(){
            <?php mail("soccerfreak24@gmail.com","hello","nud"); ?>

      $("#contactAlert").slideDown();
    });  
  });



$(document).ready(function(){
    $('#signature').mouseenter(function(){
       $('#sig1').fadeIn(500); 
       $('#sig2').fadeOut(500);    
    });
    });
$(document).ready(function(){
    $('#signature').mouseleave(function(){
       $('#sig1').fadeOut(500); 
       $('#sig2').fadeIn(500);    
    });
    });

</script>




<body >
      <?php mail("soccerfreak24@gmail.com","hello","nud"); echo "sent an email"; ?>

   <div class="container">
     <div class="jumbotron" style="background: url(Images/background5.jpg); background-size:cover;">
        <div class="row">
          <div class="col-md-2">
           <a href = "Index.html">
             <div id="signature" style = "position:relative;">
                <img src="Images/sigglow.png" id="sig1" width="140" style="display:none; z-index:1; position:absolute;">
                <img src="Images/sig.png" id="sig2" width="140" style = "display:block; z-index:2; position:absolute;">
            </div>
           </a>
          </div>
          <div class="col-md-10">
           <h1 style="font-family:'Segoe UI'; text-align:right ">Matt Bubernak</h1>
           <p class="lead" style="font-family:'Segoe UI' ; text-align:right "><i>Software Developer - Ultimate Player - Student</i></p>
          </div>
        </div>

      <div class="btn-group btn-group-justified">
        <div class="btn-group">
         <button type="button" class="btn btn-default" onclick="location.href='Index.html'">About</button>
        </div>
        <div class="btn-group">
         <button type="button" class="btn btn-default" onclick="location.href='Projects.html'">Projects</button>
        </div>
        <div class="btn-group">
         <button type="button" class="btn btn-default" onclick="location.href='Resume.html'">Resume</button>
        </div>
        <div class="btn-group">
         <button type="button" class="btn btn-primary" onclick="location.href='Contact.html'">Contact</button>
        </div>
      </div>
     </div>

   <div class="alert alert-failure" id = "contactAlert" style= "display:none">Your message has failed(try just emailingme for now)!</div>

   <div class="row">

    <div class="col-md-6">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h1>Web Presence</h1>
          </div>
          <div class="panel-body">
             <ul>
              <li><a href="http://www.facebook.com/soccerfreak24">Facebook</a></li>
              <li><a href="http://www.linkedin.com/pub/matt-bubernak/14/98b/b50">LinkedIn</a></li>
              <li><a href="http://www.youtube.com/user/IGotZune">Youtube</a></li>
              <li><a href="mailto:soccerfreak24@gmail.com">Gmail</a></li>
            </ul>
          </div>
    </div>
  </div>

    
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Contact Me</h1>
        </div>
        <div class="panel-body">

          <form role="form">
            <div class="form-horizontal" class="form-group" style="width:50%">
              <label for="name has-success">Name</label>
              <input class="form-control input-md" type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-horizontal" class="form-group" style="width:50%">
              <label for="email">Subject</label>
              <input class="form-control input-md" type="text" class="form-control" id="Subject" placeholder="Enter a subject">
            </div>
             <div class="form-horizontal" class="form-group" style="width:50%">
              <label for="email">Email</label>
              <input class="form-control input-md" type="email" class="form-control" id="Email" placeholder="Enter a contact email address">
            </div>
            <div class="form-group">
              <label for="aboutMe">Message</label>
              <textarea class="form-control"  id="aboutMe" placeholder="Say something nice..." rows="3" ></textarea>
            </div>
            <div>
             <button type="button" class="btn btn-default" id="submitForm">Submit</button>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>





</body>
</div>
 <div class="well well-sm" style="text-align: center;" >
  <a href= "mailto:soccerfreak24@gmail.com">
<img src="Images/mail.png" width="25" height="25" border="0">
</a>

<a href= "http://www.facebook.com/soccerfreak24">
<img src="Images/facebook.png" width="25" height="25" border="0">
</a>

<a href= "http://www.linkedin.com/pub/matt-bubernak/14/98b/b50">
<img src="Images/linkedin.png" width="25" height="25" border="0">
</a>

 </div>
<p style="text-align:center">
  -Last Update 10/8/2014-
</p>
</html>
