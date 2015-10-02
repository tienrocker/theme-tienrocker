<div class="sticky show-for-medium-up contain-to-grid">
    <nav class="top-bar navbar navbar-default navbar-static-top" data-topbar>
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a> 
            </div>
            <section id="navbar-collapse-top-menu" class="collapse navbar-collapse navbar-right">
                <?php joints_top_nav(); ?>
            </section>
        </div>
    </nav>
</div>

<?php if (!is_home()): ?>
    <div class="container"> 
        <?php dimox_breadcrumbs(); ?>
    </div>
<?php endif; ?>