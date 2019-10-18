# Office Hours Paging Server

Development environment for paging server.

+ From project root, launch environment using:
    ```
    docker-compose up
    ```
+ Code placed inside the ./www directory will be hosted on the Apache/PHP server and visible on the host by navigating to 'localhost'.
+ Use the variables found in ./www/config/config.php in your PHP connect string to connect to the database.
+ SQL DDL placed in ./mariadb/run.sql will be run when the container is launched.
+ You can connect to the SQL server directly using:
    ```
    docker exec -it office-hours-pager_mariadb_1 bash app/connect.sh
    ```
+ SQL scripts placed in ./sql are available from inside the mariadb container in the (container root)/app directory.
+ Remember that changes that you make inside your container only exist inside your container.
