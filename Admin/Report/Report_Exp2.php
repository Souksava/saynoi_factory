
<?php
require_once __DIR__ . '../../../vendor/autoload.php';

function ShowData(){

    require '../../ConnectDB/connectDB.php';
    date_default_timezone_set("Asia/Bangkok");
    $datenow = time();
    $Date = date("Y-m-d",$datenow);
    $billno = $_POST['id'];
    $no_ = 0;
    if(isset($_POST['btnReport'])){
        $sql = "select expno,l.pro_id,pro_name,l.qty,l.price,l.qty*l.price as total,unit_name,p.img_path from tbexportdetail l left join tbproducts p on l.pro_id=p.pro_id left join tbunit u on p.unit_id=u.unit_id where billno='$billno' order by l.pro_id asc;";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $no_ = $no_ + 1;
            $output .='
                <tr align="center">
                    <td aling="center" style="text-align: center;">'.$no_.'</td>
                    <td><img src="../../image/'.$row["img_path"].'" style="width: 100px;heigt: 100px;"></td>
                    <td align="center">'.$row['pro_id'].'</td>
                    <td align="center">'.$row['pro_name'].'</td>
                    <td align="center">'.$row['qty'].' '.$row['unit_name'].'</td>
                    <td align="center">'.number_format($row['price'],2).' ກີບ</td>
                    <td align="center">'.number_format($row['total'],2).' ກີບ</td>
                </tr>  
            ';
          
        }
        $sqlsum = "select sum(qty*price) as amount from tbexportdetail where billno='$billno';";
        $resultsum = mysqli_query($link,$sqlsum);
        $rowsum = mysqli_fetch_array($resultsum,MYSQLI_ASSOC);
        $output .='
        <tr align="center">
            <td aling="center" style="text-align: center;" colspan="5">ມູນຄ່າລວມ:</td>
            <td colspan="2" align="center">'.number_format($rowsum['amount'],2).' ກີບ</td>
        </tr>  
    ';
        return $output;
    }
   

}   
date_default_timezone_set("Asia/Bangkok");
$datenow = time();
$Date = date("F d, Y",$datenow);
$billno2 = $_POST['billno'];
$cus_name = $_POST['cus_name'];
$cus_surname = $_POST['cus_surname'];
$emp_name = $_POST['emp_name'];
$dateExp = $_POST['dateExp'];
$timeExp = $_POST['timeExp'];
$status = $_POST['status'];
$cus_tel = $_POST['tel'];
$cus_address = $_POST['address'];
$cus_email = $_POST['email'];
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
            <div style="float: left; width: 65%; ">
                <p>
                    <h4 style="color: orange;">ໂຮງງານນ້ຳດື່ມ ຫົງສະຫວັນ</h4>
                </P>
            </div>
            <div style="float: left;text-align: center;">
                <h3>
                    <br><br>
                    ບິນສົ່ງອອກສິນຄ້າ/Bill of Sale<br>
                </h3>
            </div>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
            <tr>
                <td style="width: 65%;">    
                    <b>ລູກຄ້າ: </b>'.$cus_name.' '.$cus_surname.' <br>
                    <p>
                        <b>ທີ່ຢູ່ປັດຈຸບັນ: </b>'.$cus_address.'<br>
                        <b>ອີເມວ: </b> '.$cus_email.' <b>ເບີໂທລະສັບ: </b>'.$cus_tel.'<br>
                        <b>ສະຖານະ: </b>'.$status.'

                    </p>
                </td>
                <td style="width: 35%;">
                    <b>ເລກທີບິນ.: '.$billno2.'</b><br>
                    <b>ວັນທີ: '.$dateExp.'</b><br>
                    <b>ພະນັກງານສົ່ງ: '.$emp_name.'</b>
                </td>
            </tr>
       </table><br>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
                <tr align="center" style="background-color: #dbdbd8">
                    <th style="width: 30px;text-align: center;">ລຳດັບ</th>
                    <th style="width: 100px;">ສິນຄ້າ</th>
                    <th style="width: 80px;">ລະຫັດສິນຄ້າ</th>
                    <th style="width: 80px;">ຊື່ສິນຄ້າ</th>
                    <th style="width: 120px;">ຈຳນວນ</th>
                    <th style="width: 120px;">ລາຄາ</th>
                    <th style="width: 120px;">ລວມ</th>
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
<br>
ບ້ານ ສະພັງເມິກ ເມືອງ ໄຊທານີ ນະຄອນຫຼວງວຽງຈັນ Tel: +856 20 5757 5751, Fax: 021 552 454, Email: Hongsavanh@info.com</p>';
$mpdf->SetFooter($footer,'sample');
$mpdf->WriteHTML($content);
$mpdf->Output('ລາຍງານພະນັກງານ.pdf','I');
?>