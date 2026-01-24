<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'TypoScript Rendering',
  'description' => 'Can render a TypoScript path by URL, especially useful for Ajax dispatching',
  'category' => 'Rendering',
  'author' => 'Helmut Hummel',
  'author_email' => 'info@helhum.io',
  'author_company' => 'helhum.io',
  'state' => 'stable',
  'version' => '13.4.1',
  'constraints' => [
    'depends' => [
      'php' => '8.3.0-8.4.99',
      'typo3' => '13.4.0-13.4.99',
    ],
    'conflicts' => [
    ],
    'suggests' => [
    ],
  ],
];
