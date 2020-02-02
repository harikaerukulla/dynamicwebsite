<?php
	$com=mysqli_connect("localhost","root","","hackathon35") or die(mysql.error());
	
?>
<html>
<head>
<style>
nav {
  float: left;
  width: 60%;
  height: 300px; /* only for demonstration, should be removed */
  padding: 20px;
}
article {
  float: right;
  padding: 20px;
  width: 40%;
  height: 300px; /* only for demonstration, should be removed */
}
section:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<title>Hyderabad Real-time Air Quality Index (AQI) & Pollution Report - Air Matters</title>
<center><h2>PREDICTING AIR POLLUTION IN A SPECIFIC CITY</h2></centre><br>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-itunes-app" content="app-id=477700080">
<meta name="keywords" content="air quality index, air quality, pollen, allergy, air matters, PM2.5, air pollution, fog, haze, air, mobile app, App, Fresh-Ideas Studio, Weather, Health &amp; Fitness, ios apps, app, appstore, app store, iphone, ipad, ipod touch, itouch, itunes">
<meta name="description" content="Air quality and pollen information for over 180 countries in the world.">
<meta property="qc:admins" content="26052465076625305145136337" />
<meta property="al:ios:url" content="https://air-matters.com" />
<meta property="al:ios:app_store_id" content="477700080" />
<meta property="al:ios:app_name" content="Air Matters" />
<meta property="al:android:url" content="https://air-matters.com" />
<meta property="al:android:app_name" content="Air Matters" />
<meta property="al:android:package" content="com.freshideas.airindex" />
<meta property="al:web:url" content="https://air-matters.com" />
<meta property="og:title" content="Hyderabad Real-time Air Quality Index (AQI) & Pollution Report - Air Matters" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://air-quality.com/" />
<meta property="og:image" content="https://air-quality.com/css/images/appicon_512.png" />
<link rel="alternate" hreflang="zh-CN" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=zh-Hans&standard=aqi_us" />
<link rel="alternate" hreflang="zh-TW" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=zh-Hant&standard=aqi_us" />
<link rel="alternate" hreflang="en" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=en&standard=aqi_us" />
<link rel="alternate" hreflang="ja" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=ja&standard=aqi_us" />
<link rel="alternate" hreflang="ko" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=ko&standard=aqi_us" />
<link rel="alternate" hreflang="de" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=de&standard=aqi_us" />
<link rel="alternate" hreflang="fr" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=fr&standard=aqi_us" />
<link rel="alternate" hreflang="it" href="https://air-quality.com/place/india/hyderabad/f179e552?lang=it&standard=aqi_us" />
<base href="https://air-quality.com/" />
<script language="javascript" type="text/javascript">
	var baseURL = "https://air-quality.com/";
	var langCode = "en";
</script>

<link href="https://air-quality.com/css/bootstrap/font-awesome.min.css" rel="stylesheet">
<link href="https://air-quality.com/css/bootstrap/bootstrap.css" rel="stylesheet">
<link href="https://air-quality.com/css/bootstrap/navbar-fixed-top.css" rel="stylesheet">
<link href="https://air-quality.com/css/jquery-ui.min.css" rel="stylesheet">
<link href="https://air-quality.com/css/notie/notie.min.css" rel="stylesheet">
<link href="https://air-quality.com/css/sweetalert2/sweetalert2.min.css" rel="stylesheet">
<link href="https://air-quality.com/css/leaflet/leaflet.css" rel="stylesheet">
<link rel="stylesheet" media="screen and (min-width: 1023px)" href="https://air-quality.com/css/basic.css">
<link rel="stylesheet" media="screen and (max-width: 1023px)" href="https://air-quality.com/css/basic_m.css">

<script src="https://air-quality.com/js/jquery-2.2.4.min.js"></script>
<script src="https://air-quality.com/js/jquery-ui.min.js"></script>
<script src="https://air-quality.com/js/matchMedia.js"></script>
<script src="https://air-quality.com/js/bootstrap/bootstrap.js"></script>
<script src="https://air-quality.com/js/notie/notie.min.js"></script>
<script src="https://air-quality.com/js/bootbox/bootbox.min.js"></script>
<script src="https://air-quality.com/js/api-web/basic.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85721203-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-85721203-3');
</script>


</head>

<body>
<section>
  <nav>
    <?php
	echo "<a href='http://localhost/hackathon/website.php	'><img src='https://cdn.fcglcdn.com/brainbees/images/products/720x720/1617220a.jpg' width='700' height='900'/></a>";
	?>
  </nav>
  
  <article>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['state', 'aqi'],
          <?php
		  $sql="SELECT * FROM hack";
		  $fire=mysqli_query($com,$sql);
		  while($result=mysqli_fetch_assoc($fire)){
			  echo"['".$result['state']."',".$result['aqi']."],";
		  }
		  ?>
      ]);
      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(data, options);
  }
  </script>
  </head>
  
  <body>
<div id="barchart_values" style="width: 600px; height: 900px;"></div>
</body>
  </article>
</section>

<link rel="stylesheet" media="screen and (min-width: 1023px)" href="https://air-quality.com/css/place.css">
<link rel="stylesheet" media="screen and (max-width: 1023px)" href="https://air-quality.com/css/place_m.css">
  
<br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	
<br><br>	

  
  
<script>
var placeID = "f179e552";
var standard = "aqi_us";
var urlKey = "india/hyderabad";
var historyKind = "aqi";
var historyName = "AQI (US)";
var historyTimeInterval = "hourly";
var historyData;
var curWeatherData = {"UV":"0","high":0,"humidity":"94%","icon":"nt_mostlysunny","low":0,"temp_c":22,"temp_f":-1000,"temp_f_high":0,"temp_f_low":0,"temperature":0,"weather":"Fair","wind_degrees":290,"wind_kph":15};
</script>

<script src="https://air-quality.com/js/echarts/echarts.min.js"></script>
<script src="https://air-quality.com/js/api-web/detail.js"></script>
<script src="https://air-quality.com/js/leaflet/leaflet.js"></script>

	<div class="container">

<div class="detail-main">
<div class="detail-title">
	<h2>Hyderabad</h2>
	<p>Hyderabad, Telangana</p>
</div>

<div id="chartBox" class="chart-box">
	<div class="title">AQI (US)</div>
<!--
	<div id="forecast-interval-dropdown" class="input-group-btn">
	    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="text">AQI (US)</span><span class="caret"></span></button>
	    <ul class="dropdown-menu">
		    <li value="aqi_au">AQI (Australia)</li><li value="aqi_ca">AQHI (Canada)</li><li value="aqi_cn">AQI (China)</li><li value="aqi_nl">AQI (Netherlands)</li><li value="aqi_us">AQI (US)</li><li value="caqi_eu">CAQI (Europe)</li><li value="daqi_uk">AQI (UK)</li><li value="naqi_in">AQI (India)</li>	    </ul>
	</div>
-->
	
	<div class="indexValue">151</div>
<!--
	<div class="minValue">0</div>
	<div class="maxValue">500</div>
-->
	<div class="levelWrap">
		<div class="levelWrap2">
			<div class="level" style="background:#e02d1c">Unhealthy</div>
		</div>
	</div>
	<div id="ringChart" style="width: 260px; height: 260px; margin: 0px auto;"></div>
</div>

<div class="reading-box">
	<div class="title">
	<a id="pollutants_link" onclick="javascript:activeReading('pollutants')" class="active">Pollutants</a>
	</div><div class="pollutants" style="display:block;"><div class='pollutant-item odd'><div class='name'>PM2.5</div>
	<div class='unit'>μg/m³</div><div class='value'>57</div></div><div class='pollutant-item even'><div class='name'>PM10</div>
	<div class='unit'>μg/m³</div><div class='value'>107</div></div><div class='pollutant-item odd'><div class='name'>NO2</div>
	<div class='unit'>μg/m³</div><div class='value'>53</div></div><div class='pollutant-item even'><div class='name'>O3</div>
	<div class='unit'>μg/m³</div><div class='value'>22</div></div><div class='pollutant-item odd'><div class='name'>CO</div>
	<div class='unit'>μg/m³</div><div class='value'>644</div></div><div class='pollutant-item even'><div class='name'>SO2</div>
	<div class='unit'>μg/m³</div><div class='value'>6</div></div><div class='clr'></div></div></div>


<div class="clr"></div>

<div class="forecast-box">
	<div class="main-block-title">Forecast</div>
	
	<div class="main-block-content">
		<div class="daily-forecast-scroll">
			<div class="daily-forecast" style="width: 1485px;">
			<div class='forecast-item'><div class='date'>2020-01-31</div><div class='icon' style='background-image:url(css/images/weather/weather_partlycloudy_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "131"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e02d1c;"><span>135~165</span><br/>Unhealthy</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-01</div><div class='icon' style='background-image:url(css/images/weather/weather_clear_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "113"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e02d1c;"><span>125~165</span><br/>Unhealthy</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-02</div><div class='icon' style='background-image:url(css/images/weather/weather_clear_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "96"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e02d1c;"><span>105~165</span><br/>Unhealthy</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-03</div><div class='icon' style='background-image:url(css/images/weather/weather_clear_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "102"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e88019;"><span>95~145</span><br/>Unhealthy for Sensitive Groups</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-04</div><div class='icon' style='background-image:url(css/images/weather/weather_clear_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "107"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e88019;"><span>95~145</span><br/>Unhealthy for Sensitive Groups</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-05</div><div class='icon' style='background-image:url(css/images/weather/weather_partlycloudy_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "132"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e88019;"><span>95~145</span><br/>Unhealthy for Sensitive Groups</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-06</div><div class='icon' style='background-image:url(css/images/weather/weather_clear_light.png);'></div><div class='temperature temp_c'><span class='value'><?php echo "115"; ?></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='value'>-1000°</span></div><div class="value-wrap">
								<div class="value" style="background:#e88019;"><span>95~145</span><br/>Unhealthy for Sensitive Groups</div>
								
							  </div></div><div class='forecast-item'><div class='date'>2020-02-07</div><div class='icon' style='background-image:url(css/images/weather/weather_clear_light.png);'></div><div class='temperature temp_c'><span class='value'>126</span><span class='spliter'></span><span class='value'></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='spliter'>\</span><span class='value'>-1000°</span></div>
							  </div><div class='forecast-item'><div class='date'>2020-02-08</div><div class='icon' style='background-image:url(css/images/weather/weather_partlycloudy_light.png);'></div>
							  <div class='temperature temp_c'><span class='value'>122</span><span class='spliter'></span><span class='value'></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='spliter'>\</span>
							  <span class='value'>-1000°</span></div></div><div class='forecast-item'><div class='date'>2020-02-09</div><div class='icon' style='background-image:url(css/images/weather/weather_partlycloudy_light.png);'></div>
							  <div class='temperature temp_c'><span class='value'>134</span><span class='spliter'></span><span class='value'></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='spliter'>\</span>
							  <span class='value'>-1000°</span></div></div><div class='forecast-item'><div class='date'>2020-02-10</div><div class='icon' style='background-image:url(css/images/weather/weather_partlycloudy_light.png);'></div>
							  <div class='temperature temp_c'><span class='value'>143</span><span class='spliter'></span><span class='value'></span></div><div class='temperature temp_f' style='display:none;'><span class='value'>-1000°</span><span class='spliter'>\</span>
							  <span class='value'>-1000°</span></div></div>			</div>
		</div>
		
	</div>
</div>

<div class="site-box">
	
</div>



</div>

</div>
<script>
function drawChart(){
    var myChart = echarts.init(document.getElementById('ringChart'));

	var option = {
	    series: [
	        {
	            type: 'gauge',
	            silent: true,
	            startAngle: 220,
	            endAngle: -40,
	            splitLine: false,
	            pointer: false,
	            maxValue: 500,
	            detail: {show: false},
	            axisTick:{show: false},
	            axisLabel:{show: false},
	            axisLine: {            // 坐标轴线
	                lineStyle: {       // 属性lineStyle控制线条样式
	                    width: 10,
	                    color: [[0.43052629743304, '#e02d1c'], [1, '#e8e8e8']]
	                }
	            },
	        }
	    ]
	};
	// 使用刚指定的配置项和数据显示图表
	myChart.setOption(option);
}

function initMap(){
    map = L.map('map').setView([17.385044, 78.486671], 6);
/*
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYWlyLW1hdHRlcnMiLCJhIjoiY2pja285ZXluMGhwYjJ3cGlrdmwzMm1pcSJ9.ZYcuV9fWFY8Kx0lcXMdH2g', {
	    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
	    maxZoom: 18,
	    id: 'mapbox.streets',
	    accessToken: 'pk.eyJ1IjoiYWlyLW1hdHRlcnMiLCJhIjoiY2pja285ZXluMGhwYjJ3cGlrdmwzMm1pcSJ9.ZYcuV9fWFY8Kx0lcXMdH2g'
	}).addTo(map);
*/
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
	    maxZoom: 18
	}).addTo(map);
	
    map.on('zoomend', function(ev) {
	    getMapData();
	    //alert(ev.latlng); // ev is an event object (MouseEvent in this case)
	});
	
	map.on('moveend', function(ev) {
	    getMapData();
	    //alert(ev.latlng); // ev is an event object (MouseEvent in this case)
	});
	
}

$(document).ready(function(){
	initControls();
	drawChart();
	initMap();
	getMapData();
	drawHistoryChart();

});

</script>
<br><br>
<h2>Pollution index of cities</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
  
    <th style="width:10%">RANK</th>
    <th style="width:50%;">STATE</th>
    <th style="width:30%;">AQI</th>
  </tr>
  <tr>
      
	        <td>1</td>
    <td><?php echo "<a href='http://localhost/hackathon/andhra.php'>Andhra Pradesh</a>"; ?></td>
    <td>281</td>
  </tr>
  <tr>
      
	  <td>2</td>
    <td><?php echo "<a href='http://localhost/hackathon/wb.php'>West Bengal</a>"; ?></td>
    <td>240</td>
  </tr><tr>
      
	  	  <td>3</td>
    <td><?php echo "<a href='http://localhost/hackathon/up.php'>Uttar Pradesh</a>"; ?></td>
    <td>213</td>
  </tr><tr>
      
	  	  <td>4</td>
    <td><?php echo "<a href='http://localhost/hackathon/odisha.php'>Odisha</a>"; ?></td>
    <td>180</td>
  </tr><tr>
      
	  	  	  <td>5</td>
    <td><?php echo "<a href='http://localhost/hackathon/uttar.php'>Uttarakand</a>"; ?></td>
    <td>149</td>
  </tr><tr>
      
	    	  <td>6</td>
    <td><?php echo "<a href='http://localhost/hackathon/assam.php'>Assam</a>"; ?></td>
    <td>144</td>
  </tr><tr>
      
	    	  <td>7</td>
    <td><?php echo "<a href='http://localhost/hackathon/haryana.php'>Haryana</a>"; ?></td>
    <td>144</td>
  </tr><tr>
     	  <td>8</td>
    <td><?php echo "<a href='http://localhost/hackathon/bihar.php'>Bihar</a>"; ?></td>
    <td>128</td>
  </tr><tr>
        <td>9</td>
    <td><?php echo "<a href='http://localhost/hackathon/jk.php'>Jammu & Kashmir</a>"; ?></td>
    <td>120</td>
  </tr><tr>
     <td>10</td>
    <td><?php echo "<a href='http://localhost/hackathon/tripura.php'>Tripura</a>"; ?></td>
    <td>117</td>
  </tr>
  <tr>
       	  <td>11</td>
    <td><?php echo "<a href='http://localhost/hackathon/raj.php'>Rajasthan</a>"; ?></td>
    <td>113</td>
  </tr><tr>
       	  <td>12</td>
    <td><?php echo "<a href='http://localhost/hackathon/karnataka.php'>Karnataka</a>"; ?></td>
    <td>111</td>
  </tr><tr>
        <td>13</td>
    <td><?php echo "<a href='http://localhost/hackathon/andhra.php'>Nagaland</a>"; ?></td>
    <td>109</td>
  </tr><tr>
      	  <td>14</td>
    <td><?php echo "<a href='http://localhost/hackathon/maha.php'>Maharastra</a>"; ?></td>
    <td>107</td>
  </tr><tr>
       	  <td>15</td>
    <td><?php echo "<a href='http://localhost/hackathon/jhark.php'>Jharkhand</a>"; ?></td>
    <td>88</td>
  </tr><tr>
      	  <td>16</td>
    <td><?php echo "<a href='http://localhost/hackathon/chhatti.php'>Chhatisgarh</a>"; ?></td>
    <td>84</td>
	
  </tr><tr>
       <td>17</td>
    <td><?php echo "<a href='http://localhost/hackathon/telangana.php'>Telangana</a>"; ?></td>
    <td>82</td>
  </tr><tr>
      	  <td>18</td>
    <td><?php echo "<a href='http://localhost/hackathon/punjab.php'>Punjab</a>"; ?></td>
    <td>76</td>
  </tr><tr>
      <td>19</td>
    <td><?php echo "<a href='http://localhost/hackathon/kerala.php'>Kerala</a>"; ?></td>
    <td>73</td>
  </tr><tr>
       <td>20</td>
    <td><?php echo "<a href='http://localhost/hackathon/sikkim.php'>Sikkim</a>"; ?></td>
    <td>73</td>
  </tr><tr>
        <td>21</td>
    <td><?php echo "<a href='http://localhost/hackathon/tn.php'>Tamil Nadu</a>"; ?></td>
    <td>73</td>
  </tr><tr>
     <td>22</td>
    <td><?php echo "<a href='http://localhost/hackathon/meghalaya.php'>Meghalaya</a>"; ?></td>
    <td>65</td>
  </tr><tr>
       	  <td>23</td>
    <td><?php echo "<a href='http://localhost/hackathon/andhra.php'>Madhya Pradesh</a>"; ?></td>
    <td>64</td>
  </tr><tr>
      <td>24</td><td><?php echo "<a href='http://localhost/hackathon/mp.php'>Manipur</a>"; ?></td>
    <td>59</td>
  </tr><tr>
     	  <td>25</td>
    <td><?php echo "<a href='http://localhost/hackathon/andhra.php'>Himachal Pradesh</a>"; ?></td>
    <td>55</td>
  </tr><tr>
       	  <td>26</td>
    <td><?php echo "<a href='http://localhost/hackathon/andhra.php'>Gujarat</a>"; ?></td>
    <td>26</td>
  </tr><tr>
     	  <td>27</td>
    <td><?php echo "<a href='http://localhost/hackathon/goa.php'>Goa</a>"; ?></td>
    <td>25.5</td>
  </tr><tr>
       <td>28</td>
    <td><?php echo "<a href='http://localhost/hackathon/mizoram.php'>Mizoram</a>"; ?></td>
    <td>25</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>