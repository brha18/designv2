---
---
Testar
=========================

Detta innehåll är skrivet i markdown och du hittar innehållet i filen `content/testa/00_index.md`.


<h6>Min första 'egna' SVG</h6>

Inspiration från [w3schools](https://www.w3schools.com/graphics/svg_circle.asp)

<svg width="110" height="120">
   <circle cx="50" cy="50" r="45" stroke="green" stroke-width="4" fill="yellow" />
   <text x="10" y="55" fill="red">I love SVG!</text>
   Sorry, your browser does not support inline SVG.
</svg>

<h6>Min andra 'egna' SVG</h6>

Inspiration från [w3schools](https://www.w3schools.com/graphics/tryit.asp?filename=trysvg_path2)

<svg height="400" width="550">
<path id="lineAB" d="M 100 350 l 150 -300" stroke="red" stroke-width="3" fill="none" />
  <path id="lineBC" d="M 250 50 l 150 300" stroke="red" stroke-width="3" fill="none" />
  <path d="M 175 200 l 150 0" stroke="green" stroke-width="3" fill="none" />
  <path d="M 100 350 q 150 -300 200 0" stroke="blue" stroke-width="5" fill="yellow" />
  <path d="M 100 350 q 150 300 600 0" stroke="blue" stroke-width="5" fill="cornflowerblue" />
  <!-- Mark relevant points -->
  <g stroke="black" stroke-width="3" fill="black">
    <circle id="pointA" cx="100" cy="350" r="3" />
    <circle id="pointB" cx="250" cy="50" r="3" />
    <circle id="pointC" cx="400" cy="350" r="3" />
  </g>
  <!-- Label the points -->
  <g font-size="30" font-family="sans-serif" fill="black" stroke="none" text-anchor="middle">
    <text x="100" y="350" dx="-30">Punkt A</text>
    <text x="250" y="50" dy="-10">Punkt B</text>
    <text x="400" y="350" dx="30">Punkt C</text>
  </g>
  Sorry, your browser does not support inline SVG.
</svg>
