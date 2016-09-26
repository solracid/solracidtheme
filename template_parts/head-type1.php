<?php 
/**
 * Header type 1 for Optimizer
 *
 * Displays The Header type 1. This file is imported in header.php
 *
 * @package Optimizer
 * 
 * @since Optimizer 1.0
 */
global $optimizer;?>

<!--HEADER STARTS-->
    <div class="header">
        <div class="center">
            <div class="head_inner">
            <!--LOGO START-->
                <div class="logo">
                    <?php if(!empty($optimizer['logo_image_id']['url'])){   ?>
                        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $optimizer['logo_image_id']; echo $logo['url']; ?>" /></a>
                        <span class="desc"><?php echo bloginfo('description'); ?></span>
                    <?php }else{ ?>
                            <?php if ( is_home() ) { ?>   
                            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php }else{ ?>
                            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php } ?>
                    
                    <?php } ?>
                </div>
            <!--LOGO END-->

            <!--LOAD THE HEADER SEARCH BUTTON-->
                <div class="search-toggle">
                    <img class="search-toggle-svg style-svg" src="<?= get_template_directory_uri(); ?>/assets/images/search.svg" alt="<?php _e( 'Search', '' ); ?>">
                    <div class="search_underline"></div>
                </div>
                <form role="search" method="get" id="menu-searchform" class="menu-searchform hide-menu-searchform" action="http://localhost:8888/tarotscope/">
                    <input type="text" id="s" class="inputStyle menu_searchInput" value="" placeholder="<?php _e('Search'); ?>..." name="s">
                    <input type="submit" id="searchsubmit" class="buttonStyle menu_submit" value="<?php _e('Search'); ?>">
                </form>
                
        <!--MENU START--> 
                <!--MOBILE MENU START-->
                <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a>
                <!--MOBILE MENU END--> 
                
                <div id="topmenu" class="<?php if ('header' == $optimizer['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
                    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
                    <!--LOAD THE HEADER SOCIAL LINKS-->
    				<div class="head_soc">
        				<?php if ($optimizer['social_bookmark_pos'] == 'header') { ?><?php get_template_part('framework/core','social'); ?><?php } ?>
                    </div>
        <!--MENU END-->
                </div>
                <div class="search-menu-fade"></div>
            </div>
        </div>
    </div>    
<!--HEADER ENDS-->