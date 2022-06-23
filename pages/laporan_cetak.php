<?php
ob_start();
?>
<style>
.container{
padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.table{
    width:100%;
    border-collapse:collapse;
}
.tanggal {
    text-align:right;
margin-top:-5px;
}
th{
    background-color:lime;
    
}
.atas{
    margin-top:-20;
}

</style>
<div class="container">
    <hr></hr>
    <center>
    <h2 >STMIK Widya Pratama Pekalongan</h2>
    <h4 class="atas">bright for future</h4>
    <p class="atas">Jl. Patriot no.25,dukuh,pekalongan utara, kota pekalongan <br> (0285)427816 www.stmik-wp.ac.id</p>
    </center>
    <hr>
    <h2 >Laporan Data Mahasiswa</h2>
    <p class="tanggal" >Tanggal : <?=date('d F Y');?></p>
    <table class="table" border="1" >
        <thead>
            <tr>
                <th>NO</th>
                <th>nim</th>
                <th>Nama </th>
                <th>Alamat </th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
                <th>jenis kelamin</th>
                <th>agama</th>
                <th>status sipil</th>
            </tr>
        </thead>
        <tbody class="">
        <?php require_once "../koneksi.php";
        $sql="SELECT * FROM ms_200063";
        $result=$con->query($sql);
        if($result->num_rows >0){
            $no=1;
            while($row =$result->fetch_assoc()){
                ?>
                <tr>
                <td><?=$no++;?></td>
                <td><?= $row['nim'];?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['alamat'];?></td>
                <td><?=$row['tempat_lahir'];?></td>
                <td><?=date("d-m-Y", strtotime($row['tanggal_lahir']));?></td>
                <td><?=$row['jenis_kelamin']=='1'?'laki laki':'perempuan';?></td>
                <td><?=$row['agama'];?></td>
                <td><?=$row['status_sipil'];?></td>
            <?php  
            }
        }
        ?>
        </tbody>
    </table>
</div>  

<?php 
$data=ob_get_clean();
require_once '../vendor/autoload.php';

$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($data);
$mpdf->Output('Laporan_data_mahasiswa.pdf','D');
?>