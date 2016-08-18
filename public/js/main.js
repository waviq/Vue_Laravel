Vue.component('task-component',{
    template:'#task-template',
    // props:['list'],
    data:function () {
        return {
            list:[]
        };
    },

    // created atau ready mempunyai arti yang sama, ketika componen siap makan akan di jalankan
    created(){
        this.tampilkanTaskList();
    },

    methods:{
        deleteTask:function (task) {
            this.list.$remove(task);
        },

        tampilkanTaskList:function () {
            var resource = this.$resource('api/tasks/:id');
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