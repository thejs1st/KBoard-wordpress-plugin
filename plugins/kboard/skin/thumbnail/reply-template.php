<?php while($content = $list->hasNextReply()):?>
<tr>
	<td class="kboard-list-uid"></td>
	<td class="kboard-list-thumbnail">
		<a href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toString()?>">
		<?php if($content->getThumbnail(120, 90)):?><img src="<?php echo $content->getThumbnail(120, 90)?>" alt=""><?php else:?><i class="icon-picture"></i><?php endif?>
		</a>
	</td>
	<td class="kboard-list-title" style="padding-left:<?php echo intval($depth*10)?>px">
		<a href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toString()?>">
			<div class="kboard-thumbnail-cut-strings">
				<?php if($content->isNew()):?><span class="kboard-thumbnail-new-notify">New</span><?php endif?>
				<?php if($content->secret):?><img src="<?php echo $skin_path?>/images/icon-lock.png" alt="<?php echo __('Secret', 'kboard')?>"><?php endif?>
				<?php echo $content->title?>
				<span class="kboard-comments-count"><?php echo $content->getCommentsCount()?></span>
			</div>
			<div class="kboard-mobile-contents">
				<span class="contents-item"><img src="<?php echo $skin_path?>/images/icon-user.png" alt="<?php echo __('Author', 'kboard')?>"> <?php echo $content->member_display?></span>
				<span class="contents-item"><img src="<?php echo $skin_path?>/images/icon-date.png" alt="<?php echo __('Date', 'kboard')?>"> <?php echo date("Y.m.d", strtotime($content->date))?></span>
				<span class="contents-item"><img src="<?php echo $skin_path?>/images/icon-view.png" alt="<?php echo __('Views', 'kboard')?>"> <?php echo $content->view?></span>
			</div>
		</a>
	</td>
	<td class="kboard-list-user"><?php echo $content->member_display?></td>
	<td class="kboard-list-date"><?php echo date("Y.m.d", strtotime($content->date))?></td>
	<td class="kboard-list-view"><?php echo $content->view?></td>
</tr>
<?php $boardBuilder->builderReply($content->uid, $depth+1)?>
<?php endwhile?>