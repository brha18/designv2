Analys valfri webbplats --  rapport kmom10, uppdrag 2
=========================

####Uppdrag 2: Webbplatsdesign klasparknas.se####
Jag vill se hur bra en ny webbplats är på responsivitet och laddningstider men även hur sökbar den är.
Webbplatsen [*klasparknas.se*](https://klasparknas.se/) är ny och "ägaren" Klas Parknäs vill ha synpunkter. Klas är konstnär så platsen har många bilder.


<h5>Responsiv?</h5>
Jag har kontrollerat på vilket sätt platsen är responsiv genom att göra fönstret mindre och genom att använda verktyget som finns i Firefox.

* Vid ca 990 försvinner rubrikraden, då visas en responsiv meny istället. Sidebaren flyttas till längst ner på sidan.

* Vid ca 700 börjar flashbildens yttersidor försvinna. Bildkollage och texter trycks ihop, textstorleken är densamma som tidigare.

<h5>Laddningstider</h5>
För att ta reda på laddningstiden har jag använt [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/?hl=sv). PageSpeed Insights ger både data om nuläget och tips om vad som kan åtgärdas och hur. Tangentkombinationen "shift-ctrl-r" gör att webbläsaren inte använder sina cachade objekt.

Webbplatsen tar tid att ladda, man har valt att visa det, inte med ett timglas, utan med fyra små kvadrater som dansar runt.


<table>
    <tbody style="font-size: medium;">
    <tr>
        <th>Mobil</th>
        <th>Dator</th>
        <tr>
            <td>Figuren nedan visar att mobilen är långsam</td>
            <td>Figuren nedan visar att datorn är genomsnittlig</td>
        </tr>
    </tr><tr>
        <td>[FIGURE src="./image/PS_mobil.png?w=800&aro" alt="labbdata_mobil PageSpeed Insights"]</td>
        <td>[FIGURE src="./image/PS_dator.png?w=800&aro" alt="labbdata_dator PageSpeed Insights"]</td>
    </tr>
    <tr>
        <td>Figuren nedan visar vari det brister för mobilen. Inget värde är ok.</td>
        <td>Figuren nedan visar vari det brister för datorn. Värdena är bättre än för mobilen.</td>
    </tr>
    <tr>
        <td>[FIGURE src="./image/PS-data_mobil.png?w=800&aro" alt="labbdata_1 PageSpeed Insights"]</td>
        <td>[FIGURE src="./image/PS-data_dator.png?w=800&aro" alt="labbdata_2 PageSpeed Insights"]</td>
    </tr>
    <tr>
        <td>PageSpeed Insights förslag för mobilen</td>
        <td>PageSpeed Insights förslag för datorn</td>
    </tr>
    <tr>
        <td>[FIGURE src="./image/PS-slutsats_mobil.png?w=800&aro" alt="labbdata_1 PageSpeed Insights"]</td>
        <td>[FIGURE src="./image/PS-slutsats_dator.png?w=800&aro" alt="labbdata_2 PageSpeed Insights"]</td>
    </tr>
</table>

Förbättringsmöjligheterna är många för mobilen men också för datorn. Här ett litet urval

* Genom att använda bilder med rätt storlek så minskas mobildataförbrukningen och inläsningstiden förbättras.

* Genom att skjuta upp inläsningen av bilder som inte visas på skärmen så kan en databesparing göras med 497kB för mobil resp. 283kB för dator göras.

<h5>Hur väl syns webbplatsen?</h5>

Jag har räknat antal träffar på 'parknäs' på google med Firefox på sidorna 1-5. Det är möjligt att det hade blivit fler träffar om jag sökt på 'klas'.
<table class="antHits">
    <tbody style="font-size: medium;">
    <tr>
        <th>Webbläsare</th><th>Antal träffar</th><th>Träff på sid/plats</th><th>Egen sida</th><th>Index sida</th>
        <th>Första sida</th><th>Rubrik</th>
    </tr>
    <tr>
        <td>Webbläsare</td><td>Antal träffar</td><td>Träff på sid/Plats</td><td>Egen sida</td><td>Index sida</td>
        <td>Första sida</td><td>Rubrik</td>
    </tr>
    <tr>
        <td>Firefox</td><td>Antal träffar</td><td>1/8</td><td>Nej</td><td></td><td>-</td><td>-</td><td></td>
    </tr>
    <tr>
        <td>Firefox</td><td>Antal träffar</td><td>1/9</td><td>Ja</td><td>Ja</td><td>Aktuellt</td><td>6 st H2, 1 st H3</td>
    </tr>
    <tr>
        <td>Firefox</td><td>Antal träffar</td><td>0</td><td>Ja</td><td>Nej</td><td>Originalmålningar</td><td>6 st H2, 5 st H3</td>
    </tr>
    <tr>
        <td>Firefox</td><td>Antal träffar</td><td>0</td><td>Ja</td><td>Nej</td><td>Kontakt</td><td>7 st H2</td>
    </tr>
</table>
<h5>Sökbarhet (SEO)</h5>

Jag har kontrollerat sökbarheten genom att se hur många H1-H3 och länkar som finns.

Jag har inte hittat några H1-rubriker, bara H2 och H3. H2 finns i sidrubriken och i högra sidebaren. Denna innehåller en bild, en sökfunktion, Klas senaste och tidigare inlägg och ett bildspel. Det finns mellan 20 och 30 länkar inom webbplatsen och runt 10 ut från webbplatsen. Jag behöver mer kunskap för att avgöra om detta är tillräckligt för att synas i bruset.

<h6>Mer om SEO</h6>

[How Google Crawls and Indexes Web Pages](https://www.quicksprout.com/2014/12/19/how-google-crawls-and-indexes-web-pages/?display=wide) ger fler tips på bättre sökbarhet riktade till dem som utvecklar.

SEO-testet [Testa din landningssidas potential att synas på Google](https://www.readydigital.se/seo-byra/) ger följande resultat för klasparknas.se
[FIGURE src="./image/SEO-test.png?w=400&aro" alt="SEO-test"]


<h5>Slutsatser</h5>
Jag tycker att responsiviteten är hyfsad, menylänkarna syns hela tiden. Men sökbarheten är dålig. Det kan bl.a bero på att sidorna saknar H1-rubriker och är sparsamma med H2- och H3-rubriker. Laddningstiderna är dåliga, speciellt på mobilen.


<code style="font-size: small;">Detta innehåll är skrivet i markdown och du hittar innehållet i filen `content/redovisning/10_design-och-webbplatser.md`.</code>
