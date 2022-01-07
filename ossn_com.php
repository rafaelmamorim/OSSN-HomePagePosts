<?php

/**
 * Open Source Social Network
 *
 * @package   HomePagePosts
 * @author    Rafael Amorim <amorim@rafaelamorim.com.br>
 * @copyright (c) Rafael Amorim
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.rafaelamorim.com.br/
 *
 */ 
 
 function homePagePosts_init(){
	
	//js
	ossn_extend_view('js/ossn.site', 'js/homepageposts');
		
	//pages
	ossn_register_page('friends', 'wall_friends_page_handler');
	ossn_register_page('public', 'wall_public_page_handler');
 }
 
/**
 * Wall template view 
 * Depends on wall post type
 *
 * @param string $callback Name of callback
 * @param string $type Callback type
 * @param array $params Arrays or Objects
 *
 * @return mixed data
 * @access private
 */
function hpage_posts_get_homepage_wall_access() {
    
    if(!OssnSession::isSession('com_wall_type_access')) {
        $data = ossn_get_entities(array(
            'type' => 'component',
            'subtype' => 'ossnwall_defaultwall',
            'owner_guid' => 2
        ));
        if ($data) {
			OssnSession::assign('com_wall_type_access', $data[0]->value);
			return $data[0]->value;
        } else {
			OssnSession::assign('com_wall_type_access', 'public');
            return 'public';
        }
    } else {
        return OssnSession::getSession('com_wall_type_access');
    }
}

function wall_friends_page_handler() {
    OssnSession::assign('com_wall_type_access', 'friends');
    redirect(REF);
}

function wall_public_page_handler() {
    OssnSession::assign('com_wall_type_access', 'public');
    redirect(REF);
}

ossn_register_callback('ossn', 'init', 'homePagePosts_init');
