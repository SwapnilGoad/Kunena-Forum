<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 *
 **/

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
//TODO: Split this file
if ($this->params->get('avatarPosition') == 'top') : ?>

	<div class="kheader kmsg-header-top">
		<h2>
			<span class="kmsgdate kmsgdate-top" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">
				<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
			</span>
			<span class="kmsgtitle<?php echo $this->escape($this->msgsuffix) ?> kmsg-title-top">
				<?php echo $this->subjectHtml ?>
			</span>
			<span class="kmsg-id-top">
				<a name="<?php echo intval($this->id) ?>"></a>
				<?php echo $this->numLink ?>
			</span>
		</h2>
	</div>
<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td valign="top" class="kprofile-top">
				<?php $this->displayProfile('horizontal') ?>
			</td>
		</tr>
		<tr>
			<td class="kmessage-top">
				<?php $this->displayContents() ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-top">
				<?php $this->displayActions() ?>
				<?php $this->displayThankyou() ?>
			</td>
		</tr>
	</tbody>
</table>

<?php elseif ($this->params->get('avatarPosition') == 'bottom') : ?>

		<div class="kheader kmsg-header-bottom">
		<h2>
			<span class="kmsgdate kmsgdate-bottom" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">
				<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
			</span>
			<span class="kmsgtitle<?php echo $this->escape($this->msgsuffix) ?>  kmsg-title-bottom">
				<?php echo $this->subjectHtml ?>
			</span>
			<span class="kmsg-id-bottom">
				<a name="<?php echo intval($this->id) ?>"></a>
				<?php echo $this->numLink ?>
			</span>
		</h2>
	</div>
<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td class="kmessage-bottom">
				<?php $this->displayContents() ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-bottom">
				<?php $this->displayActions() ?>
				<?php $this->displayThankyou() ?>
			</td>
		</tr>
		<tr>
			<td valign="top" class="kprofile-bottom">
				<?php $this->displayProfile('horizontal') ?>
			</td>
		</tr>
	</tbody>
</table>

<?php elseif ($this->params->get('avatarPosition') == 'left') : ?>

	<div class="kheader kmsg-header-left">
		<h2>
			<span class="kmsgdate kmsgdate-left" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">
				<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
			</span>
			<span class="kmsgtitle<?php echo $this->escape($this->msgsuffix) ?> kmsg-title-left">
				<?php echo $this->subjectHtml ?>
			</span>
			<span class="kmsg-id-left">
				<a name="<?php echo intval($this->id) ?>"></a>
				<?php echo $this->numLink ?>
			</span>
		</h2>
	</div>
<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td rowspan="2" valign="top" class="kprofile-left">
				<?php $this->displayProfile('vertical') ?>
			</td>
			<td class="kmessage-left">
				<?php $this->displayContents() ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-left">
				<?php $this->displayActions() ?>
				<?php $this->displayThankyou() ?>
			</td>
		</tr>
	</tbody>
</table>

<?php else : ?>

	<div class="kheader kmsg-header-right">
		<h2>
			<span class="kmsgdate  kmsgdate-right" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">
				<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
			</span>
			<span class="kmsgtitle<?php echo $this->escape($this->msgsuffix) ?> kmsg-title-right">
				<?php echo $this->subjectHtml ?>
			</span>
			<span class="kmsg-id-right">
				<a name="<?php echo intval($this->id) ?>"></a>
				<?php echo $this->numLink ?>
			</span>
		</h2>
	</div>
<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td class="kmessage-right">
				<?php $this->displayContents() ?>
			</td>
			<td rowspan="2" class="kprofile-right">
				<?php $this->displayProfile('vertical') ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-right">
				<?php $this->displayActions() ?>
				<?php $this->displayThankyou() ?>
			</td>
		</tr>
	</tbody>
</table>

<?php endif ?>

<!-- Begin: Message Module Position -->
	<?php CKunenaTools::showModulePosition('kunena_msg_' . $this->mmm) ?>
<!-- Finish: Message Module Position -->