<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkir</title>

<?php include '../layouts/header-static.php'; ?>

</head>
<body>
    <section id="detail">
            <div class="provinsi-data">
                    <label>provinsi</label>
                    <select name="nama_provinsi" class="from-control">
                        <option value="">--Pilih Provinsi--</option>
                    </select>
                </div>
                <div class="kabkot-data">
                    <label>Kab/Kota</label>
                    <select name="nama_kabkot" class="from-control">
                        <option value="">--Pilih Kab/Kota--</option>
                    </select>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                type:'post',
                url:'dataprovinsi.php',
                success:function(hasil_provinsi)
                {
                    $("select[name=nama_provinsi]").html(hasil_provinsi);
                }
            });

            $("select[name=nama_provinsi]").on("change",function(){
                //ambil id yg di klik
                var id_provinsi_terpilih = $('option:selected', this).attr("id_provinsi");
                $.ajax({
                    type:'post',
                    url:'datadistrik.php',
                    data:'id_provinsi='+id_provinsi_terpilih,
                    success:function(hasil_distrik)
                    {
                        $("select[name=nama_kabkot]").html(hasil_distrik);
                    }
                })
            });
        });
    </script>