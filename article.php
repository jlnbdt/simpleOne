<?php include(dirname(__FILE__).'/header.php'); ?>
<article>
        <header>
            <div class="categorie small txtcenter fontVerdana"><span><?php $plxShow->artCat(' − '); ?></span></div>
            <h1 class="fontBiolinum"><?php $plxShow->artTitle('link'); ?></h1>
            <div class="details small fontVerdana"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> <time>le 3 fevrier 2014</time> − <?php $plxShow->artNbCom('#nb commentaire','#nb commentaire','#nb commentaires') ?></div>
        </header>
            <div class="line">
                <div class="mod bigger fontLibertine">
                        <?php $plxShow->artContent(true) ?>
            <footer>
                <ul class="tag fontVerdana">
                    <?php $plxShow->artTags('<li><a href="#tag_url" title="#tag_name" class="smaller">#tag_name</a></li>','') ?>
                </ul>
            </footer>
                </div>
            </div>
</article>
<?php include(dirname(__FILE__).'/commentaires.php'); ?>
<?php include(dirname(__FILE__).'/footer.php'); ?>
