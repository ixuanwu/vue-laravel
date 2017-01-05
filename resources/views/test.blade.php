<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="/lte/css/AdminLTE.css">
<link rel="stylesheet" href="/lte/css/skin-blue.min.css">
<!-- Latest compiled and minified JS -->
<script src="//cdn.bootcss.com/moment.js/2.17.1/moment.js"></script>
<script src="//cdn.bootcss.com/moment.js/2.17.1/moment-with-locales.min.js"></script>
<script src="//cdn.bootcss.com/vue/2.1.8/vue.js"></script>
<script src="//cdn.bootcss.com/vue-resource/1.0.3/vue-resource.js"></script>
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/lte/js/app.min.js"></script>
<div class="container" id="app">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info" v-cloak>
                <div class="panel-heading">
                    <span>科研人员基础信息</span>
                    <span class="pull-right">当前已选择<i id="selected-count" class="select-count">0</i>项</span>
                </div>
                <div class="panel-body">
                    <!-- TAB NAVIGATION -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">教授(12)</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">副教授(23)</a></li>
                        <li><a href="#tab3" role="tab" data-toggle="tab">研究员(232)</a></li>
                    </ul>
                    <div class="box box-info">
                        <div class="box-body">
                            <a class="btn btn-success btn-xs" id="select-all">全选</a>
                            <a class="btn btn-info btn-xs" id="collapse-all">折叠</a>
                        </div>
                    </div>
                    <div class="box box-primary box-solid" v-for="item in items">
                        <div class="box-header with-border">
                            <input type="checkbox" role="check-order" :value="item.id">
                            <h4 class="box-title">科研小组编号:@{{ item.id }}</h4>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>姓名</th>
                                    <th>年龄</th>
                                    <th>状态</th>
                                    <th>注册时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>@{{ item.id }}</td>
                                    <td>@{{ item.name }}</td>
                                    <td>@{{ item.age }}</td>
                                    <td>有效</td>
                                    <td>@{{ item.time }}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>学号</th>
                                    <th>姓名</th>
                                    <th>年级</th>
                                    <th>专业</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="stu in item.stu">
                                    <td>@{{ stu.id }}</td>
                                    <td>@{{ stu.name }}</td>
                                    <td>@{{ stu.grade }}</td>
                                    <td>@{{ stu.major }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        var flag = true;
        var checkFlag = false;
        $('#select-all').click(function () {
            checkFlag = !checkFlag;
            if(checkFlag){
                $('input[role=check-order]').prop('checked', true);
            } else {
                $('input[role=check-order]').prop('checked', false);
            }
            var msg = checkFlag?'反选':'全选';
            $('#select-all').html(msg);
            getCheckedNumber();
        });
        $(document).on('click','input[role=check-order]',function() {
            getCheckedNumber();
        });
        //折叠、展开
        $('#collapse-all').click(function(){
            flag=!flag;
            $('[data-widget=collapse]').each(function(){
                $.AdminLTE.boxWidget.collapse($(this));
            });
            var msg = flag?'折叠':'展开';
            $('#collapse-all').html(msg);
        });
        function getCheckedNumber() {
            $('#selected-count').html($('input[role=check-order]:checked').length);
        }
    });
    var app = new Vue({
        el:'#app',
        data:{
            items:[],
            checkedItem:[],
            checkFlag:false,
        },
        methods:{
            fetchData:function(){
                this.$http.get('/test').then(function(response) {
                   this.items = response.data;
                },function(response){
                    console.log(response);
                });
            },
            select:function(){
                this.checkFlag = !this.checkFlag;
                if(this.checkFlag){
                    for (var item in this.items) {
                        this.checkedItem.push(this.items[item].id);
                    }
                } else {
                    this.checkedItem = [];
                }
            }
        },
        mounted:function(){
            this.fetchData();
        },
        computed:{
            checkedCount:function(){
                return this.checkedItem.length;
            }
        },
        watch:{
            checkedItem:function (){
                console.log(this.checkedItem);
            }
        },
    });
</script>

<style>
    body {
        font-family: "Arial", "Microsoft YaHei", "黑体", "宋体", sans-serif;
    }
    [v-cloak] {
        display: none;
    }
    table {
        table-layout: fixed;
        word-wrap: break-word;
    }
    table th {
        background-color: #d9edf7;
        font-size: small;
        text-align: center;
    }
    table td {
        text-align: center;
        font-size: smaller;
    }
    .select-count {
        margin-left: 5px;
        margin-right: 5px;
        color: orangered;
    }
</style>
