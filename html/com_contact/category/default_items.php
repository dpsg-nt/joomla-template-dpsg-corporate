<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.framework');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>
<?php if (empty($this->items)) : ?>
	<p> <?php echo JText::_('COM_CONTACT_NO_ARTICLES'); ?> </p>
<?php else : ?>

<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
<?php if ($this->params->get('show_pagination_limit')) : ?>
	<fieldset class="filters">
	<legend class="hidelabeltxt"><?php echo JText::_('JGLOBAL_FILTER_LABEL'); ?></legend>

		<div class="display-limit">
			<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
			<?php echo $this->pagination->getLimitBox(); ?>
		</div>
	</fieldset>
<?php endif; ?>
	<ul class="category">
			<?php foreach ($this->items as $i => $item) : ?>
				<li>
				<?php if ($this->items[$i]->published == 0) : ?>
					<p class="system-unpublished cat-list-row<?php echo $i % 2; ?>">
				<?php else: ?>
					<p class="cat-list-row<?php echo $i % 2; ?>" >
				<?php endif; ?>

					<?php if ($this->params->get('show_position_headings')) : ?>
						<p class="item-position">
							<?php echo $item->con_position; ?>
						</p>
					<?php endif; ?>
					
					<p class="item-title">
						<a href="<?php echo JRoute::_(ContactHelperRoute::getContactRoute($item->slug, $item->catid)); ?>">
							<?php echo $item->name; ?></a>
					</p>
					
					<?php if ($this->params->get('show_email_headings')) : ?>
						<p class="item-email">
							<?php echo $item->email_to; ?>
						</p>
					<?php endif; ?>
					
					<?php if ($this->params->get('show_telephone_headings')) : ?>
						<p class="item-phone">
							<?php echo $item->telephone; ?>
						</p>
					<?php endif; ?>

					<?php if ($this->params->get('show_mobile_headings')) : ?>
						<p class="item-phone">
							<?php echo $item->mobile; ?>
						</p>
					<?php endif; ?>

					<?php if ($this->params->get('show_fax_headings')) : ?>
					<p class="item-phone">
						<?php echo $item->fax; ?>
					</p>
					<?php endif; ?>

					<?php if ($this->params->get('show_suburb_headings')) : ?>
					<p class="item-suburb">
						<?php echo $item->suburb; ?>
					</p>
					<?php endif; ?>

					<?php if ($this->params->get('show_state_headings')) : ?>
					<p class="item-state">
						<?php echo $item->state; ?>
					</p>
					<?php endif; ?>

					<?php if ($this->params->get('show_country_headings')) : ?>
					<p class="item-state">
						<?php echo $item->country; ?>
					</p>
					<?php endif; ?>

			<?php endforeach; ?>
	</ul>

	<?php if ($this->params->get('show_pagination')) : ?>
	<div class="pagination">
		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
		<p class="counter">
			<?php echo $this->pagination->getPagesCounter(); ?>
		</p>
		<?php endif; ?>
		<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
	<?php endif; ?>
	<div>
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
	</div>
</form>
<?php endif; ?>
