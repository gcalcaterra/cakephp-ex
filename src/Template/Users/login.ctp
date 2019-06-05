<section id="contact" class="s-contact">

<div class="overlay"></div>
<div class="contact__line"></div>

<div class="row contact-conten" data-aos="fade-up">

    <div class="contact-primary">
        <h1 class="display-3 display-2--light">Iniciar Sesión</h1>
            <?= $this->Form->create() ?>
            <?= $this->Form->control('Email', [ 'class' =>'full-width' ] ); ?>
            <?= $this->Form->control('Password', [ 'class'=>'full-width' ] ); ?>
            <?= $this->Form->button('Ingresar') ?>
            <?= $this->Form->end() ?>
        
        </div>
    

     </div>
    <!-- end contact-conten -->

</section>