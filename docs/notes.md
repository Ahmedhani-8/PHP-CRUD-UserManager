## Docker Challenge

The biggest challenge I faced was running the PHP application inside Docker
while using a MySQL database running on the host machine (XAMPP). I got several
errors such as missing `mysqli` and database connection failures.

The solution was:
- Installing the `mysqli` and `pdo_mysql` extensions inside the image using `docker-php-ext-install`.
- Using `host.docker.internal` instead of `localhost` in `db_conn.php` so that the container
  can connect to the MySQL server on the host machine.

## Git / GitHub Lesson

I learned the importance of:
- Using clear commit messages with prefixes like `feat:`, `docs:`, and `docker:`.
- Organizing the project into folders (`src`, `docs`, `docs/screenshots`).
- Adding a detailed README so that any developer can quickly run the project using Docker.
