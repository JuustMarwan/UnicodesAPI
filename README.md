<div align="center">
  <a href="https://github.com/JuustMarwan/UnicodesAPI">
    <img src="icon.png" alt="Logo" width="auto" height="70">
  </a>
<h2 align="center">UnicodesAPI</h2>

  <p align="center">
    A Pocketmine Plugin For Accessing And Using Minecraft Bedrock Unicode Characters At Ease <img src="images/heart.png" alt="heart" width="auto" height="13">.
    <br />
    <a href="https://poggit.pmmp.io/p/UnicodesAPI"><img src="https://poggit.pmmp.io/shield.state/UnicodesAPI"></a>
    <a href="https://poggit.pmmp.io/p/UnicodesAPI"><img src="https://poggit.pmmp.io/shield.dl.total/UnicodesAPI"></a>
    <br />
    <a href="https://github.com/JuustMarwan/UnicodesAPI/releases">Releases</a>
    ·
    <a href="https://github.com/JuustMarwan/UnicodesAPI/issues">Report Issue</a>
    ·
    <a href="https://wiki.bedrock.dev/concepts/emojis">Unicodes Wiki</a>
  </p>
</div>
<br />

### Before Using UnicodesAPI:
![](./images/before.png)

### After Using UnicodesAPI:
![](./images/after.png)

<br />

### Using Unicode Character:
```php
use UnicodesAPI/Base as UnicodesAPI;

echo UnicodesAPI::MINECOIN;
sendMessage(UnicodesAPI::MINECOIN);
```

### Using **replace()** function:
The replace function will replace the unicode character name put in curly braces in the string given.
```php
use UnicodesAPI/Base as UnicodesAPI;

//Method 1
UnicodesAPI::replace("{MINECOIN} is a currency {HEART}.");

//Method 2
$message = $event->getMessage();
UnicodesAPI::replace($message);
```

### Config or Settings:
```yml
---
# If This Is Set true Unicode Name Written In {} While PlayerChatEvent() Will Be Replaced With Actual Unicode Characters.
# But If It's Set False Unicode Name Won't Be Replaced.
Unicode-Auto-Replacing: true
...
```

<br />

### Supported Characters List:

|               Name               |   Platform  | Character | Unicode |                     In game                    | In-Code Name |
|:--------------------------------:|:-----------:|:---------:|:-------:|:----------------------------------------------:|:------------:|
|             A Button             |    Xbox     |          |  U+E000 |            ![](./images/xbox-a.png)            | A_BUTTON |
|             B Button             |    Xbox     |          |  U+E001 |            ![](./images/xbox-b.png)            | B_BUTTON |
|             X Button             |    Xbox     |          |  U+E002 |            ![](./images/xbox-x.png)            | X_BUTTON |
|             Y Button             |    Xbox     |          |  U+E003 |            ![](./images/xbox-y.png)            | Y_BUTTON |
|             LB Button            |    Xbox     |          |  U+E004 |            ![](./images/xbox-lb.png)           | LB_BUTTON |
|             RB Button            |    Xbox     |          |  U+E005 |            ![](./images/xbox-rb.png)           | RB_BUTTON |
|             LT Button            |    Xbox     |          |  U+E006 |            ![](./images/xbox-lt.png)           | LT_BUTTON |
|             RT Button            |    Xbox     |          |  U+E007 |            ![](./images/xbox-rt.png)           | RT_BUTTON |
|           Select Button          |    Xbox     |          |  U+E008 |          ![](./images/xbox-select.png)         | SELECT_BUTTON |
|           Start Button           |    Xbox     |          |  U+E009 |          ![](./images/xbox-start.png)          | START_BUTTON |
|         Left Stick Button        |    Xbox     |          |  U+E00A |            ![](./images/xbox-ls.png)           | LEFT_STICK_BUTTON |
|        Right Stick Button        |    Xbox     |          |  U+E00B |            ![](./images/xbox-rs.png)           | RIGHT_STICK_BUTTON |
|          D-Pad Up Button         |    Xbox     |          |  U+E00C |           ![](./images/xbox-d-up.png)          | DPAD_UP_BUTTON |
|         D-Pad Left Button        |    Xbox     |          |  U+E00D |          ![](./images/xbox-d-left.png)         | DPAD_LEFT_BUTTON |
|         D-Pad Down Button        |    Xbox     |          |  U+E00E |          ![](./images/xbox-d-down.png)         | DPAD_DOWN_BUTTON |
|        D-Pad Right Button        |    Xbox     |          |  U+E00F |         ![](./images/xbox-d-right.png)         | DPAD_RIGHT_BUTTON |
|          A Button Bright         |    Xbox     |          |  U+E010 |         ![](./images/xbox-a-bright.png)        | A_BUTTON_BRIGHT |
|          B Button Bright         |    Xbox     |          |  U+E011 |         ![](./images/xbox-b-bright.png)        | B_BUTTON_BRIGHT |
|          X Button Bright         |    Xbox     |          |  U+E012 |         ![](./images/xbox-x-bright.png)        | X_BUTTON_BRIGHT |
|          Y Button Bright         |    Xbox     |          |  U+E013 |         ![](./images/xbox-y-bright.png)        | Y_BUTTON_BRIGHT |
|               Jump               |    Mobile   |          |  U+E014 |             ![](./images/jump.png)             | JUMP |
|              Attack              |    Mobile   |          |  U+E015 |            ![](./images/attack.png)            | ATTACK |
|             Joystick             |    Mobile   |          |  U+E016 |           ![](./images/joystick.png)           | JOYSTICK |
|             Crosshair            |    Mobile   |          |  U+E017 |           ![](./images/crosshair.png)          | CROSSHAIR |
|             Interact             |    Mobile   |          |  U+E018 |            ![](./images/interact.png)          | INTERACT |
|              Crouch              |    Mobile   |          |  U+E019 |            ![](./images/crouch.png)            | CROUCH |
|              Sprint              |    Mobile   |          |  U+E01A |            ![](./images/sprint.png)            | SPRINT |
|              Fly Up              |    Mobile   |          |  U+E01B |            ![](./images/fly-up.png)            | FLY_UP |
|             Fly Down             |    Mobile   |          |  U+E01C |           ![](./images/fly-down.png)           | FLY_DOWN |
|             Dismount             |    Mobile   |          |  U+E01D |            ![](./images/dismount.png)          | DISMOUNT |
|           Cross Button           | PlayStation |          |  U+E020 |             ![](./images/ps-x.png)             | CROSS_BUTTON |
|           Circle Button          | PlayStation |          |  U+E021 |             ![](./images/ps-o.png)             | CIRCLE_BUTTON |
|           Square Button          | PlayStation |          |  U+E022 |           ![](./images/ps-square.png)          | SQUARE_BUTTON |
|          Triangle Button         | PlayStation |          |  U+E023 |          ![](./images/ps-triangle.png)         | TRIANGLE_BUTTON |
|             L1 Button            | PlayStation |          |  U+E024 |             ![](./images/ps-l1.png)            | L1_BUTTON |
|             R1 Button            | PlayStation |          |  U+E025 |             ![](./images/ps-r1.png)            | R1_BUTTON |
|             L2 Button            | PlayStation |          |  U+E026 |             ![](./images/ps-l2.png)            | L2_BUTTON |
|             R2 Button            | PlayStation |          |  U+E027 |             ![](./images/ps-r2.png)            | R2_BUTTON |
|           Select Button          | PlayStation |          |  U+E028 |           ![](./images/ps-select.png)          | SELECT_BUTTON_PS |
|           Start Button           | PlayStation |          |  U+E029 |           ![](./images/ps-start.png)           | START_BUTTON_PS |
|         Left Stick Button        | PlayStation |          |  U+E02A |             ![](./images/ps-l3.png)            | LEFT_STICK_BUTTON_PS |
|        Right Stick Button        | PlayStation |          |  U+E02B |             ![](./images/ps-r3.png)            | RIGHT_STICK_BUTTON_PS |
|          D-Pad Up Button         | PlayStation |          |  U+E02C |            ![](./images/ps-d-up.png)           | DPAD_UP_BUTTON_PS |
|         D-Pad Left Button        | PlayStation |          |  U+E02D |           ![](./images/ps-d-left.png)          | DPAD_LEFT_BUTTON_PS |
|         D-Pad Down Button        | PlayStation |          |  U+E02E |           ![](./images/ps-d-down.png)          | DPAD_DOWN_BUTTON_PS |
|        D-Pad Right Button        | PlayStation |          |  U+E02F |          ![](./images/ps-d-right.png)          | DPAD_RIGHT_BUTTON_PS |
|             A Button             |   Switch    |          |  U+E040 |          ![](./images/nintendo-a.png)          | A_BUTTON_SWITCH |
|             B Button             |   Switch    |          |  U+E041 |          ![](./images/nintendo-b.png)          | B_BUTTON_SWITCH |
|             X Button             |   Switch    |          |  U+E042 |          ![](./images/nintendo-x.png)          | X_BUTTON_SWITCH |
|             Y Button             |   Switch    |          |  U+E043 |          ![](./images/nintendo-y.png)          | Y_BUTTON_SWITCH |
|             L Button             |   Switch    |          |  U+E044 |          ![](./images/nintendo-l.png)          | L_BUTTON_SWITCH |
|             R Button             |   Switch    |          |  U+E045 |          ![](./images/nintendo-r.png)          | R_BUTTON_SWITCH |
|             ZL Button            |   Switch    |          |  U+E046 |          ![](./images/nintendo-zl.png)         | ZL_BUTTON_SWITCH |
|             ZR Button            |   Switch    |          |  U+E047 |          ![](./images/nintendo-zr.png)         | ZR_BUTTON_SWITCH |
|             - Button             |   Switch    |          |  U+E048 |        ![](./images/nintendo-minus.png)        | MINUS_BUTTON_SWITCH |
|             + Button             |   Switch    |          |  U+E049 |         ![](./images/nintendo-plus.png)        | PLUS_BUTTON_SWITCH |
|         Left Stick Button        |   Switch    |          |  U+E04A |          ![](./images/nintendo-ls.png)         | LEFT_STICK_BUTTON_SWITCH |
|        Right Stick Button        |   Switch    |          |  U+E04B |          ![](./images/nintendo-rs.png)         | RIGHT_STICK_BUTTON_SWITCH |
|          D-Pad Up Button         |   Switch    |          |  U+E04C |         ![](./images/nintendo-d-up.png)        | DPAD_UP_BUTTON_SWITCH |
|         D-Pad Left Button        |   Switch    |          |  U+E04D |        ![](./images/nintendo-d-left.png)       | DPAD_LEFT_BUTTON_SWITCH |
|         D-Pad Down Button        |   Switch    |          |  U+E04E |        ![](./images/nintendo-d-down.png)       | DPAD_DOWN_BUTTON_SWITCH |
|        D-Pad Right Button        |   Switch    |          |  U+E04F |       ![](./images/nintendo-d-right.png)       | DPAD_RIGHT_BUTTON_SWITCH |
|         Left Mouse Button        |   Windows   |          |  U+E060 |          ![](./images/left-mouse.png)          | LEFT_MOUSE_BUTTON |
|        Right Mouse Button        |   Windows   |          |  U+E061 |          ![](./images/right-mouse.png)         | RIGHT_MOUSE_BUTTON |
|        Middle Mouse Button       |   Windows   |          |  U+E062 |         ![](./images/middle-mouse.png)         | MIDDLE_MOUSE_BUTTON |
|               Mouse              |   Windows   |          |  U+E063 |             ![](./images/mouse.png)            | MOUSE |
|         Forward Arrow New        |    Mobile   |          |  U+E065 |        ![](./images/forward-arrow-new.png)     | FORWARD_ARROW_NEW |
|          Left Arrow New          |    Mobile   |          |  U+E066 |         ![](./images/left-arrow-new.png)       | LEFT_ARROW_NEW |
|           Down Arrow New         |    Mobile   |          |  U+E067 |          ![](./images/down-arrow-new.png)      | DOWN_ARROW_NEW |
|           Right Arrow New        |    Mobile   |          |  U+E068 |          ![](./images/right-arrow-new.png)     | RIGHT_ARROW_NEW |
|          Jump Button New         |    Mobile   |          |  U+E069 |          ![](./images/jump-button-new.png)     | JUMP_BUTTON_NEW |
|         Crouch Button New        |    Mobile   |          |  U+E06A |        ![](./images/crouch-button-new.png)     | CROUCH_BUTTON_NEW |
|          Inventory Button        |    Mobile   |          |  U+E06B |         ![](./images/inventory-button.png)     | INVENTORY_BUTTON |
|         Fly Up Button New        |    Mobile   |          |  U+E06C |        ![](./images/fly-up-button-new.png)     | FLY_UP_BUTTON_NEW |
|        Fly Down Button New       |    Mobile   |          |  U+E06D |      ![](./images/fly-down-button-new.png)     | FLY_DOWN_BUTTON_NEW |
|       Left Mouse Button New      |   Windows   |          |  U+E070 |         ![](./images/left-mouse-new.png)       | LEFT_MOUSE_BUTTON_NEW |
|       Right Mouse Button New     |   Windows   |          |  U+E071 |        ![](./images/right-mouse-new.png)       | RIGHT_MOUSE_BUTTON_NEW |
|      Middle Mouse Button New     |   Windows   |          |  U+E072 |        ![](./images/middle-mouse-new.png)      | MIDDLE_MOUSE_BUTTON_NEW |
|             Mouse New            |   Windows   |          |  U+E073 |           ![](./images/mouse-new.png)          | MOUSE_NEW |
|        Foward Arrow Button       |    Mobile   |          |  U+E080 |         ![](./images/forward-arrow.png)        | FORWARD_ARROW_BUTTON |
|         Left Arrow Button        |    Mobile   |          |  U+E081 |          ![](./images/left-arrow.png)          | LEFT_ARROW_BUTTON |
|      Backwards Arrow Button      |    Mobile   |          |  U+E082 |          ![](./images/down-arrow.png)          | BACKWARDS_ARROW_BUTTON |
|        Right Arrow Button        |    Mobile   |          |  U+E083 |          ![](./images/right-arrow.png)         | RIGHT_ARROW_BUTTON |
|            Jump Button           |    Mobile   |          |  U+E084 |          ![](./images/jump-button.png)         | JUMP_BUTTON |
|           Crouch Button          |    Mobile   |          |  U+E085 |         ![](./images/crouch-button.png)        | CROUCH_BUTTON |
|           Fly Up Button          |    Mobile   |          |  U+E086 |         ![](./images/fly-up-button.png)        | FLY_UP_BUTTON |
|          Fly Down Button         |    Mobile   |          |  U+E087 |        ![](./images/fly-down-button.png)       | FLY_DOWN_BUTTON |
|        Craftable Toggle On       |     All     |          |  U+E0A0 |         ![](./images/craftable-on.png)         | CRAFTABLE_TOGGLE_ON |
|       Craftable Toggle Off       |     All     |          |  U+E0A1 |         ![](./images/craftable-off.png)        | CRAFTABLE_TOGGLE_OFF |
|             Food Icon            |     All     |          |  U+E100 |             ![](./images/food.png)             | FOOD_ICON |
|            Armor Icon            |     All     |          |  U+E101 |            ![](./images/armour.png)            | ARMOR_ICON |
|             Minecoin             |     All     |          |  U+E102 |           ![](./images/minecoin.png)           | MINECOIN |
|        Code Builder Button       |     All     |          |  U+E103 |         ![](./images/code-builder.png)         | CODE_BUILDER_BUTTON |
|      Immersive Reader Button     |     All     |          |  U+E104 |    ![](./images/immersive-reader-button.png)   | IMMERSIVE_READER_BUTTON |
|               Token              |     All     |          |  U+E105 |             ![](./images/token.png)            | TOKEN |
|            Hollow Star           |     All     |          |  U+E106 |          ![](./images/hollow-star.png)         | HOLLOW_STAR |
|             Solid Star           |     All     |          |  U+E107 |          ![](./images/solid-star.png)          | SOLID_STAR |
|           Wooden Pickaxe         |     All     |          |  U+E108 |         ![](./images/wooden-pickaxe.png)       | WOODEN_PICKAXE |
|            Wooden Sword          |     All     |          |  U+E109 |          ![](./images/wooden-sword.png)        | WOODEN_SWORD |
|           Crafting Table         |     All     |          |  U+E10A |          ![](./images/crafting-table.png)      | CRAFTING_TABLE |
|              Furnace             |     All     |          |  U+E10B |            ![](./images/furnace.png)           | FURNACE |
|               Heart              |     All     |          |  U+E10C |             ![](./images/heart.png)            | HEART |
|         Left Grab Button         |  Windows MR |          |  U+E0C0 |             ![](./images/mr-lg.png)            | LEFT_GRAB_BUTTON |
|         Right Grab Button        |  Windows MR |          |  U+E0C1 |             ![](./images/mr-rg.png)            | RIGHT_GRAB_BUTTON |
|            Menu Button           |  Windows MR |          |  U+E0C2 |            ![](./images/mr-menu.png)           | MENU_BUTTON |
|         Left Stick Button        |  Windows MR |          |  U+E0C3 |             ![](./images/mr-ls.png)            | LEFT_STICK_BUTTON_MR |
|        Right Stick Button        |  Windows MR |          |  U+E0C4 |             ![](./images/mr-rs.png)            | RIGHT_STICK_BUTTON_MR |
|       Left Touchpad Button       |  Windows MR |          |  U+E0C5 |       ![](./images/mr-left-touchpad.png)       | LEFT_TOUCHPAD_BUTTON |
|  Left Touchpad Horizontal Button |  Windows MR |          |  U+E0C6 |  ![](./images/mr-left-touchpad-horizontal.png) | LEFT_TOUCHPAD_HORIZONTAL_BUTTON |
|   Left Touchpad Vertical Button  |  Windows MR |          |  U+E0C7 |   ![](./images/mr-left-touchpad-vertical.png)  | LEFT_TOUCHPAD_VERTICAL_BUTTON |
|       Right Touchpad Button      |  Windows MR |          |  U+E0C8 |       ![](./images/mr-right-touchpad.png)      | RIGHT_TOUCHPAD_BUTTON |
| Right Touchpad Horizontal Button |  Windows MR |          |  U+E0C9 | ![](./images/mr-right-touchpad-horizontal.png) | RIGHT_TOUCHPAD_HORIZONTAL_BUTTON |
|  Right Touchpad Vertical Button  |  Windows MR |          |  U+E0CA |  ![](./images/mr-right-touchpad-vertical.png)  | RIGHT_TOUCHPAD_VERTICAL_BUTTON |
|        Left Trigger Button       |  Windows MR |          |  U+E0CB |             ![](./images/mr-lt.png)            | LEFT_TRIGGER_BUTTON |
|       Right Trigger Button       |  Windows MR |          |  U+E0CC |             ![](./images/mr-rt.png)            | RIGHT_TRIGGER_BUTTON |
|              Windows             |  Windows MR |          |  U+E0CD |          ![](./images/mr-windows.png)          | WINDOWS |
|             0 Button             |     Rift    |          |  U+E0E0 |           ![](./images/rift-zero.png)          | ZERO_BUTTON |
|             A Button             |     Rift    |          |  U+E0E1 |            ![](./images/rift-a.png)            | RIFT_A_BUTTON |
|             B Button             |     Rift    |          |  U+E0E2 |            ![](./images/rift-b.png)            | RIFT_B_BUTTON |
|         Left Grab Button         |     Rift    |          |  U+E0E3 |             ![](images/rift-lg.png)            | LEFT_GRAB_BUTTON_RIFT |
|         Right Grab Button        |     Rift    |          |  U+E0E4 |             ![](images/rift-rg.png)            | RIGHT_GRAB_BUTTON_RIFT |
|         Left Stick Button        |     Rift    |          |  U+E0E5 |            ![](./images/rift-ls.png)           | LEFT_STICK_BUTTON_RIFT |
|        Right Stick Button        |     Rift    |          |  U+E0E6 |            ![](./images/rift-rs.png)           | RIGHT_STICK_BUTTON_RIFT |
|        Left Trigger Button       |     Rift    |          |  U+E0E7 |            ![](./images/rift-lt.png)           | LEFT_TRIGGER_BUTTON_RIFT |
|       Right Trigger Button       |     Rift    |          |  U+E0E8 |            ![](./images/rift-rt.png)           | RIGHT_TRIGGER_BUTTON_RIFT |
|             X Button             |     Rift    |          |  U+E0E9 |            ![](./images/rift-x.png)            | RIFT_X_BUTTON |
|             Y Button             |     Rift    |          |  U+E0EA |            ![](./images/rift-y.png)            | RIFT_Y_BUTTON |
