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

   function cgml_languages($post_id,$prefix='',$suffix='') {
     if (empty($post_id)) {
        return;
     }
     $result = '';
     $cf = get_post_custom($post_id);
     $cf_cgml = $cf['cgml'];

     if (is_array($cf_cgml)) {
        $cgml_options = get_option('cgml_options');
        $cgml_options_activate = get_option('cgml_options_activate');
        if (!$cgml_options_activate) {
           return;
        }

        foreach($cf_cgml as $key => $data) {
           $kv = split(':',$data);
           if (!empty($cgml_options[$kv[0]])) {
              $options = $cgml_options[$kv[0]];
              $result .= '<a href="'.$options['url'].'?p='.$kv[1].'"><img src="'.CGML_PLUGIN_URL."/images/flags/".$options['flags'].'.png" title="'.$options['label'].'" alt="'.$options['label'].'"/></a> ';
           }
        }
     }

     if ($result != '') {
        $result = $prefix.$result.$suffix;
     }
     echo $result;
  }
