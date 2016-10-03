<?php 
$I = new FunctionalTester($scenario);
$I->amOnPage('/');
$I->click('Sign Up');
$I->submitForm('#signup', ['username' => 'desikur', 'email' => 'desikur@gmail.com']);
$I->see('Thank you for Signing Up! @desikur');
//$I->seeEmailSent('miles@davis.com', 'Thank you for registration');
//$I->seeInDatabase('users', ['email' => 'miles@davis.com']);