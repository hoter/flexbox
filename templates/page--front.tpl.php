<div id="page">
    <?php if ($page['header']): ?>
        <header id="header">
            <?php print render($page['header']); ?>
        </header>
    <?php endif; ?>

    <main>
        <div id="content">
            <?php print render($page['content']); ?>
        </div>
        <?php if ($page['sidebar_first']): ?>
            <aside id="sidebar_first">
                <?php print render($page['sidebar_first']); ?>
            </aside>
        <?php endif; ?>
        <?php if ($page['sidebar_second']): ?>
            <aside id="sidebar_second">
                <?php print render($page['sidebar_second']); ?>
            </aside>
        <?php endif; ?>
    </main>
    
    <?php if ($page['footer']): ?>
        <footer id="footer">
            <?php print render($page['footer']); ?>
        </footer>
    <?php endif; ?>
</div>