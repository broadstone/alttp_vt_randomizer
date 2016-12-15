<?php namespace Randomizer\Region;

use Randomizer\Item;
use Randomizer\Location;
use Randomizer\Region;
use Randomizer\Support\LocationCollection;
use Randomizer\World;

class LightWorld extends Region {
	protected $name = 'Light World';

	public function __construct(World $world) {
		parent::__construct($world);

		$this->locations = new LocationCollection([
			new Location\Npc("Uncle", 0x2DF45, null, $this),
			new Location\Chest("[cave-034] Hyrule Castle secret entrance", 0xE971, null, $this),
			new Location\Chest("[cave-018] Graveyard - top right grave", 0xE97A, null, $this),
			new Location\Chest("[cave-047] Dam", 0xE98C, null, $this),
			new Location\Chest("[cave-040] Link's House", 0xE9BC, null, $this),
			new Location\Chest("[cave-031] Tavern", 0xE9CE, null, $this),
			new Location\Chest("[cave-026] chicken house", 0xE9E9, null, $this),
			new Location\Chest("[cave-044] Aginah's cave", 0xE9F2, null, $this),
			new Location\Chest("[cave-035] Sahasrahla's Hut [left chest]", 0xEA82, null, $this),
			new Location\Chest("[cave-035] Sahasrahla's Hut [center chest]", 0xEA85, null, $this),
			new Location\Chest("[cave-035] Sahasrahla's Hut [right chest]", 0xEA88, null, $this),
			new Location\Chest("[cave-021] Kakariko well [top chest]", 0xEA8E, null, $this),
			new Location\Chest("[cave-021] Kakariko well [left chest row of 3]", 0xEA91, null, $this),
			new Location\Chest("[cave-021] Kakariko well [center chest row of 3]", 0xEA94, null, $this),
			new Location\Chest("[cave-021] Kakariko well [right chest row of 3]", 0xEA97, null, $this),
			new Location\Chest("[cave-021] Kakariko well [bottom chest]", 0xEA9A, null, $this),
			new Location\Chest("[cave-022-B1] Thief's hut [top chest]", 0xEB0F, null, $this),
			new Location\Chest("[cave-022-B1] Thief's hut [top left chest]", 0xEB12, null, $this),
			new Location\Chest("[cave-022-B1] Thief's hut [top right chest]", 0xEB15, null, $this),
			new Location\Chest("[cave-022-B1] Thief's hut [bottom left chest]", 0xEB18, null, $this),
			new Location\Chest("[cave-022-B1] Thief's hut [bottom right chest]", 0xEB1B, null, $this),
			new Location\Chest("[cave-016] cave under rocks west of Santuary", 0xEB3F, null, $this),
			new Location\Chest("[cave-050] cave southwest of Lake Hylia [bottom left chest]", 0xEB42, null, $this),
			new Location\Chest("[cave-050] cave southwest of Lake Hylia [top left chest]", 0xEB45, null, $this),
			new Location\Chest("[cave-050] cave southwest of Lake Hylia [top right chest]", 0xEB48, null, $this),
			new Location\Chest("[cave-050] cave southwest of Lake Hylia [bottom right chest]", 0xEB4B, null, $this),
			new Location\Chest("[cave-051] Ice Cave", 0xEB4E, null, $this),
			new Location\Npc("Bottle Vendor", 0x2EB18, null, $this),
			new Location\Npc("Sahasrahla", 0x2F1FC, null, $this),
			new Location\Npc("Magic Bat", 0x180015, null, $this),
			new Location\Npc("Sick Kid", 0x339CF, null, $this),
			new Location\Npc("Purple Chest", 0x33D68, null, $this),
			new Location\Npc("Hobo", 0x33E7D, null, $this),
			new Location\Drop("Bombos Tablet", 0x180017, null, $this),
			new Location\Npc("King Zora", 0xEE1C3, null, $this),
			new Location\Standing("Piece of Heart (Thieves' Forest Hideout)", 0x180000, null, $this),
			new Location\Standing("Piece of Heart (Lumberjack Tree)", 0x180001, null, $this),
			new Location\Standing("Piece of Heart (south of Haunted Grove)", 0x180003, null, $this),
			new Location\Standing("Piece of Heart (Graveyard)", 0x180004, null, $this),
			new Location\Standing("Piece of Heart (Desert - northeast corner)", 0x180005, null, $this),
			new Location\Npc("[cave-050] cave southwest of Lake Hylia - generous guy", 0x180010, null, $this),
			new Location\Dash("Library", 0x180012, null, $this),
			new Location\Standing("Mushroom", 0x180013, null, $this),
			new Location\Npc("Witch", 0x180014, null, $this),
			new Location\Standing("Piece of Heart (Maze Race)", 0x180142, null, $this),
			new Location\Standing("Piece of Heart (Desert - west side)", 0x180143, null, $this),
			new Location\Standing("Piece of Heart (Lake Hylia)", 0x180144, null, $this),
			new Location\Standing("Piece of Heart (Dam)", 0x180145, null, $this),
			new Location\Standing("Piece of Heart (Zora's River)", 0x180149, null, $this),
			new Location\Dig("Haunted Grove item", 0x18014A, null, $this),
		]);
	}

	public function initNoMajorGlitches() {
		$this->locations["Uncle"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-034] Hyrule Castle secret entrance"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-018] Graveyard - top right grave"]->setRequirements(function($locations, $items) {
			return (($items->canAccessNorthWestDarkWorld() && $items->has('MagicMirror'))
				|| $items->has('TitansMitt')) && $items->has('PegasusBoots');
		});

		$this->locations["[cave-047] Dam"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-040] Link's House"]->setRequirements(function($locations, $items) {
			return $items->has('PowerGlove') && $items->has('TitansMitt');
		});

		$this->locations["[cave-031] Tavern"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-026] chicken house"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-044] Aginah's cave"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-035] Sahasrahla's Hut [left chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-035] Sahasrahla's Hut [center chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-035] Sahasrahla's Hut [right chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-021] Kakariko well [top chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-021] Kakariko well [left chest row of 3]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-021] Kakariko well [center chest row of 3]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-021] Kakariko well [right chest row of 3]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-021] Kakariko well [bottom chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-022-B1] Thief's hut [top chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-022-B1] Thief's hut [top left chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-022-B1] Thief's hut [top right chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-022-B1] Thief's hut [bottom left chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-022-B1] Thief's hut [bottom right chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-016] cave under rocks west of Santuary"]->setRequirements(function($locations, $items) {
			return $items->has('PegasusBoots');
		});

		$this->locations["[cave-050] cave southwest of Lake Hylia [bottom left chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-050] cave southwest of Lake Hylia [top left chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-050] cave southwest of Lake Hylia [top right chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-050] cave southwest of Lake Hylia [bottom right chest]"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["[cave-051] Ice Cave"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Bottle Vendor"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Sahasrahla"]->setRequirements(function($locations, $items) {
			$c1 = Item::get('PendantOfCourage');

			return  ($this->world->getRegion('Eastern Palace')->hasPrize($c1) && $this->world->getRegion('Eastern Palace')->canComplete($locations, $items))
				|| ($this->world->getRegion('Desert Palace')->hasPrize($c1) && $this->world->getRegion('Desert Palace')->canComplete($locations, $items))
				|| ($this->world->getRegion('Tower of Hera')->hasPrize($c1) && $this->world->getRegion('Tower of Hera')->canComplete($locations, $items))
				|| ($this->world->getRegion('Palace of Darkness')->hasPrize($c1) && $this->world->getRegion('Palace of Darkness')->canComplete($locations, $items))
				|| ($this->world->getRegion('Swamp Palace')->hasPrize($c1) && $this->world->getRegion('Swamp Palace')->canComplete($locations, $items))
				|| ($this->world->getRegion('Skull Woods')->hasPrize($c1) && $this->world->getRegion('Skull Woods')->canComplete($locations, $items))
				|| ($this->world->getRegion('Thieves Town')->hasPrize($c1) && $this->world->getRegion('Thieves Town')->canComplete($locations, $items))
				|| ($this->world->getRegion('Ice Palace')->hasPrize($c1) && $this->world->getRegion('Ice Palace')->canComplete($locations, $items))
				|| ($this->world->getRegion('Misery Mire')->hasPrize($c1) && $this->world->getRegion('Misery Mire')->canComplete($locations, $items))
				|| ($this->world->getRegion('Turtle Rock')->hasPrize($c1) && $this->world->getRegion('Turtle Rock')->canComplete($locations, $items));
		});

		$this->locations["Magic Bat"]->setRequirements(function($locations, $items) {
			return $items->has('Powder')
				&& ($items->has('Hammer')
					|| ($items->has('MoonPearl') && $items->has('MagicMirror') && $items->has('TitansMitt')));
		});

		$this->locations["Sick Kid"]->setRequirements(function($locations, $items) {
			return $items->hasABottle();
		});

		$this->locations["Purple Chest"]->setRequirements(function($locations, $items) {
			return $items->has('MagicMirror') && $items->has('TitansMitt') && $items->has("MoonPearl");
		});

		$this->locations["Hobo"]->setRequirements(function($locations, $items) {
			return $items->has('Flippers');
		});

		$this->locations["Bombos Tablet"]->setRequirements(function($locations, $items) {
			return $items->has('BookOfMudora') && $items->canUpgradeSword()
				&& $items->canAccessSouthDarkWorld() && $items->has('MagicMirror');
		});

		$this->locations["King Zora"]->setRequirements(function($locations, $items) {
			return $items->canLiftRocks() || $items->has('Flippers');
		});

		$this->locations["Piece of Heart (Thieves' Forest Hideout)"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Piece of Heart (Lumberjack Tree)"]->setRequirements(function($locations, $items) {
			return $items->canDefeatAgahnim1();
		});

		$this->locations["Piece of Heart (south of Haunted Grove)"]->setRequirements(function($locations, $items) {
			return $items->canAccessSouthDarkWorld() && $items->has('MagicMirror');
		});

		$this->locations["Piece of Heart (Graveyard)"]->setRequirements(function($locations, $items) {
			return $items->canAccessNorthWestDarkWorld() && $items->has('MagicMirror');
		});

		$this->locations["Piece of Heart (Desert - northeast corner)"]->setRequirements(function($locations, $items) {
			return $items->canFly() && $items->has('TitansMitt') && $items->has('MagicMirror');
		});

		$this->locations["[cave-050] cave southwest of Lake Hylia - generous guy"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Library"]->setRequirements(function($locations, $items) {
			return $items->has('PegasusBoots');
		});

		$this->locations["Mushroom"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Witch"]->setRequirements(function($locations, $items) {
			return $items->has('Mushroom');
		});

		$this->locations["Piece of Heart (Maze Race)"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Piece of Heart (Desert - west side)"]->setRequirements(function($locations, $items) {
			return $items->has('BookOfMudora')
				|| ($items->has('MagicMirror') && $items->has('TitansMitt') && $items->canFly());
		});

		$this->locations["Piece of Heart (Lake Hylia)"]->setRequirements(function($locations, $items) {
			return $items->has('Flippers') && $items->has('MoonPearl') && $items->has('MagicMirror')
				&& $items->canAccessSouthDarkWorld();;
		});

		$this->locations["Piece of Heart (Dam)"]->setRequirements(function($locations, $items) {
			return true;
		});

		$this->locations["Piece of Heart (Zora's River)"]->setRequirements(function($locations, $items) {
			return $items->has('Flippers');
		});

		$this->locations["Haunted Grove item"]->setRequirements(function($locations, $items) {
			return $items->has('Shovel');
		});

		return $this;
	}
}
