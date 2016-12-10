The Docker setup for PHP applications using PHP7-FPM and Nginx, plus a gRPC connected Nodejs container. 

## Instructions
1. Checkout the repository
2. CD down into the `grpc-php-demo` directory.
* Run `docker-compose up -d`
* Run `docker-compose exec php bash`
* Run in the php container `composer install`
* Run in the php container `protoc-gen-php -i . -o . helloworld.proto`
* Exit the container with `exit`
* Run `docker-compose hello-world bash`
* Run in the hello-world (node) container `npm install`
* Run in the hello-world (node) container `node hello-world-service.js`
* Navigate to http://docker.local:8080

That's it! You have your local PHP setup using Docker
