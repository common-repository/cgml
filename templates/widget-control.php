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

 $inp_style='style="width: 200px"';
?>
<p>
<label for="cgml_widget_title">
   <?php _e('Title','cgml') ?>:<br/>
   <input type="text" name="cgml_widget_title" value="<?php echo stripcslashes($cgml_widget_options['title']) ?>" <?php echo $inp_style ?>/>
</label>
</p>
<p>
<label for="cgml_widget_show_all">
   <?php _e('Show all languages','cgml') ?>:
   <input type="checkbox" name="cgml_widget_show_all" value="1" <?php if($cgml_widget_options['show_all']) echo 'checked="checked"'?>/>
</label>
</p>
<p>
<label for="cgml_widget_strikethrough">
   <?php _e('Strikethrough missing languages','cgml') ?>:
   <input type="checkbox" name="cgml_widget_strikethrough" value="1" <?php if($cgml_widget_options['strikethrough']) echo 'checked="checked"'?>/>
</label>
</p>
<p>
<label for="cgml_widget_missing_text">
   <?php _e('No language text','cgml') ?>:
   <input type="text" name="cgml_widget_missing_text" value="<?php echo stripcslashes($cgml_widget_options['missing_text']) ?>" <?php echo $inp_style ?>/>
</label>
</p>
<p>
<label for="cgml_widget_powered">
   <?php _e('Show powered text','cgml') ?>:
   <input type="checkbox" name="cgml_widget_powered" value="1" <?php if($cgml_widget_options['powered']) echo 'checked="checked"'?>/>
</label>
</p>
