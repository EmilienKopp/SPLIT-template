<?php

return [
  'models' => [
    'include' => [
      '*'

    ]
  ],

  'output' => resource_path('js\\models.d.ts'),

  'mapping' => [
    'integer' => 'number',
    'string' => 'string',
    'character varying' => 'string',
    'boolean' => 'boolean',
    'date' => 'Date',
    'timestamp without time zone' => 'Date | string',
    'datetime' => 'Date',
    'timestamp' => 'Date',
    'json' => 'any',
    'object' => 'any',
    'array' => 'Array<any>',
    'decimal' => 'number',
    'float' => 'number',
    'double' => 'number',
    'real' => 'number',
    'numeric' => 'number',
    'int' => 'number',
    'tinyint' => 'number',
    'smallint' => 'number',
    'mediumint' => 'number',
    'bigint' => 'number',
    'char' => 'string',
    'varchar' => 'string',
    'text' => 'string',
    'mediumtext' => 'string',
    'longtext' => 'string',
    'enum' => 'string',
    'set' => 'string',
    'binary' => 'string',
    'varbinary' => 'string',
    'blob' => 'string',
    'tinyblob' => 'string',
    'mediumblob' => 'string',
    'longblob' => 'string',
    'time' => 'Date',
    'year' => 'Date',
    'geometry' => 'string',
    'point' => 'string',
    'linestring' => 'string',
    'polygon' => 'string',
    'multipoint' => 'string',
    'multilinestring' => 'string',
    'multipolygon' => 'string',
    'geometrycollection' => 'string',
    'jsonb' => 'any',
    'uuid' => 'string',
    'ipaddress' => 'string',
    'macaddress' => 'string',
    'cidr' => 'string',
    'inet' => 'string',
    'bit' => 'string',
    'bit varying' => 'string',
    'interval' => 'string',
    'xml' => 'string',
    'tsquery' => 'string',
    'tsvector' => 'string',
    'macaddr' => 'string',
    'money' => 'number',
  ]
];