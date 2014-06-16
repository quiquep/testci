$(function(){
	var eventCollection = new EventCollection();		
	var eventColView = new EventCollectionView({collection:eventCollection});
	eventCollection.fetch({reset: true});
});

