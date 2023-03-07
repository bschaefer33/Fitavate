<?= $this->extend('templates/hometemplate') ?>

    <?= $this->section('content') ?>
        <h1 class="PageHeader">FitTines</h1>

        <a href="<?php echo site_url('fitine_new'); ?>">new fitine</a>
        <!--Find all the fitines linked to the user id use a selectable list-->
        <h2 class="SectionHeader">My FitTines</h2>
        <div class="myFitinesList">
        <!--display all where the user is creater-->

    
        </div>
        <h2 class="SectionHeader">Saved FitTines</h2>
        <div class="myFitinesList">
            <!--display fitines where the user and creater are not the same-->
        </div>
    <?= $this->endSection() ?>