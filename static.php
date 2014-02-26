<?php include(dirname(__FILE__).'/header.php'); ?>
<article>
        <header>
            <div class="categorie small txtcenter fontVerdana"><span><?php $plxShow->staticGroup() ?></span></div>
            <h1 class="fontBiolinum"><?php $plxShow->staticTitle(); ?></h1>
            <div class="details small fontVerdana"><time>3 fevrier 2014</time></div>
        </header>
            <div class="line">
                <div class="mod bigger fontLibertine">
                        <?php $plxShow->staticContent() ?>
                </div>
            </div>
</article>
<?php include(dirname(__FILE__).'/footer.php'); ?>
