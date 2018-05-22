<?php
// created: 2018-05-22 05:46:02
$dictionary["a123_demomodule_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a123_demomodule_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'a123_demoModule',
      'rhs_table' => 'a123_demomodule',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a123_demomodule_users_c',
      'join_key_lhs' => 'a123_demomodule_usersusers_ida',
      'join_key_rhs' => 'a123_demomodule_usersa123_demomodule_idb',
    ),
  ),
  'table' => 'a123_demomodule_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'a123_demomodule_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'a123_demomodule_usersa123_demomodule_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a123_demomodule_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a123_demomodule_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a123_demomodule_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a123_demomodule_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a123_demomodule_usersa123_demomodule_idb',
      ),
    ),
  ),
);