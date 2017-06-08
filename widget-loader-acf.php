<?php
$widget_config = array (
  'key' => 'widget_content-group',
  'name' => 'content-group',
  'label' => 'Content Group',
  'display' => 'block',
  'sub_fields' => array (
	 	array (
			'key' => 'cg_basic_details_tab',
			'label' => 'Basic Details',
			'type' => 'tab',
			'placement' => 'left',
    ),
    array (
      'key' => 'widget_content-group_id',
      'label' => 'ID',
      'name' => 'id',
      'type' => 'text',
      'instructions' => 'Give a unique identifier for this group, e.g. tuscany. If used in conjunction with the Quicklink widget, the IDs used should match.',
      'wrapper' => array (
        'width' => '49%'
      ),
    ),
    array (
      'key' => 'widget_content-group_type',
      'label' => 'Type',
      'name' => 'type',
      'type' => 'select',
      'instructions' => 'Select whether this is the start or end of the group of content.</br></br>',
      'required' => 1,
      'wrapper' => array (
        'width' => '49%',
      ),
      'choices' => array (
        'start' => 'Start',
        'end' => 'End',
      ),
    ),
    array (
      'key' => 'widget_content-group_style',
      'label' => 'Style',
      'name' => 'style',
      'type' => 'select',
      'instructions' => 'How do you want your content group to be presented? "Expander" shows a short preview of the content in the group, with a button the user can then expand to read the rest. "Tabbed" content relies on a Quicklink widget to reveal the selected tab. "Quick Link" is a navigation tool for the user. ',
      'choices' => array (
        'expander' => 'Expander',
        'tabs' => 'Tabs',
        'quick-link' => 'Quick Link',
      ),
    ),
  	array (
      'key' => 'cg_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => 'left',
    ),
  ),
);

$widget_config["content-types"] = array('sponsored_longform', 'sponsored_hub'); // this widget only shows in partnerships cpt
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
