# _mohoriis Symfony_
___

This project will be my place to play around with symfony.
I rebuild the project as symfony based composer project to use twig as template engine.

Its running eiter with **docker php8-apache environment**, or with build in symfony server if you prefer. Don't you
wonder why there is a mysql container up and running when you start the project? It was part of the
symfony-docker-tutorial I made and because I want to start mysqling as one of the next steps, there was no need to skip
this part.

For compiling I use a symfony CLI built in **Webpack Configuration** wich actually works fine. In the further progress
of this project I will have a closer look on this, but it's good for the moment.

##well... **¯\\\_(ツ)\_/¯**

___

To set up this project after cloning you will need composer (version ^2.4.2) and npm (version ^8.15.0) running on your
system. Then execute these:

|Script |Description|
| :--- | :--- |
|```composer install```|Installs necessary composer dependencies|
|```npm install```|Installs necessary npm dependencies|

---

To run this environment locally you would propably need npm and/or at least docker running on your system

|Script |Description|
| :--- | :--- |
|```npm run dev-server```|Start docker in detached mode && webpack in watch mode|
|```npm run watch```|Start only webpack in watch mode e.g if you got your own environment running|
|```npm run server```|Start only docker containers, no webpack file processing|
|```npm run dev```|Start webpack compilation once|
|```npm run build```|Start webpack for production in progress mode|
|```npm run end```|Stop docker containers when ctrl+c is no option :) |

- _you can find the project on your localhost:80_

---

## ChangeLog

_**version 2.0:**_

- start this project as symfony project from scratch
- Remove Bootstrap Plugin from project

_**version 1.3.2:**_

- fix container name in docker-compose

_**version 1.3.1:**_

- add minor new styles

_**version 1.3.0:**_

- add image minimizers to optimize images in build process

_**version 1.2.4:**_

- update a few styles of teaser and header

_**version 1.2.3:**_

- add new scripts to / update package.json
- add more information to readme.md

_**version 1.2.2:**_

- fix page title issue on home page
- add watcherOptions to Webpack to have it work well in --watch mode

_**version 1.2.1:**_

- add favicon to project
- dynamic title to pages
- fix minor issue with teaser box on safari devices

_**version 1.2.0:**_

- add easy webpack and webpack configuration to be encapsulated from expensive bundling apps

_**version 1.1.0:**_

- add docker-compose file with php:8-apache image running
