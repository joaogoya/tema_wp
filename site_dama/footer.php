            <footer class="footer-border-top">
                <section>
                    <div class="whatsapp">
                        <?php get_template_part('includes/template-parts/footer/whatsapp'); ?>
                    </div>

                    <div class="container desk">
                        <div class="row ">
                            <?php get_template_part('includes/template-parts/footer/footer-desk'); ?>
                        </div>
                    </div>

                    <div class="container mobile">
                        <?php get_template_part('includes/template-parts/footer/footer-mobile'); ?>
                    </div>

                </section>
            </footer>

        </main>
    </body>
    <?php wp_footer(); ?>

</html>