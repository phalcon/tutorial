# Phalcon Tutorial

Phalcon is a web framework for PHP delivered as a C extension providing high
performance and lower resource consumption.

This is a very simple tutorial to understand the basis of work with Phalcon.

Check out an [explanation article][1].

## Get Started

### Requirements

To run this application on your machine, you need at least:

* PHP >= 8.0+
* Server Any of the following
    * [Apache][2] Web Server with [mod_rewrite][3] enabled
    * [Nginx][4] Web Server
* Latest stable [Phalcon Framework release][5] extension enabled

## Running the application locally

* Clone the repository to a folder on your machine
* Navigate to that folder
* Run `docker compose up -d`
* After the build process is completed, you will have the following:
  * PHP 8.0 (`tutorial-8.0`)
  * PHP 8.1 (`tutorial-8.1`)
  * PHP 8.2 (`tutorial-8.2`)
  * PHP 8.3 (`tutorial-8.3`)
* You can check the application on your local browser by finding the IP address of the chosen environment and launching it. For example, if you wish to check the PHP 8.3 environment, type the following in your terminal:

```shell
docker inspect tutorial-8.3
```
This will output a JSON file, where you can find the IP address of the container on your local machine.

```shell
...
  "EndpointID": "563ba90563ffb7ad5c30689f1216ec4c2e1625d170eb0279e78c001973464691",
  "Gateway": "172.29.0.1",
  "IPAddress": "172.29.0.5",
  "IPPrefixLen": 16,
...
```

Launch a browser and visit the site using that IP address (`http://172.29.0.5`)

To enter an environment and run different commands, such as populating the database:

```shell
docker exec -it tutorial-8.3 /bin/bash
```

## License

Phalcon Tutorial is open-sourced software licensed under the [MIT][6]. © Phalcon Framework Team and
contributors

[1]: https://docs.phalcon.io/latest/tutorial-basic
[2]: http://httpd.apache.org/
[3]: http://httpd.apache.org/docs/current/mod/mod_rewrite.html
[4]: http://nginx.org/
[5]: https://github.com/phalcon/cphalcon/releases
[6]: https://github.com/phalcon/tutorial/blob/master/docs/LICENSE
[7]: https://github.com/phalcon/phalcon-devtools
[8]: https://docker.com
