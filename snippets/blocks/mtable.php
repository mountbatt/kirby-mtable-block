<?php 
	$items = $block->mtable()->toStructure();
	$mtable_id = uniqid(); 
?>
<?php if($items): ?>
	
<div class="mtable" id="<?= "mtable-".$mtable_id; ?>">
	<?php foreach ($items as $item): ?>
	<?php $item_uid = uniqid(); ?>
	<div class="mtable-item">
		<h2 class="mtable-header">
			<button class="mtable-button<?php e($item->toggle()->bool(), '',' collapsed') ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $item_uid ?>" aria-expanded="<?php e($item->toggle()->bool(), 'true', 'false') ?>" aria-controls="collapse-<?= $item_uid ?>">
				<?= $item->summary() ?>
			</button>
		</h2>
		<div id="collapse-<?= $item_uid ?>" class="mtable-collapse collapse <?php e($item->toggle()->bool(), 'show') ?>" data-bs-parent="#<?= "mtable-".$mtable_id; ?>">
			<div class="mtable-body">
				<?= $item->details()->text() ?>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>

<?php endif; ?>
