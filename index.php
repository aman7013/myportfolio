<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/text.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js" defer></script>



<style type="text/css">
        .reveal {
  position: relative;
  opacity: 0;
  overflow: hidden;
}

.reveal.active {
  opacity: 1;
}
.active.fade-bottom {
  animation: fade-bottom 1s ease-in;
}
.active.fade-left {
  animation: fade-left 1s ease-in;
}
.active.fade-right {
  animation: fade-right 1s ease-in;
}
@keyframes fade-bottom {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
@keyframes fade-left {
  0% {
    transform: translateX(-50px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fade-right {
  0% {
    transform: translateX(50px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
    </style>


<script>
var TxtType = function(el, toRotate, period) {
this.toRotate = toRotate;
this.el = el;
this.loopNum = 0;
this.period = parseInt(period, 10) || 2000;
this.txt = '';
this.tick();
this.isDeleting = false;
};

TxtType.prototype.tick = function() {
var i = this.loopNum % this.toRotate.length;
var fullTxt = this.toRotate[i];

if (this.isDeleting) {
this.txt = fullTxt.substring(0, this.txt.length - 1);
} else {
this.txt = fullTxt.substring(0, this.txt.length + 1);
}

this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

var that = this;
var delta = 200 - Math.random() * 100;

if (this.isDeleting) { delta /= 2; }

if (!this.isDeleting && this.txt === fullTxt) {
delta = this.period;
this.isDeleting = true;
} else if (this.isDeleting && this.txt === '') {
this.isDeleting = false;
this.loopNum++;
delta = 500;
}

setTimeout(function() {
that.tick();
}, delta);
};

window.onload = function() {
var elements = document.getElementsByClassName('typewrite');
for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
}
// INJECT CSS
var css = document.createElement("style");
css.type = "text/css";
css.innerHTML = ".typewrite > .wrap { }";
document.body.appendChild(css);
};
</script>

</head>
<body>
 
   <?php include 'header.php';?>

   <section>
   	<div class="conatiner">


   		<!-- <! intro start---- -->
   		<div class="intro">
   			<div class="intro_c1">
   				<h3>Trusted by Hundered Clients</h3>
   				<h1>Hi , I'M </h1>                                      
                   <h1>
        <span style="color:#DB181F;" class="typewrite" data-period="2000" data-type='[ "AMAN KUMAR SINGH", " a, WEB DESIGNER", "AMAN KUMAR SINGH", "a, WEB DESIGNER" ]'>
        </span>_</h1>

                   <p>"Hello! I'm a passionate web designer with a keen eye for aesthetics and a love for creating engaging online experiences. With a strong foundation in design principles, I specialize in crafting visually appealing and user-friendly websites. My goal is to seamlessly blend creativity with functionality to deliver impactful digital solutions. Let's collaborate to bring your vision to life on the web!"</p>
   			</div>
   			<div class="intro_c2">
   				<img src="img/aman.png">
   			</div>
   		</div>
   		<!-- <! intro end---- -->
    
   		<!-- <! Service start---- -->


  <div class="service" id="services">
    <div class="service_c0">
    		<h2>MY SERVICES</h2>
    		<p>"Hello! I'm a passionate web designer</p>
    </div>
    <div class="service_c1">

        <i class="fa fa-code" aria-hidden="true"></i>
   		<h3>Website Design: </h3>
   		<p>Crafting visually appealing and functional websites tailored to clients' needs, ensuring a positive user experience.</p>

    </div>
    <div class="service_c1">

    	<i class="fa fa-laptop" aria-hidden="true"></i>
   		<h3>Responsive Design: </h3>
   		<P>Ensuring that websites look and function well on various devices and screen sizes, providing a seamless experience for users on desktops, tablets, and mobile devices.</P>
  
    </div>
    	<div class="service_c1">

	        <i class="fa fa-camera" aria-hidden="true"></i>
			<h3>User Interface (UI) Design:</h3>
			<P> Creating the visual elements and interactive features that enhance the overall user experience, focusing on usability and aesthetics.</P>

       </div>
       <div class="service_c1">

	        <i class="fa fa-camera" aria-hidden="true"></i>
			<h3>SEO Service:</h3>
			<P> Creating the visual elements and interactive features that enhance the overall user experience, focusing on usability and aesthetics.</P>

       </div>
        <div class="service_c1">

	        <i class="fa fa-camera" aria-hidden="true"></i>
			<h3>Grafic Design:</h3>
			<P> Creating the visual elements and interactive features that enhance the overall user experience, focusing on usability and aesthetics.</P>

       </div>
        <div class="service_c1">

	        <i class="fa fa-camera" aria-hidden="true"></i>
			<h3>Photo Editing:</h3>
			<P> Creating the visual elements and interactive features that enhance the overall user experience, focusing on usability and aesthetics.</P>

       </div>
  </div>
    
   		<!-- <! Service end---- -->

   		<!-- <! Project Start---- -->
        
   
    <div class="project" id="project">
    <div class="project_c0">
    		<h2>MY LIVE PROJECT</h2>
    		<p>"Hello! I'm a passionate web designer</p>
    </div>
    <div class="project_c1">

       <img src="img/project2.png">
       <br>
       <p><span class="button"><a href="https://devotiontravels.com/">TOUR AND TRAVELS</a></span></p>      
        <br>
    </div>
    <div class="project_c1">

       <img src="img/project6.png">
       <br>
       <p><span class="button"><a href="https://rajshreepalace.com/">YOGA</a></span></p>  
        <br>
    </div>
	<div class="project_c1">

     <img src="img/project4.png">
     <br>
     <p><span class="button"><a href="#">NGO</a></span></p>
              <br>
   </div>
   <div class="project_c1">

       <img src="img/project5.png">
       <br>
       <p><span class="button"><a href="#">YOGA</a></span></p>      
        <br>
    </div>
    <div class="project_c1">

       <img src="img/project7.png">
       <br>
       <p><span class="button"><a href="#">HOTELS </a></span></p>  
        <br>
    </div>
	<div class="project_c1">

     <img src="img/project8.png">
     <br>
     <p><span class="button"><a href="#">MEDICAL</a></span></p>
      <br>
   </div>

   <div class="project_c1">

     <img src="img/project5.png">
     <br>
     <p><span class="button"><a href="#">Yoga</a></span></p>
      <br>
   </div>
      
  </div>
    
   		<!-- <! Project End---- -->

   			<!-- <! Project Start---- -->
      
   
    <div class="contact" id="contact">
    <div class="contact_c0">
    		<h2>CONTACT WITH ME</h2>
    		<p>"Hello! I'm a passionate web designer</p>
    </div>
    <div class="contact_c1">
    	<img src="img/contact1.jpg">
	     <h2>AMAN KUMAR SINGH</h2>
	    <p> i'm a student
	       I am available for freelance work. Connect with me via and call in to my account.</p><br>
	        <p>Phone: +91 7013425092 </p>
	        <p> Email:kumaramansingh074@gmail.com 
	         FIND WITH ME
	      </p><br>
	       <p>
             <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;
             <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;
             <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp;
             <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;

        <p>
            

    </div>
    <div class="contact_c2">
      <script type="text/javascript" src="https://form.jotform.com/jsform/233180805192049"></script>

    </div>
	
      
  </div>
    
   		<!-- <! Project End---- -->

     
        <span class="bar">
            <br>
            <a href="#home">
            <i class="fa fa-home" aria-hidden="true"></i>
         </a>
            <br><br>
            <a href="#services">
            <i class="fa fa-user-o" aria-hidden="true"></i>
         </a>
            <br><br>
            <a href="#project">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
             <br><br>
             <a href="#contact">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>
            <br><br>
            <a href="#footer">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </a>
            <br><br>
            

      </span>

      <div class="scroll">
        <a href="#home">
          <i class="fa fa-arrow-up" aria-hidden="true"></i>
      </a>
      </div>
  
   <?php include 'footer.php';?>
      
         
   	</div>
   </section>


</body>
</html>