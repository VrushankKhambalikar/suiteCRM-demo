<?php
 // created: 2018-05-22 05:46:02
$layout_defs["Users"]["subpanel_setup"]['a123_demomodule_users'] = array (
  'order' => 100,
  'module' => 'a123_demoModule',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A123_DEMOMODULE_USERS_FROM_A123_DEMOMODULE_TITLE',
  'get_subpanel_data' => 'a123_demomodule_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
