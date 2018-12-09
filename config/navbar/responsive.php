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
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
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
          [
              "text" => "Test av grid",
              "url" => "gridtest/gridtest",
              "title" => "Test av grid.",
          ],
      ],
  ];
