<?php
/*
 *
  ____                 _ _     _____           _                       _
 |  _ \               | | |   |_   _|         | |                     (_)
 | |_) | ___ _ __   __| | |_    | |  _ __   __| | ___  _ __   ___  ___ _  __ _
 |  _ < / _ \ '_ \ / _` | __|   | | | '_ \ / _` |/ _ \| '_ \ / _ \/ __| |/ _` |
 | |_) |  __/ | | | (_| | |_   _| |_| | | | (_| | (_) | | | |  __/\__ \ | (_| |
 |____/ \___|_| |_|\__,_|\__| |_____|_| |_|\__,_|\___/|_| |_|\___||___/_|\__,_|

 Please don't modify this file because it may be overwritten when re-generated.
 */

if(isset($rs1) && isset($crs1)) {
    $check = explode(",",$crs1);
    if(in_array($rs1,$check)) echo 'active';
}
if(isset($rs2) && isset($crs2)) {
    $check = explode(",",$crs2);
    if(in_array($rs2,$check)) echo 'active';
}
if(isset($rs3) && isset($crs3)) {
    $check = explode(",",$crs3);
    if(in_array($rs3,$check)) echo 'active';
}
if(isset($rs4) && isset($crs4)) {
    $check = explode(",",$crs4);
    if(in_array($rs4,$check)) echo 'active';
}
