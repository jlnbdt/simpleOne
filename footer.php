<?php if (!defined('PLX_ROOT')) exit; ?>
<footer>
    <div class="autogrid5">
        <div><h3 class="fontBiolinum"><?php $plxShow->lang('CATEGORIES'); ?></h3>
		<ul class="big fontLibertine">
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>
        </div>
        <div><h3 class="fontBiolinum"><?php $plxShow->lang('TAGS'); ?></h3>
		<ul class="tags fontLibertine">
			<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>
        </div>
        <div><h3 class="fontBiolinum"><?php $plxShow->lang('COMMENTAIRES'); ?></h3>
		<ul class="commentaires big fontLibertine">
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>
        </div>
        <div><h3 class="fontBiolinum"><?php $plxShow->lang('ARCHIVES'); ?></h3>
		<ul class="big fontLibertine">
			<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>
        </div>
        <div><h3 class="fontBiolinum">Flux</h3>
	        <ul class="big fontLibertine">
                        <?php if ($plxShow->mode() == "tags"): ?><li><?php $plxShow->tagFeed() ?></li><?php endif; ?>
                        <?php if ($plxShow->mode() == "categorie"): ?><li><?php $plxShow->artFeed('rss',$plxShow->catId()); ?></li><?php endif; ?>
                        <?php if ($plxShow->mode() == "article"): ?><li><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></li><?php endif; ?>
                        <li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
                        <?php $plxShow->lang('ARTICLES'); ?></a></li>
                        <li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
                        <?php $plxShow->lang('COMMENTS'); ?></a></li>
                </ul>
        </div>
</div>
    <div class="line smaller fontVerdana">
	<p>
		<?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
	</p>
	<p>
		<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
		<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
		<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
		<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
		<?php $plxShow->httpEncoding() ?>
	</p>
        <p>Thème <a href="https://github.com/JulienBiaudet/simpleOne" title="Thème simpleOne">simpleOne</a> par Julien Biaudet</p>
    </div>

</footer>
</body>
</html>

