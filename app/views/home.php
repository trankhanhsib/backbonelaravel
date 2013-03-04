<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <h1 id="heading">Backbone in Laravel</h1>

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/underscore.js"></script>
        <script src="http://backbonejs.org/backbone.js"></script>
        <script src="js/main.js"></script>
        <script src="js/models.js"></script>
        <script src="js/collections.js"></script>
        <script src="js/views.js"></script>
        <script src="js/router.js"></script>
        <script>
//           new App.Router;
//           Backbone.history.start();
//           
//           App.contacts = new App.Collections.Contacts;
//           App.contacts.fetch().then(function(){
//               new App.Views.App({collection: App.contacts});
//           })
        function con(a){
            console.log(a);
        }


        var App = {
            Models: {},
            Controllers: {},
            Views   : {}
        }
        
        App.Models = Backbone.Model.extend({
            defaults: {
                name: 'Test', 
                age: '24', 
                occupancy: 'Web Engineer'
            }
        });
        
        
        App.Views = Backbone.View.extend({
            tagName: 'li',
            render: function(){
                this.$el.html(this.model.get('name'));
                return this;
            }, 
            initialize : function() {
                this.model.on('change:name', function(){
                    alert('abc');
                })
            }
        })
        var person = new App.Models;
        con(typeof person.toJSON());
        var personView = new App.Views({model: person})
        
        con(personView.render().$el.html())
        person.set('name', 'new');
           
           
        </script>
    </body>
</html>