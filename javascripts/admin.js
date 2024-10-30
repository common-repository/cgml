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


function upgradeStyle(sel,val,path) {
   sel.style.backgroundImage='url('+path+val+'.png)';
   document.getElementById('cgml_options_new_key').value=val;
   document.getElementById('cgml_options_new_label').value=val.toUpperCase();
}

function openHelp() {
   document.getElementById('cgml-button-openHelp').style.display='none';
   document.getElementById('cgml-button-closeHelp').style.display='block';
   document.getElementById('cgml-help').style.display='block';
}

function closeHelp() {
   document.getElementById('cgml-button-openHelp').style.display='block';
   document.getElementById('cgml-button-closeHelp').style.display='none';
   document.getElementById('cgml-help').style.display='none';
}
