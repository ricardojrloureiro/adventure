new Vue({
    el :'#app',
    data: function() {
        return {
            users: []
        };
    },
    created: function() {
        $.getJSON('users',function(data) {
            this.users = data;
        }.bind(this));
    }
});