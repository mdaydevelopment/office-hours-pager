#!/bin/bash

exec mysql -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE
