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

   function cgml_widget() {
      if (!function_exists('register_sidebar_widget')) {
         return;
      }

      cgml_init_locale();

      function cgml_widget_sidebar($args) {
         extract($args);
         $cgml_options = get_option('cgml_options');
         $cgml_options_activate = get_option('cgml_options_activate');
         $cgml_widget_options = get_option('cgml_widget_options');
         if (!$cgml_options_activate)
         return;

         $cgml_lang=Array();
         if(is_singular()) {
            $cf = get_post_custom(get_the_ID());
            $cf_cgml = $cf['cgml'];
            if(is_array($cf_cgml)) {
               foreach($cf_cgml as $key => $data) {
                  $kv = split(':',$data);
                  $cgml_lang[$kv[0]] = $kv[1];
               }
            }
         }
         include CGML_PLUGIN_PATH . '/templates/widget-sidebar.php';
      }
      register_sidebar_widget(__('Celogeek Multi Languages','cgml'),'cgml_widget_sidebar');

      function cgml_widget_control() {
         $cgml_widget_options = get_option('cgml_widget_options');
         if(!is_array($cgml_widget_options) || !is_active_widget('cgml_widget_sidebar')) {
            $cgml_widget_options = Array( 
               'title' => __('Other Languages','cgml'),
               'show_all' => TRUE,
               'strikethrough' => TRUE,
               'missing_text' => __('No other languages available','cgml'),
               'powered' => TRUE
            );
            update_option('cgml_widget_options',$cgml_widget_options);
         }

         if(count($_POST)) {
            $cgml_widget_options['title']=$_POST['cgml_widget_title'];
            $cgml_widget_options['show_all']=isset($_POST['cgml_widget_show_all']) && $_POST['cgml_widget_show_all']==1;
            $cgml_widget_options['strikethrough']=isset($_POST['cgml_widget_strikethrough']) && $_POST['cgml_widget_strikethrough']==1;
            $cgml_widget_options['missing_text']=$_POST['cgml_widget_missing_text'];
            $cgml_widget_options['powered']=isset($_POST['cgml_widget_powered']) && $_POST['cgml_widget_powered']==1;
            update_option('cgml_widget_options',$cgml_widget_options);
         }

         include CGML_PLUGIN_PATH . '/templates/widget-control.php';
      }
      register_widget_control(__('Celogeek Multi Languages','cgml'),'cgml_widget_control',150,null);
   }
   add_action('widgets_init','cgml_widget');

