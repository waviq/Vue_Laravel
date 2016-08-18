<!DOCTYPE html>
<html>
<head>
    <meta id="X-CSRF-TOKEN" content="{{csrf_token()}}">
    <title>Laravel</title>

    <style>
        .container {
            padding: 3em;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap/dist/css/bootstrap.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.css">--}}


</head>

<body>
<div class="container">
    <task-component></task-component>
    <template id="task-template">
        <pre>
            @{{$data|json}}
        </pre>
        <form action="" method="post" v-on:submit.prevent>
            <div class="form-group">
                <input class="form-control" name="query" placeholder="Search" v-model="query"  v-on:keyup="search" />
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item" v-for="task2 in body">
                @{{task2.body}}
            </li>

        </ul>

        <ul class="list-group">
            <li class="list-group-item" v-for="task in list">
                @{{task.body}}
                <strong @click="deleteTask(task)">x</strong>
            </li>

        </ul>

    </template>
</div>



<script src="{{asset('/js/vue/dist/vue.js')}}"></script>
<script src="{{asset('/js/vue-resource/vue-resource-versi-lama.js')}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.js"></script>--}}
{{--<script src="{{asset('/js/vue-resource/dist/vue-resource.js')}}"></script>--}}
<script src="{{asset('/js/main.js')}}"></script>
</body>
</html>
