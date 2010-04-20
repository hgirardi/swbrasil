<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-BR">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div class="container"
            <div id="header" class="clear">
                <h1>Website Oficial Da Associação Brasileira da Sínfrome de Williams</h1>
                <ul id="topMenu">
                    <li><?php echo link_to('Sobre a ABSW','@page_view?slug_category=geral&slug_page=sobre-a-absw');?></a></li>
                    <li><?php echo link_to('Sobre o Site','@page_view?slug_category=geral&slug_page=sobre-o-site');?></a></li>
                    <li class="last"><a href="#">Fale Conosco</a></li>
                </ul>
                <form method="post" action="#">
                    <fieldset>
                        <legend>Busca Rápida</legend>
                        <input type="text" name="term" id="term" />
                        <input type="submit" value="Buscar" class="button" />
                    </fieldset>
                </form>
            </div>
            <div id="sideBar" class="span-6">
                <h2>Menu</h2>
                <?php
                    include_component('capa','menu');
                ?>
            </div>
            <div id="content" class="span-18 last <?php echo $sf_context->getModuleName() ?>">
                <?php echo $sf_content ?>
            </div>
            <div id="footer" class="clear">
                Site desenvolvido e atualizado por <a href="http://www.litoralmania.com.br">www.litoralmania.com.br</a> - Criado em 09/2001
                <ul
                <ul id="bottomMenu">
                    <li><?php echo link_to('Sobre a ABSW','@page_view?slug_category=geral&slug_page=sobre-a-absw');?></a></li>
                    <li><?php echo link_to('Sobre o Site','@page_view?slug_category=geral&slug_page=sobre-o-site');?></a></li>
                    <li class="last"><a href="#">Fale Conosco</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
