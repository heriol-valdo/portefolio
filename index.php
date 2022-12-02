<?php session_start(); ?>


<!Doctype html>

<html lang="en-US">
	
<head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
      <link href="css/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
   
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>

   
	<title>first page</title>
</head>

<body>
	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top" id="nav">
     <header class="container-fluid">
    	<a class="navbar-brand text-uppercase fw-bold" href="">
         <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Relive</span>Me
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        	 <ul class="navbar-nav bg-light navbar-light" style="background-color:white ;">
            <li class="nav-item active">
                <a class="nav-link" href="#propos" style="margin-left: 10px;">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#vedette" style="margin-left: 10px;">featured-book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#carouseldark" style="margin-left: 10px;">Our-books</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="#work" style="margin-left: 10px;">other-activites</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="#contact" style="margin-left: 10px;">Contact</a>
            </li>
        </ul>
         </div>
     </header>
    </nav>
   


   <div  class="divhome" id="propos">
      <p  class="about"> Would you like  know  </p>	
       <p class="about1">more about us</p>
       <a class="card-link" style="color:white; text-decoration: none;" 
       href="about.html">
       <a class="card-link" style="color:white; text-decoration: none;" 
       href="about.html">
      <button type="button" class="btn btn-primary" 
       style="height:40px; margin-left:15px; margin-top: 10px;">
       Click here</button></a>

    </div>



     <main >

     	<div id="vedette" style=""></div>
     	
	  		<h2>books in news</h2>
	    <div class="card mb-3" style="max-width: 1000px;"  >
	    	
		  <div class="row g-0">
            <div class="col-md-4">
		      <img src="images/15.jpg" class="img-fluid rounded-start" alt="..." style="height:300px; width: 550px;">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="" translate="no">Bachirou</h5>
		        <p class="card-text">This book is about a young homeless man who was abandoned by his family.
                    and who succeeds thanks to his determination to rise to the rank of decision-maker.</p>
		          <p class="card-text"><small class="text-muted">he shares his story to change the look towards these young children who did not ask to come into the world and who are considered as rejects of society, these young people who do not ask for your help but just for compassion and not a look of superiority.
                 </small> 
                </p>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#staticBackdrop"
                  style="height:40px; margin-right:10px; margin-top: 20px;">see an excerpt</button>
		      </div>
		    </div>
		  </div>
        </div>
     </main>


 <div id="carouseldark" class="carousel slide" data-bs-ride="carousel" style="margin-right:15px;">
 	<div id="carouseldark" style="height:100px">
	  		</div>
 	<h2 style="margin-left:15px; margin-bottom: 10px;"> Our-books</h2>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
     <img src="images/heriol4.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Requiem</h5>
        <p>the ultimate forgiveness.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/heriol3.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>cold case</h5>
        <p>Monique adams case 1980.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/heriol2.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>the world of C</h5>
        <p>parallel universe where all men are equal.</p>
      </div>
    </div>
     <div class="carousel-item">
       <img src="images/heriol1.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>the point of view of the weak</h5>
        <p>stand on the other side of the mirror.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouseldark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouseldark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  
    <div class="page-content">
    	<div id="work" style="height:100px;">
    	
    	</div>
     

<div class="tf-work-section">
  <div class="container" >
    <h1 class="h1">other activites</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/2.jpg" alt="2-start-simple"/>
          <div class="card-body">
            <p class="text-muted">
                Creation and development of websites, mobile applications, maintenance of information systems according to your wishes.</p><a class="card-link" href="http://test.bestdocta.net/noDev/" style="color:blue;">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/3.jpg" alt="3-start-simple"/>
          <div class="card-body">
            <p class="text-muted">PAdvice and proposals for mobile and web models for your application.</p><a class="card-link" href="#" style="color:blue;">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/4.jpg" alt="4-start-simple"/>
          <div class="card-body">
            <p class="text-muted">installation, maintenance
              tools to ensure the security and management of the computer park..</p><a class="card-link" href="#" style="color:blue;">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  
<div class="tf-contact-section">
  <div class="container" id="contact">
    <h2 class="h4">More informations</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h3 class="h5">Contact us</h3>
        <form action="php/formulaire.php" method="POST">
          <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 tf-contact-col">
              <input class="bg-light form-control" type="text" name="name" placeholder="*Name" required="required"/>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pb-2">
              <input class="bg-light form-control" type="email" name="email" placeholder="*Your Email Address" required="required"/>
            </div>
          </div>
          <div class="row pb-2 no-gutters">
            <div class="col-md-12 col-sm-12">
              <textarea class="bg-light mb-2 form-control" name="message" placeholder="*Your Message" rows="5" required="required"></textarea>
            </div>
          </div>
          <button class="btn btn-primary" type="submit"  >Submit</button>
        </form>
      </div>
      <div class="col-md-6 col-sm-12 float-right text-right">
        <h3 class="h5">Address</h3><span>Douala<br/>Cameroun</span>
        <p></p>
        <h3 class="h5">Phone</h3>
        <p>+237 691547485</p>
        <h3 class="h5">Email</h3>
        <p>zeufackheriol@gmail.com</p>
        <i class="bi bi-airplane-engines"></i>

      </div>
    </div>
    <?php if(isset($_SESSION['emailMessage'])) : ?>
    <div class="row">
    	 <div class="alert alert-success" role="alert">
        Bonjour <?php echo $_SESSION['emailMessage']; ?> et bienvenue sur le site !
       </div>
    	
    </div>
    <?php endif; ?>
  </div>
</div>

    

	<footer class="bg-dark py-4 mt-5 tf-footer">
      <div class="container text-light">
        <div class="row">
          <div class="col-md-6 col-sm-12">&copy; Gestionnaires.</div>
           <div class="col-md-6 col-sm-12">
             <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/ZHeriol" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x" ></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/heriol-valdo-zeufack-fiemo-85bba3258?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BdigBKflBTteJMQ3ObI3a9A%3D%3D" title="Linkedin" target="_blank"><i class="fab fa-linkedin fa-2x" ></i><span class="menu-title sr-only">Linkedin</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://instagram.com/heriolvado1?igshid=YWJhMjlhZTc=" title="Instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/heriol-valdo" target="_blank" title="Github"><i class="fab fa-github fa-2x" ></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
           
          </div>
         </div>
      </div>
    </footer>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">excerpt from the book bachirou</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <p style="text-align: justify;">
          Being a child without a landmark in a developing country is not easy, the circumstances of life are hardly common to others, everything seems difficult moreover it is difficult for the children of people and sons of nothing, it reminds me of one of my anecdotes in my past life I forgot before starting it is bachirou generally called sweater over maybe because I only had this outfit for clothes. You know how to be a son of nothing and people may seem worse serious pity but despite all this we can still bring out a positive aspect as in everything we have the ability to see things in a different way because we were satisfied with the little we managed to have during the day, I say this smiling because sometimes we spent days without any headache under the tooth, we often nicknamed ourselves my com Luck unlike others, we said this to hide in our strong interior that we would have liked to be someone's children, to have the feeling of counting for someone being the child of such as are commonly called children who come back every noon from classes for their parents' house, yes parents things that I did not have the right to have in this life by the way why I did not have it Simple roof and a piece of daily bread would have made me a filled child nothing luxurious just the presence of a mature person. Oh yes what did I say I remember an anecdote for me and my comrades it was not a question of making the sleeve today call politics of the outstretched hand we were heading to our place of service a small market in akonolinga where we We became tourists in the huge city where we discovered all kinds, beautiful premises, beautiful cars, beautiful houses and around noon we went to an establishment to see the children of people going out there to be accompanied to their homes one day a group of children from school approached and asked why you are not at school like us in front of our silence because not knowing what to say they left and left behind children People wondered we ......around nightfall we were looking for a shelter away from the rain and we went to bed to spend the night there without taking a shower without exchanging like the other children we were survivors we repeated this before sleeping so as not to cry and fall into depression because there was added to this misfortune of being without parents the possibility despite our young age to consume drugs but in reality we We saw our regular customers wake up after a catch, we thought it was better not to embark on this practice. We must surely have been the first to be up because we woke up the roosters so that they could sing and alert people that the sun is already there and that it was time to resume our usual days. Time passed and life became even more difficult between diseases, accidents, famine, the number of survivors gradually decreased. It is well said that as we grow the needs increase no need to go to school to understand that life teaches it for free, the rest of the survivors chain the more difficult jobs to make ends meet because we managed to have a room for our nights and yes more sleep in front of shops or on the sidewalk now we had a room of ours. Thanks to the tokens of the mothers of the market and time we have been able to save on this level the teachers of management schools must be amazed. We kept our clothes there, we managed to buy a bed. This chamber house served as a refuge for us despite the fact that it was in a not very convenient neighborhood. Baba one of the survivors released the room because he had managed to get a job as a truck driver he was an aid to the driver of heavy machinery commonly called a motorcycle boy. Until today I don't know what he has become because at the time we had no means to offer us phones and none of us knew how to read or write to send letters I just knew that he was doing the line of Garoua-tchad.Oumarou took him the road to the West with other colleagues on the street in search of a better tomorrow for an illiterate there It was much later that I knew that he was a robber, no wonder the system had given him no chance or life moreover he was arrested during an intervention in one of their blows after multiple transfers I had more news of him, yes you ask what I was doing I was a street vendor in the markets you wonder how an illiterate managed to convince, in these years in the street I There I managed to learn in a natural way by looking and reproducing. This job was decisive for the rest of my life because that's where all my achievements start from.
        </p>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>



    
    
    <script src="css/js/bootstrap.bundle.min.js?ver=1.2.0"></script>
     <script src="css/js/bootstrap.bundle.js?ver=1.2.0"></script>
       <script src="css/js/bootstrap.js?ver=1.2.0"></script>
         <script src="css/js/bootstrap.min.js?ver=1.2.0"></script>
           <script src="css/js/bootstrap.esm.js?ver=1.2.0"></script>
             <script src="css/js/bootstrap.esm.min.js?ver=1.2.0"></script>
   
   
</body>
</html>