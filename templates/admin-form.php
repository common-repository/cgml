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
?>
<form method="POST">
   <fieldset class="cgml-admin">
      <legend><?php _e('Add language', 'cgml') ?></legend>

      <label for="cgml_options_new[flags]">
         <?php _e('Flags', 'cgml')?>:&nbsp;
      </label>
      <select name="cgml_options_new[flags]" onkeyup="upgradeStyle(this, this.value,'<?php echo CGML_PLUGIN_URL ?>/images/flags/')" onchange="upgradeStyle(this, this.value,'<?php echo CGML_PLUGIN_URL ?>/images/flags/')" style="background:no-repeat; background-position: 1px 2px; vertical-align: bottom; padding: 0px 0px 2px 28px;">
         <option>&nbsp;</option>
         <?php foreach(glob(CGML_PLUGIN_PATH."/images/flags/*.png") as $flagimg) :
            $flag = str_replace(".png","",basename($flagimg));
         ?>
         <option value="<?php echo $flag ?>" style="background:url(<?php echo CGML_PLUGIN_URL ?>/images/flags/<?php echo $flag ?>.png) no-repeat; background-position: 1px 2px; vertical-align: bottom; padding: 0px 0px 2px 28px;"><?php echo strtoupper($flag) ?></option>
         <?php endforeach ?>
      </select>

      <label for="cgml_options_new[key]">
         <?php _e('Custom Key', 'cgml')?>:&nbsp;
      </label>
      <input type="text" id="cgml_options_new_key" name="cgml_options_new[key]" value="" size="2"/>

      <label for="cgml_options_new[label]">
         <?php _e('Language label', 'cgml')?>:&nbsp;
      </label>
      <input type="text" id="cgml_options_new_label" name="cgml_options_new[label]" value="" size="30"/>

      <label for="cgml_options_new[url]">
         <?php _e('URL', 'cgml')?>:&nbsp;
      </label>
      <input type="text" name="cgml_options_new[url]" value="http://" size="30"/>

      <label>&nbsp;</label>
      <input type="submit" class="cgml-submit" name="submit" value="<?php _e('Validate', 'cgml')?>"/>
   </fieldset>
</form>
