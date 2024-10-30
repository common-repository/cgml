<?php
   /*
   This file is part of CGML.

   CGML is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   CGML is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with CGML.  If not, see <http://www.gnu.org/licenses/>.
   */

   /*
   Plugin Name: CGML
   Plugin URI: http://blog.celogeek.com/wordpress/plugins-wordpress/cgml-celogeek-multi-language-wordpress-plugins/
   Description: CGML (Celogeek Multi Languages), link multi wordpress blog together
   Version: 0.6.2
   Author: Celogeek
   Author URI: http://blog.celogeek.com
   Disclaimer: Use at your own risk. No warranty expressed or implied is provided.
   */


   /* Define path to project */
   if (defined('CGML_PLUGIN_VERSION')) return;

   define('CGML_PLUGIN_VERSION','0.6.2');
   define('CGML_PLUGIN_PATH',dirname(__FILE__));
   define('CGML_PLUGIN_URL',WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)));

   /* Translate */
   include CGML_PLUGIN_PATH . '/inc/gettext.php';

   /* Admin */
   include CGML_PLUGIN_PATH . '/inc/admin.php';

   /* Widget */
   include CGML_PLUGIN_PATH . '/inc/widget.php';

   /* Post */
   include CGML_PLUGIN_PATH . '/inc/post.php';

