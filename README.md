The Docker setup for PHP applications using PHP7-FPM and Nginx, plus a gRPC connected Nodejs container. 

## Instructions
1. Checkout the repository
2. CD down into the `grpc-php-demo` directory.
* Run `docker-compose up -d`
* Run `docker-compose exec php bash`
* Run in the container `composer install`
* Exit the container with `exit`
* Run `docker-compose hello-world bash`
* Run in the container `npm install`
* Navigate to http://docker.local:8080

That's it! You have your local PHP setup using Docker
