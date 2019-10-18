# Office Hours Paging Server

Development environment for paging server.

+ From project root, launch environment using:
    ```
    docker-compose up
    ```
+ Code placed inside the www/ directory will be hosted on the Apache/PHP server and visible from the host machine @localhost.
+ SQL DDL placed in mariadb/run.sql will be run when the container is launched.
+ You can connect to the SQL server directly using:
    ```
    docker exec -it office-hours-pager_mariadb_1 bash app/connect.sh
    ```
+ Remember that changes that you make inside your container only exist inside your container.
