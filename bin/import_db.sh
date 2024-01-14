#!/usr/bin/env bash

mysql --user=$DATA_MYSQL_USER \
      --password=$DATA_MYSQL_PASS \
      --host=$DATA_MYSQL_HOST \
      phalcon_tutorial < /code/resources/schemas/tutorial.sql
