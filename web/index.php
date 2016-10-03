
<?= 'Hello @desikur'; ?>
<hr>
<?php
    if(filter_input_array(INPUT_POST)){
        echo 'Thank you for Signing Up! @desikur';
    }
?>
<div>
    <form id="signup" action="" method="post">
        <input type="text" name="username">
        <input type="text" name="email">
        <button>Sign Up</button>
    </form>
</div>