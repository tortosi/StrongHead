<?php
switch($_SESSION['locale'])
{
	
	// --- SPANISH LOCALE ---
	case '6':
		mass_define(array(
			// objects
			'LOCALE_OBJECTYPE_BOOK' => 'Libro',
			'LOCALE_OBJECTYPE_CONTAINER' => 'Contenedor',
			'LOCALE_OBJECTYPE_COFFER' => 'Cofre',
			'LOCALE_OBJECTYPE_HERB' => 'Hierba',
			'LOCALE_OBJECTYPE_ORE' => 'Vena de mineral',
			'LOCALE_OBJECTYPE_QUEST' => 'Misión',
			// npc
			'LOCALE_NPCRANK_ELITE' => '(Elite)',
			'LOCALE_NPCRANK_RAREELITE' => '(Elite-Raro)',
			'LOCALE_NPCRANK_BOSS' => '(Jefe)',
			'LOCALE_NPCRANK_RARE' => '(Raro)',
			'LOCALE_NPCTYPE_BEAST' => 'Bestia',
			'LOCALE_NPCTYPE_DRAGONKIN' => 'Dragonante',
			'LOCALE_NPCTYPE_DEMON' => 'Demonio',
			'LOCALE_NPCTYPE_ELEMENTAL' => 'Elemental',
			'LOCALE_NPCTYPE_GIANT' => 'Gigante',
			'LOCALE_NPCTYPE_UNDEAD' => 'No-muerto',
			'LOCALE_NPCTYPE_HUMANOID' => 'Humanoide',
			'LOCALE_NPCTYPE_CRITTER' => 'Alimaña',
			'LOCALE_NPCTYPE_MECHANIC' => 'Mecanico',
			'LOCALE_NPCTYPE_UNCATEGORIZED' => 'Sin categoria',
			// player/other
			'LOCALE_NAME'	=> 'nombre',
			'LOCALE_CLASS'	=> 'clase',
			'LOCALE_RACE'	=> 'raza',
			'LOCALE_LVL'	=> 'Nivel',
			// quest
			'LOCALE_REQUIREMENTS'	=>	'Requerimientos',
			'LOCALE_QUEST_FLAGS_STAY_ALIVE'        => 'Requiere estar vivo',
			'LOCALE_QUEST_FLAGS_PARTY_ACCEPT'      => 'Suggested to all party members',
			'LOCALE_QUEST_FLAGS_EXPLORATION'       => 'Exploration related',
			'LOCALE_QUEST_FLAGS_SHARABLE'          => 'Compartible',
			'LOCALE_QUEST_FLAGS_EPIC'              => 'Epica',
			'LOCALE_QUEST_FLAGS_RAID'              => 'Raid',
			'LOCALE_QUEST_FLAGS_TBC'               => 'Requiere TBC',
			'LOCALE_QUEST_FLAGS_UNK2'              => 'Additional items used',
			'LOCALE_QUEST_FLAGS_HIDDEN_REWARDS'    => 'Las recompezas se muestran solo al completar',
			'LOCALE_QUEST_FLAGS_AUTO_REWARDED'     => 'Automatically complete and rewarded',
			'LOCALE_QUEST_FLAGS_TBC_RACES'         => 'Blood Elves/Draenei locations',
			'LOCALE_QUEST_FLAGS_DAILY'             => 'Diaria',
			'LOCALE_QUEST_FLAGS_UNK5'              => 'PvP',
			'LOCALE_QUEST_SPECIALFLAGS_REPEATABLE' => 'Repetible',
			'LOCALE_QUEST_SPECIALFLAGS_SCRIPTED'   => 'Completed only by script/event',
			'LOCALE_QUEST_HAS_POI'                 => 'Has points of interest',
			'LOCALE_QUEST_HAS_START_SCRIPT'        => 'Has start script',
			'LOCALE_QUEST_HAS_COMPLETE_SCRIPT'     => 'Has end script',
			'LOCALE_QUEST_TYPE_GROUP'              => 'Grupo',
			'LOCALE_QUEST_TYPE_LIFE'               => 'Life',
			'LOCALE_QUEST_TYPE_PVP'                => 'PvP',
			'LOCALE_QUEST_TYPE_RAID'               => 'Raid',
			'LOCALE_QUEST_TYPE_DUNGEON'            => 'Mazmorra',
			'LOCALE_QUEST_TYPE_WORLD_EVENT'        => 'Evento de Mundo',
			'LOCALE_QUEST_TYPE_LEGENDARY'          => 'Legendaria',
			'LOCALE_QUEST_TYPE_ESCORT'             => 'Escolta',
			'LOCALE_QUEST_TYPE_HEROIC'             => 'Heroica',
			'LOCALE_QUEST_TYPE_RAID10'             => 'Raid (10)',
			'LOCALE_QUEST_TYPE_RAID25'             => 'Raid (25)',
			// classes
			'LOCALE_WARRIOR'		=>	'Guerrero',
			'LOCALE_PALADIN'		=>	'Paladín',
			'LOCALE_HUNTER'			=>	'Cazador',
			'LOCALE_ROGUE'			=>	'Pícaro',
			'LOCALE_PRIEST'			=>	'Sacerdote',
			'LOCALE_DEATH_KNIGHT'	=>	'Caballero de la Muerte',
			'LOCALE_SHAMAN'			=>	'Chaman',
			'LOCALE_MAGE'			=>	'Mago',
			'LOCALE_WARLOCK'		=>	'Brujo',
			'LOCALE_DRUID'			=>	'Druida',
			// races
			'LOCALE_HUMAN'			=>	'Humano',
			'LOCALE_ORC'			=>	'Orco',
			'LOCALE_DWARF'			=>	'Enano',
			'LOCALE_NIGHT_ELF'		=>	'Elfo de la noche',
			'LOCALE_UNDEAD'			=>	'No muerto',
			'LOCALE_TAUREN'			=>	'Tauren',
			'LOCALE_GNOME'			=>	'Gnomo',
			'LOCALE_TROLL'			=>	'Troll',
			'LOCALE_BLOOD_ELF'		=>	'Elfo de sangre',
			'LOCALE_DRAENEI'		=>	'Draenei',
			// side
			'LOCALE_BOTH_FACTIONS'	=>	'Ambos',
			'LOCALE_HORDE'			=>	'Horda',
			'LOCALE_ALLIANCE'		=>	'Alianza',
			// reputation
			'LOCALE_NEUTRAL'	=>	'Neutral',
			'LOCALE_FRIENDLY'	=>	'Amistoso',
			'LOCALE_HONORED'	=>	'Honorable',
			'LOCALE_REVERED'	=>	'Venerado',
			'LOCALE_EXALTED'	=>	'Exaltado',
			// resistances
			'LOCALE_FIRE_RESISTANCE'	=>	'Resistencia al Fuego',
			'LOCALE_FROST_RESISTANCE'	=>	'Resistencia a la Escarcha',
			'LOCALE_ARCANE_RESISTANCE'	=>	'Resistencia a lo Arcano',
			'LOCALE_SHADOW_RESISTANCE'	=>	'Resistencia a las Sombras',
			'LOCALE_NATURE_RESISTANCE'	=>	'Resistencia a la Naturaleza',
			'LOCALE_HOLY_RESISTANCE'	=>	'Sin resistencias',
			// binds
			'LOCALE_BIND_PICKUP'		=>	'Se liga al recogerlo',
			'LOCALE_BIND_EQUIP'			=>	'Se liga al equiparlo',
			'LOCALE_BIND_USE'			=>	'Se liga al usarlo',
			'LOCALE_BIND_SOULBOUND'		=>	'Ligado al alma',
			'LOCALE_BIND_QUEST_ITEM'	=>	'Objeto de misión',
			// bags
			'LOCALE_BAG'			=>	'Bolsa',
			'LOCALE_BAG_QUIVER'		=>	'Carcaj',
			'LOCALE_BAG_AMMO'		=>	'Bolsa de munición',
			'LOCALE_BAG_SOUL'		=>	'Bolsa de almas',
			'LOCALE_BAG_LEATHER'	=>	'Bolsa de peletería',
			'LOCALE_BAG_HERB'		=>	'Bolsa de hierbas',
			'LOCALE_BAG_ENCHANT'	=>	'Bolsa de encantamiento',
			'LOCALE_BAG_ENGINEER'	=>	'Bolsa de ingeniería',
			'LOCALE_BAG_GEM'		=>	'Bolsa de gemas',
			'LOCALE_BAG_MINING'		=>	'Bolsa de minería',
			// equip slots
			'LOCALE_EQUIP_HEAD'				=>	'Cabeza',
			'LOCALE_EQUIP_NECK'				=>	'Cuello',
			'LOCALE_EQUIP_SHOULDER'			=>	'Hombro',
			'LOCALE_EQUIP_SHIRT'			=>	'Camisa',
			'LOCALE_EQUIP_CHEST'			=>	'Pecho',
			'LOCALE_EQUIP_WAIST'			=>	'Cintura',
			'LOCALE_EQUIP_LEGS'				=>	'Pierna',
			'LOCALE_EQUIP_FEET'				=>	'Pie',
			'LOCALE_EQUIP_WRIST'			=>	'Muñeca',
			'LOCALE_EQUIP_HANDS'			=>	'Manos',
			'LOCALE_EQUIP_FINGER'			=>	'Dedo',
			'LOCALE_EQUIP_TRINKET'			=>	'Abalorio',
			'LOCALE_EQUIP_ONEHAND'			=>	'Una mano',
			'LOCALE_EQUIP_OFFHAND'			=>	'Sostener con la mano izquierda',
			'LOCALE_EQUIP_RANGED'			=>	'Distancia',
			'LOCALE_EQUIP_BACK'				=>	'Back',
			'LOCALE_EQUIP_TWOHAND'			=>	'Dos manos',
			'LOCALE_EQUIP_UNK0'				=>	'',
			'LOCALE_EQUIP_TABARD'			=>	'Tabardo',
			'LOCALE_EQUIP_MAINHAND'			=>	'Mano derecha',
			'LOCALE_EQUIP_CHEST2'			=>	'Pecho',
			'LOCALE_EQUIP_OFFHAND2'			=>	'Mano izquierda',
			'LOCALE_EQUIP_HELDINOFFHAND'	=>	'Sostener con la mano izquierda',
			'LOCALE_EQUIP_PROJECTILE'		=>	'Proyectil',
			'LOCALE_EQUIP_THROWN'			=>	'Arrojadiza',
			'LOCALE_EQUIP_RANGED2'			=>	'Distancia',
			'LOCALE_EQUIP_UNK1'				=>	'',
			'LOCALE_EQUIP_RELIC'			=>	'Reliquia',
			// armor type
			'LOCALE_ARMOR_CLOTH'	=>	'Tela',
			'LOCALE_ARMOR_LEATHER'	=>	'Cuero',
			'LOCALE_ARMOR_MAIL'		=>	'Malla',
			'LOCALE_ARMOR_PLATE'	=>	'Placas',
			'LOCALE_ARMOR_BUCKLER'	=>	'',
			'LOCALE_ARMOR_SHIELD'	=>	'Escudo',
			'LOCALE_ARMOR_LIBRAM'	=>	'Tratado de',
			'LOCALE_ARMOR_IDOL'		=>	'Ídolo',
			'LOCALE_ARMOR_TOTEM'	=>	'Tótem',
			// weapon type
			'LOCALE_WEAPON_AXE1H'		=>	'Hacha',
			'LOCALE_WEAPON_AXE2H'		=>	'Hacha',
			'LOCALE_WEAPON_BOW'			=>	'Arco',
			'LOCALE_WEAPON_GUN'			=>	'Arma de fuego',
			'LOCALE_WEAPON_MACE1H'		=>	'Maza',
			'LOCALE_WEAPON_MACE2H'		=>	'Maza',
			'LOCALE_WEAPON_POLEARM'		=>	'Arma de asta',
			'LOCALE_WEAPON_SWORD1H'		=>	'Espada',
			'LOCALE_WEAPON_SWORD2H'		=>	'Espada',
			'LOCALE_WEAPON_OBSOLETE'	=>	'',
			'LOCALE_WEAPON_STAFF'		=>	'Bastón',
			'LOCALE_WEAPON_EXOTIC'		=>	'',
			'LOCALE_WEAPON_EXOTIC2'		=>	'',
			'LOCALE_WEAPON_FIST'		=>	'Armas de puño',
			'LOCALE_WEAPON_MISC'		=>	'Miscelánea',
			'LOCALE_WEAPON_DAGGER'		=>	'Daga',
			'LOCALE_WEAPON_THROWN'		=>	'Arrojadiza',
			'LOCALE_WEAPON_SPEAR'		=>	'',
			'LOCALE_WEAPON_CROSSBOW'	=>	'Ballesta',
			'LOCALE_WEAPON_WAND'		=>	'Varita',
			'LOCALE_WEAPON_FISHINGPOLE'	=>	'Caña de Pescar',
			// projectile type
			'LOCALE_PROJECTILE_WAND'	=>	'',
			'LOCALE_PROJECTILE_BOLT'	=>	'',
			'LOCALE_PROJECTILE_ARROW'	=>	'Flecha',
			'LOCALE_PROJECTILE_BULLET'	=>	'Bala',
			'LOCALE_PROJECTILE_THROWN'	=>	'',
			// damage
			'LOCALE_DAMAGE_PRE'		=>	' ',
			'LOCALE_DAMAGE_POST'	=>	' Daño',
			'LOCALE_DAMAGE_HOLY'	=>	'Sagrado',
			'LOCALE_DAMAGE_FIRE'	=>	'Fuego',
			'LOCALE_DAMAGE_FROST'	=>	'Escarcha',
			'LOCALE_DAMAGE_ARCANE'	=>	'Arcano',
			'LOCALE_DAMAGE_SHADOW'	=>	'Sombras',
			'LOCALE_DAMAGE_NATURE'	=>	'Naturaleza',
			// stats
			'LOCALE_STAT_STRENGTH'	=>	' Fuerza',
			'LOCALE_STAT_STAMINA'	=>	' Aguante',
			'LOCALE_STAT_INTELLECT'	=>	' Intelecto',
			'LOCALE_STAT_SPIRIT'	=>	' Espíritu',
			'LOCALE_STAT_AGILITY'	=>	' Agilidad',
			'LOCALE_STAT_HEALTH'	=>	' de salud.',
			// green bonuses
			'LOCALE_GBONUS_DEFENCE'				=>	'Aumenta tu índice de defensa %d p.',
			'LOCALE_GBONUS_DODGE'				=>	'Aumenta tu índice de esquivar %d p.',
			'LOCALE_GBONUS_PARRY'				=>	'Aumenta tu índice de parada %d p.',
			'LOCALE_GBONUS_SHIELDBLOCK'			=>	'Aumenta tu índice de bloqueo con escudo %d p.',
			'LOCALE_GBONUS_SPELLHIT_RATING'		=>	'Aumenta tu índice de golpe con hechizos %d p.',
			'LOCALE_GBONUS_MELEECRIT_RATING'	=>	'Aumenta tu índice de golpe crítico cuerpo a cuerpo %d p.',
			'LOCALE_GBONUS_RANGEDCRIT_RATING'	=>	'Aumenta tu índice de golpe crítico a distancia %d p.',
			'LOCALE_GBONUS_SPELLCRIT_RATING'	=>	'Aumenta tu índice de golpe crítico con hechizos %d p.',
			'LOCALE_GBONUS_SPELLHASTE_RATING'	=>	'Aumenta tu índice de celeridad con hechizos %d p.',
			'LOCALE_GBONUS_HIT_RATING'			=>	'Aumenta tu índice de golpe %d p.',
			'LOCALE_GBONUS_CRIT_RATING'			=>	'Aumenta tu índice de golpe crítico %d p.',
			'LOCALE_GBONUS_RESILIENCE_RATING'	=>	'Mejora tu índice de temple %d p.',
			'LOCALE_GBONUS_HASTE_RATING'		=>	'Aumenta tu índice de celeridad %d p.',
			'LOCALE_GBONUS_EXPERTISE_RATING'	=>	'Aumenta tu índice de pericia %d p.',
			'LOCALE_GBONUS_RESTOREMANA'			=>	'Restaura %d de mana cada 5 seg.',
			'LOCALE_GBONUS_ATTACKPOWER'			=>	'Aumenta el poder de ataque %d p.',
			'LOCALE_GBONUS_ARMORPENETRATION'	=>	'Aumenta tu índice de penetración de armadura %d p.',
			'LOCALE_GBONUS_SPELLPOWER'			=>	'Aumenta el poder con hechizos %d p.',
			'LOCALE_GBONUS_HEALTHREGEN'      =>  'Restaura %d de salud cada 5 s.',
			'LOCALE_GBONUS_SPELLPENETRATION'    =>  'Aumenta la penetración de tus hechizos %d.',
			'LOCALE_GBONUS_BLOCK'        =>  'Aumenta el valor de bloqueo de tu escudo %dp.',
			'LOCALE_GBONUS_UNKNOWN'				=>	'Bono desconocido #%d',
			'LOCALE_GBONUS_CHANCEONHIT'			=>	'Probabilidad al acertar: ',
			'LOCALE_GBONUS_EQUIP'				=>	'Equipar: ',
			'LOCALE_GBONUS_USE'					=>	'Uso: ',
			'LOCALE_GBONUS_CHARGES'					=>	'cargas',
			'LOCALE_GBONUS_EXPENDABLE'					=>	'Consumible',
			'LOCALE_GBONUS_HIT_TAKEN_MELEE_RATING' =>	'Mejora tu índice de evasión de golpes cuerpo a cuerpo %d p.',
			'LOCALE_GBONUS_HIT_TAKEN_SPELL_RATING' =>	'Mejora tu índice de evasión de golpes con hechizos %d p.',
			'LOCALE_GBONUS_HASTE_MELEE_RATING' =>	'Mejora tu índice de celeridad cuerpo a cuerpo %d p.',
			'LOCALE_GBONUS_RANGED_ATTACK_POWER' =>	'Aumenta tu poder de ataque a distancia %d p.',
			'LOCALE_COOLDOWN'					=>	'reutilización',
			'LOCALE_COMBAT_RATING'				=>	'%s&nbsp;@&nbsp;L%d',
			// sockets
			'LOCALE_SOCKET_META'	=>	'Ranura meta',
			'LOCALE_SOCKET_RED'		=>	'Ranura roja',
			'LOCALE_SOCKET_YELLOW'	=>	'Ranura amarilla',
			'LOCALE_SOCKET_BLUE'	=>	'Ranura azul',
			'LOCALE_SOCKET_BONUS'	=>	'Bono de ranura',
			
			// misc
			'LOCALE_SPEED'			=>	'Velocidad',
			'LOCALE_UNIQUE'			=>	'Único',
			'LOCALE_START_QUEST'	=>	'Este objeto inicia una misión',
			'LOCALE_SLOT'			=>	' Ranura ',
			'LOCALE_DPS'			=>	'daño por segundo',
			'LOCALE_DPS2'			=>	'daño por segundo',
			'LOCALE_DPS_ADDS'		=>	'Adds',
			'LOCALE_ARMOR'			=>	'Armadura',
			'LOCALE_BLOCK'			=>	'Bloqueo',
			'LOCALE_REQUIRES'		=>	'Require',
			'LOCALE_REQUIRES_LEVEL'	=>	'Necesitas ser de nivel',
			'LOCALE_DURABILITY'		=>	'Durabilidad',
			'LOCALE_CLASSES'		=>	'Clases',
			'LOCALE_VALUE_DELIM'	=>	' para ',
			'LOCALE_REAGENTS'		=>	'Componentes: ',
			'LOCALE_TOOLS'			=>	'Herramientas: ',
			'LOCALE_HEROIC'			=>	' (Heroico)',
			'LOCALE_CRITERIA'		=>	'Necesario',
			'LOCALE_GLYPH_OF'		=>	'Glifo de ',
			'LOCALE_SECONDS'		=>	' segundos',
			'LOCALE_SECOND'    =>  ' segundo',
			'LOCALE_MINUTES'		=>	' minutos',
			'LOCALE_MINUTE'    =>  ' minuto',
			'LOCALE_MINUTE_REMAINING'    =>  ' minuto restante.',
			'LOCALE_SECOND_REMAINING'    =>  ' segundo restante.',
			'LOCALE_SECONDS_REMAINING'		=>	' segundos restantes.',
			'LOCALE_MINUTES_REMAINING'		=>	' minutos restantes.',
			'LOCALE_OF_MANA_BASE'		=>	'% de maná base.',
			'LOCALE_MINUTES_CD'		=>	' min. de reutilización.',
			'LOCALE_SECONDS_CD'		=>	' seg. de reutilización.',
			'LOCALE_INSTANT'		=>	' Instante.',
			'RIGHT_CLICK_TO_READ'		=>	' Click derecho para leer.',
			'LOCALE_SEC'		=>	'seg',
			'LOCALE_M'		=>	'm',
			'LOCALE_CAST'		=>	'Hechizo de ',
			'LOCALE_RANGE'		=>	'Alcance de ',
		));
		break;
	// --- ENGLISH default LOCALE ---
	default:
		mass_define(array(
			// objects
			'LOCALE_OBJECTYPE_BOOK' => 'Book',
			'LOCALE_OBJECTYPE_CONTAINER' => 'Container',
			'LOCALE_OBJECTYPE_COFFER' => 'Footlocked',
			'LOCALE_OBJECTYPE_HERB' => 'Herbs',
			'LOCALE_OBJECTYPE_ORE' => 'Mineral Veins',
			'LOCALE_OBJECTYPE_QUEST' => 'Quest',
			// npc
			'LOCALE_NPCRANK_ELITE' => '(Elite)',
			'LOCALE_NPCRANK_RAREELITE' => '(Rare-Elite)',
			'LOCALE_NPCRANK_BOSS' => '(Boss)',
			'LOCALE_NPCRANK_RARE' => '(Rare)',
			'LOCALE_NPCTYPE_BEAST' => 'Beast',
			'LOCALE_NPCTYPE_DRAGONKIN' => 'Dragonkin',
			'LOCALE_NPCTYPE_DEMON' => 'Demon',
			'LOCALE_NPCTYPE_ELEMENTAL' => 'Elemental',
			'LOCALE_NPCTYPE_GIANT' => 'Giant',
			'LOCALE_NPCTYPE_UNDEAD' => 'Undead',
			'LOCALE_NPCTYPE_HUMANOID' => 'Humanoid',
			'LOCALE_NPCTYPE_CRITTER' => 'Critter',
			'LOCALE_NPCTYPE_MECHANIC' => 'Mechanic',
			'LOCALE_NPCTYPE_UNCATEGORIZED' => 'Uncategorized',
			// player/other
			'LOCALE_NAME'	=> 'name',
			'LOCALE_CLASS'	=> 'class',
			'LOCALE_RACE'	=> 'race',
			'LOCALE_LVL'	=> 'Level',
			// quest
			'LOCALE_REQUIREMENTS'	=>	'Requirements',
			'LOCALE_QUEST_FLAGS_STAY_ALIVE'        => 'Requires to stay alive',
			'LOCALE_QUEST_FLAGS_PARTY_ACCEPT'      => 'Suggested to all party members',
			'LOCALE_QUEST_FLAGS_EXPLORATION'       => 'Exploration related',
			'LOCALE_QUEST_FLAGS_SHARABLE'          => 'Sharable',
			'LOCALE_QUEST_FLAGS_EPIC'              => 'Epic',
			'LOCALE_QUEST_FLAGS_RAID'              => 'Raid',
			'LOCALE_QUEST_FLAGS_TBC'               => 'The Burning Crusade required',
			'LOCALE_QUEST_FLAGS_UNK2'              => 'Additional items used',
			'LOCALE_QUEST_FLAGS_HIDDEN_REWARDS'    => 'Rewards are shown only at completion',
			'LOCALE_QUEST_FLAGS_AUTO_REWARDED'     => 'Automatically complete and rewarded',
			'LOCALE_QUEST_FLAGS_TBC_RACES'         => 'Blood Elves/Draenei locations',
			'LOCALE_QUEST_FLAGS_DAILY'             => 'Daily',
			'LOCALE_QUEST_FLAGS_UNK5'              => 'PvP',
			'LOCALE_QUEST_SPECIALFLAGS_REPEATABLE' => 'Repeatable',
			'LOCALE_QUEST_SPECIALFLAGS_SCRIPTED'   => 'Completed only by script/event',
			'LOCALE_QUEST_HAS_POI'                 => 'Has points of interest',
			'LOCALE_QUEST_HAS_START_SCRIPT'        => 'Has start script',
			'LOCALE_QUEST_HAS_COMPLETE_SCRIPT'     => 'Has end script',
			'LOCALE_QUEST_TYPE_GROUP'              => 'Group',
			'LOCALE_QUEST_TYPE_LIFE'               => 'Life',
			'LOCALE_QUEST_TYPE_PVP'                => 'PvP',
			'LOCALE_QUEST_TYPE_RAID'               => 'Raid',
			'LOCALE_QUEST_TYPE_DUNGEON'            => 'Dungeon',
			'LOCALE_QUEST_TYPE_WORLD_EVENT'        => 'World Event',
			'LOCALE_QUEST_TYPE_LEGENDARY'          => 'Legendary',
			'LOCALE_QUEST_TYPE_ESCORT'             => 'Escort',
			'LOCALE_QUEST_TYPE_HEROIC'             => 'Heroic',
			'LOCALE_QUEST_TYPE_RAID10'             => 'Raid (10)',
			'LOCALE_QUEST_TYPE_RAID25'             => 'Raid (25)',
			// classes
			'LOCALE_WARRIOR'		=>	'Warrior',
			'LOCALE_PALADIN'		=>	'Paladin',
			'LOCALE_HUNTER'			=>	'Hunter',
			'LOCALE_ROGUE'			=>	'Rogue',
			'LOCALE_PRIEST'			=>	'Priest',
			'LOCALE_DEATH_KNIGHT'	=>	'Death Knight',
			'LOCALE_SHAMAN'			=>	'Shaman',
			'LOCALE_MAGE'			=>	'Mage',
			'LOCALE_WARLOCK'		=>	'Warlock',
			'LOCALE_DRUID'			=>	'Druid',
			// races
			'LOCALE_HUMAN'			=>	'Human',
			'LOCALE_ORC'			=>	'Orc',
			'LOCALE_DWARF'			=>	'Dwarf',
			'LOCALE_NIGHT_ELF'		=>	'Night Elf',
			'LOCALE_UNDEAD'			=>	'Undead',
			'LOCALE_TAUREN'			=>	'Tauren',
			'LOCALE_GNOME'			=>	'Gnome',
			'LOCALE_TROLL'			=>	'Troll',
			'LOCALE_BLOOD_ELF'		=>	'Blood Elf',
			'LOCALE_DRAENEI'		=>	'Draenei',
			// side
			'LOCALE_BOTH_FACTIONS'	=>	'Both',
			'LOCALE_HORDE'			=>	'Horde',
			'LOCALE_ALLIANCE'		=>	'Alliance',
			// reputation
			'LOCALE_NEUTRAL'	=>	'Neutral',
			'LOCALE_FRIENDLY'	=>	'Friendly',
			'LOCALE_HONORED'	=>	'Honored',
			'LOCALE_REVERED'	=>	'Revered',
			'LOCALE_EXALTED'	=>	'Exalted',
			// resistances
			'LOCALE_FIRE_RESISTANCE'	=>	'Fire Resistance',
			'LOCALE_FROST_RESISTANCE'	=>	'Frost Resistance',
			'LOCALE_ARCANE_RESISTANCE'	=>	'Arcane Resistance',
			'LOCALE_SHADOW_RESISTANCE'	=>	'Shadow Resistance',
			'LOCALE_NATURE_RESISTANCE'	=>	'Nature Resistance',
			'LOCALE_HOLY_RESISTANCE'	=>	'RESISTANCE DOES NOT EXIST',
			// binds
			'LOCALE_BIND_PICKUP'		=>	'Binds when picked up',
			'LOCALE_BIND_EQUIP'			=>	'Binds when equipped',
			'LOCALE_BIND_USE'			=>	'Binds when used',
			'LOCALE_BIND_SOULBOUND'		=>	'Soulbound',
			'LOCALE_BIND_QUEST_ITEM'	=>	'Quest Item',
			// bags
			'LOCALE_BAG'			=>	'Bag',
			'LOCALE_BAG_QUIVER'		=>	'Quiver',
			'LOCALE_BAG_AMMO'		=>	'Ammo Pouch',
			'LOCALE_BAG_SOUL'		=>	'Soul Bag',
			'LOCALE_BAG_LEATHER'	=>	'Leatherworking Bag',
			'LOCALE_BAG_HERB'		=>	'Herb Bag',
			'LOCALE_BAG_ENCHANT'	=>	'Enchanting bag',
			'LOCALE_BAG_ENGINEER'	=>	'Engineering Bag',
			'LOCALE_BAG_GEM'		=>	'Gem Bag',
			'LOCALE_BAG_MINING'		=>	'Mining Bag',
			// equip slots
			'LOCALE_EQUIP_HEAD'				=>	'Head',
			'LOCALE_EQUIP_NECK'				=>	'Neck',
			'LOCALE_EQUIP_SHOULDER'			=>	'Shoulder',
			'LOCALE_EQUIP_SHIRT'			=>	'Shirt',
			'LOCALE_EQUIP_CHEST'			=>	'Chest',
			'LOCALE_EQUIP_WAIST'			=>	'Waist',
			'LOCALE_EQUIP_LEGS'				=>	'Legs',
			'LOCALE_EQUIP_FEET'				=>	'Feet',
			'LOCALE_EQUIP_WRIST'			=>	'Wrist',
			'LOCALE_EQUIP_HANDS'			=>	'Hands',
			'LOCALE_EQUIP_FINGER'			=>	'Finger',
			'LOCALE_EQUIP_TRINKET'			=>	'Trinket',
			'LOCALE_EQUIP_ONEHAND'			=>	'One-hand',
			'LOCALE_EQUIP_OFFHAND'			=>	'Off Hand',
			'LOCALE_EQUIP_RANGED'			=>	'Ranged',
			'LOCALE_EQUIP_BACK'				=>	'Back',
			'LOCALE_EQUIP_TWOHAND'			=>	'Two-hand',
			'LOCALE_EQUIP_UNK0'				=>	'',
			'LOCALE_EQUIP_TABARD'			=>	'Tabard',
			'LOCALE_EQUIP_MAINHAND'			=>	'Main Hand',
			'LOCALE_EQUIP_CHEST2'			=>	'Chest',
			'LOCALE_EQUIP_OFFHAND2'			=>	'Off Hand',
			'LOCALE_EQUIP_HELDINOFFHAND'	=>	'Held In Off-Hand',
			'LOCALE_EQUIP_PROJECTILE'		=>	'Projectile',
			'LOCALE_EQUIP_THROWN'			=>	'Thrown',
			'LOCALE_EQUIP_RANGED2'			=>	'Ranged',
			'LOCALE_EQUIP_UNK1'				=>	'',
			'LOCALE_EQUIP_RELIC'			=>	'Relic',
			// armor type
			'LOCALE_ARMOR_CLOTH'	=>	'Cloth',
			'LOCALE_ARMOR_LEATHER'	=>	'Leather',
			'LOCALE_ARMOR_MAIL'		=>	'Mail',
			'LOCALE_ARMOR_PLATE'	=>	'Plate',
			'LOCALE_ARMOR_BUCKLER'	=>	'',
			'LOCALE_ARMOR_SHIELD'	=>	'Shield',
			'LOCALE_ARMOR_LIBRAM'	=>	'Libram',
			'LOCALE_ARMOR_IDOL'		=>	'Idol',
			'LOCALE_ARMOR_TOTEM'	=>	'Totem',
			// weapon type
			'LOCALE_WEAPON_AXE1H'		=>	'Axe',
			'LOCALE_WEAPON_AXE2H'		=>	'Axe',
			'LOCALE_WEAPON_BOW'			=>	'Bow',
			'LOCALE_WEAPON_GUN'			=>	'Gun',
			'LOCALE_WEAPON_MACE1H'		=>	'Mace',
			'LOCALE_WEAPON_MACE2H'		=>	'Mace',
			'LOCALE_WEAPON_POLEARM'		=>	'Polearm',
			'LOCALE_WEAPON_SWORD1H'		=>	'Sword',
			'LOCALE_WEAPON_SWORD2H'		=>	'Sword',
			'LOCALE_WEAPON_OBSOLETE'	=>	'',
			'LOCALE_WEAPON_STAFF'		=>	'Staff',
			'LOCALE_WEAPON_EXOTIC'		=>	'',
			'LOCALE_WEAPON_EXOTIC2'		=>	'',
			'LOCALE_WEAPON_FIST'		=>	'Fist Weapon',
			'LOCALE_WEAPON_MISC'		=>	'Miscellaneous',
			'LOCALE_WEAPON_DAGGER'		=>	'Dagger',
			'LOCALE_WEAPON_THROWN'		=>	'Thrown',
			'LOCALE_WEAPON_SPEAR'		=>	'',
			'LOCALE_WEAPON_CROSSBOW'	=>	'Crossbow',
			'LOCALE_WEAPON_WAND'		=>	'Wand',
			'LOCALE_WEAPON_FISHINGPOLE'	=>	'Fishing Pole',
			// projectile type
			'LOCALE_PROJECTILE_WAND'	=>	'',
			'LOCALE_PROJECTILE_BOLT'	=>	'',
			'LOCALE_PROJECTILE_ARROW'	=>	'Arrow',
			'LOCALE_PROJECTILE_BULLET'	=>	'Bullet',
			'LOCALE_PROJECTILE_THROWN'	=>	'',
			// damage
			'LOCALE_DAMAGE_PRE'		=>	' ',
			'LOCALE_DAMAGE_POST'	=>	' Damage',
			'LOCALE_DAMAGE_HOLY'	=>	'Holy',
			'LOCALE_DAMAGE_FIRE'	=>	'Fire',
			'LOCALE_DAMAGE_FROST'	=>	'Frost',
			'LOCALE_DAMAGE_ARCANE'	=>	'Arcane',
			'LOCALE_DAMAGE_SHADOW'	=>	'Shadow',
			'LOCALE_DAMAGE_NATURE'	=>	'Nature',
			// stats
			'LOCALE_STAT_STRENGTH'	=>	' Strength',
			'LOCALE_STAT_STAMINA'	=>	' Stamina',
			'LOCALE_STAT_INTELLECT'	=>	' Intellect',
			'LOCALE_STAT_SPIRIT'	=>	' Spirit',
			'LOCALE_STAT_AGILITY'	=>	' Agility',
			'LOCALE_STAT_HEALTH'	=>	' of Health.',
			// green bonuses
			'LOCALE_GBONUS_DEFENCE'				=>	'Increases defense rating by %d p.',
			'LOCALE_GBONUS_DODGE'				=>	'Increases your dodge rating by %d p.',
			'LOCALE_GBONUS_PARRY'				=>	'Increases your parry rating by %d p.',
			'LOCALE_GBONUS_SHIELDBLOCK'			=>	'Increases your shield block rating by %d p.',
			'LOCALE_GBONUS_SPELLHIT_RATING'		=>	'Improves spell hit rating by %d p.',
			'LOCALE_GBONUS_MELEECRIT_RATING'	=>	'Improves melee critical strike rating by %d p.',
			'LOCALE_GBONUS_RANGEDCRIT_RATING'	=>	'Improves ranged critical strike rating by %d p.',
			'LOCALE_GBONUS_SPELLCRIT_RATING'	=>	'Improves spell critical strike rating by %d p.',
			'LOCALE_GBONUS_SPELLHASTE_RATING'	=>	'Improves spell haste rating by %d p.',
			'LOCALE_GBONUS_HIT_RATING'			=>	'Increases your hit rating by %d p.',
			'LOCALE_GBONUS_CRIT_RATING'			=>	'Increases your critical strike rating by %d p.',
			'LOCALE_GBONUS_RESILIENCE_RATING'	=>	'Improves your resilience rating by %d p.',
			'LOCALE_GBONUS_HASTE_RATING'		=>	'Improves haste rating by %d p.',
			'LOCALE_GBONUS_EXPERTISE_RATING'	=>	'Increases your expertise rating by %d p.',
			'LOCALE_GBONUS_RESTOREMANA'			=>	'Restores %d mana per 5 sec.',
			'LOCALE_GBONUS_ATTACKPOWER'			=>	'Increases attack power by %d p.',
			'LOCALE_GBONUS_ARMORPENETRATION'	=>	'Increases your armor penetration rating by %d p.',
			'LOCALE_GBONUS_SPELLPOWER'			=>	'Improves spell power by %d p.',
			'LOCALE_GBONUS_HEALTHREGEN'      =>  'Restores %d health per 5 sec.',
			'LOCALE_GBONUS_SPELLPENETRATION'    =>  'Increases spell penetration by %d.',
			'LOCALE_GBONUS_BLOCK'        =>  'Increases the block value of your shield by %d.',
			'LOCALE_GBONUS_UNKNOWN'				=>	'Unknown Bonus #%d',
			'LOCALE_GBONUS_CHANCEONHIT'			=>	'Chance on hit: ',
			'LOCALE_GBONUS_EQUIP'				=>	'Equip: ',
			'LOCALE_GBONUS_USE'					=>	'Use: ',
			'LOCALE_GBONUS_CHARGES'					=>	'charges',
			'LOCALE_GBONUS_EXPENDABLE'					=>	'expendable',
			'LOCALE_GBONUS_HIT_TAKEN_MELEE_RATING' =>	'Improves melee hit avoidance rating by %d p.',
			'LOCALE_GBONUS_HIT_TAKEN_SPELL_RATING' =>	'Improves spell hit avoidance rating by %d p.',
			'LOCALE_GBONUS_HASTE_MELEE_RATING' =>	'Improves melee haste rating by %d p.',
			'LOCALE_GBONUS_RANGED_ATTACK_POWER' =>	'Increases ranged attack power by %d p.',
			'LOCALE_COOLDOWN'					=>	'cooldown',
			'LOCALE_COMBAT_RATING'				=>	'%s&nbsp;@&nbsp;L%d',
			// sockets
			'LOCALE_SOCKET_META'	=>	'Meta Socket',
			'LOCALE_SOCKET_RED'		=>	'Red Socket',
			'LOCALE_SOCKET_YELLOW'	=>	'Yellow Socket',
			'LOCALE_SOCKET_BLUE'	=>	'Blue Socket',
			'LOCALE_SOCKET_BONUS'	=>	'Socket Bonus',
			
			// misc
			'LOCALE_SPEED'			=>	'Speed',
			'LOCALE_UNIQUE'			=>	'Unique',
			'LOCALE_START_QUEST'	=>	'This Item Begins a Quest',
			'LOCALE_SLOT'			=>	' Slot ',
			'LOCALE_DPS'			=>	'damage per second',
			'LOCALE_DPS2'			=>	'damage per second',
			'LOCALE_DPS_ADDS'		=>	'Adds',
			'LOCALE_ARMOR'			=>	'Armor',
			'LOCALE_BLOCK'			=>	'Block',
			'LOCALE_REQUIRES'		=>	'Requires',
			'LOCALE_REQUIRES_LEVEL'	=>	'Requires Level',
			'LOCALE_DURABILITY'		=>	'Durability',
			'LOCALE_CLASSES'		=>	'Classes',
			'LOCALE_VALUE_DELIM'	=>	' to ',
			'LOCALE_REAGENTS'		=>	'Reagents: ',
			'LOCALE_TOOLS'			=>	'Tools: ',
			'LOCALE_HEROIC'			=>	' (Heroic)',
			'LOCALE_CRITERIA'		=>	'Criteria',
			'LOCALE_GLYPH_OF'		=>	'Glyph of ',
			'LOCALE_SECONDS'		=>	' seconds',
			'LOCALE_MINUTES'		=>	' minutes',
			'LOCALE_SECONDS_REMAINING'		=>	' seconds remaining.',
			'LOCALE_MINUTES_REMAINING'		=>	' minute(s) remaining.',
			'LOCALE_OF_MANA_BASE'		=>	'% of base mana.',
			'LOCALE_MINUTES_CD'		=>	' min. cooldown.',
			'LOCALE_SECONDS_CD'		=>	' sec. cooldown.',
			'LOCALE_INSTANT'		=>	' Instant.',
			'LOCALE_SEC'		=>	'seg',
			'LOCALE_M'		=>	'm',
			'LOCALE_CAST'		=>	'Hechizo de ',
			'LOCALE_RANGE'		=>	'Alcance de ',
		));
		break;
}
?>