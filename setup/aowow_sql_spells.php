<?php
/*
    aowow_sql - code for generating main AoWoW database from client files
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

  if (!isset($config['english_dbc']))
    die("Path to english DBC files is not configured");

  $dbcdir = $config['english_dbc'];

  require ("dbc2array.php");

  function dbc2array_($filename, $format)
  {
    global $dbcdir;
    if (@stat($dbcdir . $filename) == NULL) $filename = strtolower($filename);
    return dbc2array($dbcdir . $filename, $format);
  }

  function print_insert($header, $data)
  {
    $size = 0;
    echo "$header\n";
    foreach ($data as $row)
    {
      if ($size)
      {
        if ($size > 937420)
        {
          echo ";\n\n\n$header\n";
          $size = 0;
        }
        else
          echo ",\n";
      }

      // quote strings
      foreach ($row as $i => $value)
        if (!is_int($value) && !is_float($value))
          $row[$i] = "'" . str_replace("\r\n", "\\n", addslashes($value)) . "'";

      $outstr = "(" . implode(", ", $row) . ")";
      $size += strlen($outstr);
      echo $outstr;
    }
    echo ";\n\n";
  }
?>
-- Prevent data corruption
SET NAMES 'utf8';
SET SQL_MODE = '';


-- Spell.dbc
DROP TABLE IF EXISTS `aowow_spell`;
CREATE TABLE `aowow_spell` (
  `spellID` mediumint(11) unsigned NOT NULL,
  `resistancesID` mediumint(11) unsigned NOT NULL,
  `dispeltypeID` mediumint(11) unsigned NOT NULL,
  `mechanicID` mediumint(11) unsigned NOT NULL,
  `spellcasttimesID` mediumint(11) unsigned NOT NULL,
  `cooldown` int(11) unsigned NOT NULL,
  `AuraInterruptFlags` int(11) unsigned NOT NULL,
  `ChannelInterruptFlags` int(11) unsigned NOT NULL, 
  `procChance` mediumint(11) unsigned NOT NULL,
  `procCharges` mediumint(11) unsigned NOT NULL,
  `levelspell` mediumint(11) unsigned NOT NULL, 
  `durationID` smallint(3) unsigned NOT NULL,
  `manacost` mediumint(11) unsigned NOT NULL, 
  `rangeID` tinyint(3) unsigned NOT NULL,
  `stack` mediumint(11) unsigned NOT NULL,
  `tool1` mediumint(11) unsigned NOT NULL, 
  `tool2` mediumint(11) unsigned NOT NULL, 
  `reagent1` mediumint(11) NOT NULL, 
  `reagent2` mediumint(11) NOT NULL, 
  `reagent3` mediumint(11) NOT NULL, 
  `reagent4` mediumint(11) NOT NULL, 
  `reagent5` mediumint(11) NOT NULL, 
  `reagent6` mediumint(11) NOT NULL, 
  `reagent7` mediumint(11) NOT NULL, 
  `reagent8` mediumint(11) NOT NULL, 
  `reagentcount1` mediumint(11) NOT NULL, 
  `reagentcount2` mediumint(11) NOT NULL, 
  `reagentcount3` mediumint(11) NOT NULL, 
  `reagentcount4` mediumint(11) NOT NULL, 
  `reagentcount5` mediumint(11) NOT NULL, 
  `reagentcount6` mediumint(11) NOT NULL, 
  `reagentcount7` mediumint(11) NOT NULL, 
  `reagentcount8` mediumint(11) NOT NULL, 
  `effect1id` mediumint(11) unsigned NOT NULL,
  `effect2id` mediumint(11) unsigned NOT NULL,
  `effect3id` mediumint(11) unsigned NOT NULL,
  `effect1DieSides` int(11) signed NOT NULL,
  `effect2DieSides` int(11) signed NOT NULL,
  `effect3DieSides` int(11) signed NOT NULL,
  `effect1BasePoints` int(11) signed NOT NULL,
  `effect2BasePoints` int(11) signed NOT NULL,
  `effect3BasePoints` int(11) signed NOT NULL,
  `effect1targetA` smallint(5) signed NOT NULL,
  `effect2targetA` smallint(5) signed NOT NULL,
  `effect3targetA` smallint(5) signed NOT NULL,
  `effect1targetB` smallint(5) signed NOT NULL,
  `effect2targetB` smallint(5) signed NOT NULL,
  `effect3targetB` smallint(5) signed NOT NULL,
  `effect1radius` mediumint(11) unsigned NOT NULL,
  `effect2radius` mediumint(11) unsigned NOT NULL,
  `effect3radius` mediumint(11) unsigned NOT NULL,
  `effect1Aura` smallint(5) unsigned NOT NULL,
  `effect2Aura` smallint(5) unsigned NOT NULL,
  `effect3Aura` smallint(5) unsigned NOT NULL,
  `effect1Amplitude` mediumint(11) unsigned NOT NULL,
  `effect2Amplitude` mediumint(11) unsigned NOT NULL,
  `effect3Amplitude` mediumint(11) unsigned NOT NULL,
  `effect_1_proc_value` float NOT NULL,
  `effect_2_proc_value` float NOT NULL,
  `effect_3_proc_value` float NOT NULL,
  `effect1ChainTarget` mediumint(11) unsigned NOT NULL,
  `effect2ChainTarget` mediumint(11) unsigned NOT NULL,
  `effect3ChainTarget` mediumint(11) unsigned NOT NULL,
  `effect1itemtype` int(11) NOT NULL, 
  `effect2itemtype` int(11) NOT NULL, 
  `effect3itemtype` int(11) NOT NULL, 
  `effect1MiscValue` int(11) NOT NULL,
  `effect2MiscValue` int(11) NOT NULL,
  `effect3MiscValue` int(11) NOT NULL,
  `effect1triggerspell` mediumint(11) unsigned NOT NULL,
  `effect2triggerspell` mediumint(11) unsigned NOT NULL,
  `effect3triggerspell` mediumint(11) unsigned NOT NULL,
  `effect_1_proc_chance` float NOT NULL,
  `effect_2_proc_chance` float NOT NULL,
  `effect_3_proc_chance` float NOT NULL,
  `spellicon` mediumint(11) unsigned NOT NULL, 
  `spellname_loc0` varchar(255) NOT NULL,
  `rank_loc0` text NOT NULL,
  `tooltip_loc0` text NOT NULL,
  `buff_loc0` text NOT NULL,
  `manacostpercent` mediumint(11) unsigned NOT NULL,
  `affected_target_level` mediumint(11) unsigned NOT NULL,
  `spellTargets` tinyint(3) unsigned NOT NULL,
  `dmg_multiplier1` float NOT NULL,
  `dmg_multiplier2` float NOT NULL,
  `dmg_multiplier3` float NOT NULL,
  PRIMARY KEY  (`spellID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED COMMENT='Spells';

<?php
//  3.0.9.old: "niiixxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxxiiiiiiiiiiiiiiiiiixxxiiiiiixxxxxxxxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxx"
//  3.1.3.old: "niiixxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxxiiiiiiiiiiiiiiiiiixxxiiiiiixxxxxxxxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxxx"
//  3.1.3.new: "niiixxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxiiiiiiiiiiiiiiiiiiixxxiiiiiixxxxxxxxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxxx"
//  3.2.2a:    "niiixxxxxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxiiiiiiiiiiiiiiiiiiixxxiiiiiixxxxxxxxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxxxxxxx"
//  3.3.2:     "niiixxxxxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxiiiiiiiiiiiiiiiiiiixxxiiiiiixxxxxxxxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxxxxxxxx"
//  3.3.3a:    "niiixxxxxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxiiiiiiiiiiiiiiiiiiixxxiiiiiixxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxxxxxxxx"
  $dbc = dbc2array_("Spell.dbc", "niiixxxxxxxxxxxxxxxxxxxxxxxxiixxiixiixxiixixxxixxiiiiiiiiiiiiiiiiiiixxxiiiiiixxxiiixxxiiiiiiiiiiiiiiifffiiiiiiiiixxxiiifffxxxxxxxxxxxixxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxsxxxxxxxxxxxxxxxxixxixxxxixxxfffxxxxxxxxxxxxxxx");
  print_insert('INSERT INTO `aowow_spell` VALUES', $dbc);
?>

-- Faction.dbc
DROP TABLE IF EXISTS `aowow_factions`;
CREATE TABLE `aowow_factions` (
  `factionID` mediumint(11) unsigned NOT NULL,
  `reputationListID` mediumint(11) NOT NULL,
  `team` mediumint(11) unsigned NOT NULL,
  `side` tinyint(1) NOT NULL,
  `name_loc0` varchar(255) NOT NULL,
  `description1_loc0` text COMMENT 'Description from client',
  `description2_loc0` text COMMENT 'Description from wowwiki.com',
  PRIMARY KEY  (`factionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

<?php
//  3.2.2a:    "nixxxxxxxxxxxxxxxxisixxxxxxxxxxxxxxxsxxxxxxxxxxxxxxsx"
//  3.3.2:     "nixxxxxxxxxxxxxxxxixxxxsixxxxxxxxxxxxxxxsxxxxxxxxxxxxxxsx"
  $dbc = dbc2array_("Faction.dbc", "nixxxxxxxxxxxxxxxxixxxxsixxxxxxxxxxxxxxxsxxxxxxxxxxxxxxsx");
  // Calculate side
  foreach ($dbc as $i => $row)
  {
    $dbc[$i][4] = $dbc[$i][3]; // put 'name' on it's place
    // Get side from aowow_factiontemplate values
    $dbc[$i][3] = 0;
    if (isset($factionA[$row[0]]) && isset($factionH[$row[0]]))
    {
      if ($factionA[$row[0]] == 1 && $factionH[$row[0]] == -1)
        $dbc[$i][3] = 1;
      if ($factionA[$row[0]] == -1 && $factionH[$row[0]] == 1)
        $dbc[$i][3] = 2;
    }
  }
  print_insert('INSERT INTO `aowow_factions` VALUES', $dbc);
?>
-- WorldMapArea.dbc, Map.dbc, AreaTable.dbc
DROP TABLE IF EXISTS `aowow_zones`;
CREATE TABLE `aowow_zones` (
  `mapID` smallint(3) unsigned NOT NULL COMMENT 'Map Identifier',
  `areatableID`  smallint(3) unsigned NOT NULL COMMENT 'Zone Id',
  `name_loc0` varchar(255) NOT NULL COMMENT 'Map Name',
  `x_min` float NOT NULL DEFAULT 0.0,
  `y_min` float NOT NULL DEFAULT 0.0,
  `x_max` float NOT NULL DEFAULT 0.0,
  `y_max` float NOT NULL DEFAULT 0.0,
  `type` tinyint(2) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED COMMENT='Maps';

<?php
/*
  // Old Fog-like generation version
  $dbc = dbc2array_("AreaTable.dbc", "nxxxxxxxxxxsxxxxxxxxxxxxxxxxxxxxxxxx");
  $mapnames = array();
  foreach ($dbc as $row) $mapnames[$row[0]] = $row[1];

  $dbc = array();

  // Instance maps
  $dbc_tmp = dbc2array_("Map.dbc", "nxixsxxxxxxxxxxxxxxxxixxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
  foreach ($dbc_tmp as $row)
  {
    if ($row[1] > 0)
      $dbc[] = array($row[0], $row[3], $row[2], 0, 0, 0, 0);
  }

  // Regular maps
  $dbc_tmp = dbc2array_("WorldMapArea.dbc", "xiisffffxx");
  foreach ($dbc_tmp as $row)
  {
    if (isset($mapnames[$row[1]]) && !empty($mapnames[$row[1]]))
    {
      $y_min = ($row[3]<$row[4]) ? $row[3] : $row[4];
      $y_max = ($row[3]<$row[4]) ? $row[4] : $row[3];
      $x_min = ($row[5]<$row[6]) ? $row[5] : $row[6];
      $x_max = ($row[5]<$row[6]) ? $row[6] : $row[5];
      $dbc[] = array($row[0], $row[1], $mapnames[$row[1]], $x_min, $y_min, $x_max, $y_max);
    }
  }
  unset($mapnames);
*/

  $dbc = array();

  // Fog added the `type` column for something... So let's get it.
  $maptype = array();
  $areatype = array();
// 3.1.3.new: nxixsxxxxxxxxxxxxxxxxixxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
// 3.2.2a:    nxixsxxxxxxxxxxxxxxxxixxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
// 3.3.2:     nxixxsxxxxxxxxxxxxxxxxixxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
  $dbc_tmp = dbc2array_("Map.dbc", "nxixxsxxxxxxxxxxxxxxxxixxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
  foreach ($dbc_tmp as $row)
  {
    $maptype[$row[0]] = $row[1];
    if ($row[3]) $areatype[$row[0] . "@" . $row[3]] = $row[1];
  }

  $dbc_tmp = dbc2array_("AreaTable.dbc", "nixxxxxxxxxsxxxxxxxxxxxxxxxxxxxxxxxx");
  foreach ($dbc_tmp as $row)
  {
    $type = 0;
    if (isset($maptype[$row[1]]))
      $type = $maptype[$row[1]];
    if (isset($areatype[$row[1]."@".$row[0]]))
      $type = $areatype[$row[1]."@".$row[0]];
    $dbc[$row[0]] = array($row[1], $row[0], $row[2], 0, 0, 0, 0, $type);
  }

  // Update data with coords, where available
// 3.1.3.new: xiisffffxx
// 3.2.2a:    xiisffffxxx
  $dbc_tmp = dbc2array_("WorldMapArea.dbc", "xiisffffxxx");
  foreach ($dbc_tmp as $row)
  {
    if (isset($dbc[$row[1]]))
    {
      $dbc[$row[1]][3] = ($row[5]<$row[6]) ? $row[5] : $row[6]; // x_min
      $dbc[$row[1]][4] = ($row[3]<$row[4]) ? $row[3] : $row[4]; // y_min
      $dbc[$row[1]][5] = ($row[5]<$row[6]) ? $row[6] : $row[5]; // x_max
      $dbc[$row[1]][6] = ($row[3]<$row[4]) ? $row[4] : $row[3]; // y_max
    }
  }

  unset($dbc_tmp);
  print_insert('INSERT INTO `aowow_zones` VALUES', $dbc);

  // TODO: Get duplicates from Map.dbc automatically. Currently they are:
?>
-- Onyxia's Lair
UPDATE aowow_zones SET mapID = 249 WHERE areatableID = 2159;
-- Hall of Legends
UPDATE aowow_zones SET mapID = 450 WHERE areatableID = 2917;
