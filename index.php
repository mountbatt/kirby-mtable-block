<?php
Kirby::plugin('mountbatt/mtable-block', [
  'blueprints' => [
    'blocks/mtable' => __DIR__ . '/blueprints/blocks/mtable.yml'
  ],
  'snippets' => [
    'blocks/mtable' => __DIR__ . '/snippets/blocks/mtable.php'
  ],'translations' => [
    'en' => [
      'field.blocks.mtable.empty' => 'Please add some text into your table …',
      'field.blocks.mtable.name' => 'Table',
      'field.blocks.mtable.section_headline' => 'Headline above table',
      'field.blocks.mtable.columnscount' => 'Number of columns used',
    ],
    'de' => [
       'field.blocks.mtable.empty' => 'Bitte füge etwas Text in Deine Tabelle ein …',
       'field.blocks.mtable.name' => 'Tabelle',
       'field.blocks.mtable.section_headline' => 'Überschrift über der Tabelle',
       'field.blocks.mtable.columnscount' => 'Anzahl genutzter Spalten',
  
    ],
    // more languages
  ]
]);