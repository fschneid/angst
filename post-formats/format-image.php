<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    
    <div class="text">
        <div class="introduction snippets active">
            <h3>Infografik</h3>
            <h2>Alarm im Körper</h2>
            <p>So reagiert der Organismus bei Angst</p>
        </div>
        
        <?php $content = split_content(); ?>
        <?php $ids = ['herz','atmung','muskel','leber','fett','magen','augen','haut','geschlecht','immunsystem','schmerz'] ?>
        
        <?php for ($i = 0; $i < count($content); $i++) { ?>
        <div class="snippets <?php echo $ids[$i]; ?>">
        <div class="closeBtn"></div>    
        <?php echo $content[$i] ?>
        </div>    
        <?php } ?>
       
        
       
        
      <!--  <div class="atmung snippets">
            <h2>Atmung</h2>
            <p>Die Erweiterung der Bronchien und die schnelle Atemfrequenz mit Fokus auf die Einatmung sorgen dafür, dass genug Sauerstoff in die Blutbahn gelangt. Nur mit ihm kann der Körper die Nährstoffe Zucker und Fett effektiv in Energie umsetzen.</p>
        </div>
        <div class="herz snippets">
            <h2>Herz-Kreislauf-System</h2>
            <p>Das Herz arbeitet schneller und kräftiger. Dadurch wird in kurzer Zeit mehr Blut in den Organismus gepumpt. Es schlägt uns sprichwörtlich „bis zum Hals“. Die Blutgefäße von Gehirn und Muskeln werden weit gestellt, damit die Organe besser durchblutet werden und mehr Leistung bereitstellen können. Gleichzeitig werden die Blutgefäße des Verdauungstrakts und der Körperperipherie eng gestellt, weil das Blut andernorts nötiger gebraucht wird. Deshalb haben wir bei Angst kalte Hände und Füße. </p>
        </div>
        <div class="magen snippets">
            <h2>Magen-Darm-Trakt</h2>
            <p>Die Verdauungstätigkeit wird heruntergefahren. Das beginnt schon bei den Speicheldrüsen. Dort wird die Speichelproduktion gehemmt, was sich durch einen trockenen Mund bemerkbar macht. Außerdem kann es zu plötzlichem Harn- oder Stuhldrang und Durchfällen kommen. Das liegt daran, dass in Stresssituationen der Einfluss des Sympathikus überwiegt und es zu einem Tonusverlust der Darm- und Blasenmuskulatur führt – die Organe erschlaffen und wir machen uns vor Angst in die Hose.</p>
        </div>-->
        
        
        
        
        
    </div>
    <div id="svg"></div>
</article>
<?php // end article ?>