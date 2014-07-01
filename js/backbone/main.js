// Require.js allows us to configure shortcut alias
// There usage will become more apparent further along in the tutorial.
require.config({
		baseUrl: "js/backbone/",
		paths: {
			'jquery': '../vendor/jquery-min', 'underscore': '../vendor/underscore-min',
			'backbone': '../vendor/backbone-min','bootstrap':'../vendor/bootstrap.min'
		},
		shim: {
			"underscore": {exports: '_'},"jquery": {exports: '$'},
			"backbone": {deps: ["underscore", "jquery"],exports: 'Backbone'},
			"bootstrap": {deps: ["jquery"]}	
		}
	});

require([
	//baseUrl: "js/backbone",      
  // Load our app module and pass it to our definition function
  'app',
], function(App){
	// The "app" dependency is passed in as "App"
	App.initialize();
	console.log('inicializa el main');
});