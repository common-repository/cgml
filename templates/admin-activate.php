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
   <fieldset class="cgml-admin" <?php if(!$cgml_options_activate) {?>style="border-color: red"<?php } ?>>
      <legend <?php if(!$cgml_options_activate) {?>style="color: red"<?php } ?>><?php _e('Activate the plugin', 'cgml') ?></legend>

      <label for="cgml_options_new[flags]">
         <?php _e('Activate', 'cgml')?>:&nbsp;
      </label>
      <select name="cgml_options_activate">
         <option value="0" <?php if(!$cgml_options_activate) echo "selected" ?>><?php _e('no','cgml') ?></option>
         <option value="1" <?php if($cgml_options_activate) echo "selected" ?>><?php _e('yes','cgml') ?></option>
      </select>
      <label>&nbsp;</label>
      <input type="submit" class="cgml-submit" name="submit" value="<?php _e('Validate', 'cgml')?>"/>
   </fieldset>
</form>
