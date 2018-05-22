<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-05-22 05:46:02
$dictionary["a123_demoModule"]["fields"]["a123_demomodule_users"] = array (
  'name' => 'a123_demomodule_users',
  'type' => 'link',
  'relationship' => 'a123_demomodule_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_A123_DEMOMODULE_USERS_FROM_USERS_TITLE',
  'id_name' => 'a123_demomodule_usersusers_ida',
);
$dictionary["a123_demoModule"]["fields"]["a123_demomodule_users_name"] = array (
  'name' => 'a123_demomodule_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A123_DEMOMODULE_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'a123_demomodule_usersusers_ida',
  'link' => 'a123_demomodule_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["a123_demoModule"]["fields"]["a123_demomodule_usersusers_ida"] = array (
  'name' => 'a123_demomodule_usersusers_ida',
  'type' => 'link',
  'relationship' => 'a123_demomodule_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A123_DEMOMODULE_USERS_FROM_A123_DEMOMODULE_TITLE',
);

?>