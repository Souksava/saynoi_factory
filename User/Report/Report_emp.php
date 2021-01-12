
<?php
require_once __DIR__ . '../../../vendor/autoload.php';

function ShowData(){

    require '../../ConnectDB/connectDB.php';
    date_default_timezone_set("Asia/Bangkok");
    $datenow = time();
    $Date = date("Y-m-d",$datenow);
    $info = $_POST['info'];
    $i = "%".$i."%";
    if(isset($_POST['btnReport'])){
        $sql = "select emp_id,emp_name,emp_surname,gender,auther_name,tel,address,email,img_path from tbemployees e left join auther a on e.auther_id=a.auther_id where emp_id like '$i' or emp_name like '$i' or emp_surname like '$i' or Auther_name like '$i' or gender like '$i' order by emp_id asc;";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $output .='
                <tr align="center">
                    <td align="center">'.$row['emp_id'].'</td>
                    <td align="center">'.$row['emp_name'].'</td>
                    <td align="center">'.$row['emp_surname'].'</td>
                    <td align="center">'.$row['gender'].'</td>
                    <td align="center">'.$row['tel'].'</td>
                    <td align="center">'.$row['address'].'</td>
                    <td align="center">'.$row['email'].'</td>
                    <td align="center">'.$row['auther_name'].'</td>

                </tr>  
            ';
          
        }
        return $output;
    }
   

}   
date_default_timezone_set("Asia/Bangkok");
$datenow = time();
$Date = date("F d, Y",$datenow);
$content = '
            <div align="center" >
                        ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ<br>
                        ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ<br>
                        ------00000------
            </div>
            <div align="left" >
                <div style="float: left; width: 100px;">
                    <img src="../../image/background.jpeg" width="80px" height="80px">
                </div>
            </div>
            <div style="float: left; width: 70%; ">
                <p>
                    <h4 style="color: orange;">ໂຮງງານນ້ຳດື່ມ ຫົງສະຫວັນ</h4>
                    <div>
                       <div style="font-size: 10px;">
                           ທີ່ຕັ້ງ: ບ້ານສະພັງເມິກ ເມືອງ ໄຊທານີ ນະຄອນຫຼວງວຽງຈັນ<br>
                           ເບີໂທລະສັບ: +856 20 5757 5751
                       </div>
                    </div>
                </P>
            </div><br>
            <div style="clear: both;"></div>
            <div style="text-align: center;">
                <h2>
                    <u>
                        ລາຍງານຂໍ້ມູນພະນັກງານ<br>
                    </u>
                </h2>
            </div>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
                <tr align="center" style="background-color: #dbdbd8">
                    <th style="width: 25px;">ລະຫັດ</th>
                    <th style="width: 80px;">ຊື່</th>
                    <th style="width: 80px;">ນາມສະກຸນ</th>
                    <th style="width: 50px;">ເພດ</th>
                    <th style="width: 80px;">ເບີໂທລະສັບ</th>
                    <th style="width: 120px;">ທີ່ຢູ່ປັດຈຸບັນ</th>
                    <th style="width: 100px;">ອີເມວ</th>
                    <th style="width: 80px;">ຕຳແໜ່ງ</th>
                </tr>
                '.ShowData().'
                </table>
            ';
$mpdf = new \Mpdf\Mpdf([
    'format'            => 'A4',
    'mode'              => 'utf-8',      
    'tempDir'           => '/tmp',
    'default_font_size' => 8,
    'margin_bottom' => 18, 
    'margin_footer' => 5, 
	'default_font' => 'saysettha_ot'
]);
$mpdf->defaultfooterline = 0;
$footer = '<p align="center" style="font-size: 8px;">Page {PAGENO} of {nb}<br>
'.$address.'<br>
ບ້ານ ສະພັງເມິກ ເມືອງ ໄຊທານີ ນະຄອນຫຼວງວຽງຈັນ Tel: +856 20 5757 5751, Fax: 021 552 454, Email: Hongsavanh@info.com</p>';
$mpdf->SetFooter($footer,'sample');
$mpdf->WriteHTML($content);
$mpdf->Output('ລາຍງານພະນັກງານ.pdf','I');
?>