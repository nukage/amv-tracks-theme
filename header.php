<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allmobilevideo-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar1 navbar-toggleable-xl navbar-inverse bg-inverse">
      <div class="container">
        <div class="navbar-collapse collapse" id="navbar1" aria-expanded="true" style="">
          <ul class="navbar-nav mr-auto">
            <li class="">
              <a class="phone" href="tel:2127271234">(212) 727-1234</a>
            </li>
            <li class="nav-item hidden-sm-down">
              <a class="email" href="mailto:contact@amvchelsea.com" target="_blank">CONTACT@AMVCHELSEA.COM</a>
            </li>
          </ul>

     



          <form role="search" method="get"  action="<?php echo get_site_url() ; ?>"  class="customsearchbar1 form-inline my-2 my-lg-0 hidden-md-down">
            <input name="s" id="s"  class="form-control" type="text" placeholder="Search">
            <button class="btn  my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar2 navbar-toggleable-md navbar-inverse justify-content-between">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">All Mobile Video</a>
        <div class="navbar-collapse collapse " id="navbar2" aria-expanded="true" style="">
          <ul class="nav  navbar-nav  nav-pills nav-fill  w-100 align-items-sta">
            
            
         
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="mobile-rentals" href="<?php echo get_home_url(); ?>/mobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mobile<span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="mobile">
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/mobile">Full Fleet</a>
               <a class="dropdown-item" href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-production&scroll=1">Production</a>
                  <a  class="dropdown-item" href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-uplink&scroll=1">Uplink</a>
                  <a  class="dropdown-item" href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-carry-pack&scroll=1">Carry-Packs</a>
               
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/mobile-specs">Spec Sheets</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/rental">Rentals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/stage">Stages</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo get_home_url(); ?>/post">Post</a>  
            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://amvdm.com/" target="_blank">Digital Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/sales">Sales</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="mobile-rentals" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Video Transport / IP <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="video-transport-ip">
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/gateway">AMV Gateway</a>
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/satellite-services">Westar Satellite Services</a>
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/master-control">Westar Master Control</a>
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/ip-services">IP Services</a>
              </li>
                      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo get_home_url(); ?>/about" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/about">Our Company</a>
             <!--    <a class="dropdown-item" href="#">Credits</a> -->
                <a class="dropdown-item" href="<?php echo get_home_url(); ?>/news">News</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/contact">Contact</a>
            </li>

          </ul>
    
          <form role="search" method="get"  class="customsearchbar1 form-inline my-2 my-lg-0 hidden-lg-up" action="<?php echo get_site_url() ; ?>">
            <input name="s" id="s"  class="form-control" type="text" placeholder="Search">
            <button class="btn  my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
<div class="top-push"></div>