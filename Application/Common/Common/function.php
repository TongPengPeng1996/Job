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

    /**
 * Excel导出
 * @param data 导出数据
 * @param title 表格的字段名 字段长度有限制，一般都够用，可以改变 $length1和$length2来增长
 * @return subject 表格主题 命名为主题+导出日期
 */
    function exportExcel($data,$title,$subject){  
        Vendor('phpexcel.PHPExcel');
        Vendor('phpexcel.PHPExcel.IOFactory');
        Vendor('phpexcel.PHPExcel.Reader.Excel5');
        // Create new PHPExcel object  
        $objPHPExcel = new PHPExcel();  

        // Set properties  
        $objPHPExcel->getProperties()->setCreator("ctos")  
            ->setLastModifiedBy("ctos")  
            ->setTitle("Office 2007 XLSX Test Document")  
            ->setSubject("Office 2007 XLSX Test Document")  
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")  
            ->setKeywords("office 2007 openxml php")  
            ->setCategory("Test result file");  
        $length1=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD');
        $length2=array('A1','B1','C1','D1','E1','F1','G1','H1','I1','J1','K1','L1','M1','N1','O1','P1','Q1','R1','S1','T1','U1','V1','W1','X1','Y1','Z1','AA1','AB1','AC1','AD1');
        //set width  
        for($a=0;$a<count($title);$a++){
             $objPHPExcel->getActiveSheet()->getColumnDimension($length1[$a])->setWidth(20); 
        }
        //set font size bold  
        $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);  
        $objPHPExcel->getActiveSheet()->getStyle($length2[0].':'.$length2[count($title)-1])->getFont()->setBold(true); 
        $objPHPExcel->getActiveSheet()->getStyle($length2[0].':'.$length2[count($title)-1])->getFont()->setBold(true);    
        $objPHPExcel->getActiveSheet()->getStyle($length2[0].':'.$length2[count($title)-1])->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);  
        
        // set table header content  
        for($a=0;$a<count($title);$a++){
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue($length2[$a], $title[$a]); 
        }
        for($i=0;$i<count($data);$i++){ 
            $buffer=$data[$i];
            $number=0;
            foreach ($buffer as $value) {
                $objPHPExcel->getActiveSheet(0)->setCellValueExplicit($length1[$number].($i+2),$value,PHPExcel_Cell_DataType::TYPE_STRING);//设置单元格为文本格式
                $number++;
            }
            unset($value);
            $objPHPExcel->getActiveSheet()->getStyle($length1[0].($i+2).':'.$length1[$number-1].($i+2))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);  
            $objPHPExcel->getActiveSheet()->getStyle($length1[0].($i+2).':'.$length1[$number-1].($i+2))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);  
            $objPHPExcel->getActiveSheet()->getRowDimension($i+2)->setRowHeight(16);  
        }  
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet  
        $objPHPExcel->setActiveSheetIndex(0);  
        ob_end_clean();//清除缓冲区,避免乱码
        // Redirect output to a client’s web browser (Excel5)  
        header('Content-Type: application/vnd.ms-excel');  
        header('Content-Disposition: attachment;filename='.$subject.'('.date('Y-m-d').').xls');  
        header('Cache-Control: max-age=0'); 
        
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
        $objWriter->save('php://output');  
    }  

    /** 
     * author:仝朋朋
     * Excel导入
     * @param title 导入表格的字段
     * @param savePath 文件保存的路径，默认在Public/Excel/
     */
    function importExcel($title,$savePath="Public/Excel/")
    {   
        // import('ORG.Util.ExcelToArrary');//导入excelToArray类
        require THINK_PATH.'Library/Org/Util/ExcelToArrary.class.php';//导入excelToArray类
        $tmp_file = $_FILES ['excel'] ['tmp_name'];
        $file_types = explode ( ".", $_FILES ['excel'] ['name'] );
        $file_type = $file_types [count ( $file_types ) - 1];
         /*判别是不是.xls文件，判别是不是excel文件*/
        if (strtolower ( $file_type ) != "xlsx" && strtolower ( $file_type ) != "xls")              
        {
            $rs = array(
                'code' => false,
                'msg' => '不是Excel文件，重新上传'
            );
            return $rs;
        }
        //检查是否有该文件夹，如果没有就创建，并给予最高权限 
        if(!file_exists($savePath)) 
        { 
            mkdir($savePath, 0700); 
        }//END IF

        /*以时间来命名上传的文件*/
        $str = date ( 'Ymdhis' ); 
        $file_name = $str . "." . $file_type;
        /*是否上传成功*/
        if (! copy ( $tmp_file, $savePath . $file_name )) 
        {
            $rs = array(
                'code' => false,
                'msg' => '上传失败'
            );
             return $rs;
        }
        $ExcelToArrary=new ExcelToArrary();//实例化

        $res=$ExcelToArrary->read($savePath.$file_name,"UTF-8",$file_type);//传参,判断office2007还是office2003

        // 数据库逻辑
        // 查出所有题号
        
        // $where = array(
        //     'source' => $type
        // );
        
        // $update_number = M($tableName)->where($where)->getField('update_number',true);

        // foreach ( $res as $k => $v ) //循环excel表
        // {
        //     // dump($k);
        //     if($k>1){
        //         $k=$k-2;//addAll方法要求数组必须有0索引
        //         if(!in_array($v[16],$update_number)){
        //             for ($i=0; $title[$i]; $i++) { 
        //                 $data[$k][$title[$i]] = $v [$i];//创建二维数组 
        //             }   
        //         }

        //     }
        // }
        
        // if(empty($data)){
        //     $rs = array(
        //         'code' => false,
        //         'msg' => '没有可以更新的数据'
        //     );
        //     return $rs;
        // }
        // $model=M($tableName);//M方法
        
        // $result=$model->addAll($data);
        // 数据库逻辑 end
        $result = 1;
        
        if(! $result)
        {
            $rs = array(
                'code' => false,
                'msg' => '导入数据库失败'
            );
        }
        else
        {
            $rs = array(
                'code' => true,
                'msg' => '导入成功'
            );  
        }
        return $rs;
    }
?>