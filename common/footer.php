        </div><!-- end content -->

    </div><!-- end wrap -->


    <footer class="omeka-footer" role="contentinfo">

        <div id="footer-text">
            <?php echo get_theme_option('Footer Text'); ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
            <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        </div>

        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

    </footer><!-- end footer -->
    <!-- Footer-->
		<div class="footerContainer submenuHide" style="">
            
            
			<div>




<div class="social">
	  <div class="social-content"><a href="https://www.facebook.com/siuedwardsville"><span class="button-hold"><img alt="facebook" src="https://www.siue.edu/_files/images/social/facebook.png"></span></a><a href="https://twitter.com/siue"><span class="button-hold"><img alt="twitter" src="https://www.siue.edu/_files/images/social/twitter.png"></span></a><a href="https://www.linkedin.com/school/siue/"><span class="button-hold"><img alt="linkedin" src="https://www.siue.edu/_files/images/social/linkedin.png"></span></a><a href="https://www.flickr.com/photos/siue"><span class="button-hold"><img alt="flickr" src="https://www.siue.edu/_files/images/social/flickr.png"></span></a><a href="https://www.instagram.com/siuedwardsville/"><span class="button-hold"><img alt="instagram" src="https://www.siue.edu/_files/images/social/instagram.png"></span></a><a href="https://plus.google.com/+southernillinoisuniversityedwardsville/"><span class="button-hold"><img alt="googleplus" src="https://www.siue.edu/_files/images/social/googleplus.png"></span></a><a href="https://www.pinterest.com/siuedwardsville/"><span class="button-hold"><img alt="pinterest" src="https://www.siue.edu/_files/images/social/pinterest.png"></span></a><a href="https://www.youtube.com/user/siueweb"><span class="button-hold"><img alt="youtube" src="https://www.siue.edu/_files/images/social/youtube.png"></span></a><a href="http://www.siue.edu/social/"><span class="button-hold social-at-siue"><img alt="social at siue" src="https://www.siue.edu/_files/2016/img/social-at-siue.png"></span></a></div>
</div>
<div class="footer">© 2019&nbsp;<a href="http://www.siue.edu/index.shtml">SIUE</a>, Edwardsville, IL 62026<span class="break"></span><a href="http://www.siue.edu/contact/index.shtml">Contact SIUE</a><span class="break"></span><a href="http://www.siue.edu/web-privacy-notice/">Privacy Notice</a> | <a href="http://www.siue.edu/consumer-disclosures/">Consumer Disclosures &amp; Complaints</a><span class="break first"></span><a href="http://www.siue.edu/misc/eoe/">Equal Opportunity Employer</a><span class="break"></span><a href="http://www.siue.edu/employment/index.shtml">Employment</a><span class="break"></span><a href="http://www.siue.edu/emergency/index.shtml">Emergency Notification</a> (e-Lert)
	  <p class="code-compliance">
		<!-- Start Administrative Code compliance for e1-b: http://www.ilga.gov/commission/jcar/admincode/023/023010300000300R.html-->Southern Illinois University Edwardsville is authorized to operate as a postsecondary educational institution by the&nbsp;<a href="https://www.ibhe.org/">Illinois Board of Higher Education</a>.
	  </p>
</div>





</div>
			
	<!-- End Footer-->

	<!-- Start Floating Footer Bar-->
		<div id="floatingbar" style="height:30px;">
			
			
				<div>






<div>
<ul class="leftNav">
  <li><a class="leftLink" href="https://www.siue.edu/student-life/">Current Students</a></li>
  <li><a class="leftLink" href="https://www.siue.edu/facultystaff/">Faculty &amp; Staff</a></li>
  <li><a class="leftLink" href="https://www.siue.edu/alumni/">Alumni</a></li>
  <li><a class="leftLink" href="https://www.siue.edu/business-partners/">Business Partners</a></li>
  <li><a class="leftLink" href="https://www.siue.edu/parents/">Parents</a></li>
 
  <li><a class="leftLink" href="https://www.siue.edu/veterans/">Veterans</a></li>
</ul>
<ul class="rightNav">
 <li><a class="rightLink" href="https://siue.starfishsolutions.com/starfish-ops/session/casLogin.html?"><img alt="SIUE Starfish Logo" height="18" src="https://www.siue.edu/_files/images/starfish-logo.png" width="18"></a></li>
  <li><a class="rightLink" href="https://www.siue.edu/cougarnet/"><img alt="CougarNet" height="18" src="https://www.siue.edu/_files/images/logo-cougarnet.png" width="19"></a></li>
  <li><a class="rightLink" href="https://bb.siue.edu/"><img alt="Blackboard" height="18" src="https://www.siue.edu/_files/images/logo-blackboard.png" width="25"></a></li>
  <li><a class="rightLink" href="https://office365.siue.edu"><img alt="SIUE Email" height="18" src="https://www.siue.edu/_files/images/logo-webmail.png" width="23"></a></li>
 
<li><a class="rightLink directEdit" href="https://cascade.siue.edu/entity/edit.act?id=68b178ce7f00000107eca7d43500fb9b&amp;type=page" target="_parent"><img alt="Cascade" src="https://www.siue.edu/_files/images/logo-cascade.png" width="23"></a></li></ul>
</div>



</div>
			   
		 
			

<script>
$('#floatingbar ul.rightNav').append( $('<li><a class="rightLink directEdit" href="https://cascade.siue.edu/entity/edit.act?id=68b178ce7f00000107eca7d43500fb9b&amp;type=page" target="_parent"><img alt="Cascade" src="https://www.siue.edu/_files/images/logo-cascade.png" width="23"/></a></li>'));
</script>

		</div>

    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('.no-touchevents #primary-nav');
        SIUE.mobileMenu();
    });
    </script>



</body>
</html>
