<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allmobilevideo-theme
 */

?>

	   <footer class="main-footer">
          <div class="container">
            <div class="row ftmain">
              <div class="col-xl-3 col-lg-3 col-md-5  col-sm-6    footercontactinfo  offset-3 offset-sm-0 col-8">
                <ul>
                  <li><a class="mobile" href="tel:2127271234" target="_blank"> <span class="hidden-lg-down">Contact Us: </span>(212) 727-1234</a></li>
                  <li><a class="envelope" href="mailto:contact@amvchelsea.com" target="_blank"><span class="hidden-lg-down">  Email:</span> Contact@AmvChelsea.com</a></li>
                  <li><a class="fax" href="tel:2122556644" target="_blank"> <span class="hidden-lg-down"> Fax: </span>(212)255-6644</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-lg-2 text-sm-left text-left col-5   offset-sm-0">
                <h6>Mobile &amp; Rentals</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-production&scroll=1">Production</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-carry-pack&scroll=1">Carry-Packs</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-uplink&scroll=1">Uplink</a></li>
                   <li><a href="<?php echo get_home_url(); ?>/rental">Rentals</a></li>
                   <li><a href="<?php echo get_home_url(); ?>/mobile-specs">Truck Spec Sheets</a></li>
                </ul>
               
                <h6>BROADCAST SALES</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/sales">Equipment Sales</a></li>
                  <li><a href="http://stores.ebay.com/AMV-Broadcast-Sales">Ebay Store</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-6 col-lg-2 text-sm-left text-left col-5 offset-1 offset-sm-0 ">
                 <h6>Sound Stages</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/stage/">Chelsea Television Studios </a></li>
                  <li><a href="<?php echo get_home_url(); ?>/stage/studio-57/">Studio 57</a></li>
                </ul>
                  <h6>Post-Production</h6>
                     <ul>
                  <li><a href="<?php echo get_home_url(); ?>/post#services">Services</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/post#features">Equipment &amp; Capabilities  </a></li>
                </ul>
                
                 
              </div>
              <div class="offset-md-5 offset-lg-0 col-md-3 col-sm-6 col-lg-2 text-sm-left text-left col-5  offset-sm-0">
                <h6>Video Transport / IP</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/gateway/">Gateway</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/satellite-services/">Satellite Services</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/master-control/">Master Control</a></li>
                  <li><a href="http://amvdm.com/" target="_blank">Digital Media</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/ip-services/">IP Services</a></li>
                </ul>
              

    
              </div>
              <div class="col-md-4 col-sm-12 footersocialinfo  text-sm-left text-left text-md-left pt-sm-3 pt-md-0 col-lg-3 offset-3 offset-sm-0 pt-4 pt-sm-0 ">
                <h6>Follow Us:</h6>
                <ul><li><a class="social" href="https://www.facebook.com/allmobilevideo/" target="_blank"><span>Facebook</span></a></li>
                <li><a class="social" href="https://twitter.com/allmobilevideo" target="_blank"><span>Twitter</span></a></li>
                <li><a class="social" href="https://www.linkedin.com/company/all-mobile-video" target="_blank"><span>LinkedIn</span></a></li></ul>
                <div class="clearfix"></div>
                <form class="customsearchbar1 form-inline my-2 my-lg-0 hidden-md-down" action="<?php echo get_site_url() ; ?>" role="search" method="get" >
                  <input class="form-control footersearch" type="text" placeholder="Search" name="s" >
                  <button class="btn  my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="mail-signup-ft">
<div>Sign up for AMV News and &amp; EXCLUSIVE Offers!</div><a role="button" class="btn btn-primary custom-btn btn-mail-signup-ft" href="#" data-target="#mailchimp" class="icon-links" data-toggle="modal">SIGN UP</a></div>
<div class="modal fade" id="mailchimp" tabindex="-1" role="dialog" aria-labelledby="mailchimpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mailchimpLabel">SIGN UP FOR AMV NEWS &amp; EXCLUSIVE OFFERS!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row" >
    
        
        <iframe width="500px" height="700px"  src="http://eepurl.com/dlJ_0j"></iframe>
        
      </div>
  
    </div>
  </div>
</div>
              </div>

            </div>
             <div class="row">
            <div class="col-lg-12 pr-5 text-right">
              <ul>
                <li><a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></li>
                <li><a href="<?php echo get_home_url(); ?>/terms-conditions">Terms &amp; Conditions</a></li>
                <li>© 2017 - 2018 • All Mobile Video • All Rights Reserved</li>
              </ul>
              
            </div>
          </div>
          <!-- /.row -->
          </div>
         
        </footer>

<?php wp_footer(); ?>

</body>
</html>
