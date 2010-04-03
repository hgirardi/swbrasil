<?php
    echo $form->renderFormTag('login',array('id' => 'login', 'class' => 'span-5'));
?>
    <fieldset>
        <legend>Login</legend>
<?php
    echo $form->render();
?>
    <input type="submit" value="Login" />
    </fieldset>
</form>
