<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    
    <div class="text">
        <div class="scrollIndicator">
        <span class="icon"></span>
        <span>scroll</span>    
        </div>
        <div class="introduction">
            <h3>Infografik</h3>
            <h2>Alarm im Körper</h2>
            <p>So reagiert der Organismus bei Angst</p>
            <span class="author">von <?php the_cfc_field('autoren', 'autor'); ?></span>
        </div>
        
        <div class="longSnip">
        <h2>Gehirn</h2>    
        <p>Angst entsteht im Kopf. Als Schaltzentrale im Gehirn fungiert dabei die sogenannte Amygdala. Sie wird wegen ihrer Form auch Mandelkern genannt und ist für die emotionale Bewertung von Situationen verantwortlich.</p> 

        <p>Wenn wir zum Beispiel bei einem Spaziergang auf eine Schlange treffen, nehmen wir den Sinnesreiz über die Augen auf. Ohne dass wir Zeit zum Nachdenken haben, erhält die Amygdala Informationen darüber, dass wir uns in Gefahr befinden könnten und schlägt Alarm. Ehe wir uns bewusst sind, was eigentlich passiert, reagieren wir schon mit unseren Schutzreflexen, schließen schnell die Augenlider und nehmen eine Abwehrhaltung ein. Bereits diese erste unwillkürliche Reaktion kann uns das Leben retten.</p>

        <p>Erst kurze Zeit später gelangen die Informationen zur Hirnrinde und zum Hippocampus, einer Struktur im Gehirn, die für das Gedächtnis eine wichtige Rolle spielt. Erst jetzt wird uns durch einen Abgleich mit unseren Gedächtnisinhalten bewusst, dass es sich um eine Schlange handelt und dass Schlangen gefährlich sein können. Hatten wir in unserem Leben schon besonders negative Erlebnisse mit diesen Tieren, wird die Reaktion entsprechend stärker ausfallen.</p> 

        <p>Wenn das Großhirn nach Abwägung aller Informationen zu dem Schluss kommt, dass wirklich Gefahr besteht und es sich bei der Schlange nicht etwa um einen Stock handelt, gibt es nur zwei Optionen: „Fight or Flight“ – Kampf oder Flucht. In beiden Fällen ist eine sogenannte Stressreaktion nötig, für die der Körper schnell große Mengen an Energie bereitgestellt muss.</p>

        <p>Wieder kommt die Schaltzentrale der Angst, die Amygdala, ins Spiel. In einem ersten Schritt aktiviert sie über weitere Stationen das sympathische  Nervensystem, einen Nervenstrang, der entlang der Wirbelsäule verläuft und alle wichtigen Organe versorgt.</p>

        <p>Außerdem sorgt die Amygdala dafür, dass die Hirnanhangdrüse Botenstoffe ins Blut abgibt, die ihre Wirkung an den Nebennieren entfalten.</p>
        </div>
        
        <div class="longSnip trigger2">
        <h2>Nebennieren</h2>    
        <p>Die beiden Nebennieren sind kleine, aber sehr wichtige Organe. Sie sitzen wie Hütchen auf den Nieren und gliedern sich in Rinde und Mark.</p> 

        <p>Das Nebennierenmark gehört im Gegensatz zur Rinde zum sympathischen Nervensystem und wird blitzschnell durch Nervenimpulse vom Gehirn aus angesteuert. Bei Angst werden hier die Hormone Adrenalin und Noradrenalin ausgeschüttet.<p>

        <p>Die Nebennierenrinde produziert mehr als 40 verschiedene Botenstoffe. Bei Angst bildet sie vor allem Kortisol, das auch als Stresshormon des Körpers gilt. Die Nebennierenrinde wird nicht durch Nervenimpulse angesteuert, sondern durch Botenstoffe aus der Hirnanhangdrüse. Deren Transport im Blutstrom benötigt mehr Zeit als die Weiterleitung über Nervenbahnen, jedoch hält die Wirkung des Kortisols auch wesentlich länger an als die des Adrenalins.<p> 

        <p>Adrenalin, Noradrenalin und Kortisol sorgen dafür, dass der Körper optimal mit der Gefahrensituation umgehen kann. Die eingeleiteten Reaktionen haben allesamt das Ziel, entweder schnell fliehen oder die Gefahr direkt bekämpfen zu können. Diese als Stressreaktion bekannte Kaskade betrifft viele Organsysteme im Körper.<p>
        </div>
        
        <div class="empty">
        
        
        <?php $content = split_content(); ?>
        <?php $ids = ['herz','atmung','muskel','leber','fett','magen','augen','haut','geschlecht','immunsystem','schmerz'] ?>
        
        <?php for ($i = 0; $i < count($content); $i++) { ?>
        <div class="snippets <?php echo $ids[$i]; ?>">
        <div class="closeBtn"></div>    
        <?php echo $content[$i] ?>
        </div>    
        <?php } ?>
       </div>
        
     
        
        
    </div>
    <div id="svg"></div>
</article>
<?php // end article ?>