var chart;
google.charts.load('current', {
    packages: ['corechart', 'line']
});

google.charts.setOnLoadCallback(drawBasic);
var dataLength = 0;

function drawBasic() {

    var flag = false;

    function getNewValues() {

        var x = $.ajax({
            url: 'https://uhasx4pob2.execute-api.us-east-1.amazonaws.com/dev/todos',
            type: "GET",
            dataType: 'json',
            async: false,
            cache: false,
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Error al obtener datos del API Status: " + textStatus);
            }
        }).responseJSON;


        if (x.length != dataLength) {
            flag = true;
            for (var i = dataLength; i < x.length; i++) {
                data.addRows([
                    [new Date(x[i].createdAt), parseInt([x[i].Temperatura])]
                ]);

            }
        } else {
            flag = false;
        }
        if (flag) {


            
            dataLength = x.length;
            chart.draw(data);

            var Temperature = x[x.length - 1].Temperatura;

            if (Temperature <= 10) {

                document.getElementById("tempActual").innerHTML = "" + Temperature;
                document.getElementById("barraTemp").style.width =  Temperature.toString(10) + "%";
                $('#barraTemp').removeClass("progress-bar bg-success progress-bar bg-info progress-bar bg-danger").addClass("progress-bar bg-info");

            } else {
                if (Temperature < 20) {

                    document.getElementById("tempActual").innerHTML = "" + Temperature;
                    document.getElementById("barraTemp").style.width =  Temperature.toString(10) + "%";
                    
                    $('#barraTemp').removeClass("progress-bar bg-success progress-bar bg-info progress-bar bg-danger ").addClass("progress-bar bg-success");

                } else {

                    document.getElementById("tempActual").innerHTML = "" + Temperature;
                    document.getElementById("barraTemp").style.width =  Temperature.toString(10) + "%";
                    $('#barraTemp').removeClass("progress-bar bg-success progress-bar bg-info progress-bar bg-danger ").addClass("progress-bar bg-danger");


                }
            }

            

        }
    }

    var data = new google.visualization.DataTable();
    data.addColumn('date', 'X');
    data.addColumn('number', 'Temperatura');

    var options = {
        hAxis: {
            title: 'Hora'
        },
        vAxis: {
            title: 'Temperatura'
        }
    };

    $.ajax({
        url: 'https://uhasx4pob2.execute-api.us-east-1.amazonaws.com/dev/todos',
        type: "GET",
        dataType: 'json',
        async: false,
        cache: false,
        success: function(response) {
            for (var i = dataLength; i < response.length; i++) {
                data.addRows([
                    [new Date(response[i].createdAt), parseInt([response[i].Temperatura])]
                ]);


            }


            dataLength = response.length;
            var Temperature = response[response.length - 1].Temperatura;

            if (Temperature <= 10) {

                document.getElementById("tempActual").innerHTML = "" + Temperature;
                document.getElementById("barraTemp").style.width =  Temperature.toString(10) + "%";
                $('#barraTemp').removeClass("progress-bar bg-success progress-bar bg-info progress-bar bg-danger").addClass("progress-bar bg-info");

            } else {
                if (Temperature < 20) {

                    document.getElementById("tempActual").innerHTML = "" + Temperature;
                    document.getElementById("barraTemp").style.width =  Temperature.toString(10) + "%";
                    
                    $('#barraTemp').removeClass("progress-bar bg-success progress-bar bg-info progress-bar bg-danger ").addClass("progress-bar bg-success");

                } else {

                    document.getElementById("tempActual").innerHTML = "" + Temperature;
                    document.getElementById("barraTemp").style.width =  Temperature.toString(10) + "%";
                    $('#barraTemp').removeClass("progress-bar bg-success progress-bar bg-info progress-bar bg-danger ").addClass("progress-bar bg-danger");


                }
            }
            // document.getElementById("tempActual").innerHTML = ""+response[response.length-1].Temperatura;
            // document.getElementById("barraTemp").style.width = "10%";
            // $('#barraTemp').removeClass("progress-bar bg-success").addClass("progress-bar bg-info");

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Error al obtener datos del API Status: " + textStatus);
        }
    });

    chart = new google.visualization.LineChart(document.getElementById('chart_div'));

    chart.draw(data, options);
    setInterval(getNewValues, 5000);

}


function getTemperature() {
    document.getElementById("t_value").innerHTML = "" + temperature;
} //end of getTemperature