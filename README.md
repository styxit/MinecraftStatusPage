# Minecraft server status page
A simple page to see if your minecraft server is online with some basic stats like the version and amount of players online.

## Requirements
- A webserver with php >= 7
- [Composer](https://getcomposer.org/)

## Setup
1. Clone this repository on your webserver.
2. Duplicate the `.env.example` file to `.env` and update this file with the settings that apply to you.
3. From within the project directory run `composer install` to download and install the dependencies.
4. Point your webserver to the `public` dir of this project and the Minecraft server status page is up and running.

## Screenshot
![dummy screenshot](https://raw.githubusercontent.com/styxit/MinecraftStatusPage/master/screenshot.png)
