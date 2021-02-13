<?php session_start();

include('config.php');
 
?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Socialpedia</title>
		
        <!-- All Plugins Css -->
        <link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/nav.css">
		<link rel="icon" href="assets/img/favicon.png" sizes="32x32">
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
	
    <body class="green-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			
			<div class="header header-light">
				<nav class="headnavbar">
					<div class="nav-header">
						<a href="/SocialPedia/" class="brand"><img src="assets/img/logo.png" alt=""></a>
						<button class="toggle-bar"><span class="ti-align-justify"></span></button>	
					</div>								
					<ul class="menu attributes-desk" >
						<li class="dropdown">
							<a href="JavaScript:Void(0);">Products</a>
							<ul class="dropdown-menu">
								<li class=""><a href="/SocialPedia/influencer-search">Influencer Search</a></li>
								<li class=""><a href="/SocialPedia/influencer-statistic">Influencer Statistics</a></li>
								<li class=""><a href="/SocialPedia/influencer-list">Influencer lists</a></li>
								<li class=""><a href="/SocialPedia/influencer-outreach">Influencer Outreach</a></li>
								<li class=""><a href="#">Social listening</a></li>
							</ul>
						</li>
						<li class=""><a href="/SocialPedia/plans">Pricing</a></li>
						<li class="dropdown">
							<a href="JavaScript:Void(0);">Resources</a>
							<ul class="dropdown-menu">
								<li class=""><a href="/SocialPedia/blogs">Blogs</a></li>
								<li class=""><a href="#">Contact</a></li>
							</ul>
						</li>
						<li class="log-icon log-seprate"><a href="#" data-toggle="modal" data-target="#login">Log In</a></li>
						<li class="log-icon"><a href="#" data-toggle="modal" data-target="#signup" class="btn-theme-2" style="padding: 10px 19px;color: #ffffff;margin-top:18px">Sign Up</a></li>
						
					</ul>
					
					
				</nav>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
