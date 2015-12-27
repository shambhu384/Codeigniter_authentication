<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo heading('<center>Loginform</center>', 1);
echo form_open('logincontroller/login');
echo form_label('Enter username: ', 'usernamelabel');
echo form_input('username', 'xxx');
echo br(2);
echo form_label('Enter Pasword: ', 'passwordlabel');
echo form_input('password', '');
echo br(2);
echo form_submit('mylogin', 'Login');

