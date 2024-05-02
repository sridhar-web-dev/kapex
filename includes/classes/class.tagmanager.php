<?php

class TagManager {

    public static function head_tracker() {
		if(SEO_TAGMANAGER === true){
			echo "<!-- Google Tag Manager -->
       
        <!-- End Google Tag Manager -->";
      }
    }

    public static function body_tracker() {
      if(SEO_TAGMANAGER === true){
        echo '<!-- Google Tag Manager (noscript) -->
       
        <!-- End Google Tag Manager (noscript) -->';
      }
    }
}