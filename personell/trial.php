<!DOCTYPE html>
<html>
	<head>
		<title> Standard Youth & Health Organization</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="main.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script src="https:/ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
		<!-- row column display of about us, mission, vision begins here-->
			<style>
			
			
			*{box-sizing:border-box;}
			.column{
				float:left;
				width:20%;
				padding:10px;
				height:300px;
				margin:0.5px;
				margin-right:10px;
				margin-left:2px;
			}
			.row:after{
				content:"";
				display:table;
				clear:both;
			}
			#more {display: none;}
				
		/*	@media screen and (max-width: 600px) {
				  .column {
					width: 100%;
					margin-top: 0;
				  }	*/
	

			/*Scroll bar begins here*/
			::-webkit-scrollbar {
				  width: 10px;
				}

				/* Track */
				::-webkit-scrollbar-track {
				  background: #f1f1f1; 
				}
				 
				/* Handle */
				::-webkit-scrollbar-thumb {
				  background: #80bfff; 
				}

				/* Handle on hover */
				::-webkit-scrollbar-thumb:hover {
				  background: #80bfff; 
				}
			/*scroll bar ends here*/
			
			/*responsive navbar begins here*/
            .topnav {
              overflow: hidden;
              background-color: #80bfff;
            }
            
            .topnav a {
              float: left;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }
            
            .active {
              background-color: #4CAF50;
              color: white;
            }
            
            .topnav .icon {
              display: none;
            }
            
            .dropdown {
              float: left;
              overflow: hidden;
            }
            
            .dropdown .dropbtn {
              font-size: 20px; 
              font-weight:900; 
              border: none;
              outline: none;
              color:  black;
              padding: 14px 16px;
              background-color: #80bfff;
              font-family: inherit;
              margin-top: 25px;
              
            }
            
            .dropdown-content {
              display: none;
              position: relative;
              background-color: #f2f2f2;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
            .dropdown-content a {
              float: none;
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }
            
            .topnav a:hover, .dropdown:hover .dropbtn {
              background-color: #555;
              color: white;
            }
            
            .dropdown-content a:hover {
              background-color: #ddd;
              color: black;
            }
            
            .dropdown:hover .dropdown-content {
              display: block;
            }
            
            @media screen and (max-width: 600px) {
              .topnav a:not(:first-child), .dropdown .dropbtn {
                display: none;
                
                
              }
              .topnav a.icon {
                float: right;
                display: block;
              }
            }
            
            @media screen and (max-width: 600px) {
              .topnav.responsive {position: relative;}
              .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
              }
              .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
              }
              .topnav.responsive .dropdown {float: none;}
              .topnav.responsive .dropdown-content {position: relative;}
              .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
              }
            }
			</style>
		<!--ends here -->
		
		<!--read more begins here-->
		<script>
				function readmore() {
				  var dots = document.getElementById("dots");
				  var moreText = document.getElementById("more");
				  var btnText = document.getElementById("myBtn");

				  if (dots.style.display === "none") {
					dots.style.display = "inline";
					btnText.innerHTML = "Read more"; 
					moreText.style.display = "none";
				  } else {
					dots.style.display = "none";
					btnText.innerHTML = "Read less"; 
					moreText.style.display = "inline";
				  }
				}
		</script>
		<!--ends here-->
	
	</head>
	<body style="background-color:#e6eeff;" >
		
		
	<div class="topnav" id="myTopnav">
  <a href="index.php"><img src="http://www.standardyouthandhealth.org/syhologo.PNG" width="100px" height="60px"> <p style="color: black; font-size:15px;">Standard Youth & Health Organization</p> </a>

        	<a href="index.php" id="text" style=" font-weight:900; font-size:20px; color: black; margin-top:30px; margin-bottom:25px; padding:10px;">Home</a>
			<a href="who_we_are.php" id="text" style="font-weight:900; font-size:20px; color: black; margin-top:30px; margin-bottom:25px; padding:10px;">Who We Are</a>
		    
		    <div class="dropdown">
            <button class="dropbtn"> Who We Are 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#aims">Aims</a>
              <a href="#ourteam">Our Team</a>
              <a href="#">More About Us</a>
            </div>
          </div>
		    
		    <a href="what_we_do.php" id="text" style="font-weight:900; font-size:20px; color: black; margin-top:30px; margin-bottom:25px; padding:10px;">What We Do</a>
			<a href="get_involved.php" id="text" style="font-weight:900; font-size:20px; color: black; margin-top:30px; margin-bottom:25px; padding:10px;">Get Involved</a>
			<a href="activities.php" id="text" style="font-weight:900; font-size:20px; color: black; margin-top:30px; margin-bottom:25px; padding:10px;">Gallery</a>
			<a href= "contact_us.php" id="text" style="font-weight:900; font-size:20px; color: black; margin-top:30px; margin-bottom:25px; padding:10px;">Contact Us</a>
			<a href="newdonate.php"><button style="border-radius:25px;width:100px; height:30px; margin-top:25px; margin-bottom:25px; background-color:white; color:black;">Donate</button></a></ul>
		
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

	</br>

			<h2 id="mission"> Mission</h2></br>
			<p >To improve the physical, mental and social wellbeing of the community</p></br>
		
			<h2 id="vision">Vision</h2></br>
			<p >To improve the physical, mental and social wellbeing of the community</p></br>
	
			<h2 id="about">About Us</h2>
			<p >Standard Youth & Health Organization (SYHO)<span id="dots" style="color:#80bfff;">...</span><span id="more"> is a Kano-based non-governmental organization that is primarily founded to address the public health 
				issues of youth in Nigeria. It is aimed at improving the health and wellbeing of our youth and the entire community. We are working to create awareness 
				among our youth and community members on the common health problems and prevention methods. We are also developing health projects that will address the 
				health needs of Nigerian people at the grassroots. The organization also aims at addressing regional and global health issues.
				</span></p>
				<button onclick="readmore()" id="myBtn" style="border-radius:25px;">Read more</button>		
			</p>
	
	

		
	<h2 id="aims">Aims</h2>
		<p >
				<ol >
				<li>	To design and implement health promotion and prevention activities in the community</li></br>
				<li>	To design and implement community health projects that will positively impact our population health</li></br>
				<li>	To create awareness among our youth and community members on the common health problems and prevention methods</li></br>
				<li>	To provide general and mental health services and awareness at community level</li></br>
				<li>	To conduct research on our prevailing health problems and effective methods of mitigation</li></br>
				</ol>
		</p>

	
	<!--new column row display begins here-->
		<style>@media screen and (max-width: 600px) {
				  .column {
					width: 100%;
					margin-top: 0;
				  }
		</style>
	<h1 id="ourteam">Board of Trustees</h1>
		<div class="row" style=" margin-left:10px; margin-bottom:15px;">
		
			<div class="column" style="margin-left:20px; margin-top:50px;">
				<figure><img src="http://www.standardyouthandhealth.org/faiza2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption >Dr. Faiza Lawan Mohammed</br>
					MBBS MWACS</figcaption>
				</figure>
			</div>
			<div class="column" style="margin-left:20px; margin-top:135px;">
			<figure><img src="http://www.standardyouthandhealth.org/zuhriya2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption >Dr. Zuhriya Ahmad Muazu</br>
					MBBS MPH</figcaption>
				</figure>
			</div>
			<div class="column" style="margin-left:20px; margin-top:30px;">
				<figure><img src="http://www.standardyouthandhealth.org/aishamk.PNG" alt="Zuhria" style="width:250px; heigth:300px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Aisha MK Bashir</br>
					LLB PHD in Law(cand)</figcaption>
				</figure>
			</div>
			
			<div class="column" style="margin-left:20px; margin-top:50px;">
				<figure><img src="http://www.standardyouthandhealth.org/mk2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption >Dr. Maryam MK Bashir</br> 
					MBBS MPH </br>PHD in Public Health and Occupational Health(cand)</figcaption>
				</figure>
			</div>
		
		</div>	
		</br>
		<h1>Our Team</h1>
		<div class="row" style=" margin-left:0.5px; margin-bottom:15px;">
		
			<div class="column" style="margin-left:20px; margin-bottom:20px;">
				<figure></figure><img src="http://www.standardyouthandhealth.org/faiza2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Faiza Lawan Mohammed</br>
					Chairperson</br> Dept. of Obs. and Gynae, AKTH</figcaption>
				</figure>
			</div>
			<div class="column" style="margin-left:20px;margin-top:15px;">
				<figure><img src="http://www.standardyouthandhealth.org/mk2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Maryam MK Bashir</br>
					Secretary General</br>
					Institute of Public Health, UAEU</figcaption>
				</figure>
			</div>
			<div class="column" style="margin-left:20px; margin-top:100px;">
				<figure><img src="http://www.standardyouthandhealth.org/zuhriya2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Zuhriya Ahmad Muazu</br>
					Treasurer<br/> St Helens & Knowsley NHS, UK</figcaption>
				</figure>			
			</div>
			
			<div class="column" style="margin-left:20px; margin-top:15px;">
				<figure><img src="http://www.standardyouthandhealth.org/aishamk.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Aisha MK Bashir</br>
					Financial Secretary</br> Faculty of Law, Lancaster University, UK</figcaption>
				</figure>
			</div>
			
			<div class="column" style="margin-left:20px;">
				<figure><img src="http://www.standardyouthandhealth.org/ibrahimdm.jpeg" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption >Dr. Ibrahim D. Muhammad</br>
					Assistant Financial Secretary</br>
					   Dept. of Obs. and Gynae, AKTH</figcaption>
				</figure>
			</div>
		
			<div class="column" style="margin-left:20px; margin-top:55px;">
				<figure><img src="http://www.standardyouthandhealth.org/nagoma.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Abubakar Nagoma Usman</br>
				Social and Welfare Officer</br>
				Dept. of Anaesthesiology & Intensive Care, AKTH</figcaption>
			</figure>
			</div>
			
			<div class="column" style="margin-left:20px; margin-top:10px; ">
				<figure><img src="http://www.standardyouthandhealth.org/mujahid.jpeg" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Dr. Mujahid Muhammad Hassan</br>
					Public Relation Officer</br>
					Dept. of Anaesthesiology & Intensive Care, AKTH</figcaption>
				</figure>
			</div>
			
			<div class="column" style="margin-left:20px; margin-top:30px;">
				<figure><img src="http://www.standardyouthandhealth.org/maryamnasir2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption >Dr. Maryam Nasir Aliyu</br>
					Liason Officer</br>
					Dept. of Human Anatomy, Yusuf Maitama Sule University, kano</figcaption>
			</figure>
			</div>
			
		
		</div>	
		</br></br>
		<h1>Our Patrons</h1>
		<div class="row" style=" margin-left:0.5px; margin-bottom:150px;">
		
			<div class="column" style="margin-left:20px;margin-top:35px;">
				<figure><img src="http://www.standardyouthandhealth.org/mamman.PNG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px; "></br></br>
					<figcaption>Prof. Mamman Lawan Yusufaari</br>
					LLB BL LLM(Lagos) LLM PHD(UK)</br>
					Senior Advocate of Nigeria</br>
					Faculty of Law, B.U.K</br>
					Patron</figcaption>
				</figure>
			</div>
			<div class="column" style="margin-left:20px; margin-top:35px;">
				<figure><img src="http://www.standardyouthandhealth.org/maama.JPG" alt="Zuhria" style="width:180px; heigth:200px; padding-top:4px;padding-right:12px;"></br></br>
					<figcaption>Haj. Talatu Salamatu Bashir</br>
					BA. ED M. ED(UK) CERT. PM (UNDP) </br>
					Chairperson, Women Dev. Microfinance Bank, Kano</br>
					Patron</figcaption>
				</figure>
			</div>
			<div class="column" style="margin-left:20px; margin-top:35px;">
				<figure><img src="http://www.standardyouthandhealth.org/Isa2.JPG" alt="Zuhria" style="width:150px; heigth:150px; padding-top:4px;padding-right:12px;"></br></br>
				    <figcaption >Prof. Dr. Isa Abubakar</br>
					MBBS MPH FWACP FFPH</br>
					Director, Centre for Infectious Diseases Research (CIDR), B.U.K</br>
					Patron
					</figcaption>
					</figure>	
			</div>
			
			<div class="column" style="margin-left:20px; margin-top:0px;">
				<figure>
				    
				</figure><img src="http://www.standardyouthandhealth.org/yakasai2.JPG" alt="Zuhria" style="width:150px; heigth:120px; padding-top:4px;padding-right:12px;">
					<figcaption >Prof. Ibrahim Adamu Yakasai MNI</br>
					MBBS(ABU) MRCOG FRCOG(UK) FWACS FMCOG FICS MA(UK)</br>
					Provost, College of Health Sciences, B.U.K</br>
					Patron
					</figcaption>
				</figure>
			</div>
		
		</div>		
		
		
		
		</br>
		
		<!--new column ro wdisplaye ends here-->
	</body>
	</br></br>
	
<!--Navbar for Footer begins here-->
 <nav class="navbar navbar-default " id="navbar">
		<div class="container">
			<ul class="nav navbar-nav" id="text">Call:<a href="tel:#" id="text">(+234)08033980709, 09082454965, 08038880600</a></ul>
			<ul class="nav navbar-nav"id="text">Email:<a href="#" id="text">info@standardyouthandhealth.org</a></ul></br></br>
			
			<ul><a href="https://instagram.com/syho.nigeria?igshid=1d12yxpcrf06w"><button style="width:100px; height:30px; margin-top:50px; margin-bottom:25px; background-color:#80bfff; " id="text">Instagram</button></a></ul>
			
			<ul><a href="#"><button style="width:100px; height:30px; margin-top:50px; margin-bottom:25px; background-color:#80bfff; " id="text">Twitter</button></a></ul>
			
			<ul><a href="#"><button style="width:100px; height:30px; margin-top:50px; margin-bottom:25px; background-color:#80bfff;" id="text">Facebook</button></a></ul>
			
			<!--<ul class="nav navbar-nav"><a href="tel:#" id="text">Instagram</a></ul>
			<ul class="nav navbar-nav"><a href="who_we_are.php" id="text">Facebook</a></ul>
			<ul class="nav navbar-nav"><a href="what_we_do.php" id="text">Twitter</a></ul></br></br>-->
			
	</nav>	


</html>