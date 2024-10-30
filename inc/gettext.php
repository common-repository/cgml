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


   function cgml_init_locale() {
      if (!defined('WP_PLUGIN_DIR')) {
         load_plugin_textdomain('cgml', str_replace(ABSPATH, '',dirname(dirname(__FILE__).'/i18n')));
      }else{
         load_plugin_textdomain('cgml', false, basename(dirname(dirname(__FILE__))).'/i18n');
      }
   }
   add_filter('init', 'cgml_init_locale');
