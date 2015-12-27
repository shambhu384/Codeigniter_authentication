<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo heading('<center>Register form</center>', 1);
echo validation_errors('<font color="red">', '</font>');
echo br(2);
echo form_open('logincontroller/register');
echo form_label('Enter username: ', 'usernamelabel');
echo form_input('username', 'xxx');
echo br(2);

echo form_label('Enter firstname: ', 'firstnamelabel');
echo form_input('firstname', 'xxx');
echo br(2);

echo form_label('Enter lastname: ', 'lastnamelabel');
echo form_input('lastname', 'xxx');
echo br(2);


echo form_label('Enter Email: ', 'emaillabel');
echo nbs(5);
echo form_input('email', 'xxx@xxx.com');
echo br(2);
echo form_label('Enter Pasword: ', 'passwordlabel');
echo nbs(1);
echo form_input('password', '');
echo br(2);
echo form_label('Re-Enter Pasword: ', 'passwordlabel');
echo nbs(1);
echo form_input('repassword', '');
echo br(2);
echo nbs(5);
echo form_submit('myregisteration', 'Register');
echo nbs(5);
echo form_reset('resetregistration', 'Reset');

