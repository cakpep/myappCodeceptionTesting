<?php 
$I = new AcceptanceTester($scenario);
$I->amOnPage('/');
$I->click('Sign Up');
$I->submitForm('#signup', ['username' => 'desikur', 'email' => 'desikur@gmail.com']);
$I->see('Thank you for Signing Up! @desikur');