<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Preferences'), ['controller' => 'Preferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preference'), ['controller' => 'Preferences', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<section id="contact" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row contact-content" data-aos="fade-up">

        <div class="contact-primary">

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">

                    <h1 class="display-3 display-2--light">Registrarse</h1>
                </div>
            </div>

            <div class="users form large-9 medium-8 columns content">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Agregar Usuario') ?></legend>
                    <?php
                    echo $this->Form->control('name', ['class' => 'full-width', 'label' => 'Nombre y Apellido:']);
                    echo $this->Form->control('sex', ['class' => 'full-width', 'label' => 'Genero:']);
                    echo $this->Form->control('age', ['class' => 'full-width', 'label' => 'Edad:']);
                    echo $this->Form->control('email', ['class' => 'full-width', 'label' => 'Email:']);
                    echo $this->Form->control('password', ['class' => 'full-width', 'label' => 'Password']);
                    echo $this->Form->control('confirmPassword', ['class' => 'full-width', 'type' => 'password', 'label' => 'Confirmar Password']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Registrar')) ?>
                <?= $this->Form->end() ?>
            </div>


        </div>


    </div>
    <!-- end contact-conten -->

</section>