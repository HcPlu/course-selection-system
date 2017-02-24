<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>添加课程</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>
<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-folder-open"> 添加课程</h3></center>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <form method="get" action="http://localhost/db/index.php/Home/Add/submitCourseInfo">
                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">课程编号</label></td>
                        <td><input type="text" name="cid" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">课程名称</label></td>
                        <td><input type="text" name="cname" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">教 师</label></td>
                        <td><input type="text" name="professor" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">学 分</label></td>
                        <td><input type="text" name="credit" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">面向年级</label></td>
                        <td><input type="text" name="tgrade" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">取消年份</label></td>
                        <td><input type="text" name="canceledYear" class="form-control" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" style="width: 1100px;font-size: 15px">添 加</button>
                        </td>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>