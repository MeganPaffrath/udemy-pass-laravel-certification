# Introduction

- [Back to Root](../README.md)

# Exam Expects You To Know / Do

- Features of laravel & why
- For each section in this course, read the manual too

# Using Composer & Installing Laravel

## Composer

- `Composer` : dependancy manager for php
- Most Common IDE : PHP Storm, Sublime
  - provides a way to manage 3rd party packages
- `composer.json` : file providing list of all dependencies and soruce info for project
- `composer.lock` : the file that you commit to source control, allows other devs to install the same exact version that you are using
- When someone gets you package they can simply run `composer install`

## Laravel Homestead

- `Laravel Homestead` : virtual box designed to run Laravel : [docs](https://laravel.com/docs/8.x/homestead)

Laravel homestead makes it so that programmers can run virtual boxes on their machines. This prevents users from having to install PHP and other software on their local machines!

Another great thing about virtual boxes is that users can have multiple virtual boxes for various projects all on one machine. This is great because it prevents programmers from needing to change PHP versions when they switch between projects!

## To get started (Mac users):

- Create Laravel Project with [composer](https://getcomposer.org/) : `composer create-project laravel/laravel example-app`
- enter project directory : `cd example-app`
- Install [Virtual Box](https://www.virtualbox.org/wiki/Downloads) : used to run virtual machines
  - may need to go into `system preferences -> security & privacy` to allow full installation
- Install [Vagrant](https://www.vagrantup.com/downloads) : `brew install vagrant`
  - This is a tool to help manage and build virtual machines
- Install composer within project : `composer require laravel/homestead --dev`
  - when user runs composer install, homestead will be downloaded so users don't have to handle installation themselves
- Finish installing homestead : `php vendor/bin/homestead make`
- Generate SSH key Generate a ssh key `ssh-keygen -t rsa -C "your_email@example.com"`
- run : `vagrant up` - may throw some errors the first time while building
- view project at `localhost:8000`

To learn more about Laravel Homestead, check out the [official documentation](https://laravel.com/docs/8.x/homestead#installation-and-setup)!

# For exam

- understand various ways to install laravel
- read documentation for `getting started -> installation` & `getting started -> configuration`
