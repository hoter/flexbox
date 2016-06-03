<div id="page">
    <section>
        <?php print render($page['content']); ?>
    </section>

    <?php if ($page['header']): ?>
        <header>
            <?php print render($page['header']); ?>
        </header>
    <?php endif; ?>
    
    <?php if ($page['footer']): ?>
        <footer>
            <?php print render($page['footer']); ?>
        </footer>
    <?php endif; ?>
</div>