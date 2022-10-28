<!--The Code below creates user in the database named foodieshop with all privileges-->
<?php
$sql = "-- Create foodieshopadmin user\n"

    . "GRANT ALL PRIVILEGES ON `foodieshop`.*\n"

    . "      TO \'foodieshopadmin\'@\'localhost\' IDENTIFIED\n"

    . "BY \'foodieshopadmin\'\n"

    . "      WITH GRANT OPTION";
?>