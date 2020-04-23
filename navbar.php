<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.0.2
 */

/**
 * Database `navbar`
 */

/* `navbar`.`menus` */
$menus = array(
  array('id' => '1','name' => 'Home','parent_id' => NULL,'page' => 'index.php'),
  array('id' => '2','name' => 'Sub Menu 1','parent_id' => NULL,'page' => ''),
  array('id' => '3','name' => 'Sub item1','parent_id' => '2','page' => ''),
  array('id' => '4','name' => 'Sub item2','parent_id' => '2','page' => ''),
  array('id' => '5','name' => 'sub item3','parent_id' => '1','page' => ''),
  array('id' => '6','name' => 'About','parent_id' => NULL,'page' => ''),
  array('id' => '7','name' => 'Contact','parent_id' => '6','page' => ''),
  array('id' => '8','name' => 'sub item2','parent_id' => '3','page' => 'index.php'),
  array('id' => '10','name' => 'new item','parent_id' => '3','page' => ''),
  array('id' => '11','name' => 'NewHome','parent_id' => NULL,'page' => 'index.php')
);

/* `navbar`.`user` */
$user = array(
  array('user_id' => '21','username' => 'sumeet','password' => '$2y$10$iYqZumhFF2rpMjfHB5tPcuiCPjV10aNVwCIMtSHZYCrm7KtZq7NLy','email' => 'sumeetchandel321@gmail.com'),
  array('user_id' => '22','username' => 'test123','password' => '$2y$10$VfwrKUEUGydntzvg/yPS9Ot0EeTNvJddf1m9q0hBQYAznqPRnb7/u','email' => 'test123@dsdf.ocm'),
  array('user_id' => '38','username' => 's','password' => '$2y$10$GMbPNap3HFLbUhvf9m8vbefF88VbXwAqrZoIw7bUtvPmbxp5irZOa','email' => ''),
  array('user_id' => '39','username' => 'satish','password' => '$2y$10$W6JGA4ixwE1o8sgz8MQRH..zLZHdhZ9OhrYXmv1qKOMmIPOJeJYga','email' => 'satishchandel@gmail.com')
);


?>