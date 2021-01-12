
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
        $sql = "select pro_id,pro_name,unit_name,price,qty,qtyalert,img_path,qty*price as total from tbproducts p left join tbunit u on p.unit_id=u.unit_id where pro_id like '$i' or pro_name like '$i' or unit_name like '$i' order by pro_id asc;";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $output .='
                <tr align="center">
                    <td><img src="../../image/'.$row["img_path"].'" style="width: 100px;heigt: 100px;"></td>
                    <td align="center">'.$row['pro_id'].'</td>
                    <td align="center">'.$row['pro_name'].'</td>
                    <td align="center">'.$row['qty'].' '.$row['unit_name'].'</td>
                    <td align="center">'.number_format($row['price'],2).'</td>
                    <td align="center">'.number_format($row['total'],2).'</td>
                    <td align="center">'.$row['qtyalert'].'</td>
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
                        ລາຍງານຂໍ້ມູນນ້ຳດື່ມ<br>
                    </u>
                </h2>
            </div>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
                <tr align="center" style="background-color: #dbdbd8">
                    <th style="width: 100px;">ສິນຄ້າ</th>
                    <th style="width: 80px;">ລະຫັດສິນຄ້າ</th>
                    <th style="width: 80px;">ຊື່ສິນຄ້າ</th>
                    <th style="width: 50px;">ຈຳນວນ</th>
                    <th style="width: 80px;">ລາຄາ</th>
                    <th style="width: 120px;">ລວມ</th>
                    <th style="width: 100px;">ເງື່ອນໄຂການສັ່ງຊື້</th>
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