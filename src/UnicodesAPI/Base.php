<?php

declare(strict_types = 1);

namespace UnicodesAPI;

use UnicodesAPI\ChatListener;

use pocketmine\plugin\PluginBase;

class Base extends PluginBase{

  public static Base $instance;
	
  public static $autoReplacing = true;
	
  public const A_BUTTON = '';
  public const B_BUTTON = '';
  public const X_BUTTON = '';
  public const Y_BUTTON = '';
  public const LB_BUTTON = '';
  public const RB_BUTTON = '';
  public const LT_BUTTON = '';
  public const RT_BUTTON = '';
  public const SELECT_BUTTON = '';
  public const START_BUTTON = '';
  public const LEFT_STICK_BUTTON = '';
  public const RIGHT_STICK_BUTTON = '';
  public const DPAD_UP_BUTTON = '';
  public const DPAD_LEFT_BUTTON = '';
  public const DPAD_DOWN_BUTTON = '';
  public const DPAD_RIGHT_BUTTON = '';
  public const A_BUTTON_BRIGHT = '';
  public const B_BUTTON_BRIGHT = '';
  public const X_BUTTON_BRIGHT = '';
  public const Y_BUTTON_BRIGHT = '';
  public const JUMP = '';
  public const ATTACK = '';
  public const JOYSTICK = '';
  public const CROSSHAIR = '';
  public const INTERACT = '';
  public const CROUCH = '';
  public const SPRINT = '';
  public const FLY_UP = '';
  public const FLY_DOWN = '';
  public const DISMOUNT = '';
  public const CROSS_BUTTON = '';
  public const CIRCLE_BUTTON = '';
  public const SQUARE_BUTTON = '';
  public const TRIANGLE_BUTTON = '';
  public const L1_BUTTON = '';
  public const R1_BUTTON = '';
  public const L2_BUTTON = '';
  public const R2_BUTTON = '';
  public const SELECT_BUTTON_PS = '';
  public const START_BUTTON_PS = '';
  public const LEFT_STICK_BUTTON_PS = '';
  public const RIGHT_STICK_BUTTON_PS = '';
  public const DPAD_UP_BUTTON_PS = '';
  public const DPAD_LEFT_BUTTON_PS = '';
  public const DPAD_DOWN_BUTTON_PS = '';
  public const DPAD_RIGHT_BUTTON_PS = '';
  public const A_BUTTON_SWITCH = '';
  public const B_BUTTON_SWITCH = '';
  public const X_BUTTON_SWITCH = '';
  public const Y_BUTTON_SWITCH = '';
  public const L_BUTTON_SWITCH = '';
  public const R_BUTTON_SWITCH = '';
  public const ZL_BUTTON_SWITCH = '';
  public const ZR_BUTTON_SWITCH = '';
  public const MINUS_BUTTON_SWITCH = '';
  public const PLUS_BUTTON_SWITCH = '';
  public const LEFT_STICK_BUTTON_SWITCH = '';
  public const RIGHT_STICK_BUTTON_SWITCH = '';
  public const DPAD_UP_BUTTON_SWITCH = '';
  public const DPAD_LEFT_BUTTON_SWITCH = '';
  public const DPAD_DOWN_BUTTON_SWITCH = '';
  public const DPAD_RIGHT_BUTTON_SWITCH = '';
  public const LEFT_MOUSE_BUTTON = '';
  public const RIGHT_MOUSE_BUTTON = '';
  public const MIDDLE_MOUSE_BUTTON = '';
  public const MOUSE = '';
  public const FORWARD_ARROW_NEW = '';
  public const LEFT_ARROW_NEW = '';
  public const DOWN_ARROW_NEW = '';
  public const RIGHT_ARROW_NEW = '';
  public const JUMP_BUTTON_NEW = '';
  public const CROUCH_BUTTON_NEW = '';
  public const INVENTORY_BUTTON = '';
  public const FLY_UP_BUTTON_NEW = '';
  public const FLY_DOWN_BUTTON_NEW = '';
  public const LEFT_MOUSE_BUTTON_NEW = '';
  public const RIGHT_MOUSE_BUTTON_NEW = '';
  public const MIDDLE_MOUSE_BUTTON_NEW = '';
  public const MOUSE_NEW = '';
  public const FORWARD_ARROW_BUTTON = '';
  public const LEFT_ARROW_BUTTON = '';
  public const BACKWARDS_ARROW_BUTTON = '';
  public const RIGHT_ARROW_BUTTON = '';
  public const JUMP_BUTTON = '';
  public const CROUCH_BUTTON = '';
  public const FLY_UP_BUTTON = '';
  public const FLY_DOWN_BUTTON = '';
  public const CRAFTABLE_TOGGLE_ON = '';
  public const CRAFTABLE_TOGGLE_OFF = '';
  public const FOOD_ICON = '';
  public const ARMOR_ICON = '';
  public const IMMERSIVE_READER_BUTTON = '';
  public const HOLLOW_STAR = '';
  public const SOLID_STAR = '';
  public const WOODEN_PICKAXE = '';
  public const WOODEN_SWORD = '';
  public const CRAFTING_TABLE = '';
  public const FURNACE = '';
  public const HEART = '';
  public const LEFT_GRAB_BUTTON = '';
  public const RIGHT_GRAB_BUTTON = '';
  public const MENU_BUTTON = '';
  public const LEFT_STICK_BUTTON_MR = '';
  public const RIGHT_STICK_BUTTON_MR = '';
  public const LEFT_TOUCHPAD_BUTTON = '';
  public const LEFT_TOUCHPAD_HORIZONTAL_BUTTON = '';
  public const LEFT_TOUCHPAD_VERTICAL_BUTTON = '';
  public const RIGHT_TOUCHPAD_BUTTON = '';
  public const RIGHT_TOUCHPAD_HORIZONTAL_BUTTON = '';
  public const RIGHT_TOUCHPAD_VERTICAL_BUTTON = '';
  public const LEFT_TRIGGER_BUTTON = '';
  public const RIGHT_TRIGGER_BUTTON = '';
  public const WINDOWS = '';
  public const ZERO_BUTTON = '';
  public const RIFT_A_BUTTON = '';
  public const RIFT_B_BUTTON = '';
  public const LEFT_GRAB_BUTTON_RIFT = '';
  public const RIGHT_GRAB_BUTTON_RIFT = '';
  public const LEFT_STICK_BUTTON_RIFT = '';
  public const RIGHT_STICK_BUTTON_RIFT = '';
  public const LEFT_TRIGGER_BUTTON_RIFT = '';
  public const RIGHT_TRIGGER_BUTTON_RIFT = '';
  public const RIFT_X_BUTTON = '';
  public const RIFT_Y_BUTTON = '';

  public static function getInstance() : Base{
	  
    return self::$instance;
	  
  }

  public function onLoad() : void{
	  
    self::$instance = $this;
	  
  }

  public function onEnable() : void{

    $this->saveDefaultConfig();
    $config = $this->getConfig()->getAll();

    self::$autoReplacing = $config["Unicode-Auto-Replacing"];

    $this->getServer()->getPluginManager()->registerEvents(new ChatListener(), $this);
	  
    $this->getLogger()->notice('UnicodesAPI Enabled Successfully!');
	  
  }

  public static function replace(string $text): string {
	  
    $replacements = [
      "{MINECOIN}" => "",
      "{CODE_BUILDER_BUTTON}" => "",
      "{TOKEN}" => "",
      "{A_BUTTON}" => "",
      "{B_BUTTON}" => "",
      "{X_BUTTON}" => "",
      "{Y_BUTTON}" => "",
      "{LB_BUTTON}" => "",
      "{RB_BUTTON}" => "",
      "{LT_BUTTON}" => "",
      "{RT_BUTTON}" => "",
      "{SELECT_BUTTON}" => "",
      "{START_BUTTON}" => "",
      "{LEFT_STICK_BUTTON}" => "",
      "{RIGHT_STICK_BUTTON}" => "",
      "{DPAD_UP_BUTTON}" => "",
      "{DPAD_LEFT_BUTTON}" => "",
      "{DPAD_DOWN_BUTTON}" => "",
      "{DPAD_RIGHT_BUTTON}" => "",
      "{A_BUTTON_BRIGHT}" => "",
      "{B_BUTTON_BRIGHT}" => "",
      "{X_BUTTON_BRIGHT}" => "",
      "{Y_BUTTON_BRIGHT}" => "",
      "{JUMP}" => "",
      "{ATTACK}" => "",
      "{JOYSTICK}" => "",
      "{CROSSHAIR}" => "",
      "{INTERACT}" => "",
      "{CROUCH}" => "",
      "{SPRINT}" => "",
      "{FLY_UP}" => "",
      "{FLY_DOWN}" => "",
      "{DISMOUNT}" => "",
      "{CROSS_BUTTON}" => "",
      "{CIRCLE_BUTTON}" => "",
      "{SQUARE_BUTTON}" => "",
      "{TRIANGLE_BUTTON}" => "",
      "{L1_BUTTON}" => "",
      "{R1_BUTTON}" => "",
      "{L2_BUTTON}" => "",
      "{R2_BUTTON}" => "",
      "{SELECT_BUTTON_PS}" => "",
      "{START_BUTTON_PS}" => "",
      "{LEFT_STICK_BUTTON_PS}" => "",
      "{RIGHT_STICK_BUTTON_PS}" => "",
      "{DPAD_UP_BUTTON_PS}" => "",
      "{DPAD_LEFT_BUTTON_PS}" => "",
      "{DPAD_DOWN_BUTTON_PS}" => "",
      "{DPAD_RIGHT_BUTTON_PS}" => "",
      "{A_BUTTON_SWITCH}" => "",
      "{B_BUTTON_SWITCH}" => "",
      "{X_BUTTON_SWITCH}" => "",
      "{Y_BUTTON_SWITCH}" => "",
      "{L_BUTTON_SWITCH}" => "",
      "{R_BUTTON_SWITCH}" => "",
      "{ZL_BUTTON_SWITCH}" => "",
      "{ZR_BUTTON_SWITCH}" => "",
      "{MINUS_BUTTON_SWITCH}" => "",
      "{PLUS_BUTTON_SWITCH}" => "",
      "{LEFT_STICK_BUTTON_SWITCH}" => "",
      "{RIGHT_STICK_BUTTON_SWITCH}" => "",
      "{DPAD_UP_BUTTON_SWITCH}" => "",
      "{DPAD_LEFT_BUTTON_SWITCH}" => "",
      "{DPAD_DOWN_BUTTON_SWITCH}" => "",
      "{DPAD_RIGHT_BUTTON_SWITCH}" => "",
      "{LEFT_MOUSE_BUTTON}" => "",
      "{RIGHT_MOUSE_BUTTON}" => "",
      "{MIDDLE_MOUSE_BUTTON}" => "",
      "{MOUSE}" => "",
      "{FORWARD_ARROW_NEW}" => "",
      "{LEFT_ARROW_NEW}" => "",
      "{DOWN_ARROW_NEW}" => "",
      "{RIGHT_ARROW_NEW}" => "",
      "{JUMP_BUTTON_NEW}" => "",
      "{CROUCH_BUTTON_NEW}" => "",
      "{INVENTORY_BUTTON}" => "",
      "{FLY_UP_BUTTON_NEW}" => "",
      "{FLY_DOWN_BUTTON_NEW}" => "",
      "{LEFT_MOUSE_BUTTON_NEW}" => "",
      "{RIGHT_MOUSE_BUTTON_NEW}" => "",
      "{MIDDLE_MOUSE_BUTTON_NEW}" => "",
      "{MOUSE_NEW}" => "",
      "{FORWARD_ARROW_BUTTON}" => "",
      "{LEFT_ARROW_BUTTON}" => "",
      "{BACKWARDS_ARROW_BUTTON}" => "",
      "{RIGHT_ARROW_BUTTON}" => "",
      "{JUMP_BUTTON}" => "",
      "{CROUCH_BUTTON}" => "",
      "{FLY_UP_BUTTON}" => "",
      "{FLY_DOWN_BUTTON}" => "",
      "{CRAFTABLE_TOGGLE_ON}" => "",
      "{CRAFTABLE_TOGGLE_OFF}" => "",
      "{FOOD_ICON}" => "",
      "{ARMOR_ICON}" => "",
      "{IMMERSIVE_READER_BUTTON}" => "",
      "{HOLLOW_STAR}" => "",
      "{SOLID_STAR}" => "",
      "{WOODEN_PICKAXE}" => "",
      "{WOODEN_SWORD}" => "",
      "{CRAFTING_TABLE}" => "",
      "{FURNACE}" => "",
      "{HEART}" => "",
      "{LEFT_GRAB_BUTTON}" => "",
      "{RIGHT_GRAB_BUTTON}" => "",
      "{MENU_BUTTON}" => "",
      "{LEFT_STICK_BUTTON_MR}" => "",
      "{RIGHT_STICK_BUTTON_MR}" => "",
      "{LEFT_TOUCHPAD_BUTTON}" => "",
      "{LEFT_TOUCHPAD_HORIZONTAL_BUTTON}" => "",
      "{LEFT_TOUCHPAD_VERTICAL_BUTTON}" => "",
      "{RIGHT_TOUCHPAD_BUTTON}" => "",
      "{RIGHT_TOUCHPAD_HORIZONTAL_BUTTON}" => "",
      "{RIGHT_TOUCHPAD_VERTICAL_BUTTON}" => "",
      "{LEFT_TRIGGER_BUTTON}" => "",
      "{RIGHT_TRIGGER_BUTTON}" => "",
      "{WINDOWS}" => "",
      "{ZERO_BUTTON}" => "",
      "{RIFT_A_BUTTON}" => "",
      "{RIFT_B_BUTTON}" => "",
      "{LEFT_GRAB_BUTTON_RIFT}" => "",
      "{RIGHT_GRAB_BUTTON_RIFT}" => "",
      "{LEFT_STICK_BUTTON_RIFT}" => "",
      "{RIGHT_STICK_BUTTON_RIFT}" => "",
      "{LEFT_TRIGGER_BUTTON_RIFT}" => "",
      "{RIGHT_TRIGGER_BUTTON_RIFT}" => "",
      "{RIFT_X_BUTTON}" => "",
      "{RIFT_Y_BUTTON}" => ""
    ];
	  
    return str_replace(array_keys($replacements), $replacements, $text);
	  
  }
	
}
