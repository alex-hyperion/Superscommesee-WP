<?php
/**
 * The template for displaying the footer
 */

?>

	</div><!-- #content -->

	<footer class="footer" id="footer">
		<a class="to-top" href="#" id="js_to_top">Torna a inizio pagina</a>
		<div class="footer-wrap">
			<ul class="copyright-list">
				<?php if( have_rows('condizioni_generali', 'options') ): ?>
					<?php while( have_rows('condizioni_generali', 'options') ): the_row(); ?>
                        <li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a></li>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if( have_rows('privacy_e_cookie_policy_link', 'options') ): ?>
					<?php while( have_rows('privacy_e_cookie_policy_link', 'options') ): the_row(); ?>
                        <li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a></li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<div class="info-wrap">
				<div class="warning-text">
					<p><?php the_field('notification', 'options'); ?></p>
					<ul class="icon-list">
						<li><img src="<?php echo get_template_directory_uri()?>/assets/images/new-footer/age.svg" alt="18+" width="40"></li>
						<li><img src="<?php echo get_template_directory_uri()?>/assets/images/new-footer/legal.svg" alt="gioco legale e responsabile" width="70"></li>
						<li><img src="<?php echo get_template_directory_uri()?>/assets/images/new-footer/aams.svg" alt="aams" width="49"></li>
					</ul>
				</div>
				<ul class="contact-list">
					<?php if( have_rows('service_card', 'options') ): ?>
						<?php while( have_rows('service_card', 'options') ): the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('url'); ?>">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/new-footer/card.svg" alt="card" width="27">
                                    <span><?php the_sub_field('text'); ?></span>
                                </a>
                            </li>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php if( have_rows('phone_number', 'options') ): ?>
						<?php while( have_rows('phone_number', 'options') ): the_row(); ?>
                            <li>
                                <span><?php the_sub_field('text'); ?></span>
                                <a class="number" href="tel:<?php echo str_replace(' ', '', get_sub_field('number')); ?>"><?php the_sub_field('number'); ?></a>
                            </li>
						<?php endwhile; ?>
					<?php endif; ?>


				</ul>
			</div>
			<div class="list-wrap">
                <?php if( have_rows('footer_links_list', 'options') ): ?>
                    <?php while( have_rows('footer_links_list', 'options') ): the_row(); ?>
                        <ul class="info-list">
                            <?php $field_data = get_sub_field_object('quote' ); ?>
                            <li class="title"><?php echo $field_data['label']; ?></li>
                            <?php if( have_rows('quote') ): ?>
                                <?php while( have_rows('quote') ): the_row(); ?>
                                    <li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <ul class="info-list">
                            <?php $field_data = get_sub_field_object('pronostici' ); ?>
                            <li class="title"><?php echo $field_data['label']; ?></li>
                            <?php if( have_rows('pronostici') ): ?>
                                <?php while( have_rows('pronostici') ): the_row(); ?>
                                    <li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <ul class="info-list">
                            <?php $field_data = get_sub_field_object('risorse_utili' ); ?>
                            <li class="title"><?php echo $field_data['label']; ?></li>
                            <?php if( have_rows('risorse_utili') ): ?>
                                <?php while( have_rows('risorse_utili') ): the_row(); ?>
                                    <li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="copyright-block">
			<div class="container">
				<p><?php the_field('bottom_text', 'options'); ?></p>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
