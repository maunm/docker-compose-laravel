# Laravel 5.4 with Docker Compose

- Make sure that you have installed Docker.
- Run `composer install`, this will download the dependencies.
- Run `docker-compose up`, this will download and setup the docker containers.
- Run `php artisan voyager:install --with-dummy`, this will setup Voyager.
- Run `php artisan passport:client --password`, this will create an app client.

## URLs

- Phpmyadmin http://localhost:8000/
- Nginx http://localhost:8080/
- Mysql :33061

## Site features.

- A demo API.
- It has configured Oauth 2 authentication with passport.
- Integration with social login using Socialite.
- Integration with Voyager to manage the Admin site pages.

## Admin login.

- admin@admin.com/password

## API
- Use 'password' grant_type to get access token.
- Use authentication bearer to access the API data.


