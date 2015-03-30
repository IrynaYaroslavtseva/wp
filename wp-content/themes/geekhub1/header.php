<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"s />
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <?php wp_head() ?>  
    </head>
    <body>
       <div class="wrapper">
              <div class="header">
               <ul class="login">
                   <li><a href="#">регистрация</a></li>
                   <li><a href="#">вход</a></li>
               </ul>
               <a class="logo" href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.fw.png" width="175" height="83" alt="managers to managers" /><span>managers to <br> managers</span></a>
               <p>Сообщество IT-компаний города Черкассы</p>
               <ul class="nav">
                    <li><a href="#">главная</a></li>
                    <li><a href="#">цель проекта</a></li>
                    <li class="active">компании</li>
              </ul>
               
           </div>