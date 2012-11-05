<?php
/*
    aowow_sql_loc - code for generating AoWoW database localization
    This file is a part of AoWoW project.
    Copyright (C) 2010  Mix <ru-mangos.ru>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
  require("config.php");

  if (!isset($config['local_dbc']))
    die("Path to localized DBC files is not configured");

  $dbcdir = $config['local_dbc'];
  $L = $config['locale'];

  require ("dbc2array.php");

  function dbc2array_($filename, $format)
  {
    global $dbcdir;
    if (@stat($dbcdir . $filename) == NULL) $filename = strtolower($filename);
    return dbc2array($dbcdir . $filename, $format);
  }

  function print_update($table, $data, $keys, $values)
  {
    foreach ($data as $row)
    {
      $where = array();
      foreach ($keys as $i => $name)
        $where[] = "`$name` = " . "'" . str_replace("\r\n", "\\n", addslashes($row[$i])) . "'";

      $set = array();
      foreach ($values as $i => $name)
        $set[] = "`$name` = " . "'" . str_replace("\r\n", "\\n", addslashes($row[$i])) . "'";

      echo "UPDATE $table SET " , implode(", ", $set) , " WHERE " , implode(" AND ", $where), ";\n";
    }
  }

  // function that converts format string to specified locale
  // i.e. "nSxxxxxxxxxxxxxxxx" => "nxxxxxxxxsxxxxxxxx"
  function L($format)
  {
    global $L;
    $result = $format;
    for ($i=0; $i<strlen($format); $i++)
      if ($format[$i] == 'S')
      {
        $result[$i] = 'x';
        $result[$i+$L] = 's';
      }
    return $result;
  }
?>
-- Prevent data corruption
SET NAMES 'utf8';
SET SQL_MODE = '';

-- Altering AoWoW Table Structure.

ALTER TABLE aowow_spell
	ADD COLUMN `spellname_<?=$L?>` varchar(255) NOT NULL AFTER `spellname_loc0`,
	ADD COLUMN `rank_<?=$L?>` text NOT NULL AFTER `rank_loc0`,
	ADD COLUMN `tooltip_<?=$L?>` text NOT NULL AFTER `tooltip_loc0`;


<?php

  $dbc = dbc2array_("Spell.dbc", L("nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxSxxxxxxxxxxxxxxxxSxxxxxxxxxxxxxxxxSxxxxxxxxxxxxxxxx"));
  print_update('aowow_spell', $dbc, array(0=>"spellID"), array(1=>"spellname_loc$L", 2=>"rank_loc$L", 3=>"tooltip_loc$L"));

?>
