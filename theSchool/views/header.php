<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The School</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/grid.min.css" />
    </head>
    <body>
        <div class="ui grid">
            <div class="row">
                <div class="six wide column left floated left aligned">
                    <img src="<?php echo config::URL ?>/public/images/logo.jpg" width="150px" height="50" alt="logo">
                    <?php if (Session::get('loggedIn')): ?>
                        | <a href="#">School</a> | <a href="#">Administration</a> |
                    <?php endif ?>
                </div>
                <?php if (Session::get('loggedIn')): ?>
                    <div class="six wide column right floated right aligned">
                        <?php echo Session::get('name')?>, <?php echo Session::get('role') ?> <a href="<?php echo config::URL ?>login/logout">Logout</a><img src="<?php echo config::URL ?>/public/images/user.png" width="100px" height="50" alt="logo">
                    </div>
                <?php endif ?>
            </div>
            <div class="row">
                <div class="column sixteen wide">
                    <hr>
                </div>
            </div>
        