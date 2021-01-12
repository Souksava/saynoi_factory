
<?php
require_once __DIR__ . '../../../vendor/autoload.php';

function ShowData(){

    require '../../ConnectDB/connectDB.php';
    date_default_timezone_set("Asia/Bangkok");
    $datenow = time();
    $Date = date("Y-m-d",$datenow);
    $make_no = $_POST['make_no'];
    $no_ = 0;
    if(isset($_POST['btnReport'])){
        $sql = "select pro_name,d.pro_id,d.qty,unit_name,img_path from tbmakedetail d left join tbproducts p on d.pro_id=p.pro_id left join tbunit u on p.unit_id = u.unit_id where make_no='$make_no' order by d.pro_id asc;";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $no_ = $no_ + 1;
            $output .='
                <tr align="center">
                    <td aling="center" style="text-align: center;">'.$no_.'</td>
                    <td align="center"><img src="../../image/'.$row["img_path"].'" style="width: 100px;heigt: 100px;"></td>
                    <td align="center">'.$row['pro_id'].'</td>
                    <td align="center">'.$row['pro_name'].'</td>
                    <td align="center">'.$row['qty'].' '.$row['unit_name'].'</td>
                </tr>  
            ';
          
        }
        $sqlsum = "select sum(qty) as amount from tbmakedetail where make_no='$make_no';";
        $resultsum = mysqli_query($link,$sqlsum);
        $rowsum = mysqli_fetch_array($resultsum,MYSQLI_ASSOC);
        $output .='
        <tr align="center">
            <td aling="center" style="text-align: center;" colspan="3">ລາຍການທັງໝົດ:</td>
            <td colspan="2" align="center">'.number_format($rowsum['amount'],2).' ລາຍການ</td>
        </tr>  
    ';
        return $output;
    }
   

}   
date_default_timezone_set("Asia/Bangkok");
$datenow = time();
$Date = date("F d, Y",$datenow);
$dateofmake = $_POST['dateofmake'];
$make_no2 = $_POST['make_no'];
$status = $_POST['status'];
$emp_name = $_POST['emp_name'];
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
                    ຜູ້ສັ່ງຊື້: '.$emp_name.'<br>
                    ສະຖານະການສັ່ງຜະລິດ: '.$status.'
                </P>
            </div>
            <div style="float: left;text-align: right;"><br><br>
                <p>
                    ເລກທີໃບສັ່ງຜະລິດ: '.$make_no2.'<br>
                    ລົງວັນທີ: '.$dateofmake.'
                </p>
            </div>
            <div style="clear: both;"></div>
            <div style="text-align: center;"> 
                <h3>
                    <br><br>
                    ໃບສັ່ງຜະລິດສິນຄ້າ/Order of Make<br>
                </h3>
            </div>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
                <tr align="center" style="background-color: #dbdbd8">
                    <th style="width: 30px;text-align: center;">ລຳດັບ</th>
                    <th style="width: 100px;">ສິນຄ້າ</th>
                    <th style="width: 80px;">ລະຫັດສິນຄ້າ</th>
                    <th style="width: 80px;">ຊື່ສິນຄ້າ</th>
                    <th style="width: 120px;">ຈຳນວນ</th>
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