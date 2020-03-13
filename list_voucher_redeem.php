<?php
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List Voucher Redeem</title>
        <?php include('layout/head.php') ?> 
        <style>
            .title-list-voucher{
                color: #e9ecef;
                font-family: 'Open Sans', sans-serif;
                font-weight: normal;
                letter-spacing: -1px;
            }

            .jumbotron{
                padding: 3rem 3rem!important;
            }

            .card-title {
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                font-size: 25px;
                color: black;
                margin-bottom: .75rem;
                text-align: center;
            }
            #voucher.row {
                margin-right: 0px!important;
                margin-left: 0px!important;
            }

            p.voucher-detail{
                font-family: 'Dosis', sans-serif;
                text-align: center;
                font-size: 17px;
                margin-bottom: 10px;
            }

            p.voucher-price{
                font-family: 'Dosis', sans-serif;
                font-size: 15px;
                margin-bottom: 10px;
            }

            p.voucher-expired{
                font-family: 'Dosis', sans-serif;
                font-size: 15px;
                margin-bottom: 10px;
            }

            button{
                font-family: 'Dosis', sans-serif;
                font-size: 15px;
                width: 100%;
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <?php include('layout/navbar-menu.php') ?> 
        <!-- Page Content -->
        <div ></div>
        <div class="album text-muted" id="parent1" style="background-color:#e2e2e2; width:100%;">
            <div class="jumbotron" id="parent2" style="background-image: url(img/menulong.png); width: 100%; height: 50%;">
                <h3 class="title-list-voucher">List Voucher Redeem</h3>
                <div class="dropdown-divider" style="border: 1px solid white;"></div><br>
                    <div id="voucher" class="row justify-content-center">
                    </div>      
                </div>
            </div>
        </div>      
    </body>

    <?php include('layout/footer.php') ?>

    <script>
    $(document).ready(function(){
        var cards = [];
        $.ajax({
            type: 'GET',
            url: 'http://gade-poin-yuk.com/api/voucher',
            dataType: 'json',
            success : function(data){            
                console.log(data.data);
                for(i=0;i<data.data.length;i++){
                    cards.push($("<div class='card col-md-3'>"
                            // +"<img class='card-img-top' src='#' alt='Card image cap'>"
                            +"<div class='card-body'>"
                            +"<h5 class='card-title'>"+data.data[i].nama_voucher+"</h5>"
                            +"<div class='card-text'>"
                            +"<p class='voucher-detail'>"+data.data[i].detail+" sebesar "+data.data[i].jumlah_potongan+" rupiah</p>" 
                            +"<p class='voucher-price'>Harga : "+data.data[i].harga_voucher+" poin"
                            +"</p></div>"
                            +"<p class='voucher-expired'>Masa Berlaku : <br>"+data.data[i].valid_start+" - "+data.data[i].valid_end
                            +"</p></div>"
                            +"<button class='btn btn-success' id='btn-redeem' data='"+data.data[i].kode_voucher+"'>Redeem</button>"
                            +"</div>"
                            +"</div>"));
                    // $("#btn-redeem").trigger('click');

                }
                $("#voucher").append(cards);
            }
        });
    });
    $(document).ajaxComplete(function(event, xhr, settings) {
        console.log(xhr.responseText);
        console.log(event);
        console.log(settings);
        $("#btn-redeem").on('click', function(){
            var cif = <?php echo $_SESSION["cif"] ?>;
            var kode_voucher = $("#btn-redeem").attr('data');
            $.ajax({
                type: 'POST',
                url: 'http://gade-poin-yuk.com/api/transaksitukar_poin',
                data: {cif: cif, kode_voucher: kode_voucher},
                dataType: 'json',
                success : function(data){
                    if(data.status == true){
                        alert("sukses");
                    }else{
                        alert("gagal");
                    }
                }
            });   
        });
    });
    </script>
</html>