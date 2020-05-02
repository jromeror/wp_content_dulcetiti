	<footer class="text-center">
    <?php if ( is_active_sidebar( 'footer-widget' ) ) { ?>
        <?php dynamic_sidebar( 'footer-widget' ); ?>
    <?php }; ?>
    <p class="footer__text text-white">DulceTiti 2020 © Todos los derechos reservados.</p>
    </footer>

<?php wp_footer() ?>
</body>
</html>