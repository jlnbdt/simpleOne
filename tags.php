<?php include(dirname(__FILE__).'/header.php'); ?>
            <div class="tagT fontVerdana"><span><?php $plxShow->tagName(); ?></span></div>
<section class="autogrid2">
<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
    <article>
        <header>
            <div class="categorie small txtcenter fontVerdana"><span><?php $plxShow->artCat(); ?></span></div>
            <h1 class="fontBiolinum"><?php $plxShow->artTitle('link'); ?></h1>
            <div class="details small fontVerdana"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> − <?php $plxShow->artNbCom('#nb commentaire','#nb commentaire','#nb commentaires') ?></div>
        </header>
        <div class="big fontLibertine">
                <?php if ($plxShow->callHook('champArt', 'image_R') != ""): ?>
                <div class="right"><img alt="<?php eval($plxShow->callHook('champArt', 'alt')); ?>" src="<?php eval($plxShow->callHook('champArt', 'image')); ?>"/></div>
                <?php endif; ?>
<?php $plxShow->artChapo('',false) ?><?php $plxShow->artReadMore($format='<a href="#art_url" title="#art_title" class="suite">Poursuivre la lecture</a>') ?>
</div>        <footer>
            <ul class="tag line fontVerdana">
                <?php $plxShow->artTags('<li><a href="#tag_url" title="#tag_name" class="smaller">#tag_name</a></li>','') ?>
                </ul>
        </footer>
    </article>
<?php endwhile; ?>
</section>
<div class="line txtcenter small"><?php $plxShow->pagination() ?></div>
<?php include(dirname(__FILE__).'/footer.php'); ?>

