$(function(){
	var newsCollection = new NewsCollection();		
	var newsColView = new NewsCollectionView({collection:newsCollection});
	newsCollection.fetch({reset: true});
});

