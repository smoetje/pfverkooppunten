Plugin Laravel 5.8 package for management of the PAULUSFEESTEN management of the sales-locations of our dealers.

Just a very simple package to learn how to use it as a plug-in feature.

The built-in service provider should do all the work.
Just don't forget to add the following line to webpack.mix.js in order to be able to compile the added VueJS assets:

mix.js('resources/js/verkooppunten-app.js', 'public/js');
