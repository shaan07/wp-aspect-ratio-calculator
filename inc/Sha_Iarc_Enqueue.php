<?php


namespace Sha_IARC_Inc;

final class Sha_Iarc_Enqueue{

    public function register(){
        add_action( 'wp_enqueue_scripts', array( $this , 'registerAllScripts' ) );
    }

    public static function registerAllScripts(){
        wp_register_script('wp_vuejs', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js');
        wp_register_script('sha_iarc_script', plugin_dir_url( __FILE__ ).'../assets/sha-iarc-code.js', 'wp_vuejs', true );
        wp_register_style('sha_iarc_style', plugin_dir_url( __FILE__ ).'../assets/sha-iarc-style.css');
    }

    



}

?>