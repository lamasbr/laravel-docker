#!/bin/bash

/usr/local/bin/docker-compose up -d
/usr/bin/docker exec -ti laravel_web chgrp -R www-data /code/storage /code/bootstrap/cache
/usr/bin/docker exec -ti laravel_web chmod -R ug+rwx /code/storage /code/bootstrap/cache
/usr/bin/docker exec -ti laravel_php chgrp -R www-data /code/storage /code/bootstrap/cache
/usr/bin/docker exec -ti laravel_php chmod -R ug+rwx /code/storage /code/bootstrap/cache
