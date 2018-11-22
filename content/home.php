<h1>Nontacet - Percussion Ensemble</h1>
<?php

$refDate=new DateTime("2018-03-11 23:30:00", new DateTimeZone('Europe/Berlin'));
$nowDate=new DateTime('NOW', new DateTimeZone('Europe/Berlin'));

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
     
     src="./images/title_pause.jpg" 
     alt="Nontacet Titelbild"/>
</p>

<h3 class="bold">
Ab sofort werden wir vorerst keine neuen Anfragen mehr annehmen
</h3>

<p>Hintergrund dieser Entscheidung:</p>
<p>Wir spielen in dieser Besetzung schon seit einigen Jahren zusammen und das mit Überzeugung und viel Spass.
In dieser Zeit haben sich sowohl unsere privaten als auch beruflichen Umstände verändert.</p>
<p>Dies wirkt sich auf die verfügbare Zeit für Üben, Proben und Auftritte aus.
</p>
<p>Wenn wir für euch spielen, wollen wir mit der Leistung zufrieden sein und vor allem dass ihr gut unterhalten seid. Mit der Phase bis Januar 2019 haben wir wieder ein neues Programm erarbeitet, um das Repertoir zu erneuern. Das können wir so in absehbarer Zukunft leider nicht mehr leisten. 
</p>
<p></p>
<p>Aus diesen Gründen haben wir uns dazu entschieden, vorerst keine Termine mehr anzunehmen und uns musikalisch für eine Ruhepause zurück zu ziehen.
</p>

<p>Anfragen können nach wie vor gestellt werden, allerdings mit der Aussicht auf eine Absage.</p>
<p></p>





    
    
<article style="<?php echo $beforeStyle;  ?>">
    <h3>Neue Termine</h3>
    <p>
        Unsere erste Auslandsreise steht an...<br>
        Am <em>Sonntag, 11.März 2018</em> spielen wir in Contz-les-Bains, Frankreich ein Kirchenkonzert.
    </p>
        
    <p>Beginn ist <em>17 Uhr</em></p>

    <p>Dieser und weitere neue Konzertetermine unter <a href="?c=events">Termine</a> </p>
</article>