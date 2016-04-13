<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
* 
* @see more details at http://rockmongo.com/wiki/configuration?lang=en_us
*/

/**
 * mini configuration for another mongo server
 */
$MONGO["servers"][$i]["mongo_name"] = getenv('MONGODB_PORT_27017_TCP_ADDR');;
$MONGO["servers"][$i]["mongo_host"] = getenv('MONGODB_PORT_27017_TCP_ADDR');;
$MONGO["servers"][$i]["mongo_port"] = getenv('MONGODB_PORT_27017_TCP_PORT');;
$MONGO["servers"][$i]["control_users"]["admin"] = "admin";
$i ++;


?>
