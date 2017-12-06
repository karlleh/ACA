<div class="responsive-container">    

        <div class="content-container">         

                <div class="biz0ne">

                        <div class="biz0ne-welcome">
                        
                            <div id="welcomeImage">
                                <img src="<?php echo get_template_directory_uri();?>/images/ACA-thumb.jpg">
                            </div>
                            <div id="welcomeText">
                                <h3>Welcome to ACA Vision Technology</h3>
                                <p>We are a dynamic and passion driven group of professionals that specialized in the development of machine vision solutions. ACA is a technology driven company founded in the year 2003. Throughout the years of accomplishment, we have successfully designed and developed various type of machine vision systems across the globe from Malaysia to China, Taiwan, Thailand, Singapore, Philippines, Europe and America, and many more.</p>
                                <a href="about">Know more</a>
                            </div>
                        
                        </div><!-- .biz0ne-welcome -->
        
                        <div class="biz0ne-products-services">
        
                        <div class="biz0ne-products-services-header">
                                <h2>Explore our type of Vision Solutions</h2>
                        </div>
                        
                <div class="biz0ne-products-services-item">
                    <div class="biz0ne-products-services-img">
                    
                                                <a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
                                                <?php 
                                                    if( of_get_option('left_section_image') ){
                                                        echo '<img class="" src="'.esc_url( of_get_option('left_section_image') ).'" />';
                                                    }else {
                                                        echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                    }
                                                ?>
                                                </a>
                    
                    </div><!-- .biz0ne-products-services-img -->
                    
                    <div class="biz0ne-products-services-name">
                                                        <a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
                                                        <?php 
                                                            if( of_get_option('left_section_headline') ){
                                                                echo esc_html( of_get_option('left_section_headline') );
                                                            }else {
                                                                _e('Design',  'BizSphere');
                                                            }
                                                        ?>
                                                                <img class="yellowarrow" src="<?php echo get_template_directory_uri(); ?>/images/yellowarrow.png"  />
                                                        </a>        
                    </div><!-- .biz0ne-products-services-name -->
                    
                    <div class="biz0ne-products-services-description">
                                                        <?php 
                                                            if( of_get_option('left_section_text') ){
                                                                echo esc_html( of_get_option('left_section_text') );
                                                            }else {
                                                                _e('You can change this text in description box of left section block in Biz one tab of theme options page.',  'BizSphere');
                                                            }
                                                        ?>
                                
                                
                    </div><!-- .biz0ne-products-services-description -->                
                
                        <div class="services-desc-viewmore">
                                        <a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
                                                View more
                                        </a>
                        </div>
                </div><!-- .biz0ne-products-services-item -->
                
                <div class="biz0ne-products-services-item">
                
                    <div class="biz0ne-products-services-img">
                                                <a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
                                                <?php 
                                                    if( of_get_option('center_section_image') ){
                                                        echo '<img class="" src="'.esc_url( of_get_option('center_section_image') ).'" />';
                                                    }else {
                                                        echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                    }
                                                ?>
                                                </a>        
                    </div><!-- .biz0ne-products-services-img -->
                    
                    <div class="biz0ne-products-services-name">
                                                        <a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
                                                        <?php 
                                                            if( of_get_option('center_section_headline') ){
                                                                echo esc_html( of_get_option('center_section_headline') );
                                                            }else {
                                                                _e('Development',  'BizSphere');
                                                            }
                                                        ?>
                                                                <img class="yellowarrow" src="<?php echo get_template_directory_uri(); ?>/images/yellowarrow.png"  />
                                                        </a>       
                    </div><!-- .biz0ne-products-services-name -->
                    
                    <div class="biz0ne-products-services-description">
                                                        <?php 
                                                            if( of_get_option('center_section_text') ){
                                                                echo esc_html( of_get_option('center_section_text') );
                                                            }else {
                                                                _e('You can change this text in description box of center section block in Biz one tab of theme options page.',  'BizSphere');
                                                            }
                                                        ?>
                                
                        
                    </div><!-- .biz0ne-products-services-description -->                
                
                        <div class="services-desc-viewmore">
                                <a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
                                        View more
                                </a>
                        </div>
                </div><!-- .biz0ne-products-services-item -->
                
                <div class="biz0ne-products-services-item">
                
                    <div class="biz0ne-products-services-img">
                                                <a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
                                                <?php 
                                                    if( of_get_option('right_section_image') ){
                                                        echo '<img class="" src="'.esc_url( of_get_option('right_section_image') ).'" />';
                                                    }else {
                                                        echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                    }
                                                ?>
                                                </a>        
                    </div><!-- .biz0ne-products-services-img -->
                    
                    <div class="biz0ne-products-services-name">
                                                        <a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
                                                        <?php 
                                                            if( of_get_option('right_section_headline') ){
                                                                echo esc_html( of_get_option('right_section_headline') );
                                                            }else {
                                                                _e('Marketing',  'BizSphere');
                                                            }
                                                        ?>
                                                                <img class="yellowarrow" src="<?php echo get_template_directory_uri(); ?>/images/yellowarrow.png"  />
                                                        </a>        
                    </div><!-- .biz0ne-products-services-name -->
                    
                    <div class="biz0ne-products-services-description">
                                                        <?php 
                                                            if( of_get_option('right_section_text') ){
                                                                echo esc_html( of_get_option('right_section_text') );
                                                            }else {
                                                                _e('You can change this text in description box of right section block in Biz one tab of theme options page.',  'BizSphere');
                                                            }
                                                        ?>
                    </div><!-- .biz0ne-products-services-description -->
                    
                        <div class="services-desc-viewmore">
                                <a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
                                        View more
                                </a>
                        </div>       

                </div><!-- .biz0ne-products-services-item -->        
            
            </div><!-- .biz0ne-products-services -->
            
    </div><!-- .biz0ne -->  
    
    <?php if( !of_get_option('show_bizone_posts') || of_get_option('show_bizone_posts') == 'true' ) : ?>
    <div class="biz0ne">
     
      <?php 
       
       if( 'page' == get_option( 'show_on_front' ) ){	
        get_template_part('index', 'page');
       }else {
        get_template_part('index', 'standard');
       }			 
       
      ?>
      
    </div><!-- .biz0ne -->
    <?php endif; ?>  