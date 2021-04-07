<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
<link rel="shortcut icon" href="https://www.siue.edu/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- <script
  src="https://code.jquery.com/jquery-1.11.3.min.js"
  integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
  crossorigin="anonymous"></script> -->

  <!-- JS LINKS -->
  <script src="//www.siue.edu/_files/2016/js/global/header-links-2016.min.js"></script>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts','style'));
    queue_css_url('//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i');
    queue_css_url('//www.siue.edu/_files/2016/css/global/header-links-2016.min.css');
    queue_css_url('//www.siue.edu/_files/2016/css/print.css');
    queue_css_file('siue');
    queue_css_url('//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    echo head_css();

    echo theme_header_background();
    ?>

    <?php
    ($backgroundColor = get_theme_option('background_color')) || ($backgroundColor = "#FFFFFF");
    ($textColor = get_theme_option('text_color')) || ($textColor = "#444444");
    ($linkColor = get_theme_option('link_color')) || ($linkColor = "#888888");
    ($buttonColor = get_theme_option('button_color')) || ($buttonColor = "#000000");
    ($buttonTextColor = get_theme_option('button_text_color')) || ($buttonTextColor = "#FFFFFF");
    ($titleColor = get_theme_option('header_title_color')) || ($titleColor = "#000000");
    ?>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
        #site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: <?php echo $titleColor; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
        a:link {
            color: <?php echo $linkColor; ?>;
        }
        a:visited {
            color: <?php echo thanksroy_brighten($linkColor, 40); ?>;
        }
        a:hover, a:active, a:focus {
            color: <?php echo thanksroy_brighten($linkColor, -40); ?>;
        }

        .button, button,
        input[type="reset"],
        input[type="submit"],
        input[type="button"],
        .pagination_next a,
        .pagination_previous a {
          background-color: <?php echo $buttonColor; ?>;
          color: <?php echo $buttonTextColor; ?> !important;
        }

        #search-form input[type="text"] {
            border-color: <?php echo $buttonColor; ?>
        }

        @media (max-width:768px) {
            #primary-nav li {
                background-color: <?php echo thanksroy_brighten($buttonColor, 40); ?>;
            }

            #primary-nav li ul li {
                background-color: <?php echo thanksroy_brighten($buttonColor, 20); ?>;
            }

            #primary-nav li li li {
                background-color: <?php echo thanksroy_brighten($buttonColor, -20); ?>;
            }
        }
    </style>

    <!-- JavaScripts -->
    <?php
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('vendor/jquery-accessibleMegaMenu');
    queue_js_file('globals');
    queue_js_file('default');
    echo head_js();
    ?>


    

        <script>
            $(document).ready(function() {
                $(".opensub").click(function(){
                    $("#primary-nav").css({"display": "block"});
                });
                $(".dismiss").click(function(){
                    $("#primary-nav").css({"display": "none"});
                });
            });
            
        </script>

        


        
        

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

    <!-- <div class="visuallyhidden" id="skip-links"><a href="#content-start" tabindex="1">Skip to main content</a></div> -->
			<div>
			<div aria-labelledby="ArcMenuBtn" data-arc-menu="" id="arc-menu" role="dialog">
				<canvas data-arc-menu-bg-menu="" id="bg-menu">&#160;</canvas>
				<div class="navWrap">
					<div>
						<nav>
							<ul>
								<li class="mainLink show up" data-arc-menu-up="">
									<a>
										<img alt="Menu Up"
											src="https://www.siue.edu/_files/2016/img/menu-arrow-up.png" />
									</a>
								</li>
							</ul>
							<ul class="drag">
								<li class="mainLink show current nohover" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(23.65deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/" style="padding-right: 822.375px;" aria-expanded="false">SIUE Homepage</a></li>
								<li aria-expanded="false" aria-haspopup="true" class="mainLink show hasSubMenu nohover" data-arc-menu-has-submenu="" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(19.35deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/admissions/" style="padding-right: 822.375px;" aria-expanded="false"><span></span>Admissions</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/apply/" style="padding-right: 822.375px;" aria-expanded="false">Apply to SIUE</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/undergraduate/visit/" style="padding-right: 822.375px;" aria-expanded="false">Visit/Tour SIUE</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/academics/degrees-and-programs/" style="padding-right: 822.375px;" aria-expanded="false">Areas of Study</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/paying-for-college/" style="padding-right: 822.375px;" aria-expanded="false">Paying for College</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/financialaid/" style="padding-right: 822.375px;" aria-expanded="false">Financial Aid</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/housing/" style="padding-right: 822.375px;" aria-expanded="false">Housing</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/undergraduate/" style="padding-right: 822.375px;" aria-expanded="false">Undergraduate</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg);"><a href="https://www.siue.edu/graduate-admissions/" style="padding-right: 822.375px;" aria-expanded="false">Graduate</a></li>
								<li class="mainLink subMenu nohover last" data-arc-menu-link="" data-arc-menu-parent="Admissions" style="top: 431.875px; transform: rotate(19.35deg); min-width: 977px;"><a href="https://www.siue.edu/internationalstudents/" style="padding-right: 822.375px;" aria-expanded="false">International</a><span></span></li>
								<li aria-expanded="false" aria-haspopup="true" class="mainLink show hasSubMenu nohover" data-arc-menu-has-submenu="" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(15.05deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/academics/" style="padding-right: 822.375px;" aria-expanded="false"><span></span>Academics</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/academics/degrees-and-programs/" style="padding-right: 822.375px;" aria-expanded="false">Degrees &amp; Programs</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/online/" style="padding-right: 822.375px;" aria-expanded="false">Online Education</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/continuing-education/" style="padding-right: 822.375px;" aria-expanded="false">Continuing Education</a></li>
								
									   <li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/academics/undergraduate/" style="padding-right: 822.375px;" aria-expanded="false">Undergraduate Catalog</a></li>
										<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/academics/graduate/" style="padding-right: 822.375px;" aria-expanded="false">Graduate Catalog</a></li>
								
								
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="http://www.siue.edu/artsandsciences/" style="padding-right: 822.375px;" aria-expanded="false">College of Arts &amp; Sciences</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="http://www.siue.edu/business/" style="padding-right: 822.375px;" aria-expanded="false">School of Business</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="http://www.siue.edu/dentalmedicine/" style="padding-right: 822.375px;" aria-expanded="false">School of Dental Medicine</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="http://www.siue.edu/education/" style="padding-right: 822.375px;" aria-expanded="false">School of Education, Health <br>and Human Behavior</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/engineering/" style="padding-right: 822.375px;" aria-expanded="false">School of Engineering</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/nursing/" style="padding-right: 822.375px;" aria-expanded="false">School of Nursing</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/pharmacy/" style="padding-right: 822.375px;" aria-expanded="false">School of Pharmacy</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/graduate/" style="padding-right: 822.375px;" aria-expanded="false">Graduate School</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg);"><a href="https://www.siue.edu/lovejoy-library/" style="padding-right: 822.375px;" aria-expanded="false">Library &amp; Information Services</a></li>
								<li class="mainLink subMenu nohover last" data-arc-menu-link="" data-arc-menu-parent="Academics" style="top: 431.875px; transform: rotate(15.05deg); min-width: 971px;"><a href="https://www.siue.edu/eslc/" style="padding-right: 822.375px;" aria-expanded="false">East St. Louis Center</a><span></span></li>
								<li class="mainLink show nohover" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(10.75deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/student-life/" style="padding-right: 822.375px;" aria-expanded="false">Student Life</a></li>
								<li aria-expanded="false" aria-haspopup="true" class="mainLink show hasSubMenu nohover" data-arc-menu-has-submenu="" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(6.45deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siuecougars.com/" style="padding-right: 822.375px;" aria-expanded="false"><span></span>Athletics</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/m-basebl/" style="padding-right: 822.375px;" aria-expanded="false">Baseball (M)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/m-baskbl" style="padding-right: 822.375px;" aria-expanded="false">Basketball (M)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-baskbl" style="padding-right: 822.375px;" aria-expanded="false">Basketball (W)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/m-xc" style="padding-right: 822.375px;" aria-expanded="false">Cross-Country (M)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-xc" style="padding-right: 822.375px;" aria-expanded="false">Cross-Country (W)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/m-golf" style="padding-right: 822.375px;" aria-expanded="false">Golf (M)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/m-soccer" style="padding-right: 822.375px;" aria-expanded="false">Soccer (M)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-soccer" style="padding-right: 822.375px;" aria-expanded="false">Soccer (W)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-softbl" style="padding-right: 822.375px;" aria-expanded="false">Softball</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-tennis" style="padding-right: 822.375px;" aria-expanded="false">Tennis (W)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/m-track" style="padding-right: 822.375px;" aria-expanded="false">Track &amp; Field (M)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-track" style="padding-right: 822.375px;" aria-expanded="false">Track &amp; Field (W)</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg);"><a href="https://www.siuecougars.com/sports/w-volley" style="padding-right: 822.375px;" aria-expanded="false">Volleyball</a></li>
								<li class="mainLink subMenu nohover last" data-arc-menu-link="" data-arc-menu-parent="Athletics" style="top: 431.875px; transform: rotate(6.45deg); min-width: 952px;"><a href="https://www.siuecougars.com/sports/m-wrestl" style="padding-right: 822.375px;" aria-expanded="false">Wrestling</a><span></span></li>
								<li aria-expanded="false" aria-haspopup="true" class="mainLink show hasSubMenu nohover" data-arc-menu-has-submenu="" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(2.15deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/maps/" style="padding-right: 822.375px;" aria-expanded="false"><span></span>Maps</a></li>
							  <li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Maps" style="top: 431.875px; transform: rotate(2.15deg);"><a href="https://www.siue.edu/maps/" style="padding-right: 822.375px;" aria-expanded="false">Interactive Map</a></li>
							<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Maps" style="top: 431.875px; transform: rotate(2.15deg);"><a href="https://www.siue.edu/maps/parking/" style="padding-right: 822.375px;" aria-expanded="false">Parking</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Maps" style="top: 431.875px; transform: rotate(2.15deg);"><a href="https://www.siue.edu/maps/maps-directions/" style="padding-right: 822.375px;" aria-expanded="false">Directions &amp; Maps</a></li>
							   <li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Maps" style="top: 431.875px; transform: rotate(2.15deg);"><a href="https://www.siue.edu/maps/buildings-areas/" style="padding-right: 822.375px;" aria-expanded="false">Buildings/Areas</a></li>
							   <li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="Maps" style="top: 431.875px; transform: rotate(2.15deg);"><a href="https://www.siue.edu/undergraduate/visit/" style="padding-right: 822.375px;" aria-expanded="false">Visit/Tour SIUE</a></li>
								<li class="mainLink subMenu nohover last" data-arc-menu-link="" data-arc-menu-parent="Maps" style="top: 431.875px; transform: rotate(2.15deg); min-width: 921px;"><a href="https://www.siue.edu/virtual-tour/" style="padding-right: 822.375px;" aria-expanded="false">Virtual Tour</a><span></span></li>
							   
								<li class="mainLink show nohover" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(-2.15deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/research/" style="padding-right: 822.375px;" aria-expanded="false">Research</a></li>
								<li class="mainLink show nohover" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(-6.45deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/give/" style="padding-right: 822.375px;" aria-expanded="false">Giving</a></li>
								
							
								<li aria-expanded="false" aria-haspopup="true" class="mainLink show hasSubMenu nohover" data-arc-menu-has-submenu="" data-arc-menu-link="" data-arc-menu-show="" style="top: 431.875px; transform: rotate(-10.75deg); transition: all 0.3s ease 0s; visibility: visible; opacity: 1;"><a href="https://www.siue.edu/about/" style="padding-right: 822.375px;" aria-expanded="false"><span></span>About SIUE</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="About SIUE" style="top: 431.875px; transform: rotate(-10.75deg);"><a href="https://www.siue.edu/about/area.shtml" style="padding-right: 822.375px;" aria-expanded="false">About the Area</a></li>
								<li class="mainLink subMenu nohover" data-arc-menu-link="" data-arc-menu-parent="About SIUE" style="top: 431.875px; transform: rotate(-10.75deg);"><a href="https://www.siue.edu/about/mission.shtml" style="padding-right: 822.375px;" aria-expanded="false">Mission, Vision &amp; Values</a></li>
								<li class="mainLink subMenu nohover last" data-arc-menu-link="" data-arc-menu-parent="About SIUE" style="top: 431.875px; transform: rotate(-10.75deg); min-width: 976px;"><a href="https://www.siue.edu/about/pointsofpride.shtml" style="padding-right: 822.375px;" aria-expanded="false">Points of Pride</a><span></span></li>
								<li class="mainLink nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-15.05deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/apply/" style="padding-right: 822.375px;" aria-expanded="false">Apply to SIUE</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-19.35deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/student-life/" style="padding-right: 822.375px;" aria-expanded="false">Current Students</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-23.65deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/facultystaff/" style="padding-right: 822.375px;" aria-expanded="false">Faculty &amp; Staff</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-27.95deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/alumni/" style="padding-right: 822.375px;" aria-expanded="false">Alumni</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-32.25deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/business-partners/" style="padding-right: 822.375px;" aria-expanded="false">Business Partners</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-36.55deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="http://www.siue.edu/parents/" style="padding-right: 822.375px;" aria-expanded="false">Parents</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-40.85deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/community/" style="padding-right: 822.375px;" aria-expanded="false">Community</a></li>
								<li class="mainLink audience nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-45.15deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;"><a href="https://www.siue.edu/veterans/" style="padding-right: 822.375px;" aria-expanded="false">Veterans</a></li>
								<li class="mainLink img nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-49.45deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;">
									<a href="https://www.siue.edu/its/email/email.shtml" style="padding-right: 822.375px;" aria-expanded="false">
										<img alt="SIUE Email" height="18" src="https://www.siue.edu/_files/images/logo-webmail.png" width="23">
									</a>
								</li>
								<li class="mainLink img nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-53.75deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;">
									<a href="https://bb.siue.edu/" style="padding-right: 822.375px;" aria-expanded="false">
										<img alt="Blackboard" height="18" src="https://www.siue.edu/_files/images/logo-blackboard.png" width="25">
									</a>
								</li>
								<li class="mainLink img nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-58.05deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;">
									<a href="https://www.siue.edu/cougarnet/" style="padding-right: 822.375px;" aria-expanded="false">
										<img alt="CougarNet" height="18" src="https://www.siue.edu/_files/images/logo-cougarnet.png" width="19">
									</a>
								</li>
								
									 <li class="mainLink img nohover" data-arc-menu-link="" style="top: 431.875px; transform: rotate(-62.35deg); transition: all 0.3s ease 0s; visibility: hidden; opacity: 0;">
									<a href="https://siue.starfishsolutions.com/starfish-ops/session/casLogin.html?" style="padding-right: 822.375px;" aria-expanded="false">
										  <img alt="SIUE Starfish Logo" height="21" src="https://www.siue.edu/_files/images/starfish-logo.png" width="21">
									</a>
								</li>
								
						  
								
								
							</ul>
							<ul>
								<li class="mainLink show arrow down" data-arc-menu-down="">
									<a>
										<img alt="Menu Down"
											src="https://www.siue.edu/_files/2016/img/menu-arrow-down.png" />
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<a data-arc-menu-dismiss="" id="dismiss"><img alt="dismiss"
						src="https://www.siue.edu/_files/2016/img/dismiss.png" /></a>
			</div>
		</div>
		<div class="un_jtt_hide"></div>
		<a id="top"></a>
		<!--Start Global Header-->
		<div class="hdrWrap">
			<div>
				<div class="hdrContentWrap">
					<div class="searchIcon mainLink"><a href="https://www.siue.edu/search/"><img alt="Search"
								src="https://www.siue.edu/_files/2016/img/search.png" /></a></div>
					<div class="logoEdwardsville"><a href="https://www.siue.edu"><img
								alt="Southern Illinois University Edwardsville Logo"
								src="https://www.siue.edu/_files/2016/img/logo-siue.png" /></a></div>
					<button aria-controls="arc-menu" aria-expanded="false" aria-label="Toggle Mobile Arc Menu"
						class="arc-menu-btn" data-arc-menu-menu="" id="ArcMenuBtn" title="Toggle Mobile Arc Menu">
						<img alt="Menu Btn" src="https://www.siue.edu/_files/2016/img/menu.png" />
					</button>
					<a class="btnApply arrow-light" href="https://www.siue.edu/apply/">
						<div>Apply to SIUE</div>
					</a>
					<div class="hdrTopWrap">
						<div class="hdrNavWrap">
							<div>
								<nav>
									<ul>
										<li class="mainLink"><a href="https://www.siue.edu/admissions/">Admissions</a>
											<ul class="fallback" style="display: none; height: 295px; padding-top: 15px; margin-top: 0px; padding-bottom: 15px; margin-bottom: 0px;">
												<li><a href="https://www.siue.edu/apply/">Apply to SIUE</a></li>
												<li><a href="https://www.siue.edu/undergraduate/visit/">Visit/Tour SIUE</a></li>
												<li><a href="https://www.siue.edu/academics/degrees-and-programs/">Areas of Study</a></li>
												<li><a href="https://www.siue.edu/paying-for-college/">Paying for College</a></li>
												<li><a href="https://www.siue.edu/financial-aid/">Financial Aid</a></li>
												<li><a href="https://www.siue.edu/housing/">Housing</a></li>
												<li>
												   <hr style="border-color:#444;">
												</li>
												<li><a href="https://www.siue.edu/undergraduate/">Undergraduate</a></li>
												<li><a href="https://www.siue.edu/graduate-admissions/">Graduate</a></li>
												<li><a href="https://www.siue.edu/admissions/international/">International</a></li>
											 </ul>
										</li>
										<li class="mainLink"><a href="https://www.siue.edu/academics/">Academics</a>
											<ul class="fallback" style="display: none; height: 525px; padding-top: 15px; margin-top: 0px; padding-bottom: 15px; margin-bottom: 0px;">
												<li><a href="https://www.siue.edu/academics/degrees-and-programs/">Degrees &amp; Programs</a></li>
												<li><a href="https://www.siue.edu/online/">Online Education</a></li>
												<li><a href="https://www.siue.edu/continuing-education/">Continuing Education</a></li>
												<li>
												   <hr style="border-color:#444;">
												</li>
												<li><a href="https://www.siue.edu/academics/undergraduate/">Undergraduate Catalog</a></li>
												<li><a href="https://www.siue.edu/academics/graduate/">Graduate Catalog</a></li>
												 
												<li>
												   <hr style="border-color:#444;">
												</li>
												<li><a href="http://www.siue.edu/artsandsciences/">College of Arts &amp; Sciences</a></li>
												<li><a href="http://www.siue.edu/business/">School of Business</a></li>
												<li><a href="http://www.siue.edu/dentalmedicine/">School of Dental Medicine</a></li>
												<li><a href="http://www.siue.edu/education/">School of Education, Health and Human Behavior</a></li>
												<li><a href="https://www.siue.edu/engineering/">School of Engineering</a></li>
												<li><a href="https://www.siue.edu/nursing/">School of Nursing</a></li>
												<li><a href="https://www.siue.edu/pharmacy/">School of Pharmacy</a></li>
												<li><a href="https://www.siue.edu/graduate/">Graduate School</a></li>
												<li><a href="https://www.siue.edu/lovejoy-library/">Library &amp; Information Services</a></li>
												<li>
												   <hr style="border-color:#444;">
												</li>
												<li><a href="https://www.siue.edu/eslc/">East St. Louis Center</a></li>
											 </ul>
										</li>
										<li class="mainLink"><a href="https://www.siue.edu/student-life/">Student
												Life</a></li>
										<li class="mainLink"><a href="https://www.siuecougars.com/">Athletics</a>
											<ul class="fallback" style="display: none; height: 380px; padding-top: 15px; margin-top: 0px; padding-bottom: 15px; margin-bottom: 0px;">
												<li><a href="https://www.siuecougars.com/sports/m-basebl/" aria-expanded="false">Baseball (M)</a></li>
												<li><a href="https://www.siuecougars.com/sports/m-baskbl">Basketball (M)</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-baskbl">Basketball (W)</a></li>
												<li><a href="https://www.siuecougars.com/sports/m-xc">Cross-Country (M)</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-xc">Cross-Country (W)</a></li>
												<li><a href="https://www.siuecougars.com/sports/m-golf">Golf (M)</a></li>
												<li><a href="https://www.siuecougars.com/sports/m-soccer" aria-expanded="false">Soccer (M)</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-soccer">Soccer (W)</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-softbl">Softball</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-tennis">Tennis (W)</a></li>
												<li><a href="https://www.siuecougars.com/sports/m-track">Track &amp; Field (M)</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-track/">Track &amp; Field (W)</a></li>
												<li><a href="https://www.siuecougars.com/sports/w-volley">Volleyball</a></li>
												<li><a href="https://www.siuecougars.com/sports/m-wrestl">Wrestling</a></li>
											 </ul></li>
										<li class="mainLink"><a href="https://www.siue.edu/maps/">Maps</a>
											<ul class="fallback" style="display: none; height: 180px; padding-top: 15px; margin-top: 0px; padding-bottom: 15px; margin-bottom: 0px;">
												<li><a href="https://www.siue.edu/maps/">Interactive Map</a></li>
												<li><a href="https://www.siue.edu/maps/parking/">Parking</a></li>
												<li><a href="https://www.siue.edu/maps/maps-directions/">Directions &amp; Maps</a></li>
												<li><a href="https://www.siue.edu/maps/buildings-areas/">Buildings/Areas</a></li>
												<li><a href="https://www.siue.edu/undergraduate/visit/">Tour/Visit SIUE</a></li>
												<li><a href="https://www.siue.edu/virtual-tour/">Virtual Tour</a></li>
											</ul>
										</li>
										<li class="mainLink"><a href="https://www.siue.edu/research/">Research</a></li>
										<li class="mainLink"><a href="https://www.siue.edu/give/">Giving</a></li>
										<li class="mainLink"><a href="https://www.siue.edu/about/">About SIUE</a>
											<ul class="fallback" style="display: none; height: 105px; padding-top: 15px; margin-top: 0px; padding-bottom: 15px; margin-bottom: 0px;">
												<li><a href="https://www.siue.edu/about/area.shtml">About the Area</a></li>
												<li><a href="https://www.siue.edu/about/mission.shtml">Mission, Vision &amp; Values</a></li>
												<li><a href="https://www.siue.edu/about/pointsofpride.shtml">Points of Pride</a></li>
											 </ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Global Header-->
		<div class="clear"></div>
		<!--Start Local Header-->
		<div class="hdrBg white red submenuHide" style="margin-top:0"></div>
		<div class="hdrTitleWrap scrollFixedHeader" id="content-start">
			<div class="textMainTitle">
				<h1>
					<a href="https://www.siue.edu/lovejoy-library/">Library &amp; Information Services</a>
					<a class="pull-menu">
						<img alt="Sub Menu" class="opensub" src="https://www.siue.edu/_files/2016/img/sub-menu.png" />
						<img alt="Dismiss" class="dismiss" src="https://www.siue.edu/_files/2016/img/dismiss.png" />
					</a>
				</h1>
			</div>
		</div>
		<div class="siteNavWrap submenuVisible">
			<div class="siteNav" style="margin-top:0">
				<a class="mainLink home" href="https://www.siue.edu/lovejoy-library/">&nbsp;</a>
				<a class="mainLink dark" href="https://www.siue.edu/lovejoy-library/search-find-renew/">Search, Find
					&amp; Renew</a>
				<a class="mainLink" href="https://www.siue.edu/lovejoy-library/research-support/">Research Support</a>
				<a class="mainLink dark" href="https://www.siue.edu/lovejoy-library/services/">Services</a>
				<a class="mainLink" href="https://www.siue.edu/lovejoy-library/ask-a-librarian/">Ask a Librarian</a>
				<a class="mainLink dark" href="https://www.siue.edu/lovejoy-library/about/">About</a>
				<a class="mainLink" href="https://www.siue.edu/lovejoy-library/giving/">Giving</a>
			</div>
		</div>
		<!--End Local Header-->

        <div class="body-wrap" id="wrap">
            <div class="textSubsectionTitle scrollFixedHeader noArrow original">
                <h2 class="title-link"><?php echo link_to_home_page(theme_logo()); ?></h2>
            </div>
            <!-- <div class="menu-button button">Menu</div> -->
            <nav id="primary-nav" role="navigation">
                <?php echo public_nav_main_siue(array('role' => 'navigation')) ?>
                <div id="search-container" role="search">
                    <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                    <?php echo search_form(array('show_advanced' => true)); ?>
                    <?php else: ?>
                    <?php echo search_form(); ?>
                    <?php endif; ?>
                </div>
            </nav>
            <div id="content" role="main" tabindex="-1">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
