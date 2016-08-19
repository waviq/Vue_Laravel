Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('X-CSRF-TOKEN').getAttribute('content');

Vue.component('task-component',{
    template:'#task-template',
    // props:['list'],
    data:function () {
        return {
            query:'',
            list:[],
            body:[]

        };
    },

    // created atau ready mempunyai arti yang sama, ketika componen siap makan akan di jalankan
    created(){
        //this.tampilkanTaskList();
        this.search();

    },

    methods:{
        deleteTask:function (task) {
            this.list.$remove(task);
        },
        deleteTask2:function (task) {
            this.body.$remove(task);
        },

        search:function (e) {
            this.$http.post('api/tasks/ok',{query:this.query}, function (response) {
                this.body = response.body;
            });

            /*var resource2 = this.$resource('api/tasks/ok');
             resource2.post({query:this.query},function (response) {
             this.body = response;
             });*/

        },


        tampilkanTaskList:function () {
            var resource = this.$resource('api/tasks/');
            resource.get(function (tasks) {
                this.list = tasks;
            }.bind(this));


            /*this.$http.get('api/tasks', function (tasks) {
             console.log(tasks);
             });*/

            /*using jquery Ajax
             $.getJSON('api/tasks',function (tasks) {
             this.list = tasks;
             }.bind(this));*/
            // this.list = JSON.parse(this.list);
        }
    }
});

new Vue({
    el:'body'
});