<?php
/**
 * Created by PhpStorm.
 * User: rom
 * Date: 12/13/17
 * Time: 2:33 PM
 */?>


<div class="grid-x align-center-middle" style="padding:10%;">
    <div class="medium-3 cell">
        <?=  $this->Form->create($user) ?>
        <?=  $this->Form->control('email', ['label' => false, 'placeholder' => 'email']) ?>
        <?=  $this->Form->control('password', ['label' => false, 'placeholder' => 'password']) ?>
        <?=  $this->Form->control('cPassword', ['label' => false, 'placeholder' => 'confirm password']) ?>
        <?=  $this->Form->select('role', ['buyer' =>'Buyer', 'seller' => 'Seller']) ?>
        <?=  $this->Form->Button(__('Register'),['class' => 'button expanded'])?>
        <?=  $this->Form->end() ?>
    </div>
</div>

