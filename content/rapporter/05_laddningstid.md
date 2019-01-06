Laddningstider - rapport kmom05
=========================

###Val av webbplatser###
Jag har valt samma webbplatser som i uppgiften i kmom04, de tre partierna i det röda blocket, dvs Socialdemokraterna (S), Vänsterpartiet (V) och Miljöpartiet (MP). Jag tyckte att Vs sida verkade mer på alerten än de övrigas. Hur är det med laddningstiden för deras sidor i förhållande till de övrigas?

<table class="partier">
    <tbody style="font-size: medium;">
        <tr style="box-shadow: 0 0.0; vertical-align: top;">        
            <td> [FIGURE src="image/190105_Socialdemokraterna.jpg?w=230" class="left" alt="Socialdemokraterna" (https://www.socialdemokraterna.se) caption="[Socialdemokraterna](https://www.socialdemokraterna.se)"]
             </td>
            <td> [FIGURE src="image/190105_Vansterpartiet.jpg?w=230" class="left" alt="Vänsterpartiet" (https://www.vansterpartiet.se/) caption="[Vänsterpartiet](https://www.vansterpartiet.se/)"]
             </td>
            <td> [FIGURE src="image/190105_Miljopartiet.jpg?w=230" class="left" alt="Miljöpartiet" (https://www.mp.se/) caption="[Miljöpartiet](https://www.mp.se/)"]
             </td>
        </tr>    
    </tbody>
</table>

Alla data finns i [ett excelark](../theme/src/Design_kmom05_laddningstider.xlsx)
###Metod###
Jag  använde DevTools i Firefox för att i tre mätningar ta reda på de olika nätverksparameterarna. Jag tittade även på bilder i en mätning. För hastighetsmätningarna i mobil resp. dator använde jag [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/). Även här gjorde jag tre mätningar. PagSpeed Insights anger dessa värden för snabb:90–100, genomsnittlig: 50–89 resp. långsam: 0–49.

Alla mätdata har antecknats i ett [excelark](https://docs.google.com/spreadsheets/d/1yZ9YO2zaC98jGdnuzVVsVFC0YtPVeLm9GQnSAa6uOQg/edit#gid=0). Där finns även beräkningar av medelvärden.

De förslag på förbättringar som jag redovisar nedan har jag hämtat från PagSpeed Insights.

Vidare har jag använt Screenshot i Firefox för att göra de snapshots som finns med. Jag valde att spara med valet "Save full page".

Snapshotsen är ganska höga. Eftersom själva bildinnehållet inte är det viktiga och bilderna är höga har jag gjort dem mycket mindre och placerat dem bredvid varandra. Resultaten har jag placerat i en tabell och färglagt de värden som PageSpeed anser vara snabba resp. långsamma.

Jag har också inkluderat en bild på ett exceldiagram som visar resultaten. Jag testade först med den .mht-fil som jag skapade i excel men lyckades inte få den att visas sig.
###Resultat####
Pagespeed Insight (snitt av tre mätningar för varje sida) resp. Firefox Devtools Network (snitt av tre mätningar för varje sida):
<table class="laddningstid">
    <tbody style="font-size: medium;">
        <tr style="box-shadow: 0 0.0; ">
            <td> Parti </td>
            <td> Sida </td>
            <td> PageSpeed </td>
            <td>  </td>
            <td>  </td>
            <td> DevTools </td>
            <td>  </td>
            <td>  </td>        
        </tr>
        <tr style="box-shadow: 0 0.1em gray; ">
            <td>  </td>
            <td>  </td>
            <td> Mobil </td>
            <td> Dator </td>
            <td>  </td>
            <td> Laddningstid </td>
            <td> Antal resurser </td>
            <td> Storlek </td>        
        </tr>
        <tr  style="box-shadow: 0 0 0;">
            <td> S </td>
            <td> 1:a sidan </td>
            <td style="background-color: #ef6c6c";> 44,33 </td>
            <td style="background-color: #53af53";> 91,00 </td>
            <td>  </td>
            <td> 7,30 </td>
            <td> 47,67 </td>
            <td> 172,56 </td>
        </tr>
        <tr  style="box-shadow: 0 0 0;">    
            <td>   </td>
            <td> Vår politik </td>
            <td style="background-color: #ef6c6c";> 47,67 </td>
            <td style="background-color: #53af53";> 96,00 </td>
            <td>  </td>
            <td> 7,12 </td>
            <td> 83,67 </td>
            <td> 400,93 </td>
        </tr>
        <tr style="box-shadow: 0 0.1em gray; ">    
            <td>   </td>
            <td> Engagera dig </td>
            <td> 67,33 </td>
            <td style="background-color: #53af53";> 100,00 </td>
            <td>  </td>
            <td> 7,43 </td>
            <td> 43,33 </td>
            <td> 849,09 </td>
        </tr>
        <tr style="box-shadow: 0 0.0; ">
            <td> V </td>
            <td> 1:a sidan </td>        
            <td> 56,33 </td>
            <td style="background-color: #53af53";> 100,00 </td>
            <td>  </td>
            <td> 6,62 </td>
            <td> 70,67 </td>
            <td> 162,85 </td>
        </tr>
        <tr  style="box-shadow: 0 0 0;">    
            <td>   </td>
            <td> Vår politik </td>
            <td> 65,67 </td>
            <td style="background-color: #53af53";> 96,00 </td>
            <td>  </td>
            <td> 3,81 </td>
            <td> 59,33 </td>
            <td> 571,49 </td>
        </tr>
        <tr style="box-shadow: 0 0.1em gray; ">    
            <td>   </td>
            <td> Engagera dig </td>
            <td style="background-color: #ef6c6c";> 37,67 </td>
            <td style="background-color: #53af53";> 96,33 </td>
                    <td>  </td>
            <td> 12,57 </td>
            <td> 62,67 </td>
            <td> 315,53 </td>
        </tr>
        <tr style="box-shadow: 0 0.0; ">
            <td> MP </td>
            <td> 1:a sidan </td>
            <td style="background-color: #ef6c6c";> 38,33 </td>
            <td style="background-color: #53af53";> 96,33 </td>
            <td>  </td>
            <td> 12,57 </td>
            <td> 62,67 </td>
            <td> 313,53 </td>
        </tr>
        <tr  style="box-shadow: 0 0 0;">    
            <td>   </td>
            <td> Vår politik </td>
            <td> 51,67 </td>
            <td style="background-color: #53af53";> 100,00 </td>
            <td>  </td>
            <td> 12,26 </td>
            <td> 44,67 </td>
            <td> 144,93 </td>
        </tr>
        <tr style="box-shadow: 0 0.1em gray; ">    
            <td>   </td>
            <td> Engagera dig </td>
            <td> 88,33 </td>
            <td style="background-color: #53af53";> 100,00 </td>
            <td>  </td>
            <td> 6,39 </td>
            <td> 31,00 </td>
            <td> 833,31 </td>
        </tr>    
    </tbody>
</table>

[FIGURE src="image/Design_kmom05_diagram.png?w=90%" float="left" alt="Diagram"]


###Analys###
####PageSpeed###
Alla de tre partiernas webbplatser är snabba på datorn, för alla mätta sidor, enligt PageSpeeds skala.
På mobilen är det sämre. Det borde vara angeläget att den första sidan är snabb. Där är både S och MP långsamma. De är bättre, men inte snabba, på den sida där man kan bli medlem.
####DevTools###
Den kortaste laddningstiden hade sidan V/Vår politik. Den längsta hade V/Engagera dig och MP/1:a sidan.
####Rangordning###
S har de sämsta värdena enligt PageSpeed. V har de bästa värdena enligt DevTools. Där har MP dåliga värden. MP borde kunna ha kortare svarstider då de laddar färre resurser och inte så stora.

Jag anser att V har den bästa och MP den sämsta sidan. Detta maa av kort/lång svarstid för första sidan.
#####Åtgärder som kan förbättra värdena##
* Skicka bilder i modernare bildformat, dvs inte t.ex. PNG
* Använda bilder med rätt storlek
* Skjut upp CSS som inte används
* Skjut upp inläsning av bilder som inte visas på skärmen
###Referenser###
[Socialdemokraterna](https://www.socialdemokraterna.se)
[Vänsterpartiet](https://www.vansterpartiet.se/)
[Miljöpartiet](https://www.mp.se/)
[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)
[Firefox Developer Tools](https://developer.mozilla.org/en-US/docs/Tools)
####Övriga länkar###
Jag hittade ett verktyg för att [Omvandla bit, byte, KB, MB, GB och TB](https://dataverktyg.se/bitbyte).
##Övrigt##
Britt Hallin har jobbat med den här rapporten.

<code style="font-size: small;">Detta innehåll är skrivet i markdown och du hittar innehållet i filen `content/rapport/05_laddningstid.md`.</code>
