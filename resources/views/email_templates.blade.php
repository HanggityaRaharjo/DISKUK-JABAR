<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<style>
    /* * {
        border: 1px solid red;
    } */
</style>
<body style="background-color:#e5e7eb;font-family: 'Roboto', sans-serif;">
    <center>
        <div style="width:75%; background-color:white; margin-top:40px;">
            <!-- Header -->
            <div style="height: 100px; display:flex;justify-content:space-between;align-items:center;background-color:green;">
                <div style="width:50%;">
                    <img src="https://diskuk.jabarprov.go.id/wp-content/uploads/2019/11/diskuk-jabar.png" width="230px" alt="">
                </div>
                <div style="width:50%;">
                    <h1 style="text-align:center;font-size:30px;font-weight:bold;color:white;">Dinas Koperasi Usaha Kecil Jawa Barat</h1>
                </div>

            </div>
            <!-- End Header -->
            <!-- Body -->
            <div style="margin:20px 0 20px 0;">
                <center><h1 style="text-align:center;font-size:30px;font-weight:bold;">DATA SEDANG DIPROSES</h1></center>
                <table border="1" style="width:80%;border:2px solid gray;margin:0 20px 0 20px;font-size:20px;">
                    <tr>
                        <td>Nama</td>
                        <td colspan="2">{{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>{{ $data->nik }}</td>
                    </tr>
                    <tr>
                        <td>Kontak</td>
                        <td>{{ $data->kontak }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Permintaan Informasi</td>
                        <td>{{ $data->permintaan_informasi }}</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>{{ $data->tujuan }}</td>
                    </tr>
                </table>
            <center><h1 style="text-align:center;font-size:30px;font-weight:bold;">Terima Kasih</h1></center>
            </div>
            <!-- End Body -->
            <div style="display:flex;height: 100px;background-color:green;color:white;justify-content:space-between;align-items:center; padding:0 40px 0 40px">
                <div style="width:50%;">
                    <div>Jl. Soekarno Hatta No.705, Jatisari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</div>
                    <div>(022) 7302771</div>
                    <div>diskuk@gmail.com</div>
                </div>

                <div style="width:50%;font-size: 10px;">
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <img src="https://diskuk.jabarprov.go.id/wp-content/uploads/2019/11/Instagram_icon-90x90.png" style="width:20px;height:20px;" alt="">
                        <p style="margin-left:20px;text-decoration:none;font-size:10px;">https://www.instagram.com/diskukjabar/</p>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <img src="https://diskuk.jabarprov.go.id/wp-content/uploads/2019/11/Facebook_ico-90x90.png" style="width:20px;height:20px;" alt="">
                        <p style="margin-left:20px;text-decoration:none;font-size:10px;">https://www.facebook.com/DKUKJABAR</p>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <img src="https://diskuk.jabarprov.go.id/wp-content/uploads/2019/11/twitter-ico-90x90.png" style="width:20px;height:20px;" alt="">
                        <p style="margin-left:37px;text-decoration:none;font-size:10px;">https://twitter.com/dinaskumkmjabar</p>
                    </div>
                    
            
               
            </div>
        </div>
    </center>
</body>
</html>