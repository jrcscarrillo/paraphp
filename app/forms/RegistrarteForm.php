<?php

use \Phalcon\Forms\Form;
use \Phalcon\Forms\Element\Text;
use \Phalcon\Forms\Element\Password;
use \Phalcon\Validation\Validator\PresenceOf;
use \Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Uniqueness;

class RegistrarteForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        // Name
        $name = new Text('name');
        $name->setLabel('Your Full Name');
        $name->setFilters(array('striptags', 'string'));
        $name->addValidators(array(
            new PresenceOf(array(
                'message' => 'Name is required'
            )),
           new Uniqueness(array(
              'message' => 'Full name is already registered'
           ))
        ));
        $this->add($name);

        // Name
        $username = new Text('username');
        $username->setLabel('Username');
        $username->setFilters(array('alpha'));
        $username->addValidators(array(
            new PresenceOf(array(
                'message' => 'Please enter your desired user name'
            )),
           new Uniqueness(array(
              'message' => 'Username is already registered'
           ))
        ));
        $this->add($username);

        // Email
        $email = new Text('email');
        $email->setLabel('E-Mail');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'E-mail is required'
            )),
            new Email(array(
                'message' => 'E-mail is not valid'
            )),
           new Uniqueness(array(
              'message' => 'This email is already registered'
           ))
        ));
        $this->add($email);

        // Password
        $password = new Password('password');
        $password->setLabel('Password');
        $password->addValidators(array(
            new PresenceOf(array(
                'message' => 'Password is required'
            ))
        ));
        $this->add($password);

        // Confirm Password
        $repeatPassword = new Password('repeatPassword');
        $repeatPassword->setLabel('Repeat Password');
        $repeatPassword->addValidators(array(
            new PresenceOf(array(
                'message' => 'Confirmation password is required'
            ))
        ));
        $this->add($repeatPassword);
    }

    
    }