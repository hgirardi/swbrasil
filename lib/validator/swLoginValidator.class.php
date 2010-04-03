<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of swLoginValidatorclass
 *
 * @author hboaventura
 */
class swLoginValidator extends sfValidatorBase
{
    public function configure($options = array(), $messages = array())
    {
        $this->addOption('user_field'        , 'user');
        $this->addOption('pass_field'        , 'password');
        $this->addOption('throw_global_error', true);

        $this->setMessage('invalid', 'O usuario/senha inválido.');
    }

    protected function doClean($values)
    {
        $user = isset($values[$this->getOption('user_field')]  ) ? $values[$this->getOption('user_field')]   : '';
        $pass = isset($values[$this->getOption('pass_field')]    ) ? $values[$this->getOption('pass_field')]     : '';

        if ($user != '' AND $pass != '') {
            $user = Doctrine::getTable('User')->createQuery('u')
                    ->where('u.user = ?', $user)
                    ->andWhere('u.password = ?', md5($pass))
                    ->fetchArray();

            if (count($user) != 1) {
                throw new sfValidatorError($this, 'invalid');
            } else {
                return true;
            }

            if ($this->getOption('throw_global_error')){
                throw new sfValidatorError($this, 'invalid');
            }
        }
    }
}

