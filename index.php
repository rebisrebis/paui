<?php
include('config.php');
include('func/parsedown.php');
$Parsedown = new Parsedown();
$pag = $_GET['p'];
if($pag == ''){
 $pag = 'inicio';
 echo '<title>'.$title.'</title>';
} else {
 echo '<title>'.$title.' - '.str_replace("_", " ", $pag).'</title>';
}
$pagmd = $pag . '.md';
$file = implode('', file($pagmd));
echo $tagshtml.'<link rel="stylesheet" href="css/'.$style.'"><div>';
$files  = scandir('.');
asort($files);
echo '<font align="right"><a href="?p=inicio">Inicio</a>';
for($i = 0; $i < count($files); ++$i) {
 if (substr($files[$i], -3)=='.md'){
  if ($files[$i] == 'inicio.md'){
  } else {
  echo ' · <a href="?p='.substr($files[$i], 0, -3).'">'.ucfirst(str_replace("_", " ",substr($files[$i], 0, -3))).'</a> ';
  }
 }
}

echo '</font></div><div><center><h1><br>'.$title.'</h1>'.$subtitle.'<br><br></center></div><div>';
echo $Parsedown->text($file);
if($file == ''){
 echo '<b>'.str_replace("_", " ", $pag).'</b><br><br><i>'.$e404.'</i></div><br>';
}

echo '</div><div>';
echo $foot.' - sitegen w/ PAUI';
echo '</div>';


//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.

?>