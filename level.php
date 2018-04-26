<?php
$webConf = array(
  'user_xp_on_doing_something' => 10,
  'level_1_xp_cap' => 100,
  'level_2_xp_cap' => 200,
  'level_3_xp_cap' => 300,
  'level_4_xp_cap' => 400,
  'level_5_xp_cap' => 500,
);
$userData = array(
  'user_id' => 1,
  'level' => 0,
  'xp' => 0,
);

//Sum user's xp with user_xp_on_doing_something
$total_xp = $userData['xp']+$webConf['user_xp_on_doing_something'];

//Set current level and xp as 0 before loop
$level = 0;
$data['xp_level_0'] = 0;

$i = $userData['level'];
while($i <= 5) {
  if($total_xp >= $webConf['level_'.$i.'_xp_cap']) {
    //Set current level by xp cap
    $level = $i;
  }

  //If level is less than what is supposed to be, upgrade it and cut the xp
  if($userData['level'] < $level) {
    $userData['level'] = $level;
    $userData['xp'] = $total_xp - $webConf['level_'.$ref_data['level'].'_xp_cap'];
  }

  $i++;
}
