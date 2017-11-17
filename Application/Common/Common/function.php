<?php
    import('Com.Email.PHPMailer');
    import('Com.Email.SMTP');

    /** 
     * 是否为一个合法的email 
     * @param sting $email 
     * @return boolean 
     */  
    function is_email($email)
    {  
        if (filter_var ($email, FILTER_VALIDATE_EMAIL )) {  
            return true;  
        } else {  
            return false;  
        }  
    }  


    /** 
     * 发送邮件 
     * @param [title] 邮件标题
     * @param [content] 邮件主体内容
     * @param [from] 发件人地址（也就是你的邮箱）
     * @param [to] 接收人的邮箱
     * @return 1 0 
     */  
    function send_mail( $title, $content, $from, $to ,$chart = 'utf-8', $attachment = '') 
    {
        
        $mail = new PHPMailer(); //实例化

        $mail->IsSMTP(); // 启用SMTP
        $mail->Host = 'smtp.mxhichina.com'; //SMTP服务器 以126邮箱为例子 
        $mail->Port = 25;  //邮件发送端口
        $mail->SMTPAuth = true;  //启用SMTP认证
      // $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl  qq邮箱使用  阿里云邮箱不使用
        $mail->CharSet = "UTF-8"; //字符集
        $mail->Encoding = "base64"; //编码方式
        $mail->Username = '';  //你的邮箱 例子：1111111@163.com
        $mail->Password = '';  //你的密码  
        $mail->From = $from;  //发件人地址（也就是你的邮箱）
        $mail->FromName = '';  //发件人姓名
        $mail->AddAddress($to, "亲");
        $mail->IsHTML(true); //支持html格式内容
        $mail->Body = $content; //邮件主体内容
        $mail->Subject = $title; //邮件标题 

        if ($mail->Send ()) {
            $status = 1;
            
        } else {
            $status = 0;
        }
        return $status;
    }

    /** 
     * 随机x位数字  默认为6
     * @param [len] 长度
     * @return string  length[len]
     */  
    function randNum($len = 6) 
    {
        // 随机6位数字
        $chars   =   '0123456789';
        $chars   =   str_shuffle($chars);
        return substr($chars, 0, $len);
    }
    /** 
     * 是否是手机号码 
     * 
     * @param string $phone 手机号码 
     * @return boolean 
     */  
    function is_phone($phone) 
    {  
        if (strlen ( $phone ) != 11 || ! preg_match ( '/^1[3|4|5|8][0-9]\d{4,8}$/', $phone )) {  
            return false;  
        } else {  
            return true;  
        }  
    }  
?>