<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'TypoScript Rendering',
  'description' => 'Can render a TypoScript path by URL, especially useful for Ajax dispatching',
  'category' => 'Rendering',
  'author' => 'Helmut Hummel',
  'author_email' => 'info@helhum.io',
  'author_company' => 'helhum.io',
  'state' => 'stable',
  'uploadfolder' => '0',
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '13.4.0',
  'constraints' => [
    'depends' => [
      'php' => '7.2.0-8.999.999',
      'typo3' => '13.4.0-13.4.99',
    ],
    'conflicts' => [
    ],
    'suggests' => [
    ],
  ],
];
