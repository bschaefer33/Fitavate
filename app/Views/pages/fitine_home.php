<?= $this->extend('templates/hometemplate') ?>

    <?= $this->section('content') ?>
        <h1 class="PageHeader">FitTines</h1>
        <a href="<?php echo site_url('fitine_new'); ?>">new fitine</a>
        <!--Find all the fitines linked to the user id use a selectable list-->
        <h2 class="SectionHeader">My FitTines</h2>
        <div class="myFitinesList">
        <!--display all where the user is creater-->
        <?php if(!empty($data) && is_array($data)) :?>
            <?php foreach($data as $row):?>
                <?php echo $row['user_id']; ?>
                <?php echo $row['userDisplayName']; ?>
            <?php endforeach;?>
        <?php else: ?>
            <h3>Nothing</h3>
            <p>Couldnt find it</p>
        <?php endif ?>
        </div>
        <h2 class="SectionHeader">Saved FitTines</h2>
        <div class="myFitinesList">
            <!--display fitines where the user and creater are not the same-->
        </div>
    <?= $this->endSection() ?>