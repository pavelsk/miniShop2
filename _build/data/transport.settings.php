<?php

$settings = array();

$tmp = array(
	'ms2_category_grid_fields' => array(
		'value' => 'pagetitle,article,price,weight,thumb,new,favorite,popular'
		,'xtype' => 'textarea'
		,'area' => 'ms2_category'
	)
	,'ms2_category_show_nested_products' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_category'
	)
	,'ms2_category_show_comments' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_category'
	)
	,'ms2_category_remember_tabs' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_category'
	)
	,'ms2_category_id_as_alias' => array(
		'value' => false
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_category'
	)
	,'ms2_category_content_default' => array(
		'value' => "[[!getPage?\n	&element=`msProducts`\n]]\n\n<div class=\"pagination\">\n	<ul>[[!+page.nav]]</ul>\n</div>"
		,'xtype' => 'textarea'
		,'area' => 'ms2_category'
	)


	,'ms2_product_main_fields' => array(
		'value' => 'pagetitle,longtitle,introtext,price,old_price,article,weight,content,publishedon,pub_date,unpub_date,template,parent,alias,menutitle,searchable,cacheable,richtext,uri_override,uri,hidemenu,show_in_tree'
		,'xtype' => 'textarea'
		,'area' => 'ms2_product'
	)
	,'ms2_product_extra_fields' => array(
		'value' => 'color,size,vendor,new,popular,favorite,made_in,tags'
		,'xtype' => 'textarea'
		,'area' => 'ms2_product'
	)
	,'ms2_product_show_comments' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)
	,'ms2_template_product_default' => array(
		'value' => ''
		,'xtype' => 'modx-combo-template'
		,'area' => 'ms2_product'
	)
	,'ms2_product_show_in_tree_default' => array(
		'value' => false
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)
	,'ms2_product_source_default' => array(
		'value' => 0
		,'xtype' => 'modx-combo-source'
		,'area' => 'ms2_product'
	)
	,'ms2_product_thumbnail_size' => array(
		'value' => '120x90'
		,'xtype' => 'textfield'
		,'area' => 'ms2_product'
	)
	,'ms2_product_vertical_tabs' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)
	,'ms2_product_remember_tabs' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)
	,'ms2_product_id_as_alias' => array(
		'value' => false
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)
	,'ms2_price_format' => array(
		'value' => '[2, ".", " "]'
		,'xtype' => 'textfield'
		,'area' => 'ms2_product'
	)
	,'ms2_weight_format' => array(
		'value' => '[3, ".", " "]'
		,'xtype' => 'textfield'
		,'area' => 'ms2_product'
	)
	,'ms2_price_snippet' => array(
		'value' => ''
		,'xtype' => 'textfield'
		,'area' => 'ms2_product'
	)
	,'ms2_price_format_no_zeros' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)
	,'ms2_weight_snippet' => array(
		'value' => ''
		,'xtype' => 'textfield'
		,'area' => 'ms2_product'
	)
	,'ms2_weight_format_no_zeros' => array(
		'value' => true
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_product'
	)


	,'ms2_cart_handler_class' => array(
		'value' => 'msCartHandler'
		,'xtype' => 'textfield'
		,'area' => 'ms2_cart'
	)


	,'ms2_order_grid_fields' => array(
		'value' => 'id,customer,num,status,cost,weight,delivery,payment,createdon,updatedon,comment'
		,'xtype' => 'textarea'
		,'area' => 'ms2_order'
	)
	,'ms2_order_address_fields' => array(
		'xtype' => 'textarea'
		,'value' => 'receiver,phone,index,country,region,city,metro,street,building,room,comment'
		,'area' => 'ms2_order'
	)
	,'ms2_order_product_fields' => array(
		'xtype' => 'textarea'
		,'value' => 'product_pagetitle,product_article,weight,price,count,cost'
		,'area' => 'ms2_order'
	)

	,'ms2_order_handler_class' => array(
		'value' => 'msOrderHandler'
		,'xtype' => 'textfield'
		,'area' => 'ms2_order'
	)
	,'ms2_order_user_groups' => array(
		'value' => ''
		,'xtype' => 'textfield'
		,'area' => 'ms2_order'
	)
	,'ms2_date_format' => array(
		'value' => '%d.%m.%y <span class="gray">%H:%M</span>'
		,'xtype' => 'textfield'
		,'area' => 'ms2_order'
	)
	,'ms2_email_manager' => array(
		'value' => ''
		,'xtype' => 'textfield'
		,'area' => 'ms2_order'
	)


	,'ms2_frontend_css' => array(
		'value' => '[[+cssUrl]]web/default.css'
		,'xtype' => 'textfield'
		,'area' => 'ms2_frontend'
	)
	,'ms2_frontend_js' => array(
		'value' => '[[+jsUrl]]web/default.js'
		,'xtype' => 'textfield'
		,'area' => 'ms2_frontend'
	)


	,'ms2_payment_paypal_api_url' => array(
		'value' => 'https://api-3t.paypal.com/nvp'
		,'xtype' => 'textfield'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_checkout_url' => array(
		'value' => 'https://www.paypal.com/webscr?cmd=_express-checkout&token='
		,'xtype' => 'textfield'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_currency' => array(
		'value' => 'USD'
		,'xtype' => 'textfield'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_user' => array(
		'value' => ''
		,'xtype' => 'textfield'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_pwd' => array(
		'value' => ''
		,'xtype' => 'text-password'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_signature' => array(
		'value' => ''
		,'xtype' => 'text-password'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_success_id' => array(
		'value' => ''
		,'xtype' => 'numberfield'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_cancel_id' => array(
		'value' => ''
		,'xtype' => 'numberfield'
		,'area' => 'ms2_payment'
	)
	,'ms2_payment_paypal_cancel_order' => array(
		'value' => false
		,'xtype' => 'combo-boolean'
		,'area' => 'ms2_payment'
	)
);


foreach ($tmp as $k => $v) {
	/* @var modSystemSetting $setting */
	$setting = $modx->newObject('modSystemSetting');
	$setting->fromArray(array_merge(
		array(
			'key' => $k
			,'namespace' => 'minishop2'
		), $v
	),'',true,true);

	$settings[] = $setting;
}

return $settings;