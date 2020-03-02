<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript">


    function getTimeAJAX() {

        
        var time = $.ajax({

            url: 'time.php', 
                dataType: 'text',
                async: false     
        }).responseText;

        
        document.getElementById("myWatch").innerHTML = "Temperatura actual"+time;
    }

    function getTemperature(){

        var temperature = $.ajax({

            url: 'temperatura.php', 
                dataType: 'text',
                async: false     
        }).responseText;

        
        document.getElementById("t_value").innerHTML = ""+temperature;
    }//end of getTemperature

    function getHumidity(){

        var humidity = $.ajax({

            url: 'humedad.php', 
                dataType: 'text',
                async: false     
        }).responseText;

        
        document.getElementById("h_value").innerHTML = ""+humidity;
    }//end of getHumidity

    function getLightness(){
        var lightness = $.ajax({
            url:'luminocidad.php',
            dataType:'text',
            async:false

        }).responseText;

        document.getElementById("l_value").innerHTML=""+lightness;
    }//end of getLightness

    //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
    setInterval(getTimeAJAX,1000);
    setInterval(getTemperature,1000);
    setInterval(getHumidity,1000);
    setInterval(getLightness,1000);

</script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<html>
    <body>


        
            <iframe width="200" height="200" src="http://192.168.64.2/test/iotvalue.html"></iframe>
            




        <!-- <div class="container">
            <div class="row" style="background-color:yellow;">
                <div style="height: auto; width: 600px; background-color: gray;">
                <label style="font-size: 20px;">  <i class="fas fa-thermometer-half"></i> Temperatura: </label>
                <label style="font-size: 20px;"><i class="fas fa-cloud"></i>  Humedad: </label>
                <label style="font-size: 20px;"> <i class="far fa-sun"></i> Luminosidad: </label>
                <p><small>Powered by: xide from Microside</small></p>
                </div>

               

            </div>
        </div>

        <div class="container">
            <div class="row" style="background-color:yellow;">

                <div style="height: auto; width: 300px; background-color: gray; border-style: solid; border-width: 1px;" >

                <p style="font-size: 20px;">
                    <i class="fas fa-thermometer-half"></i> Temperatura: 
                    <label id="t_value">...</label>
                </p>

                <p style="font-size: 20px;"><i class="fas fa-cloud"></i>  Humedad: 
                    <label id="h_value">...</label>
                </p>
                <p style="font-size: 20px;"> <i class="far fa-sun"></i>
                    Luminosidad: <label id="l_value">...</label>
                </p>


                <p>
                    <small>Powered by: xide from  
                        <a href="https://microside.com/" target="blank">
                            <img src="https://microside.com/wp-content/uploads/2020/02/microside-Marca.png" height="40px" width="auto">        
                        </a>
                    </small>
                </p>

                </div>

               

            </div>
        </div>

    <div id='myWatch'></div> -->



    </body>
</html> 