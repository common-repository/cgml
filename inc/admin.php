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

   function cgml_plugin_action_links($links, $file) {
      if ($file == basename(CGML_PLUGIN_PATH).'/cgml.php') {
         $settings_link = '<a href="'.admin_url('options-general.php?page=CGML&version='.CGML_PLUGIN_VERSION).'">' . __('Settings') . '</a>';
         array_unshift( $links, $settings_link ); // before other links
      }
      return $links;
   }
   add_filter('plugin_action_links', 'cgml_plugin_action_links', 10, 2); 

   function cgml_admin_menu() {
      add_options_page('CGML', 'CGML', 8, 'CGML', 'cgml_admin_action');
   }
   add_action('admin_menu', 'cgml_admin_menu');

   function cgml_admin_action() {
      if($_GET['version'] != CGML_PLUGIN_VERSION) {
      ?>
      <script type="text/javascript">
         location.href='<?php echo admin_url('options-general.php?page=CGML&version='.CGML_PLUGIN_VERSION)?>';
      </script>
      <?php _e('Loading page','cgml') ?> <a href="<?php echo admin_url('options-general.php?page=CGML&version='.CGML_PLUGIN_VERSION)?>">CGML</a> ...
      <?php
         return;
      }

      /*** restore option ***/
      $FLASH=Array();

      $cgml_options = get_option('cgml_options');
      $cgml_options_activate = get_option('cgml_options_activate');

      if (!is_array($cgml_options))
         $cgml_options = Array();

      /*** add a new langage ***/
      if (count($_POST)) {
         if (isset($_POST['cgml_options_new'])) {
            $cgml_options_new = $_POST['cgml_options_new'];

            $cgml_options[$cgml_options_new['key']] = Array (
               'flags' => $cgml_options_new['flags'],
               'label' => $cgml_options_new['label'],
               'url' => $cgml_options_new['url'],
            );

            $FLASH['info']=__("Language added !","cgml");
         }
        
         if (isset($_POST['cgml_options_delete'])) {
            unset($cgml_options[$_POST['cgml_options_delete']]);

            $FLASH['info']=__("Language deleted !","cgml");
         }
         if (isset($_POST['cgml_options_activate'])) {
            $cgml_options_activate = $_POST['cgml_options_activate'];

            if ($cgml_options_activate) {
               $FLASH['info']=__("Plugin activated !","cgml");
            }else{
               $FLASH['info']=__("Plugin disactivated !","cgml");
            }
         }

         unset($cgml_options[""]);
         update_option('cgml_options', $cgml_options);
         update_option('cgml_options_activate', $cgml_options_activate);
      }

      include CGML_PLUGIN_PATH . '/templates/admin-header.php';
      include CGML_PLUGIN_PATH . '/templates/admin-activate.php';
      include CGML_PLUGIN_PATH . '/templates/admin-form.php';
      include CGML_PLUGIN_PATH . '/templates/admin-show.php';
      include CGML_PLUGIN_PATH . '/templates/admin-help.php';
      include CGML_PLUGIN_PATH . '/templates/admin-sponsors.php';
      include CGML_PLUGIN_PATH . '/templates/admin-footer.php';
   }

   function cgml_admin_css() {
      if (isset($_GET['page']) && $_GET['page'] == 'CGML') {
         wp_enqueue_style('cgml-admin',CGML_PLUGIN_URL . '/styles/admin.css');
      }
   }
   add_action('admin_print_styles', 'cgml_admin_css');

   function cgml_admin_js() {
      if (isset($_GET['page']) && $_GET['page'] == 'CGML') {
         wp_enqueue_script('cgml-admin', CGML_PLUGIN_URL . '/javascripts/admin.js');
      }
   }
   add_action('admin_print_scripts', 'cgml_admin_js');

   function cgml_post_css() {
      wp_enqueue_style('cgml',CGML_PLUGIN_URL . '/styles/post.css');
   }
   add_action('wp_print_styles', 'cgml_post_css');

   function cgml_admin_notice() {
      $cgml_options_activate = get_option('cgml_options_activate');
      if (!$cgml_options_activate && !(isset($_GET['page']) && $_GET['page'] == 'CGML')){
         include CGML_PLUGIN_PATH . '/templates/admin-notice.php';
      }
   }
   add_action( 'admin_notices', 'cgml_admin_notice');

   function cgml_admin_activate() {
      update_option('cgml_options_activate', 0);
   }
   register_activation_hook(basename(CGML_PLUGIN_PATH).'/cgml.php', 'cgml_admin_activate');

