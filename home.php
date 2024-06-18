<?php ob_start(); ?>

<h1>Liste des utilisateurs</h1>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->user_id ?></li>
        <li><?= $user->email ?></li>
        <li><?= $user->password ?></li>
    <?php endforeach; ?>
</ul>





<?php $main = ob_get_clean(); ?>