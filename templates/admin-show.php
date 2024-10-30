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
<fieldset class="cgml-admin">
   <legend><?php _e('Available languages', 'cgml') ?></legend>
   <table cellspacing="0" cellpadding="0">
      <thead>
         <tr>
            <th>&nbsp;</th>
            <th>Clef</th>
            <th>Label</th>
            <th>URL</th>
            <th>&nbsp;</th>
         </tr>
      </thead>
      <tbody>
         <?php $oe=0 ?>
         <?php foreach($cgml_options as $key => $data) : ?>
         <tr class='<?php echo $oe?'odd':'even'; $oe = ($oe+1) % 2 ?>'>
            <td><img src="<?php echo CGML_PLUGIN_URL."/images/flags/".$data['flags'].".png" ?>" /></td>
            <td><?php echo $key ?></td>
            <td><?php echo stripcslashes($data['label']) ?></td>
            <td><?php echo $data['url'] ?></td>
            <td>
               <form method="POST">
                  <input type="submit" name="submit" value="<?php _e('Delete', 'cgml') ?>" />
                  <input type="hidden" name="cgml_options_delete" value="<?php echo $key ?>" />
               </form>
            </td>
         </tr>
         <?php endforeach ?>
      </tbody>
   </table>
</fieldset>
