<?php

/* if ($_GET["name"] === "") {
    echo "Hello World!";
}else {
    echo "Hello ". $_GET['name']."!";
} */


require dirname(__FILE__).'/vendor/autoload.php';
require dirname(__FILE__).'/helloworld.php';

function sayHello($name)
{
    $client = new helloworld\HelloWorldClient('docker.local:50051', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new helloworld\HelloRequest();
    $request->setName($name);
    list($reply, $status) = $client->SayHello($request)->wait();
    $message = $reply->getMessage();
    return $message;
}

echo sayHello($_GET["name"]);
