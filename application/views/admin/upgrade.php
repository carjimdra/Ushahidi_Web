<?php 
/**
 * Upgrade overview view page.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     API Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
?>
<div class="bg">
	<h2><?php echo $title; ?></h2>
	
	<div class="head">
		<h4 class="version"><?php print Kohana::lang('upgrade.upgrade_title_text_1') ?><?php print $current_version; ?> <?php print Kohana::lang('upgrade.upgrade_title_text_2') ?> <?php print $environment; ?></h4>
	</div>
	<div class="head">
		<h4><?php print Kohana::lang('upgrade.upgrade_available') ?></h4>
	</div>
	<div class="settings_holder">
		<strong><u>Ushahidi <?php echo $release_version ?></u></strong>
        <?php if (is_array($changelogs)) { ?>
		<ul>
            <?php foreach ( $changelogs as $changelog ) { ?>
			<li><?php print $changelog ?></li>
            <?php } ?>
		</ul>
        <?php } ?>
        <p><?php print Kohana::lang('upgrade.upgrade_db_text_1'); ?> <?php print $db_version; ?> <?php print Kohana::lang('upgrade.upgrade_db_text_2');?> <?php print $current_db_version?>.</p>
       	<p><?php print Kohana::lang('upgrade.upgrade_db_text_3'); ?></p>
       	<p><?php print Kohana::lang('upgrade.upgrade_db_text_4'); ?></p>
       	<?php print form::open(NULL, array('id' => 'upgradeMain', 'name' => 'upgradeMain')); ?>
       	<p>
       	<?php print form::label('chk_db_backup_box', Kohana::lang('upgrade.upgrade_db_text_5'));?>
		   	<?php print form::checkbox('chk_db_backup_box', '1');?>
		</p>	       
	</div>
	
	<div class="head">
		<h4><?php print Kohana::lang('upgrade.upgrade_automatic'); ?></h4>
	</div>
	<div class="settings_holder">
	    <input type="submit" id="upgrade" name="submit" value="<?php echo Kohana::lang('upgrade.upgrade_continue_btn_text');?>" class="login_btn" />
		<?php print form::close();?>
	</div>
	
	<div class="head">
		<h4><?php print Kohana::lang('upgrade.upgrade_manual');?></h4>
	</div>
	<div class="settings_holder">
		<p><?php echo Kohana::lang('upgrade.upgrade_text_1');?>.</p>
		<p><?php echo Kohana::lang('upgrade.upgrade_text_2');?><img src="<?php echo url::base() ?>media/img/admin/icon-zip.gif" />&nbsp;<a href="<?php print $download;?>">Download (.zip)</a>
.</p>
		<p><?php echo Kohana::lang('upgrade.upgrade_text_3');?>:</p>
		<ul>
			<li> <strong>applications/config/</strong> </li>
			<li> <strong>applications/cache/</strong> </li>
			<li> <strong>applications/logs/</strong> </li>
			<li> <strong><?php echo Kohana::config('upload.relative_directory'); ?></strong> </li>
		</ul>
	</div>	

</div>
