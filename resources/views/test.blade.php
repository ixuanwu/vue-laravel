<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Latest compiled and minified JS -->
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <span>科研人员基础信息</span>
                    <span class="pull-right">当前已选择<i id="selected-count" class="select-count">0</i>项</span>
                </div>
                <div class="panel-body">
                    <!-- TAB NAVIGATION -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">教授(12)</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">副教授(23)</a></li>
                        <li><a href="#tab3" role="tab" data-toggle="tab">研究员(232)</a></li>
                    </ul>
                    <table style="margin-top:8px;" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th id="check-all" style="width: 30px;"><input type="checkbox" value=""></th>
                            <th style="width: 25%">编号</th>
                            <th>姓名</th>
                            <th>年龄</th>
                            <th>状态</th>
                            <th>注册时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td class="text-left">
                                <p><span class="text-red">发货时间：</span>{{date('Y-m-d H:i')}}</p>
                                <p><span class="text-green">上传时间：</span>{{date('Y-m-d H:i')}}</p>
                                <p><span class="text-orange">付款时间：</span>{{date('Y-m-d H:i')}}</p>
                                <p><span class="text-lightblue">同步时间：</span>{{date('Y-m-d H:i')}}</p>
                            </td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="check-all"><input type="checkbox" value=""></td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#check-all').click(function(){
            if($('#check-all input[type=checkbox]').prop('checked')){
                $('.check-all input[type=checkbox]').prop('checked',true);
            } else{
                $('.check-all input[type=checkbox]').prop('checked',false);
            }
            getCheckedNumber();
        });
        $('.check-all input[type=checkbox]').click(function(){
            getCheckedNumber();
        });
        function getCheckedNumber(){
            $('#selected-count').html($('.check-all input[type=checkbox]:checked').length);
        }
    });
</script>

<style>
    body{font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;}
    table {table-layout: fixed;word-wrap: break-word;}
    table th{background-color: #d9edf7;font-size: small;text-align: center;}
    table td{text-align: center;font-size: smaller;}
    .select-count{margin-left: 5px;margin-right: 5px; color: orangered;}
    .text-left{text-align: left}
    .text-center{text-align: center}
    .text-right{text-align: right}
    .text-red{color: red}
    .text-green{color: green}
    .text-yellow{color: yellow}
    .text-orange{color: orange}
    .text-lightblue{color: lightblue}
</style>
