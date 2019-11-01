<h1>Nontacet - Percussion Ensemble</h1>
<?php

$refDate=new DateTime("2018-03-11 23:30:00");
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
        Unsere erste Auslandsreise steht an...<br>
        Am <em>Sonntag, 11.März 2018</em> spielen wir in Contz-les-Bains, Frankreich ein Kirchenkonzert.
    </p>
        
    <p>Beginn ist <em>17 Uhr</em></p>

    <p>Dieser und weitere neue Konzertetermine unter <a href="?c=events">Termine</a> </p>
</article>