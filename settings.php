<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_stum
 * @copyright 2020 redPIthemes
 *
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;

$ADMIN->add('themes', new admin_category('theme_stum', 'Theme-stum'));
	
	// "settings general" settingpage
	$temp = new admin_settingpage('theme_stum_general',  get_string('settings_general', 'theme_stum'));
		
	// Logo file setting.
    $name = 'theme_stum/logo';
    $title = get_string('logo', 'theme_stum');
    $description = get_string('logodesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Logo resolution.
	$name = 'theme_stum/logo_res';
    $title = get_string('logo_res', 'theme_stum');
    $description = get_string('logo_res_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// favicon.
	$name = 'theme_stum/favicon';
	$title = get_string ('favicon', 'theme_stum');
	$description = get_string ('favicon_desc', 'theme_stum');
	$setting = new admin_setting_configstoredfile( $name, $title, $description, 'favicon', 0, array('maxfiles' => 1, 'accepted_types' => array('.png', '.jpg', '.ico')));
	$setting->set_updatedcallback ('theme_reset_all_caches');
	$temp->add($setting);

	// Fixed or Variable Width.
    $name = 'theme_stum/pagewidth';
    $title = get_string('pagewidth', 'theme_stum');
    $description = get_string('pagewidthdesc', 'theme_stum');
    $default = 1600;
    $choices = array(1600=>get_string('boxed_wide','theme_stum'), 1000=>get_string('boxed_narrow','theme_stum'), 90=>get_string('boxed_variable','theme_stum'), 100=>get_string('full_wide','theme_stum'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// logo position
	$name = 'theme_stum/page_centered_logo';
    $title = get_string('page_centered_logo', 'theme_stum');
    $description = get_string('page_centered_logo_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // course category layout
    $name = 'theme_stum/category_layout';
    $title = get_string('category_layout', 'theme_stum');
    $description = get_string('category_layout_desc', 'theme_stum');
    $default = '0';
    $choices = array(
        '0' => get_string('category_layout_list', 'theme_stum'),
        '1' => get_string('category_layout_grid', 'theme_stum')
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	   
    // Footnote setting.
    $name = 'theme_stum/footnote';
    $title = get_string('footnote', 'theme_stum');
    $description = get_string('footnotedesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Custom CSS file.
    $name = 'theme_stum/customcss';
    $title = get_string('customcss', 'theme_stum');
    $description = get_string('customcssdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$ADMIN->add('theme_stum', $temp);
	
	// "settings background" settingpage
	$temp = new admin_settingpage('theme_stum_background',  get_string('settings_background', 'theme_stum'));
	
	// list with provides backgrounds 
    $name = 'theme_stum/list_bg';
    $title = get_string('list_bg', 'theme_stum');
    $description = get_string('list_bg_desc', 'theme_stum');
    $default = '13';
    $choices = array(
		'13'=>'Stone Wall',
		'0'=>'Country Road',
		'1'=>'Bokeh Background',
		'2'=>'Blurred Background I',
		'3'=>'Blurred Background II',
		'4'=>'Blurred Background III',
		'5'=>'Cream Pixels (Pattern)',
		'6'=>'MochaGrunge (Pattern)',
		'7'=>'Skulls (Pattern)',
		'8'=>'SOS (Pattern)',
		'9'=>'Squairy Light (Pattern)',
		'10'=>'Subtle White Feathers (Pattern)',
		'11'=>'Tweed (Pattern)',
		'12'=>'Wet Snow (Pattern)');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	// upload background image.
    $name = 'theme_stum/pagebackground';
    $title = get_string('pagebackground', 'theme_stum');
    $description = get_string('pagebackgrounddesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// bg repeat.
	$name = 'theme_stum/page_bg_repeat';
    $title = get_string('page_bg_repeat', 'theme_stum');
    $description = get_string('page_bg_repeat_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// upload header background image.
    $name = 'theme_stum/header_background';
    $title = get_string('header_background', 'theme_stum');
    $description = get_string('header_background_desc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'header_background');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// header bg repeat.
	$name = 'theme_stum/header_bg_repeat';
    $title = get_string('header_bg_repeat', 'theme_stum');
    $description = get_string('header_bg_repeat_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// upload course category background image.
    $name = 'theme_stum/category_background';
    $title = get_string('category_background', 'theme_stum');
    $description = get_string('category_background_desc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'category_background');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// banner font color
	$name = 'theme_stum/banner_font_color';
    $title = get_string('banner_font_color', 'theme_stum');
    $description = get_string('banner_font_color_desc', 'theme_stum');
    $default = '0';
    $choices = array(
        '0' => get_string('banner_font_color_opt0', 'theme_stum'),
        '1' => get_string('banner_font_color_opt1', 'theme_stum'),
        '2' => get_string('banner_font_color_opt2', 'theme_stum'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// hide course category background image
	$name = 'theme_stum/hide_category_background';
    $title = get_string('hide_category_background', 'theme_stum');
    $description = get_string('hide_category_background_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_stum', $temp);
		
	// "settings colors" settingpage
	$temp = new admin_settingpage('theme_stum_colors',  get_string('settings_colors', 'theme_stum'));
	
    // Main theme color setting.
    $name = 'theme_stum/maincolor';
    $title = get_string('maincolor', 'theme_stum');
    $description = get_string('maincolordesc', 'theme_stum');
    $default = '#ffae00';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Hover color setting.
    $name = 'theme_stum/mainhovercolor';
    $title = get_string('mainhovercolor', 'theme_stum');
    $description = get_string('mainhovercolordesc', 'theme_stum');
    $default = '#efa300';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Link color setting.
    $name = 'theme_stum/linkcolor';
    $title = get_string('linkcolor', 'theme_stum');
    $description = get_string('linkcolordesc', 'theme_stum');
    $default = '#efa300';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Default Button color setting.
    $name = 'theme_stum/def_buttoncolor';
    $title = get_string('def_buttoncolor', 'theme_stum');
    $description = get_string('def_buttoncolordesc', 'theme_stum');
    $default = '#8ec63f';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Default Button Hover color setting.
    $name = 'theme_stum/def_buttonhovercolor';
    $title = get_string('def_buttonhovercolor', 'theme_stum');
    $description = get_string('def_buttonhovercolordesc', 'theme_stum');
    $default = '#77ae29';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Header color setting.
    $name = 'theme_stum/headercolor';
    $title = get_string('headercolor', 'theme_stum');
    $description = get_string('headercolor_desc', 'theme_stum');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Menu 1. Level color setting.
    $name = 'theme_stum/menufirstlevelcolor';
    $title = get_string('menufirstlevelcolor', 'theme_stum');
    $description = get_string('menufirstlevelcolordesc', 'theme_stum');
    $default = '#3A454b';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Menu 1. Level Links color setting.
    $name = 'theme_stum/menufirstlevel_linkcolor';
    $title = get_string('menufirstlevel_linkcolor', 'theme_stum');
    $description = get_string('menufirstlevel_linkcolordesc', 'theme_stum');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Menu 2. Level color setting.
    $name = 'theme_stum/menusecondlevelcolor';
    $title = get_string('menusecondlevelcolor', 'theme_stum');
    $description = get_string('menusecondlevelcolordesc', 'theme_stum');
    $default = '#f4f4f4';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Menu 2. Level Links color.
    $name = 'theme_stum/menusecondlevel_linkcolor';
    $title = get_string('menusecondlevel_linkcolor', 'theme_stum');
    $description = get_string('menusecondlevel_linkcolordesc', 'theme_stum');
    $default = '#444444';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Footer color setting.
    $name = 'theme_stum/footercolor';
    $title = get_string('footercolor', 'theme_stum');
    $description = get_string('footercolordesc', 'theme_stum');
    $default = '#323A45';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Footer Headings color setting.
    $name = 'theme_stum/footerheadingcolor';
    $title = get_string('footerheadingcolor', 'theme_stum');
    $description = get_string('footerheadingcolordesc', 'theme_stum');
    $default = '#f2f2f2';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Footer Text color setting.
    $name = 'theme_stum/footertextcolor';
    $title = get_string('footertextcolor', 'theme_stum');
    $description = get_string('footertextcolordesc', 'theme_stum');
    $default = '#bdc3c7';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Copyright color setting.
    $name = 'theme_stum/copyrightcolor';
    $title = get_string('copyrightcolor', 'theme_stum');
    $description = get_string('copyrightcolordesc', 'theme_stum');
    $default = '#292F38';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Copyright color setting.
    $name = 'theme_stum/copyright_textcolor';
    $title = get_string('copyright_textcolor', 'theme_stum');
    $description = get_string('copyright_textcolordesc', 'theme_stum');
    $default = '#bdc3c2';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);	
	
	$ADMIN->add('theme_stum', $temp);
	
	// "settings blocks" settingpage
	$temp = new admin_settingpage('theme_stum_blocks',  get_string('settings_blocks', 'theme_stum'));
	
	// block layout
	$name = 'theme_stum/block_layout';
    $title = get_string('block_layout', 'theme_stum');
    $description = get_string('block_layout_desc', 'theme_stum');
    $default = '0';
    $choices = array(
        '0' => get_string('block_layout_opt0', 'theme_stum'),
        '1' => get_string('block_layout_opt1', 'theme_stum'),
        '2' => get_string('block_layout_opt2', 'theme_stum'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// block style
	$name = 'theme_stum/block_style';
    $title = get_string('block_style', 'theme_stum');
    $description = get_string('block_style_desc', 'theme_stum');	
    $default = '0';
    $choices = array(
        '0' => get_string('block_style_opt0', 'theme_stum'),
        '1' => get_string('block_style_opt1', 'theme_stum'),
        '2' => get_string('block_style_opt2', 'theme_stum'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// show block icons	
	$name = 'theme_stum/block_icons';
    $title = get_string('block_icons', 'theme_stum');
    $description = get_string('block_icons_desc', 'theme_stum');	
    $default = '0';
    $choices = array(
        '0' => get_string('block_icons_opt0', 'theme_stum'),
        '1' => get_string('block_icons_opt1', 'theme_stum'),
        '2' => get_string('block_icons_opt2', 'theme_stum'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    $ADMIN->add('theme_stum', $temp);
	
	// "settings socials" settingpage
	$temp = new admin_settingpage('theme_stum_socials',  get_string('settings_socials', 'theme_stum'));
	$temp->add(new admin_setting_heading('theme_stum_socials', get_string('socialsheadingsub', 'theme_stum'),
            format_text(get_string('socialsdesc' , 'theme_stum'), FORMAT_MARKDOWN)));
    
    // Website url setting.
    $name = 'theme_stum/website';
    $title = get_string('website', 'theme_stum');
    $description = get_string('websitedesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Mail setting.
    $name = 'theme_stum/socials_mail';
    $title = get_string('socials_mail', 'theme_stum');
    $description = get_string('socials_mail_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Facebook url setting.
    $name = 'theme_stum/facebook';
    $title = get_string('facebook', 'theme_stum');
    $description = get_string('facebookdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_stum/flickr';
    $title = get_string('flickr', 'theme_stum');
    $description = get_string('flickrdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_stum/twitter';
    $title = get_string('twitter', 'theme_stum');
    $description = get_string('twitterdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_stum/googleplus';
    $title = get_string('googleplus', 'theme_stum');
    $description = get_string('googleplusdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_stum/pinterest';
    $title = get_string('pinterest', 'theme_stum');
    $description = get_string('pinterestdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Instagram url setting.
    $name = 'theme_stum/instagram';
    $title = get_string('instagram', 'theme_stum');
    $description = get_string('instagramdesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_stum/youtube';
    $title = get_string('youtube', 'theme_stum');
    $description = get_string('youtubedesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // LinkedIn url setting.
    $name = 'theme_stum/linkedin';
    $title = get_string('linkedin', 'theme_stum');
    $description = get_string('linkedindesc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// social icons color setting.
    $name = 'theme_stum/socials_color';
    $title = get_string('socials_color', 'theme_stum');
    $description = get_string('socials_color_desc', 'theme_stum');
    $default = '#a9a9a9';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// social icons header
    $name = 'theme_stum/socials_header_bg';
    $title = get_string('socials_header_bg', 'theme_stum');
    $description = get_string('socials_header_bg_desc', 'theme_stum');
    $default = '1';
    $choices = array(
		'0'=>get_string('socials_header_bg_0', 'theme_stum'),
		'1'=>get_string('socials_header_bg_1', 'theme_stum'),
		'2'=>get_string('socials_header_bg_2', 'theme_stum'),
		'3'=>get_string('socials_header_bg_3', 'theme_stum'),
		'4'=>get_string('socials_header_bg_4', 'theme_stum'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// social icons position 
    $name = 'theme_stum/socials_position';
    $title = get_string('socials_position', 'theme_stum');
    $description = get_string('socials_position_desc', 'theme_stum');
    $default = '0';
    $choices = array(
		'0'=>'footer',
		'1'=>'header');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$ADMIN->add('theme_stum', $temp); 
	
	// "settings fonts" settingpage
	$temp = new admin_settingpage('theme_stum_fonts',  get_string('settings_fonts', 'theme_stum'));
	
    // source
    $name = 'theme_stum/fonts_source';
    $title = get_string('fonts_source', 'theme_stum');
    $description = get_string('fonts_source_desc', 'theme_stum');
    $default = 1;
    $choices = array(
        1 => get_string('fonts_source_google', 'theme_stum'),
        2 => get_string('fonts_source_file', 'theme_stum')
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	if (get_config('theme_stum', 'fonts_source') !== "2") {
		
	$name = 'theme_stum/font_body';
    $title = get_string('fontselect_body' , 'theme_stum');
    $description = get_string('fontselectdesc_body', 'theme_stum');
    $default = '1';
    $choices = array(
    	'1'=>'Open Sans',
		'2'=>'Arimo',
		'3'=>'Arvo',
		'4'=>'Bree Serif',
		'5'=>'Cabin',
		'6'=>'Cantata One',
		'7'=>'Crimson Text',
		'8'=>'Encode Sans',
		'9'=>'Enriqueta',
		'10'=>'Gudea',
		'11'=>'Imprima',
		'12'=>'Lekton',
		'13'=>'Nunito',
		'14'=>'Montserrat',
		'15'=>'Playfair Display',
		'16'=>'Pontano Sans',
		'17'=>'PT Sans',
    	'18'=>'Raleway',
		'22'=>'Roboto', 
		'19'=>'Ubuntu',
    	'20'=>'Vollkorn',
		'21'=>'Work Sans');
	 			
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_stum/font_body_size';
    $title = get_string('font_body_size' , 'theme_stum');
    $description = get_string('font_body_size_desc', 'theme_stum');
    $default = '2';
    $choices = array(
    	'1'=>'12px',
		'2'=>'13px',
		'3'=>'14px',
		'4'=>'15px',
		'5'=>'16px');			
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    $name = 'theme_stum/font_heading';
    $title = get_string('fontselect_heading' , 'theme_stum');
    $description = get_string('fontselectdesc_heading', 'theme_stum');
    $default = '1';
    $choices = array(			
		'1'=>'Open Sans',
		'2'=>'Abril Fatface',
		'3'=>'Arimo',
		'4'=>'Arvo',
		'5'=>'Bevan', 
		'6'=>'Bree Serif',
		'7'=>'Cabin',
		'8'=>'Cantata One',
		'9'=>'Crimson Text',
		'10'=>'Encode Sans',
		'11'=>'Enriqueta',
		'12'=>'Gudea',
		'13'=>'Imprima',
		'14'=>'Josefin Sans',
		'15'=>'Lekton',
		'16'=>'Lobster',
		'17'=>'Nunito',
		'18'=>'Montserrat',
		'19'=>'Pacifico',
		'20'=>'Playfair Display',
		'21'=>'Pontano Sans',
		'22'=>'PT Sans',
    	'23'=>'Raleway',
		'28'=>'Roboto', 
		'24'=>'Sansita One',
		'25'=>'Ubuntu',
    	'26'=>'Vollkorn',
		'27'=>'Work Sans');

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_stum/font_languages';
    $title = get_string('font_languages', 'theme_stum');
    $description = get_string('font_languages_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configmulticheckbox($name, $title, $description, $default, array(
        'latin-ext' => get_string('font_languages_latinext', 'theme_stum'),
        'cyrillic' => get_string('font_languages_cyrillic', 'theme_stum'),
        'cyrillic-ext' => get_string('font_languages_cyrillicext', 'theme_stum'),
        'greek' => get_string('font_languages_greek', 'theme_stum'),
        'greek-ext' => get_string('font_languages_greekext', 'theme_stum'),
    ));
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	} else if (get_config('theme_stum', 'fonts_source') === "2") {
	
    // body font.
    $name = 'theme_stum/fonts_file_body';
    $title = get_string('fonts_file_body', 'theme_stum');
    $description = get_string('fonts_file_body_desc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'fonts_file_body');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_stum/font_body_size';
    $title = get_string('font_body_size' , 'theme_stum');
    $description = get_string('font_body_size_desc', 'theme_stum');
    $default = '2';
    $choices = array(
    	'1'=>'12px',
		'2'=>'13px',
		'3'=>'14px',
		'4'=>'15px',
		'5'=>'16px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // headings font.
    $name = 'theme_stum/fonts_file_headings';
    $title = get_string('fonts_file_headings', 'theme_stum');
    $description = get_string('fonts_file_headings_desc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'fonts_file_headings');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_stum/font_headings_weight';
    $title = get_string('font_headings_weight' , 'theme_stum');
    $description = get_string('font_headings_weight_desc', 'theme_stum');
    $default = '1';
    $choices = array(
    	'1'=>'700',
		'2'=>'400',
		'3'=>'300');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	}	
	
	// Font Awesome 5
	$name = 'theme_stum/use_fa5';
    $title = get_string('use_fa5', 'theme_stum');
    $description = get_string('use_fa5_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$ADMIN->add('theme_stum', $temp); 

	// "settings slider" settingpage
	$temp = new admin_settingpage('theme_stum_slider',  get_string('settings_slider', 'theme_stum'));
    $temp->add(new admin_setting_heading('theme_stum_slider', get_string('slideshowheadingsub', 'theme_stum'),
            format_text(get_string('slideshowdesc' , 'theme_stum'), FORMAT_MARKDOWN)));

    /*
     * Slide 1
     */	
	 $temp->add(new admin_setting_heading('theme_stum_slider_slide1', get_string('slideshow_slide1', 'theme_stum'),NULL));
	
    // Image.
    $name = 'theme_stum/slide1image';
    $title = get_string('slideimage', 'theme_stum');
    $description = get_string('slideimagedesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Title.
    $name = 'theme_stum/slide1';
    $title = get_string('slidetitle', 'theme_stum');
    $description = get_string('slidetitledesc', 'theme_stum');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    

    // Caption.
    $name = 'theme_stum/slide1caption';
    $title = get_string('slidecaption', 'theme_stum');
    $description = get_string('slidecaptiondesc', 'theme_stum');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// URL.
	$name = 'theme_stum/slide1_url';
    $title = get_string('slide_url', 'theme_stum');
    $description = get_string('slide_url_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 2
     */
	 $temp->add(new admin_setting_heading('theme_stum_slider_slide2', get_string('slideshow_slide2', 'theme_stum'),NULL));

    // Image.
    $name = 'theme_stum/slide2image';
    $title = get_string('slideimage', 'theme_stum');
    $description = get_string('slideimagedesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Title.
    $name = 'theme_stum/slide2';
    $title = get_string('slidetitle', 'theme_stum');
    $description = get_string('slidetitledesc', 'theme_stum');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    

    // Caption.
    $name = 'theme_stum/slide2caption';
    $title = get_string('slidecaption', 'theme_stum');
    $description = get_string('slidecaptiondesc', 'theme_stum');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// URL.
	$name = 'theme_stum/slide2_url';
    $title = get_string('slide_url', 'theme_stum');
    $description = get_string('slide_url_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 3
     */
	 $temp->add(new admin_setting_heading('theme_stum_slider_slide3', get_string('slideshow_slide3', 'theme_stum'),NULL));

    // Image.
    $name = 'theme_stum/slide3image';
    $title = get_string('slideimage', 'theme_stum');
    $description = get_string('slideimagedesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Title.
    $name = 'theme_stum/slide3';
    $title = get_string('slidetitle', 'theme_stum');
    $description = get_string('slidetitledesc', 'theme_stum');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    

    // Caption.
    $name = 'theme_stum/slide3caption';
    $title = get_string('slidecaption', 'theme_stum');
    $description = get_string('slidecaptiondesc', 'theme_stum');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// URL.
	$name = 'theme_stum/slide3_url';
    $title = get_string('slide_url', 'theme_stum');
    $description = get_string('slide_url_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 4
     */
	 $temp->add(new admin_setting_heading('theme_stum_slider_slide4', get_string('slideshow_slide4', 'theme_stum'),NULL));

    // Image.
    $name = 'theme_stum/slide4image';
    $title = get_string('slideimage', 'theme_stum');
    $description = get_string('slideimagedesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Title.
    $name = 'theme_stum/slide4';
    $title = get_string('slidetitle', 'theme_stum');
    $description = get_string('slidetitledesc', 'theme_stum');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    

    // Caption.
    $name = 'theme_stum/slide4caption';
    $title = get_string('slidecaption', 'theme_stum');
    $description = get_string('slidecaptiondesc', 'theme_stum');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// URL.
	$name = 'theme_stum/slide4_url';
    $title = get_string('slide_url', 'theme_stum');
    $description = get_string('slide_url_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 5
     */
	 $temp->add(new admin_setting_heading('theme_stum_slider_slide5', get_string('slideshow_slide5', 'theme_stum'),NULL));

    // Image.
    $name = 'theme_stum/slide5image';
    $title = get_string('slideimage', 'theme_stum');
    $description = get_string('slideimagedesc', 'theme_stum');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Title.
    $name = 'theme_stum/slide5';
    $title = get_string('slidetitle', 'theme_stum');
    $description = get_string('slidetitledesc', 'theme_stum');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    

    // Caption.
    $name = 'theme_stum/slide5caption';
    $title = get_string('slidecaption', 'theme_stum');
    $description = get_string('slidecaptiondesc', 'theme_stum');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// URL.
	$name = 'theme_stum/slide5_url';
    $title = get_string('slide_url', 'theme_stum');
    $description = get_string('slide_url_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	/*
     * Options
     */
	 $temp->add(new admin_setting_heading('theme_stum_slider_options', get_string('slideshow_options', 'theme_stum'),NULL));
	 
	// slideshow height
	$name = 'theme_stum/slideshow_height';
    $title = get_string('slideshow_height', 'theme_stum');
    $description = get_string('slideshow_height_desc', 'theme_stum');
    $default = '475px';
    $choices = array(
		'375px'=>'375px',
		'425px'=>'425px',
		'475px'=>'475px',
		'525px'=>'525px',
		'575px'=>'575px',
		'responsive'=>get_string('responsive', 'theme_stum'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// hide captions mobile
	$name = 'theme_stum/slideshow_hide_captions';
    $title = get_string('slideshow_hide_captions', 'theme_stum');
    $description = get_string('slideshow_hide_captions_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Slideshow Pattern 
    $name = 'theme_stum/slideshowpattern';
    $title = get_string('slideshowpattern', 'theme_stum');
    $description = get_string('slideshowpatterndesc', 'theme_stum');
    $default = '0';
    $choices = array(
		'0'=>'none',
		'1'=>'pattern1',
		'2'=>'pattern2',
		'3'=>'pattern3',
		'4'=>'pattern4');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Slideshow AutoAdvance
	$name = 'theme_stum/slideshow_advance';
    $title = get_string('slideshow_advance', 'theme_stum');
    $description = get_string('slideshow_advance_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Slideshow Navigation
	$name = 'theme_stum/slideshow_nav';
    $title = get_string('slideshow_nav', 'theme_stum');
    $description = get_string('slideshow_nav_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Slideshow Loader 
    $name = 'theme_stum/slideshow_loader';
    $title = get_string('slideshow_loader', 'theme_stum');
    $description = get_string('slideshow_loader_desc', 'theme_stum');
    $default = '0';
    $choices = array(
		'0'=>'bar',
		'1'=>'pie',
		'2'=>'none');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Slideshow Image FX
	$name = 'theme_stum/slideshow_imgfx';
	$title = get_string('slideshow_imgfx','theme_stum');
	$description = get_string('slideshow_imgfx_desc', 'theme_stum');
	$setting = new admin_setting_configtext($name, $title, $description, 'random', PARAM_URL);
	$temp->add($setting);
	
	// Slideshow Text FX
	$name = 'theme_stum/slideshow_txtfx';
	$title = get_string('slideshow_txtfx','theme_stum');
	$description = get_string('slideshow_txtfx_desc', 'theme_stum');
	$setting = new admin_setting_configtext($name, $title, $description, 'moveFromLeft', PARAM_URL);
	$temp->add($setting);
	
	$ADMIN->add('theme_stum', $temp);
	
	// "frontpage carousel" settingpage 
    $temp = new admin_settingpage('theme_stum_carousel', get_string('settings_carousel', 'theme_stum'));
    $temp->add(new admin_setting_heading('theme_stum_carousel', get_string('carouselheadingsub', 'theme_stum'),
            format_text(get_string('carouseldesc' , 'theme_stum'), FORMAT_MARKDOWN)));
    
    // Position
    $name = 'theme_stum/carousel_position';
    $title = get_string('carousel_position', 'theme_stum');
    $description = get_string('carousel_positiondesc', 'theme_stum');
	$default = '1';
    $choices = array(
		'0'=>'top',
		'1'=>'bottom');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// carousel image dimensions
    $name = 'theme_stum/carousel_img_dim';
    $title = get_string('carousel_img_dim', 'theme_stum');
    $description = get_string('carousel_img_dim_desc', 'theme_stum');
	$default = '260px';
    $choices = array(
		'260px'=>'260px',
		'310px'=>'310px',
		'360px'=>'360px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Heading
    $name = 'theme_stum/carousel_h';
    $title = get_string('carousel_h', 'theme_stum');
    $description = get_string('carousel_h_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Heading Style
    $name = 'theme_stum/carousel_hi';
    $title = get_string('carousel_hi', 'theme_stum');
    $description = get_string('carousel_hi_desc', 'theme_stum');
	$default = '3';
    $choices = array(
		'1'=>'Heading h1',
		'2'=>'Heading h2',
		'3'=>'Heading h3',
		'4'=>'Heading h4',
		'5'=>'Heading h5',
		'6'=>'Heading h6');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Additional HTML
	$name = 'theme_stum/carousel_add_html';
    $title = get_string('carousel_add_html', 'theme_stum');
    $description = get_string('carousel_add_html_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Number of slides.
    $name = 'theme_stum/carousel_slides';
    $title = get_string('carousel_slides', 'theme_stum');
    $description = get_string('carousel_slides_desc', 'theme_stum');
    $default = 4;
    $choices = array(
        1 => '1',
        2 => '2',
        3 => '3',
        4 => '4',
        5 => '5',
        6 => '6',
        7 => '7',
        8 => '8',
        9 => '9',
        10 => '10',
        11 => '11',
        12 => '12',
        13 => '13',
        14 => '14',
        15 => '15',
        16 => '16'
    );
    $temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    $numberofslides = get_config('theme_stum', 'carousel_slides');
    for ($i = 1; $i <= $numberofslides; $i++) {
		// Image.
        $name = 'theme_stum/carousel_image_'.$i;
        $title = get_string('carousel_image', 'theme_stum');
        $description = get_string('carousel_imagedesc', 'theme_stum');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'carousel_image_'.$i);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Caption Heading.
        $name = 'theme_stum/carousel_heading_'.$i;
        $title = get_string('carousel_heading', 'theme_stum');
        $description = get_string('carousel_heading_desc', 'theme_stum');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Caption text.
        $name = 'theme_stum/carousel_caption_'.$i;
        $title = get_string('carousel_caption', 'theme_stum');
        $description = get_string('carousel_caption_desc', 'theme_stum');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // URL.
        $name = 'theme_stum/carousel_url_'.$i;
        $title = get_string('carousel_url', 'theme_stum');
        $description = get_string('carousel_urldesc', 'theme_stum');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
		
		// Button Text.
        $name = 'theme_stum/carousel_btntext_'.$i;
        $title = get_string('carousel_btntext', 'theme_stum');
        $description = get_string('carousel_btntextdesc', 'theme_stum');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Color
        $name = 'theme_stum/carousel_color_'.$i;
        $title = get_string('carousel_color', 'theme_stum');
        $description = get_string('carousel_colordesc', 'theme_stum');
    	$default = '#f9bf3b';
    	$previewconfig = null;
    	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);
    }
    $ADMIN->add('theme_stum', $temp);
	
	// "settings login and navigations" settingpage
	$temp = new admin_settingpage('theme_stum_login',  get_string('settings_login', 'theme_stum'));
	
	// customized login page.
	$name = 'theme_stum/custom_login';
    $title = get_string('custom_login', 'theme_stum');
    $description = get_string('custom_login_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Additional Login Link
    $name = 'theme_stum/login_link';
    $title = get_string('login_link', 'theme_stum');
    $description = get_string('login_link_desc', 'theme_stum');
    $default = 2;
    $choices = array(0=>get_string('none'), 1=>get_string('startsignup'), 2=>get_string('forgotten'), 3=>get_string('moodle_login_page','theme_stum'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Custom Login Link URL.
    $name = 'theme_stum/custom_login_link_url';
    $title = get_string('custom_login_link_url', 'theme_stum');
    $description = get_string('custom_login_link_url_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Custom Login Link Text.
    $name = 'theme_stum/custom_login_link_txt';
    $title = get_string('custom_login_link_txt', 'theme_stum');
    $description = get_string('custom_login_link_txt_desc', 'theme_stum');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// oauth2 buttons
	$name = 'theme_stum/auth_googleoauth2';
    $title = get_string('auth_googleoauth2', 'theme_stum');
    $description = get_string('auth_googleoauth2_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Label of home button
    $name = 'theme_stum/home_button';
    $title = get_string('home_button', 'theme_stum');
    $description = get_string('home_button_desc', 'theme_stum');
    $default = 'shortname';
    $choices = array('shortname' => get_string('home_button_shortname','theme_stum'), 'home' => get_string('home'), 'frontpagedashboard' => get_string('home_button_frontpagedashboard', 'theme_stum'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Navbar search form
    $name = 'theme_stum/navbar_search_form';
    $title = get_string('navbar_search_form', 'theme_stum');
    $description = get_string('navbar_search_form_desc', 'theme_stum');
	$default = '0';
    $choices = array(
		'0'=> get_string('navbar_search_form_0', 'theme_stum'),
		'1'=> get_string('navbar_search_form_1', 'theme_stum'),
		'2'=> get_string('navbar_search_form_2', 'theme_stum'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	// hide breadcrumd for guest users
	$name = 'theme_stum/hide_breadcrumb';
    $title = get_string('hide_breadcrumb', 'theme_stum');
    $description = get_string('hide_breadcrumb_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Show MyCourses dropdown in custommenu.
    $name = 'theme_stum/mycourses_dropdown';
    $title = get_string('mycourses_dropdown', 'theme_stum');
    $description = get_string('mycourses_dropdown_desc', 'theme_stum');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// custom menu with shadow effect
	$name = 'theme_stum/shadow_effect';
    $title = get_string('shadow_effect', 'theme_stum');
    $description = get_string('shadow_effect_desc', 'theme_stum');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$ADMIN->add('theme_stum', $temp);