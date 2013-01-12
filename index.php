<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
    <title>Vago Bangladesh Vago</title>
	<meta name="author" content="Muhammad Sumon Molla Selim">	
	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="<?php echo $title; ?>">
	<meta name="DC.subject" content="<?php echo $title; ?>">
	<meta name="DC.creator" content="Muhammad Sumon Molla Selim">

    <!-- styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
  </head>

  <body>
  	<div class="container"><!-- start .container -->

	<div class="main">
		
		<div id="header" class="span11">
			<div class="logo">
				
				<a href="index.php"><img src="img/logo.jpg" alt="<?php echo $title; ?>" /></a>
				
				<ul class="nav nav-pills">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Our Services</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contact Us</a></li>
					<li class="pull-right disabled"><a href="">12th January, 2013</a></li>
				</ul>
					
				
			</div>
			
		</div>
		
		<div id="sidebar-left" class="span3">
			<div class="well">
				<h4>Ready to get started?</h4>
				<form>
					<fieldset>
						<legend>Please sign-up</legend>
						<label>Name</label>
						<input type="text" placeholder="Enter Name">
						<label>Phone</label>
						<input type="text" placeholder="Enter Phone Number">
						<label>Email Address</label>
						<input type="email" placeholder="Enter Email Address">
						<span class="help label label-info">Please check confirmation mail.</span>
						<button type="submit" class="btn btn-success">Sign-up</button>
					</fieldset>
				</form>				
            </div>
            
            <div class="well">
				<h4>Already a member?</h4>
				<form>
					<fieldset>
						<legend>Please sign-in</legend>
						<label>Email Address</label>
						<input type="email" placeholder="Enter Email Address">
						<label>Password</label>
						<input type="password" placeholder="Enter Password">
						<button type="submit" class="btn btn-success">Sign-in</button>
					</fieldset>
				</form>				
            </div>
            
            <div class="well">
				<a class="btn btn-large" style="width: 85%;">Advertise Here</a>
            </div>
            
        </div>
        
        <div id="content" class="span8">
			
			<div class="downarrowdiv">Our Services</div>
			
			<div id="pothalok">
				<ul class="nav nav-tabs" id="tab-pothalok">
					<li><a href="#intro1">Pothalok (পথআলোক)</a></li>
					<li><a href="#cat1">Categories</a></li>
					<li><a href="#map1">Map</a></li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="intro1">
						<div class="media">
							<img class="media-object pull-left" src="img/pothalok.jpg">
								
							<div class="media-body">
								<h4 class="media-heading">Pothalok (পথআলোক)</h4>
								<p>Locate roads that are jammed or risky for you to travel on and suggest an alternate path.</p>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="cat1">
						<div class="media">
							<img class="media-object pull-left" src="img/pothalok.jpg">
								
							<div class="media-body">
								<h4 class="media-heading">Pothalok (পথআলোক)</h4>
								
									<ul class="nav nav-list">
										<li class="nav-header">Choose a category</li>
									</ul>
								
								    <ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/strikes.jpg" alt="Strikes"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/break-outs.jpg" alt="Break Outs"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/vip-movements.jpg" alt="VIP Movements"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/traffic.jpg" alt="Traffic"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/construction-blocks.jpg" width="260" height="180" alt="Construction Blocks"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/accidents.jpg" width="260" height="180" alt="Accidents"></a>
											</div>
										</li>
									</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="map1">
						<div class="media">
							<img class="media-object pull-left" src="img/pothalok.jpg">
								
							<div class="media-body">
								<h4 class="media-heading">Pothalok (পথআলোক)</h4>
								<img class="media-object" src="img/map-1.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<hr/>
			
			<div id="ahoban">
				<ul class="nav nav-tabs" id="tab-ahoban">
					<li><a href="#intro2">Ahoban (আহ্বান)</a></li>
					<li><a href="#cat2">Categories</a></li>
					<li><a href="#map2">Map</a></li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="intro2">
						<div class="media">
							<img class="media-object pull-left" src="img/ahoban.jpg">
								
							<div class="media-body">
								<h4 class="media-heading">Ahoban (আহ্বান)</h4>
								<p>Locates events that you might be interested to attend or be a part of and tells you how to go there.</p>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="cat2">
						<div class="media">
							<img class="media-object pull-left" src="img/ahoban.jpg">
								
							<div class="media-body">
								<h4 class="media-heading">Ahoban (আহ্বান)</h4>
								
									<ul class="nav nav-list">
										<li class="nav-header">Choose a category</li>
									</ul>
								
								    <ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/sports.jpg" alt="Sports"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/educational.jpg" alt="Educational"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/seminars.jpg" alt="Seminars/Workshop"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/activism.jpg" alt="Activism/Volunteerism"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/concert.jpg" width="260" height="180" alt="Concerts"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/film-shows.jpg" width="260" height="180" alt="Film Shows"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/exhibitions.jpg" width="260" height="180" alt="Exhibitions"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/cultural-events.jpg" width="260" height="180" alt="Cultural Events"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/expo.jpg" width="260" height="180" alt="Expo"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/shopping.jpg" width="260" height="180" alt="Shopping"></a>
											</div>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/trade-fairs.jpg" width="260" height="180" alt="Trade Fairs"></a>
											</div>
										</li>
										<li class="span2">
											<div class="thumbnail">
												<a href="#"><img src="img/technology.jpg" width="260" height="180" alt="Technology"></a>
											</div>
										</li>
									</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="map2">
						<div class="media">
							<img class="media-object pull-left" src="img/ahoban.jpg">
								
							<div class="media-body">
								<h4 class="media-heading">Ahoban (আহ্বান)</h4>
								<img class="media-object" src="img/map-2.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="well">
				<a class="btn btn-large" style="width: 94%;">Advertise Here</a>
            </div>			
			
        </div>
		
					
	</div><!-- end .main -->
	</div><!-- end .container -->	 
  </body>
</html>
