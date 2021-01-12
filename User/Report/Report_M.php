
<?php
require_once __DIR__ . '../../../vendor/autoload.php';

function ShowData(){

    require '../../ConnectDB/connectDB.php';
    date_default_timezone_set("Asia/Bangkok");
    $datenow = time();
    $Date = date("Y-m-d",$datenow);
    $status = $_POST['status'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $no_ = 0;
    if(isset($_POST['btnReport'])){
        $sql = "select make_no,dateofmake,timeofmake,qtyamount,emp_name,status from tbmaking m left join tbemployees e on m.emp_id=e.emp_id where m.status='$status' or dateofmake between '$date1' and '$date2' order by make_no asc";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $no_ = $no_ + 1;
            $output .='
                <tr align="center">
                    <td aling="center">'.$no_.'</td>
                    <td aling="center">'.$row["make_no"].'</td>
                    <td align="center">'.$row['dateofmake'].'</td>
                    <td align="center">'.$row['timeofmake'].'</td>
                    <td align="center">'.number_format($row['qtyamount'],2).'</td>
                    <td align="center">'.$row['emp_name'].'</td>
                    <td align="center">'.$row['status'].'</td>
                </tr>  
            ';
          
        }
        return $output;
    }
    if(isset($_POST['btnAll'])){
        $sql = "select make_no,dateofmake,timeofmake,qtyamount,emp_name,status from tbmaking m left join tbemployees e on m.emp_id=e.emp_id order by make_no asc";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $output .='
            <tr align="center">
                <td aling="center">'.$no_.'</td>
                <td aling="center" style="text-align: center;">'.$row["make_no"].'</td>
                <td align="center">'.$row['dateofmake'].'</td>
                <td align="center">'.$row['timeofmake'].'</td>
                <td align="center">'.number_format($row['qtyamount'],2).'</td>
                <td align="center">'.$row['emp_name'].'</td>
                <td align="center">'.$row['status'].'</td>
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
                        ລາຍງານຂໍ້ມູນການສັ່ງຜະລິດ<br>
                    </u>
                </h2>
            </div>
            <table width="100%" border="1" cellspacing="0" cellpadding="3" style="font-size: 8px;">
                <tr align="center" style="background-color: #dbdbd8">
                    <th style="width: 30px;">ລຳດັບ</th>
                    <th style="width: 100px;">ເລກທີໃບສັ່ງຊື້</th>
                    <th style="width: 80px;">ວັນທີ</th>
                    <th style="width: 80px;">ເວລາ</th>
                    <th style="width: 120px;">ມູມຄ່າລວມ</th>
                    <th style="width: 120px;">ພະນັກງານສົ່ງ</th>
                    <th style="width: 100px;">ສະຖານະ</th>
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