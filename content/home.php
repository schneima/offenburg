<h1>Nontacet - Percussion Ensemble</h1>
<?php

$refDate=new DateTime("2020-09-18 23:30:00");
$nowDate=new DateTime('NOW');

if($nowDate < $refDate)
    {
        $afterStyle="visibility: collapse; height: 0px;";
        $beforeStyle="visibility: visible;";
    }else{
        $afterStyle="visibility: visible;";
        $beforeStyle="visibility: collapse; height: 0px;";
    }
?>
        
<article style="<?php echo $beforeStyle;  ?>">
    <h3>Neue Termine</h3>
    <p>
        Es wird ein Pop-Up Konzert geben:<br>
        Am <em>Freitag, 18. September 2020, ab 18 Uhr</em>
    </p>
        
    <p>Weitere Informationen unter <a href="?c=events">Termine</a> </p>
</article>
<p>
<img id="TitleImage"
     
     src="./images/title.jpg" 
     alt="Nontacet Titelbild"/>
</p>
