<?php
//Message vars
//Filip's php code
$msg = '';
$msgClass = '';
//check for submit
if(filter_has_var(INPUT_POST, 'submit')){
	//Get the form data
	$name = htmlspecialchars($_POST['name']);
	$message = htmlspecialchars($_POST['message']);
	$email = htmlspecialchars($_POST['email']);

	//check required fields
	if(!empty($email) && !empty($name) && !empty($message)){
		//Passed
		//check emial
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			//failed
			$msg = 'Please fill email correctly!';
		$msgClass = 'alert-danger';


		}else{
			//Passed
			//Recipient email
			$toEmail = 'soulstonearts@yahoo.com';
			//Subject
			$headers="";
			$subject = 'Contact request from: '.$name;
			$body = '<h2>Contact request</h2>
			<h4>Name</h4><p>'.$name.'</p>
			<h4>Email</h4><p>'.$email.'</p>
			<h4>Message</h4><p>'.$message.'</p>';
			// email header
			$headers = "MIME-version 1.0"."\r\n";
			$headers .="Content-Type:text/html;charset=UTF-8"."\r\n";
			//Additional headers
			$headers .= "From".$name."<".$email."\r\n";
				//mails sender
				if(mail($toEmail, $subject, $body)){
					//Email sent
					$msg = 'Your email has been sent!';
					$msgClass = 'alert-success';
				}else {
					$msg = 'Your email was not sent!';
					$msgClass = 'alert-danger';
				}

		}

	}else {
		# Failed
		$msg = 'Please fill in those fields';
		$msgClass = 'alert-danger';
	}
}

 ?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Product" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Me | SoulStoneArts </title>
    <meta name="author" content="Filip Boyadzhiyski">
    <!-- Search Engine -->
    <meta name="description" content="SoulStones - Handpicked & Handpainted Stones by the Bulgarian artist Ivaylo Kozarev. Personal portfolio website.">
    <meta name="image" content="http://soulstonearts.com/img/stone6.jpg">
    <meta name="keywords" content="soulstones, art, handpicked, handpainted, stones, canvas, artist, paintings, paint, Ivaylo, kozarev">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="SoulStone Arts by Ivaylo Kozarev">
    <meta itemprop="description" content="SoulStones - Handpicked & Handpainted Stones by the bulgarian artist Ivaylo Kozarev. Personal portfolio website.">
    <meta itemprop="image" content="http://soulstonearts.com/img/stone6.jpg">
    <!-- Twitter -->
    <meta name="twitter:site" content="@soulstone_arts">
    <meta name="twitter:creator" content="@soulstone_arts">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="SoulStone Arts by Ivaylo Kozarev">
    <meta name="twitter:description" content="SoulStones - Handpicked & Handpainted Stones by the bulgarian artist Ivaylo Kozarev. Personal portfolio website.">
    <meta name="twitter:image:src" content="http://soulstonearts.com/img/stone6.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="SoulStone Arts by Ivaylo Kozarev">
    <meta name="og:description" content="SoulStones - Handpicked & Handpainted Stones by the bulgarian artist Ivaylo Kozarev. Personal portfolio website.">
    <meta name="og:image" content="http://soulstonearts.com/img/stone6.jpg">
    <meta name="og:url" content="http://soulstonearts.com">
    <meta name="og:site_name" content="SoulStoneArts by Ivaylo Kozarev | Personal Website">
    <meta name="og:locale" content="en_US">
    <meta name="fb:admins" content="1600335503540950">
    <meta name="og:type" content="website">
    <!-- robots -->
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="robots" content="all" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- scrollReveal js -->
        <script src="js/scrollreveal.min.js"></script>
    <!-- cool buttons -->
    <link rel="stylesheet" href="css/bttn.min.css">
 <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="bower_components/fancybox/dist/jquery.fancybox.min.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="index.html">
                            <img class="custom-logo" src="img/soulstoneart-logo.png" alt="soustone logo">
                        </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
 <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
      <div class="container jumbo-text">
          <h1>Contact Me</h1>
          <p><a href="https://www.etsy.com/shop/soulstonearts" title="Go to Esty shop" target="_blank"><button class="bttn-unite bttn-primary bttn-lg">Shop Now</button></a></p>
      </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3 animation-left">

            <p class="text-center h3 find-me">Find Me</p>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-phone" aria-hidden="true"></i><strong>Phone:</strong> +35998 892 5025  <br>+35998 892 5020</li>
                <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i><strong>Email:</strong> soulstonearts@yahoo.com</li>
                <li class="list-group-item"><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Location:</strong> Veliko Tarnovo, Bulgaria</li>
                <li class="list-group-item"><i class="fa fa-etsy" aria-hidden="true"></i>
                    <a href="https://www.etsy.com/shop/soulstonearts" target="_blank" ><button class="bttn-stretch bttn-md bttn-primary">Etsy Store</button></a>
                </li>

            </ul>
        </div>
        <div class="col-md-9 col-sm-9 form-animation animation-right">
            <!-- Form start -->

                <p class="text-center h1">Get In Touch</p>
            <p class="text-center h4 text-muted">Hi there, I'm Ivaylo Kozarev. Do you enjoy my work? Feel free to write me a letter and ask me any type of question.</p>
                <?php if($msg != ''): ?>
                    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                <?php endif; ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="bttn-fill bttn-primary bttn-lg">Submit</button>
                </form>

            <!-- Form ends -->
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="footer-contact">
    <div class="container footer ">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p class="h4">Copyright &copy; 2017 Ivaylo Kozarev Soulstone Arts <br> Web Design by Filip Boyadzhyski</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <p class="social h3">Follow Me </p>
                    <a href="https://www.etsy.com/shop/soulstonearts" target="_blank" title="Etsy"><img src="img/etsy.png" alt="Esty shop icon"
                                                                                                        class="etsy"></a>
                    <a href="https://www.instagram.com/soulstone_arts/" target="_blank" title="Instagram"><img
                            src="img/instagram.png"
                            alt="instagram link"
                            class="instagram"></a>
                    <a href="https://www.facebook.com/soulstonearts/" target="_blank" title="Facebook Page"><img
                            src="img/facebook.png"
                            alt="facebook link"
                            class="facebook"></a>
            </div>
        </div>
    </div>
</footer>


<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="bower_components/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- scroll reveal -->
<script>
    window.sr = ScrollReveal();
       sr.reveal('.navbar', {
           duration: 1700,
           origin: 'top',
           distance: '80px'
       });
		sr.reveal('.animation-left', {
        duration: 2000,
        origin: 'left',
        distance:'300px'
    });
    sr.reveal('.animation-right', {
        duration: 2000,
        origin: 'right',
        distance:'500px'
    });
      sr.reveal('.jumbotron', {
            duration: 2500,
            origin: 'bottom',
            distance: '80px'
        });

</script>
<script>
    $(function() {
        // Smooth Scrolling
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>
</html>
