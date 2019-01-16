
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-chat-scroll'))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// Initialize Firebase
var config = {
    apiKey: "AIzaSyA1csKPvLIZ0iOXGjKicoG1SzBxmuA5Kn8",
    authDomain: "testing-7687.firebaseapp.com",
    databaseURL: "https://testing-7687.firebaseio.com",
    projectId: "testing-7687",
    storageBucket: "testing-7687.appspot.com",
    messagingSenderId: "953819231795"
  };
firebase.initializeApp(config);
new Vue({
    el: '#chat',
    data: {
        chat: '',
        reciever_id:document.querySelector('input[name="reciever_id"]').getAttribute('value'),
        sender_id:document.querySelector('input[name="sender_id"]').getAttribute('value'),
        chats: []
    },
    mounted: function() {
        var self = this;
        // Initialize firebase realtime database.
        firebase.database().ref('chats/users/'+this.sender_id+'/'+this.reciever_id+'/').on('value', function(snapshot) {
            console.log(snapshot.val());
            self.chats=snapshot.val();
        });
    },
    methods: {
        /**
         * Create a new todo and synchronize it with Firebase
         */
        sendMessage: function() {
          firebase.database().ref('chats/users/'+this.sender_id+'/'+this.reciever_id+'/').set({text:this.chat});
            // var self = this;
            // $.post('/chat', {
            //     _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            //     text: self.chat,
            //     reciever_id: self.reciever_id,
            //     sender_id:self.sender_id,
            //     created_at: new Date($.now())
            // });
            this.chat = '';
        },
        /**
         * Update an existing todo and synchronize it with Firebase
         */
        updateTodo: function(todo) {
            $.post('/chat/'+chat.reciever_id, {
                _method: 'PUT',
                _token: '{!! csrf_token() !!}',
                message: self.message,
                reciever_id: self.reciever_id,
                sender_id:self.sender_id,
            });
        }
    }
});
