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
?>

$(document).ready(function () {

    var $url = window.location.href;
        if (!$url.match('/u/')) {
            var WallSelector = '<div class="ossn-wall-access" style="border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">';
            WallSelector += '    <div class="ossn-widget">';
            WallSelector += '        <div class="widget-heading container-fluid">';
            WallSelector += '            <div class="row" >'; 
            WallSelector += '                <div class="col text-center">';
            WallSelector += '                    <a href="<?php echo ossn_site_url('public'); ?>"  class="<?php echo OssnSession::getSession('com_wall_type_access')=='public' ?  ' text-danger' :''; ?>"><?php echo ossn_print('homepageposts:option:public');?></a>';
            WallSelector += '                </div>';
            WallSelector += '                <div class="col text-center  <?php echo OssnSession::getSession('com_wall_type_access')=='friends' ?  'text-danger' :''; ?>">';
            WallSelector += '                    <a href="<?php echo ossn_site_url('friends'); ?>"  class="<?php echo OssnSession::getSession('com_wall_type_access')=='friends' ?  ' text-danger"' :''; ?>"><?php echo ossn_print('homepageposts:option:friends');?></a>';
            WallSelector += '                </div>';
            WallSelector += '            </div>';
            WallSelector += '        </div>';
            WallSelector += '    </div>';
            WallSelector += '</div>';
            $(WallSelector).insertAfter('.ossn-wall-container');
        }

});
