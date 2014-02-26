<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

	<div id="comments">
            <div class="categorie small txtcenter fontVerdana"><span><?php echo $plxShow->artNbCom(); ?></span></div>
                <section class="autogrid2">
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>" class="comment">
			<blockquote>
                                <h1 class="fontBiolinum"><a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a> − <?php $plxShow->comAuthor('link'); ?></h1>
				<p class="details small info_comment fontVerdana">
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) à #hour:#minute'); ?></time>
				</p>
				<p class="content_com big type-<?php $plxShow->comType(); ?> fontLibertine"><?php $plxShow->comContent(); ?></p>
			</blockquote>
		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>
                </section>

	</div>

	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<div id="form">

		<h2 class="fontBiolinum">
			<?php $plxShow->lang('WRITE_A_COMMENT') ?>
		</h2>

		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<p>
					<label for="id_content" class="lab_com fontLibertine"><?php $plxShow->lang('COMMENT') ?> :</label>
					<textarea id="id_content" name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
				</p>
				<p>
					<label for="id_name" class="fontLibertine"><?php $plxShow->lang('NAME') ?> :</label>
					<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
				</p>
				<p>
					<label for="id_site" class="fontLibertine"><?php $plxShow->lang('WEBSITE') ?> :</label>
					<input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" />
				</p>
				<p>
					<label for="id_mail" class="fontLibertine"><?php $plxShow->lang('EMAIL') ?> :</label>
					<input id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />
				</p>
				<p class="com-alert">
					<?php $plxShow->comMessage(); ?>
				</p>
				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<p class="capcha">
					<label for="id_rep" class="fontLibertine"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?>.
					<?php $plxShow->capchaQ(); ?></label>
					<input id="id_rep" name="rep" type="text" size="2" maxlength="1" />
				</p>
				<?php endif; ?>
				<p>
					<input type="submit" value="<?php $plxShow->lang('SEND') ?>" class="fontLibertine" />
				</p>
			</fieldset>
		</form>

	</div>

	<?php else: ?>

		<p>
			<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
		</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
