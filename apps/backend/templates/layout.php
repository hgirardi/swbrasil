<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div class="container">
            <div id="header" class="span-24">
                <h1>Área Administrativa - SWBrasil</h1>
                <?php
                    if($sf_user->isAuthenticated()){
                ?>
                <ul id="menu">
                    <li <?php echo ($sf_request->getParameter('module') == 'user') ? 'class="selected"' : ''; ?>><?php echo link_to('Usuários','@user');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'news') ? 'class="selected"' : ''; ?>><?php echo link_to('Notícias','@news');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'download') ? 'class="selected"' : ''; ?>><?php echo link_to('Downloads','@download');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'professional') ? 'class="selected"' : ''; ?>><?php echo link_to('Profissionais','@professional');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'friend') ? 'class="selected"' : ''; ?>><?php echo link_to('Amigos','@friend');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'guestbook') ? 'class="selected"' : ''; ?>><?php echo link_to('Livro de Visitas','@guestbook');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'link') ? 'class="selected"' : ''; ?>><?php echo link_to('Links','@link');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'category') ? 'class="selected"' : ''; ?>><?php echo link_to('Categorias','@category');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'page') ? 'class="selected"' : ''; ?>><?php echo link_to('Páginas','@page');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'partner') ? 'class="selected"' : ''; ?>><?php echo link_to('Parceiros','@partner');?></li>
                    <li <?php echo ($sf_request->getParameter('module') == 'gallery') ? 'class="selected"' : ''; ?>><?php echo link_to('Álbum','@gallery');?></li>
                    <li class="logout"><?php echo link_to('Sair','login/logout'); ?></li>
                </ul>
                <?php
                    }
                ?>
            </div>
            <div id="content" class="<?php echo $sf_context->getModuleName() ?>">
                <?php echo $sf_content ?>
            </div>
        </div>
    </body>
</html>
