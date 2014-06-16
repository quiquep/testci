var EventCollection = Backbone.Collection.extend({
	model: Event,
	url: 'http://localhost/testci/events/listAll/json',
});