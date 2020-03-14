<?php
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bantuan</title>
    <?php include('layout/head.php') ?> 
    <style>
        .title-bantuan{
            color: #e9ecef;
            font-family: 'Open Sans', sans-serif;
            font-weight: normal;
            letter-spacing: -1px;
        }

        .jumbotron{
            padding: 3rem 3rem!important;
        }
    </style>
</head>

<body>
    <?php include('layout/navbar-menu.php') ?> 

    <!-- Page Content -->
    <div class="album text-muted" style="background-color:#e2e2e2; width:100%;">
        <div class="jumbotron" style="background-image: linear-gradient(to right bottom, #287e42, #269d43, #2bbd3f, #39de33, #50ff12); width: 100%; height: 50%;">
            <h3 class="title-bantuan">Bantuan</h3>
            <div class="dropdown-divider" style="border: 1px solid #e9ecef;"></div><br>

            <div id="accordion">
                
                
            </div>
        </div>
    </div>
</body>

<?php include('layout/footer.php') ?>

<script>
    $(document).ready(function(){
        var bantuan = [];
        $.ajax({
            type: 'GET',
            url: 'http://gade-poin-yuk.com/api/bantuan',
            dataType: 'json',
            success : function(data){            
                console.log(data.data);
                for(i=0;i<data.data.length;i++){
                    bantuan.push($("<div class='card'>"
                    +"<div class='card-header'>"
                        +"<a class='nav-link dropdown-toggle'" +"data-toggle='collapse' href='#collapse"+i+"'" +"style='color:#198C09;'>"
                            +"<strong>"+data.data[i].pertanyaan+"</strong>"
                        +"</a>"
                    +"</div>"
                    +"<div id='collapse"+i+"' class='collapse show'" +"data-parent='#accordion'>"
                        +"<div class='card-body'>"
                        +data.data[i].jawaban
                        +"</div>"
                    +"</div>"
                +"</div></br>"));
                }
                $("#accordion").append(bantuan);
            }
        });
    });
</script>
</html>