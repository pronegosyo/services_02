<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_services-02-additional-content',
		'title' => 'Services 02 : Additional Content',
		'fields' => array (
			array (
				'key' => 'field_5386f3b9ea330',
				'label' => 'Services List',
				'name' => 'services_list',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5386f3c5ea331',
						'label' => 'Image',
						'name' => 'item_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_5386f3e2ea332',
						'label' => 'Item Name',
						'name' => 'item_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5386f405ea333',
						'label' => 'Description',
						'name' => 'item_description',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Item',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'custom_template',
					'operator' => '==',
					'value' => 'services_02',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 5,
	));
}
