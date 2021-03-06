-- Renombrar campos a versión antigua de quest_template
ALTER TABLE `quest_template`
   CHANGE `Id` `entry` mediumint(8) UNSIGNED NOT NULL default '0',
   CHANGE `Level` `QuestLevel` smallint(3) NOT NULL DEFAULT '1',
   CHANGE `RequiredSkillId` `SkillOrClassMask` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
   CHANGE `RequiredSkillPoints` `RequiredSkillValue` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
   CHANGE `RequiredFactionId1` `RepObjectiveFaction` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
   CHANGE `RequiredFactionId2` `RepObjectiveFaction2` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
   CHANGE `RequiredFactionValue1` `RepObjectiveValue` mediumint(9) default '0' NOT NULL,
   CHANGE `RequiredFactionValue2` `RepObjectiveValue2` mediumint(9) default '0' NOT NULL,
   CHANGE `Flags` `QuestFlags` int(10) UNSIGNED default '0' NOT NULL,
   CHANGE `SpecialFlags` `SpecialFlags` tinyint(3) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardTitleId` `CharTitleId` tinyint(3) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredPlayerKills` `PlayersSlain` tinyint(3) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardTalents` `BonusTalents` tinyint(3) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardArenaPoints` `RewardArenaPoints` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `NextQuestIdChain` `NextQuestInChain` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardXPId` `RewXPId` tinyint(2) UNSIGNED default '0' NOT NULL,
   CHANGE `SourceItemId` `SrcItemId` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `SourceItemCount` `SrcItemCount` tinyint(3) UNSIGNED default '0' NOT NULL,
   CHANGE `SourceSpellId` `SrcSpell` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemId1` `ReqItemId1` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemId2` `ReqItemId2` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemId3` `ReqItemId3` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemId4` `ReqItemId4` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemId5` `ReqItemId5` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemId6` `ReqItemId6` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemCount1` `ReqItemCount1` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemCount2` `ReqItemCount2` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemCount3` `ReqItemCount3` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemCount4` `ReqItemCount4` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemCount5` `ReqItemCount5` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredItemCount6` `ReqItemCount6` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemId1` `ReqSourceId1` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemId2` `ReqSourceId2` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemId3` `ReqSourceId3` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemId4` `ReqSourceId4` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemCount1` `ReqSourceCount1` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemCount2` `ReqSourceCount2` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemCount3` `ReqSourceCount3` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSourceItemCount4` `ReqSourceCount4` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredNpcOrGo1` `ReqCreatureOrGOId1` mediumint(9) default '0' NOT NULL,
   CHANGE `RequiredNpcOrGo2` `ReqCreatureOrGOId2` mediumint(9) default '0' NOT NULL,
   CHANGE `RequiredNpcOrGo3` `ReqCreatureOrGOId3` mediumint(9) default '0' NOT NULL,
   CHANGE `RequiredNpcOrGo4` `ReqCreatureOrGOId4` mediumint(9) default '0' NOT NULL,
   CHANGE `RequiredNpcOrGoCount1` `ReqCreatureOrGOCount1` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredNpcOrGoCount2` `ReqCreatureOrGOCount2` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredNpcOrGoCount3` `ReqCreatureOrGOCount3` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredNpcOrGoCount4` `ReqCreatureOrGOCount4` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSpellCast1` `ReqSpellCast1` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSpellCast2` `ReqSpellCast2` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSpellCast3` `ReqSpellCast3` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RequiredSpellCast4` `ReqSpellCast4` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemId1` `RewChoiceItemId1` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemId2` `RewChoiceItemId2` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemId3` `RewChoiceItemId3` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemId4` `RewChoiceItemId4` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemId5` `RewChoiceItemId5` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemId6` `RewChoiceItemId6` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemCount1` `RewChoiceItemCount1` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemCount2` `RewChoiceItemCount2` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemCount3` `RewChoiceItemCount3` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemCount4` `RewChoiceItemCount4` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemCount5` `RewChoiceItemCount5` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardChoiceItemCount6` `RewChoiceItemCount6` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemId1` `RewItemId1` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemId2` `RewItemId2` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemId3` `RewItemId3` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemId4` `RewItemId4` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemCount1` `RewItemCount1` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemCount2` `RewItemCount2` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemCount3` `RewItemCount3` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardItemCount4` `RewItemCount4` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardFactionId1` `RewRepFaction1` smallint(5) UNSIGNED default '0' NOT NULL comment 'faction id from Faction.dbc in this case',
   CHANGE `RewardFactionId2` `RewRepFaction2` smallint(5) UNSIGNED default '0' NOT NULL comment 'faction id from Faction.dbc in this case',
   CHANGE `RewardFactionId3` `RewRepFaction3` smallint(5) UNSIGNED default '0' NOT NULL comment 'faction id from Faction.dbc in this case',
   CHANGE `RewardFactionId4` `RewRepFaction4` smallint(5) UNSIGNED default '0' NOT NULL comment 'faction id from Faction.dbc in this case',
   CHANGE `RewardFactionId5` `RewRepFaction5` smallint(5) UNSIGNED default '0' NOT NULL comment 'faction id from Faction.dbc in this case',
   CHANGE `RewardFactionValueId1` `RewRepValueId1` mediumint(6) default '0' NOT NULL,
   CHANGE `RewardFactionValueId2` `RewRepValueId2` mediumint(6) default '0' NOT NULL,
   CHANGE `RewardFactionValueId3` `RewRepValueId3` mediumint(6) default '0' NOT NULL,
   CHANGE `RewardFactionValueId4` `RewRepValueId4` mediumint(6) default '0' NOT NULL,
   CHANGE `RewardFactionValueId5` `RewRepValueId5` mediumint(6) default '0' NOT NULL,
   CHANGE `RewardFactionValueIdOverride1` `RewRepValue1` mediumint(9) default '0' NOT NULL,
   CHANGE `RewardFactionValueIdOverride2` `RewRepValue2` mediumint(9) default '0' NOT NULL,
   CHANGE `RewardFactionValueIdOverride3` `RewRepValue3` mediumint(9) default '0' NOT NULL,
   CHANGE `RewardFactionValueIdOverride4` `RewRepValue4` mediumint(9) default '0' NOT NULL,
   CHANGE `RewardFactionValueIdOverride5` `RewRepValue5` mediumint(9) default '0' NOT NULL,
   CHANGE `RewardHonor` `RewHonorAddition` int(10) default '0' NOT NULL,
   CHANGE `RewardHonorMultiplier` `RewHonorMultiplier` float default '1' NOT NULL,
   CHANGE `RewardOrRequiredMoney` `RewOrReqMoney` int(11) default '0' NOT NULL,
   CHANGE `RewardMoneyMaxLevel` `RewMoneyMaxLevel` int(10) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardSpell` `RewSpell` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardSpellCast` `RewSpellCast` int(11) default '0' NOT NULL,
   CHANGE `RewardMailTemplateId` `RewMailTemplateId` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `RewardMailDelay` `RewMailDelaySecs` int(11) UNSIGNED default '0' NOT NULL,
   CHANGE `PointOption` `PointOpt` mediumint(8) UNSIGNED default '0' NOT NULL,
   CHANGE `DetailsEmote1` `DetailsEmote1` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `EmoteOnIncomplete` `IncompleteEmote` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `EmoteOnComplete` `CompleteEmote` smallint(5) UNSIGNED default '0' NOT NULL,
   CHANGE `Unknown0` `unk0` TINYINT(2) UNSIGNED NOT NULL DEFAULT '0';
