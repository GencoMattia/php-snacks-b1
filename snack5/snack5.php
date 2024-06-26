<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragraph = "Non c'è posto al mondo che io ami più della cucina. Non importa dove si trova, com'è fatta: purché sia una cucina, un posto dove si fa da mangiare, io sto bene. Se possibile le preferisco funzionali e vissute. Magari con tantissimi strofinacci asciutti e puliti e le piastrelle bianche che scintillano. Anche le cucine incredibilmente sporche mi piacciono da morire. Mi piacciono col pavimento disseminato di pezzettini di verdura, così sporche che la suola delle pantofole diventa subito nera, e grandi, di una grandezza esagerata. Con un frigo enorme pieno di provviste che basterebbero tranquillamente per un intero inverno, un frigo imponente, al cui grande sportello metallico potermi appoggiare. E se per caso alzo gli occhi dal fornello schizzato di grasso o dai coltelli un po' arrugginiti, fuori le stelle che splendono tristi. Siamo rimaste solo io e la cucina. Mi sembra un po' meglio che pensare che sono rimasta proprio sola. Nei momenti in cui sono molto stanca, mi succede spesso di fantasticare. Penso che quando verrà il momento di morire, vorrei che fosse in cucina. Che io mi trovi da sola in un posto freddo, o al caldo insieme a qualcuno, mi piacerebbe poterlo affrontare senza paura. Magari fosse in cucina! Prima che i Tanabe mi prendessero con loro, dormivo sempre in cucina. Non riuscivo mai a prendere sonno, e una volta che vagavo per le stanze all'alba alla ricerca di un angolino confortevole, scoprii che il posto migliore per dormire era ai piedi del frigo. Mi chiamo Mikage Sakurai. I miei genitori sono morti tutti e due giovani. Perciò sono stata allevata dai nonni. Il nonno è morto quando ho cominciato le medie. Da allora io e la nonna abbiamo vissuto da sole. Pochi giorni fa all'improvviso è morta la nonna. Sono rimasta di stucco. Se mi metto a pensare che la mia famiglia - che era lì, reale - nel giro di pochi anni è scomparsa così, una persona alla volta, mi sembra di non poter credere più a niente. Essere rimasta io sola in questa casa dove sono cresciuta, mentre il tempo continua a scorrere regolare, mi sconvolge.";

$splittedParagraphs = explode(".", $paragraph);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($splittedParagraphs as $phrase) { ?>
            <li>
                <?php echo $phrase ?>.
            </li>
        <?php } ?>
    </ul>
</body>
</html>