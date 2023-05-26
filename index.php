<?php

$email = $_POST['email'];;

$conn = mysqli_connect('localhost', 'root', '', 'havemyname');
$stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$stmt->bind_param("i", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt2 = $conn->prepare("SELECT username FROM users WHERE email = ?");
$stmt2->bind_param("i", $email);
$stmt2->execute();
$result2 = $stmt2->get_result();
$user2 = $result2->fetch_assoc();
$stmt3 = $conn->prepare("SELECT profile_picture FROM users WHERE email = ?");
$stmt3->bind_param("i", $email);
$stmt3->execute();
$result3 = $stmt3->get_result();
$user3 = $result3->fetch_assoc();
$stmt4 = $conn->prepare("SELECT background FROM users WHERE email = ?");
$stmt4->bind_param("i", $email);
$stmt4->execute();
$result4 = $stmt4->get_result();
$user4 = $result4->fetch_assoc();
$stmt5 = $conn->prepare("SELECT bio FROM users WHERE email = ?");
$stmt5->bind_param("i", $email);
$stmt5->execute();
$result5 = $stmt5->get_result();
$user5 = $result5->fetch_assoc();

$email2 = $user['email'];
$username2 = $user2['username'];
$profilePic2 = $user3['profile_picture'];
$background2 = $user4['background'];
$bio2 = $user5['bio'];

?>

<!DOCTYPE html>
<html lang="en" theme="White">
            <head>
	<meta charset="utf-8">
    <title><?php echo($username2); ?> · havemy.name</title>
    <meta property="og:title" content="<?php echo($username2); ?> · havemy.name">
    <meta name="description" content="<?php echo($bio); ?>">
    <meta property="og:description" content="<?php echo($bio); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2F3136">
    				
				
				
				

		
        <script src="/cdn-cgi/apps/head/vWvHkqI6PMiucyf16iiwsHKUQ_I.js"></script><link href="<?php echo($profilePic2); ?>" rel="shortcut icon"
              type="image/x-icon">
            <meta name="twitter:card" content="summary">     
    <link rel="preload" href="https://feds.lol/module/newww/css/app.css" as="style">
    <link rel="stylesheet" href="https://feds.lol/module/newww/main.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link href="assets/vendors/animation/animate.css" rel="stylesheet">
	
	

	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		    <link href="assets/vendors/animation/animate.css" rel="stylesheet">
	
    <script src="./script.js" data-site="IHGLANPG" defer></script>	
	
	
	

    </head>

	
    <body class="fedslol">

	
                        
<script>

var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("typewrite");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-type");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};


</script>
 	     
        <main style='background-image:<?php echo($background2); ?>'>

            <div class="fixed w-full h-full"></div>


            <img src=<?php echo($background2); ?> class="fixed w-full h-full object-cover opacity-50 z-0">


<div class="biolink" style="height:100%;width:100%;">
            <div class="relative w-full h-full px-4 py-16 table">
                <div class="table-cell align-middle text-center">
                    
     
    <div class="bg-main rounded-md shadow-4xl w-full mx-auto card animate-slide-up not-last-child:mb-12 max-w-[1100px] mt-14">

 
            <div class="p-10">

            
            
            <div class="not-last-child:mb-8">
                <div class="-mt-[85px]">
                    <img
    class="w-44 h-44 rounded-full mx-auto shadow-avatar"

    
                        src="<?php echo($profilePic2) ?>"
                
    
    title="Image"
    alt="Image"
        draggable="false"
/>                </div>
            </div>

            <div class="not-last-child:mb-8">
                <div class="flex justify-center items-center space-x-2">
                      	
					                            <h2 class="text-[20px] text-white font-semibold" style="color: #fff; display: inline-block;"><?php echo($username2); ?></h2>
                            												
														
						
                                    </div>
              
                <p class="text-sm">
                    havemy.name/<em><?php echo($username2); ?></em>
                </p>
            </div>
              

                            <div class="not-last-child:mb-8">
                    <div class="mx-auto max-w-[750px]">
                        <p>
                      				
						<pre><?php echo($bio2); ?></pre>
						

                        </p>
                    </div>
              
                </div>
		<div class="flex justify-center items-center space-x-2">
				
                 	

                        </div>  

        </div>
   
    
</div>
    
        <div class="1w-full mx-auto card animate-slide-up not-last-child:mb-12 max-w-[1100px]">
		    
            <div class="!p-0">

            
            
            <div
    class="flex flex-wrap justify-between gap-6"
>
					                        <a
                             
                                href="https://www.discord.gg/dontabuse" 
                                target="_blank"
                                rel="noopener noreferrer nofollow"
                                title="https://www.discord.gg/dontabuse"
                                                        class="bg-main rounded-xl flex-[100%] sm:flex-[45%] animate-slide-up shadow-4xl p-3 button"
                            style="will-change: opacity, transform"
                        >
                            <div class="flex items-center justify-between space-x-6">
                                <span class="bg-secondary rounded-xl aspect-square h-16 p-3 flex items-center justify-center">
                                    <img 
                                        class="drop-shadow-twitter"
                                        src="https://feds.lol/module/newww/icons/discord.svg"
                                    >
                                </span>
                                <h2 class="w-full text-left text-grey">
                                    Discord
                                </h2>
                                                                    <span class="w-20" style="margin-left: 157px;">
                                        <img src="../assets/images/link-button-arrow.png" style="width: 14px;" class="link-arrows">
                                    </span>
                                                            </div>
                        </a>
                        
					
                    
            
</div>

        </div>
    </div>
    
</div>
    </div>
</div>
    

        </main>
		
		
<script src="/js/page.js?id=2c4f84bac56c0ce1881f"></script>	
</body>
</html>

