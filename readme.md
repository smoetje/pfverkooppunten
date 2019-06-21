**Plugin Laravel 5.8/VueJS experimental package for management of the PAULUSFEESTEN sales-locations of our dealers.**

Proudly just made my very first (very simple) CRUD plugin package just to learn how to create and use Laravel plugins 
through composer.

This application is a simple backend management api for the following (injectable) webpage plugin:
https://bitbucket.org/nicolas_r/googlemaps_pf_vuejs/src/master/

Once installed, the built-in service provider does all the work to make it work.

Current release: v0.0.3
In package.json add:

    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/smoetje/pfverkooppunten"
        }
    ],
    "require": {
        "smoetje/pfverkooppunten": "dev-master"
    },

Following routes are reserved for functionality

`/verkoop (accessing the page / application)`

`/verkooppunten (accessing the unsecured api)`

After installing:
- Migrate the application-database: `artisan migrate`
- Publish the (precompiled) VueJs app assets: `artisan vendor:publish` (and select the application tag number)