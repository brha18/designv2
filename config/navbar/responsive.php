<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                    "text" => "Kmom05",
                    "url" => "redovisning/kmom05",
                    "title" => "Redovisning för kmom05.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapporter",
            "url" => "rapporter",
            "title" => "Rapporter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Rapport kmom04 - Färgschema",
                        "url" => "rapporter/fargschema",
                        "title" => "Rapporter för kmom04 - Färgschema.",
                    ],
                    [
                        "text" => "Rapport kmom05 - Laddningstid",
                        "url" => "rapporter/laddningstid",
                        "title" => "Rapporter för kmom05 - Laddningstid.",
                    ],
                    [
                        "text" => "Rapport kmom06",
                        "url" => "rapporter/rap_kmom06",
                        "title" => "Rapporter för kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Min blogg.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Mitt första inlägg",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Mitt första inlägg.",
                    ],
                    [
                        "text" => "Mitt andra inlägg",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Mitt andra inlägg.",
                    ],
                    [
                        "text" => "Mitt tredje inlägg",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Mitt tredje inlägg.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Om kmom02",
                        "url" => "om/omKmom02",
                        "title" => "Om kmom02.",
                    ],
                    [
                        "text" => "Om kmom03",
                        "url" => "om/omKmom03",
                        "title" => "Om kmom03.",
                    ],
                    [
                        "text" => "Om kmom04",
                        "url" => "om/omKmom04",
                        "title" => "Om kmom04.",
                    ],
                    [
                        "text" => "Om kmom05",
                        "url" => "om/omKmom05",
                        "title" => "Om kmom05.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Testa",
            "url" => "testa",
            "title" => "Testar möjligheter och problem.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Test 2 kolumner",
                        "url" => "testa/testa_2kol",
                        "title" => "Test 2 kolumner.",
                    ],
                    [
                        "text" => "Test ikon kolumner",
                        "url" => "testa/testa_ikon_kol",
                        "title" => "Test ikon kolumner.",
                    ],
                    [
                        "text" => "USAs deklaration",
                        "url" => "testa/USA",
                        "title" => "USAs deklaration.",
                      ],
                  ],
              ],
          ],
      ],
  ];
