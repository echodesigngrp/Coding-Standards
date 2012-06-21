<?php if ( $page->parent ): ?>
	<?php $separator = isset($separator) ? $separator : ' / '; ?>

	<section class="breadcrumb">
		<?php 
		$parent = $page->parent; 
		$html[] = '<span>'.$page->name.'</span>';
		
		while($parent)
		{
			array_unshift($html, '<a href="'.site_url($parent->full_slug).'">'.$parent->name.'</a>');
			$parent = $parent->parent;
		}
		
		$html = implode($separator, $html);?>
		
		<?=$html?>
	</section>
<?php endif; ?>