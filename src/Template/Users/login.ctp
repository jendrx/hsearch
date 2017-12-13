<?php
/**
 * Created by PhpStorm.
 * User: rom
 * Date: 12/13/17
 * Time: 4:45 PM
 */?>

<div class="grid-x align-center-middle" style="padding:10%;">
    <div class="medium-3 cell">
        <?=  $this->Form->create() ?>
        <?=  $this->Form->control('email', ['label' => false, 'placeholder' => 'email']) ?>
        <?=  $this->Form->control('password', ['label' => false, 'placeholder' => 'password']) ?>
        <?=  $this->Form->Button(__('Login'),['class' => 'button expanded'])?>
        <?=  $this->Form->end() ?>
    </div>
</div>
