<?php
/**
 * Your Inspiration Themes
 * 
 * @package WordPress
 * @subpackage Your Inspiration Themes
 * @author Your Inspiration Themes Team <info@yithemes.com>
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */
 
/**
 * Class to print fields in the tab General -> Header
 * 
 * @since 1.0.0
 */
class YIT_Submenu_Tabs_Theme_option_Custom_Codes_Custom_script extends YIT_Submenu_Tabs_Abstract {
    /**
     * Default fields
     * 
     * @var array
     * @since 1.0.0
     */
    public $fields;
    
    /**
     * Merge default fields with theme specific fields using the filter yit_submenu_tabs_theme_option_custom_codes_custom_script
     * 
     * @param array $fields
     * @since 1.0.0
     */
    public function __construct() {
        $fields = $this->init();
        $this->fields = apply_filters( strtolower( __CLASS__ ), $fields );
    }
    
    /**
     * Set default values
     * 
     * @return array
     * @since 1.0.0
     */
    public function init() {  
        return array(
            /* === START HEADER === */            
            10 => array(
                'id' => 'custom-script',
                'type' => 'textarea',
                'name' => __( 'Custom script', 'yit' ),
                'desc' => __( 'Here you can write all your custom Javascript', 'yit' ),
                'std' => apply_filters( 'yit_custom-script_std', '' ),
            ),
            20 => array(
                'id' => 'google-analytics-code',
                'type' => 'textarea',
                'name' => __( 'Google Analytics code', 'yit' ),
                'desc' => __( 'Here you can write all the code provided by Google Analytics', 'yit' ),
                'std' => apply_filters( 'yit_google-analytics-code_std', '' ),
            )
            /* === END HEADER === */
            
            /* === START MENU === */
            
            //Here the menu options
            
            /* === END MENU === */
        );
    }
}