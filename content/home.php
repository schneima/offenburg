<h1>Nontacet - Percussion Ensemble</h1>
<?php

$refDate=new DateTime("2020-01-06 23:30:00");
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
        
<p>
<img id="TitleImage"
     
     src="./images/title.jpg" 
     alt="Nontacet Titelbild"/>
</p>
<article style="<?php echo $beforeStyle;  ?>">
    <h3>Neue Termine</h3>
    <p>
        Nach unserer Pause steht vorerst ein neuer Auftritt an. Schonmal vormerken:<br>
        Am <em>Montag, 06. Januar 2020</em> gestalten wir zusammen mit musikalsichen Freunden ein Kirchenkonzert.
    </p>
        
    <p>Weitere Informationen unter <a href="?c=events">Termine</a> </p>
</article>