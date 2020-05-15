<?php

$url = parse_url(getenv("DATABASE_URL"));

return (object) array(
    'db_server' =>$url["host"],
    'db_username' => $url["user"],
    'db_pass' => $url["pass"],
    'db_database' => substr($url["path"], 1),
    'channelID' => '1654152976',
    'channelAccessToken' => 'lzceiwKEwtcXKq+Nvje/0pIYjpMDgvIy86JXCyxKxRorrBp5tQtMtOBE3zMsfn7dS8Pb+mbn+PdC01dx5JperIBvSjl58oNCWWLVEgDjhIZLRAPy77dNRkwt4ux4zjZNGfzsu0Cq87JBR5nZlSqoZmbZkCQsS1A9FX3FSRp/ceE=',
    'channelSecret' => '539edc4e8dad5331781be75742242d0e',

);

?>
