
<?php
require_once __DIR__ . '../../../vendor/autoload.php';

function ShowData(){

    require '../../ConnectDB/connectDB.php';
    date_default_timezone_set("Asia/Bangkok");
    $datenow = time();
    $Date = date("Y-m-d",$datenow);
    $info = $_POST['info'];
    $i = "%".$info."%";
    if(isset($_POST['btnReport'])){
        $sql = "select * from tbcustomers where cus_id like '$i' or cus_name like '$i' or cus_surname like '$i' or gender like '$i' or email like '$i' order by cus_id asc;";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $output .='
                <tr align="center">
                    <td aling="center">'.$row["Cus_ID"].'</td>
                    <td align="center">'.$row['Cus_Name'].'</td>
                    <td align="center">'.$row['Cus_Surname'].'</td>
                    <td align="center">'.$row['Gender'].'</td>
                    <td align="center">'.$row['Tel'].'</td>
                    <td align="center">'.$row['Address'].'</td>
                    <td align="center">'.$row['Email'].'</td>
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
                        ລາຍງານຂໍ້ມູນລູກຄ້າ<br>
                    </u>
                </h2>
            </div>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
                <tr align="center" style="background-color: #dbdbd8">
                    <th style="width: 80px;">ລະຫັດລູກຄ້າ</th>
                    <th style="width: 80px;">ຊື່ລູກຄ້າ</th>
                    <th style="width: 80px;">ນາມສະກຸນ</th>
                    <th style="width: 50px;">ເພດ</th>
                    <th style="width: 80px;">ເບີໂທລະສັບ</th>
                    <th style="width: 120px;">ທີ່ຢູ່ປັດຈຸບັນ</th>
                    <th style="width: 100px;">ອີເມວ</th>
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