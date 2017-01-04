<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="/lte/css/AdminLTE.css">
<link rel="stylesheet" href="/lte/css/skin-blue.min.css">
<!-- Latest compiled and minified JS -->
<script src="//cdn.bootcss.com/vue/2.1.8/vue.js"></script>
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/lte/js/app.min.js"></script>
<div class="container" id="app">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
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
                            <a class="btn btn-warning btn-xs" id="cancel-all">反选</a>
                            <a class="btn btn-info btn-xs" id="collapse-all">折叠</a>
                        </div>
                    </div>
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <input type="checkbox" role="check-order">
                            <h4 class="box-title">科研小组编号OS234242323</h4>
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
                                    <td>12312</td>
                                    <td>费立国</td>
                                    <td>28</td>
                                    <td>有效</td>
                                    <td>{{date('Y-m-d')}}</td>
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
                                <tr>
                                    <td>SW1312312</td>
                                    <td>蒋和超</td>
                                    <td>2011级</td>
                                    <td>网络工程</td>
                                </tr>
                                <tr>
                                    <td>SW13123112</td>
                                    <td>薛献貌</td>
                                    <td>2011级</td>
                                    <td>网络工程</td>
                                </tr>
                                <tr>
                                    <td>SW13123111</td>
                                    <td>杨友能</td>
                                    <td>2011级</td>
                                    <td>网络工程</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <input type="checkbox" role="check-order">
                            <h4 class="box-title">科研小组编号OS234242323</h4>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
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
                                    <td>12312</td>
                                    <td>费立国</td>
                                    <td>28</td>
                                    <td>有效</td>
                                    <td>{{date('Y-m-d')}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>学号</th>
                                    <th>姓名</th>
                                    <th>年级</th>
                                    <th>专业</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>SW1312312</td>
                                    <td>蒋和超</td>
                                    <td>2011级</td>
                                    <td>网络工程</td>
                                </tr>
                                <tr>
                                    <td>SW13123112</td>
                                    <td>薛献貌</td>
                                    <td>2011级</td>
                                    <td>网络工程</td>
                                </tr>
                                <tr>
                                    <td>SW13123111</td>
                                    <td>杨友能</td>
                                    <td>2011级</td>
                                    <td>网络工程</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>跟踪号管理</span>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                    	<thead>
                    		<tr>
                                <th>运输方式</th>
                                <th>渠道</th>
                                <th>国家</th>
                                <th>跟踪号</th>
                    		</tr>
                    	</thead>
                    	<tbody v-cloak>
                    		<tr v-for="(item,index) in items">
                                <td>@{{item.carrierName}}</td>
                                <td>@{{item.channelName}}</td>
                                <td>@{{item.countryName}}</td>
                                <td>@{{item.trackNumber}}</td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        var flag = true;
        $('#select-all').click(function () {
            $('input[role=check-order]').prop('checked', true);
            getCheckedNumber();
        });
        $('#cancel-all').click(function () {
            $('input[role=check-order]').prop('checked', false);
            getCheckedNumber();
        });
        $('#collapse-all').click(function(){
            flag=!flag;
            $('[data-widget=collapse]').each(function(){
                $.AdminLTE.boxWidget.collapse($(this));
            });
            var msg = flag?'折叠':'展开';
            $('#collapse-all').html(msg);
        });
        $('input[role=check-order]').click(function () {
            getCheckedNumber();
        });
        function getCheckedNumber() {
            $('#selected-count').html($('input[role=check-order]:checked').length);
        }
    });
    var app = new Vue({
        el:'#app',
        data:{
            items:[
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
                {carrierName:'中国邮政挂号',channelName:'深圳',countryName:'China',trackNumber:'RS2323232323CN'},
            ]
        }
    });
</script>

<style>
    body {
        font-family: "Arial", "Microsoft YaHei", "黑体", "宋体", sans-serif;
    }
    [v-cloak] { display: none }
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

    .text-left {
        text-align: left
    }

    .text-center {
        text-align: center
    }

    .text-right {
        text-align: right
    }

    .text-red {
        color: red
    }

    .text-green {
        color: green
    }

    .text-yellow {
        color: yellow
    }

    .text-orange {
        color: orange
    }

    .text-lightblue {
        color: lightblue
    }
</style>
