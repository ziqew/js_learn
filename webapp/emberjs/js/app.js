App = Ember.Application.create();

App.Router.map(function() {
    // put your routes here
});

App.IndexController = Ember.ObjectController.extend({
    headerName: 'Welcome to the Hacker News App',
    appVersion:  2.1
});

App.Item = Ember.Object.extend();

App.Item.reopenClass({
    all: function() {
        return $.getJSON("http://api.ihackernews.com/page?format=jsonp&callback=?").then(function(response) {
            var items = [];

            response.items.forEach( function (item) {
                items.push( App.Item.create(item) );
            });

            return items;
        });
    }
});

App.IndexRoute = Ember.Route.extend({
    model: function() {
        //return ['red', 'yellow', 'blue'];
        return App.Item.all();
    }
});