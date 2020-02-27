<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.1
 */

/**
 * Database `test`
 */

/* `test`.`atividades` */
$atividades = array(
  array('id_atividade' => '9','nome_atividade' => 'Palestra de python','tipo_atividade' => 'Palestra','status_valor' => 'Paga','duracao_atividade' => '10','valor' => '100')
);

/* `test`.`eventos` */
$eventos = array(
  array('id_evento' => '10','nome_evento' => 'evento uespi','quant_participantes' => '100','nome_user' => 'Kleidimilson Ibiapina','telefone' => '2147483647','email' => '','atividades' => NULL)
);

/* `test`.`usuarios` */
$usuarios = array(
  array('id_usuario' => '1','nome' => 'antonio','email' => 'antonio@hotmail.com','senha' => '202cb962ac59075b964b07152d234b70','eventos' => '1'),
  array('id_usuario' => '15','nome' => 'klei','email' => 'klei@gmail.com','senha' => '202cb962ac59075b964b07152d234b70','eventos' => '2'),
  array('id_usuario' => '17','nome' => 'kleidimilson Jóse Ibiapina de Sousa','email' => 'kleidimilson@gmail.com','senha' => '90f1a7a29d87494ddf75dec600dc11da','eventos' => '7'),
  array('id_usuario' => '19','nome' => 'segundo','email' => 'segundo@gmail.com','senha' => '90f1a7a29d87494ddf75dec600dc11da','eventos' => NULL)
);
