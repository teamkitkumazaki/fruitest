				<?php $share_url   = get_permalink(); $share_title = get_the_title() ;?>
				<a href="//twitter.com/share?text=<?=$share_title?>&url=<?=$share_url?>&via=fruites_journal" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;">
					<img src="<?php echo get_template_directory_uri();?>/img/journal/share_tw.png">
				</a>
				<a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
					<img src="<?php echo get_template_directory_uri();?>/img/journal/share_fb.png">
				</a>
				<a href="//b.hatena.ne.jp/add?mode=confirm&url=<?=$share_url?>" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=1000');return false;" title="はてなブックマークに登録">
					<img src="<?php echo get_template_directory_uri();?>/img/journal/share_hb.png"></a>
				<a href="//line.me/R/msg/text/?<?=$share_title.'%0A'.$share_url?>" target="_blank" title="LINEに送る">
					<img src="<?php echo get_template_directory_uri();?>/img/journal/share_line.png">
				</a>