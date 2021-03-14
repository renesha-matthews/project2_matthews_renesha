<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

html {
  box-sizing: border-box;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}

body {
  color: #011C27;
  font-family: 'Open Sans', sans-serif;
  font-size: 1em;
  text-align: center;
}

h1 {
  font-size: 3em;
}

h2 {
  font-size: 2em;
}

h3 {
  font-size: 1.5em;
}


h1, h2, h3, h4, h5, h6 {
  color: #545677;
  font-family: 'Noto Sans JP', sans-serif;
  font-weight: bold;
}

/* HAMBURGER MENU */
.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:45px;
  padding:5px 15px 0px 15px;
  color:#545677;
  border:0;
  font-size:1.4em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}

.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
  padding:7px 15px 0px 15px;
  color:#545677;
  border:0;
  font-size:3em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; text-transform: uppercase; width:100%; background:#bcc5fb;  position:absolute; text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#ffffff 1px solid;}
.menu li:hover{display: block;  background:#ffffff; padding:15px 0 15px 0; border-bottom:#bcc5fb 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#011C27;}
.menu ul li a:hover {  color: #666; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

.logo {
  max-width: 160px;
  margin: 3%;
	 width: 18%;
}

.desktop-menu {
	display: none;
}


.hero-section {
    padding: 20% 0;
    margin-bottom: 12%;
}

/* SOCIAL-MEDIA-SECTION */
.social-media {
	background-color: #545677;
	padding: 1%;
}

.social-media h2 {
	display: none;
}

.social-media a {
	color: #ffffff;
	opacity: 0.5;
	margin: 2%;
	font-size: 2em;
}

/** FOOTER **/
footer {
	background-color: #43445A;
	padding: 5%;
}

/******************** START MIN-WIDTH 400 QUERY ********************/
@media (min-width: 400px) {

	.logo {
		margin: 3%;
		width: 14%;
	}
}
/******************** END MIN-WIDTH 400 QUERY ********************/

/******************** START MIN-WIDTH 590 QUERY ********************/
@media (min-width: 590px) {

	h1 {
    margin: 1%;
	}
}
/******************** END MIN-WIDTH 590 QUERY ********************/


/******************** START MIN-WIDTH 700 QUERY ********************/
@media (min-width: 700px) {
	.site-header_wrapper {
	    display: flex;
	    justify-content: space-between;
	    align-items: center;
	    flex-wrap: wrap;
			padding: 3%;
	}

	.hamburger, .cross, .menu {
		display: none;
	}

	.logo {
		margin: 3%;
    width: 36%
	}

	.logo:hover {
		opacity: 0.5;
		transition: .3s;
	}

	.desktop-menu {
		display: block;
		margin-right: 4%;
	}

	.desktop-menu ul li {
    display: inline-block;
		list-style-type: none;
		padding: 12px;
	}

	.desktop-menu ul li a {
    text-decoration: none;
    color: #545677;
    text-transform: uppercase;
		transition:.3s;
	}

	.desktop-menu ul li a:hover {
		color: #E0C3FC;
		transition: .3s;
	}

	.social-media a {
		transition: .3s;
	}

	.social-media a:hover {
		opacity: 1;
		transition: .3s;
	}

	.button a {
		padding: 2%;
		transition: .4s;
	}

	.button a:hover {
		background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
		transition: .4s;
	}

	footer {
		padding: 2%;
	}

}
/******************** END MIN-WIDTH 700 QUERY ********************/

/******************** START MIN-WIDTH 1300 QUERY ********************/
@media (min-width: 1300px) {
	.home-page p {
		font-size: 1.5em;
	}

	h1 {
    font-size: 4em;
	}

	h2 {
		font-size: 3em;
	}
}
/******************** END MIN-WIDTH 1300 QUERY ********************/
</style>


<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/4308417424.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<header class="site-header">
  <div class="wrapper site-header_wrapper">
    <button class="hamburger">&#9776;</button>
    <button class="cross">&#735;</button>

    <a href="index.html"><img class="logo" src="images/logo.png" alt="Heart Logo" title="Heart Logo" width=250></a>

    <!-- Mobile Menu -->
    <nav class="menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="work.html">Work</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>

    <!-- Desktop Menu -->
    <nav class="desktop-menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="work.html">Work</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container">
  <h1>Sorry, something went wrong with your submission.</h1>
  <p>Please try again.</p>
</div>

<section class="social-media">
  <h2>Social Media</h2>
    <a href="https://www.instagram.com/reneshadotcom/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://twitter.com/reneshadotcom" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/renesha-matthews-903b24126/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</section>

<footer>Site by Renesha Matthews.</footer>

<script src="js/hamburger.js"></script>
