<?php

//$my_string = 'Bonjour lulu !!';
//$my_int = 10;
//$my_state = TRUE;
$my_users = array(
  0=>array(
    'id'=> '1',
    'name' => 'JP',
    'mail' => 'jpexexemple',
    'role' => array('admin'),
    ),
  1=>array(
    'id'=> '2',
    'name' => 'DD',
    'mail' => 'jpexexemple',
    'role' => array('journalist'),
    ),
  2=>array(
    'id'=> '3',
    'name' => 'MC',
    'mail' => 'jpexexemple',
    'role' => array('chief_editor'),
    ),
  3=>array(
    'id'=> '4',
    'name' => 'JFX',
    'mail' => 'jpx@exemple',
    'role' => array('webmaster','chief_editor'),
    ),
  /*0=>'JP',
  1=>'DD',
  2=>'MC',
  3=>'JFX',*/
  /*'user1' => 'JP',
  'user2' => 'DD',
  'user3' => 'MC',
  'user4' => 'JFX'*/
  );

//print $my_string;

//foreach($my_users as $id => $name) {
//foreach($my_users as $key => $name) {
foreach($my_users as $user) {
  generate_user_row($user);
  //$markup = $key .' => '.$name.'<br/>';
  //$markup = $id .'=>' .$name . '<br/>';
  //print $markup;
  //die();
  }

function generate_user_row($user=NULL){
    print 'nom:' . $user['name'].'<br>';
    print 'email:' . $user['mail'].'<br>';
  }

?>