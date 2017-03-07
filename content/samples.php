<?php
require_once './includes/utils.class.php';
?>
<br><br>
<h2>Hörproben</h2>

<table class="repertoire">
  <col width="40%">
  <col width="40%">
  <col width="20%">
<tr>
	<th>Stück</th>
	<th>Anhören</th>
	<th>Größe</th>
</tr>		

<?php

$folder='./media/samples';
$fileType='mp3';
$files = Utils::ReadFilesInFolder($folder,$fileType);
foreach ($files as $file) {
    $fullFileName="$folder/$file";
    $size = Utils::GetFileSizeMB($fullFileName);
    $fileNameParts = explode('_', $file);
    $printableFileName = $fileNameParts[0];
    
    echo "    <tr>
	<td>$printableFileName</td>
	<td><a href=\"$fullFileName\" target=\"_blank\">$printableFileName</a></td>
	<td>$size</td>
</tr>";
    
}

/*

    
    //
    
    /*
    echo "    <tr>
	<td>$printableFileName</td>
	<td><a href=\"$fullFileName\" target=\"_blank\">$printableFileName</a></td>
	<td>$size</td>
</tr>	";	
}
*/
?>
</table>