<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php 邮件扩展:mailpp</title>
    </head>
    <body>
        <?php
        $mailpp = new mailpp();
        $mailpp->set_host_port($__config__["email"]["smtp"], $__config__["email"]["port"]);
        $mailpp->set_user_password($__config__["email"]["user"], $__config__["email"]["password"]);
        $mailpp->set_content_type("HTML");
        $mailpp->set_from($__config__["email"]["from"], $__config__["email"]["name"]);
        $mailpp->set_to("****@qq.com", "BCC", "QQ1");
        $mailpp->set_to("****@163.com", "BCC", "163");
        $mailpp->set_to("****@qq.com", "CC", "QQ2");
        $mailpp->set_to("****@gmail.com", "PRIMARY", "GMAIL");
        $mailpp->set_subject("抄送，密送功能");
        $mailpp->set_body("<html><head></head><body><p>mailpp发邮件!</p></body></html>");
        $ok = $mailpp->send_by_ssl();
        ?>
        <?php if ($ok): ?>
            <p>发送成功!</p>
        <?php else: ?>
            <p>发送失败!</p>
        <?php endif; ?>
    </body>
</html>
