$(document).ready(function() {
    var myVar=1;
    $.simpleWeather({
        location: 'Albury, NSW, Australia',
        woeid: '',
        unit: 'C',
        success: function myShowWeather(weather) {
            myVar = (myVar+1)%2;
            var html='Albury ';
            var tf = weather.forecast[1];

            if(myVar==0){
                html += 'Today: <i class="icon-'+weather.code+'"></i> '+weather.low+" - "+weather.high+'&deg;'+weather.units.temp;
            }else{
                html += 'Tomorrow: <i class="icon-'+tf.code+'"></i> '+tf.low+" - "+tf.high+'&deg;'+weather.units.temp;
            }
            $("#weather").html(html);
            setTimeout(myShowWeather, 3000,weather);
        },
        error: function(error) {
            $("#weather").html("Welcome");
        }
    });
});
