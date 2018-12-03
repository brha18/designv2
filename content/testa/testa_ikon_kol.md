---
title: "Testa 3 kolumner"


views:

  tradgard:
      region: sidebar-left
      template: anax/v2/block/default
      data:
          meta:
              type: single
              route: block/om-tradgard  

  kursrepo:
      region: sidebar-right
      template: anax/v2/block/default
      data:
          meta:
              type: single
              route: block/om-kursrepo

  redovisa:
      region: sidebar-right
      template: anax/v2/block/default
      data:
          meta:
              type: single
              route: block/om-redovisa

  byline:
      region: main
      template: anax/v2/block/default
      sort: 5
      data:
          meta:
              type: single
              route: block/byline


---

Detta är en test-sida med ikoner och kolumner i kursen "design".
==============================================

Bilder

[FIGURE src="image/design-kmom02-regioner.png?w=50%" class="right" caption="Regioner"]

Ikoner

<i class="fas fa-stroopwafel"></i>     <i class="fas fa-stroopwafel fa-spin"></i>

<i class="fas fa-spinner fa-spin fa-3x"></i>

<i class="fas fa-hand-pointer fa-3x"></i>    <i class="fas fa-hand-pointer fa-3x fa-rotate-90"></i>

<i class="fab fa-font-awesome fa-4x fa-rotate-90"></i>   <i class="fab fa-font-awesome fa-6x fa-rotate-2700"></i>

<ul class="fa-ul">
  <li><span class="fa-li" ><i class="fas fa-check-square"></i></span>List icons can</li>
  <li><span class="fa-li"><i class="fas fa-check-square"></i></span>be used to</li>
  <li><span class="fa-li"><i class="fas fa-spinner fa-pulse"></i></span>replace bullets</li>
  <li><span class="fa-li"><i class="fas fa-square"></i></span>in lists</li>
</ul>

Denna webbplats är byggd i HTML, CSS och Markdown och är en del i kursen design.
Detta innehåll är skrivet i **markdown** och du hittar innehållet i filen `content/testa_3kol.md.md`.

### Detta är skoj men vad visade de på TV igår?###
