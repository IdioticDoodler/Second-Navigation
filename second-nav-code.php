<!-- 
You can put it on the header if you want to put another navigation in header or whereever you want to pu it, just copy the code and paste it
-->

<?php
            	    wp_nav_menu( 
            	    	array(
            		        'theme_location'    => 'second-nav',
            		        'depth'             => 3,
            		        'container'         => false,
            		        'container_class'   => false,
            		        'menu_class'        => 'menu',
            	        )
            	    );
 ?>
