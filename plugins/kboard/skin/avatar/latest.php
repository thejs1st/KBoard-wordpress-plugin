<div id="kboard-avatar-latest">
	<table>
		<thead>
			<tr>
				<th class="kboard-latest-title"><?php echo __('Title', 'kboard')?></th>
				<th class="kboard-latest-date"><?php echo __('Date', 'kboard')?></th>
			</tr>
		</thead>
		<tbody>
			<?php while($content = $list->hasNext()):?>
			<tr>
				<td class="kboard-latest-title">
					<div class="kboard-avatar-cut-strings">
						<a href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toStringWithPath($board_url)?>">
							<?php if($content->isNew()):?><span class="kboard-avatar-new-notify">N</span><?php endif?>
							<?php if($content->secret):?><img src="<?php echo $skin_path?>/images/icon-lock.png" alt="<?php echo __('Secret', 'kboard')?>"><?php endif?>
							<?php echo $content->title?>
						</a>
						<span class="kboard-comments-count"><?php echo $content->getCommentsCount()?></span>
					</div>
				</td>
				<td class="kboard-latest-date"><?php echo date("Y.m.d", strtotime($content->date))?></td>
			</tr>
			<?php endwhile?>
		</tbody>
	</table>
</div>