<?php
/*
Plugin Name: Emfluence Gravity Forms
Description: Send form data to the Emfluence CRM using Gravity Form's Add-on Framework
version: 0.6.3
Author: Sage Age
Author URI: https://www.sageagestratgies.com
License: GPLv3 or later
Text Domain: emfluence-gform
Domain Path: /languages

---------------------------------------------------------------------

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

*/

define( 'EMFLUENCE_GFORM_VERSION', '0.6.3' );
 
add_action( 'gform_loaded', array( 'Emfluence_Gform_Bootstrap', 'load' ), 5 );

class Emfluence_Gform_Bootstrap {
 
    public static function load() {
 
        if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
            return;
        }
 
        require_once( 'class-emfluence-gform.php' );

        GFAddOn::register( 'EmfluenceGform' );
    }

}

function emfluence_gform() {
    return EmfluenceGform::get_instance();
}
