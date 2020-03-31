<?php $datum = getdate(); $rok = $datum['year']; ?>
<?php if (get_theme_mod('devdmbootstrap4_show_credit_setting', 1)) : ?>

    <div class="container dmbs-author-credits">
        <div class="row">
            <div class="col-12">
                <p><span class="vlevo">&copy; <?php echo($rok); ?> - <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                   <span class="stred"><a href="<?php echo esc_url(devdmbootstrap4_credit_link()) ; ?>" target="_blank"><?php esc_html_e('DevDmBootstrap4 vytvořil Danny Machal (DevDm.com)','devdmbootstrap4'); ?></a></span>
                   <span class="vpravo"><a href="<?php echo esc_url('https://wordpress.org/'); ?>" target="_blank">Běží na WordPress</a></span>
                </p>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>