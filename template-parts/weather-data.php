<?php

function curlGetWithURL($url){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return json_decode($response);
  }

  function getStationsWithID(){
    $response = curlGetWithURL("https://opendata-download-metobs.smhi.se/api/version/latest/parameter/4.json");
    $stations = $response->station;

    function filterActive($station){
      return($station->active);
    }

    $stations = array_filter($stations, "filterActive");

    function mapStations($station){
      return array(
        'name' => $station->name,
        'id' => $station->id,
      );
    }

    $stations = array_map("mapStations", $stations);

    // Skapar CSV, hamnar i webserverns root
    $file = fopen('./stations.csv','w+');
    foreach ($stations as $station) {
      $fields = array(
        $station['id'],
        $station['name'],
      );
      fputcsv($file, $fields);
    }
    fclose($file);

    return $stations;
  }

  function getTempDataByID($id){
    $dataDay = curlGetWithURL("https://opendata-download-metobs.smhi.se/api/version/latest/parameter/19/station/$id/period/latest-day/data.json");
    $dataMonth = curlGetWithURL("https://opendata-download-metobs.smhi.se/api/version/latest/parameter/19/station/$id/period/latest-months/data.json");

    if($dataDay){
      return(($dataDay->value)[0]->value);
    } elseif ($dataMonth) {
      return($dataMonth->value[array_key_last($dataMonth->value)]->value);
    }
  }

  function getWindSpeedDataByID($id){
    $dataDay = curlGetWithURL("https://opendata-download-metobs.smhi.se/api/version/latest/parameter/4/station/$id/period/latest-day/data.json");
    $dataMonth = curlGetWithURL("https://opendata-download-metobs.smhi.se/api/version/latest/parameter/4/station/$id/period/latest-months/data.json");

    if($dataDay){
      return(($dataDay->value)[0]->value);
    } elseif ($dataMonth) {
      return($dataMonth->value[array_key_last($dataMonth->value)]->value);
    }
  }

  function getWeatherDataByID($id){
    $temp = getTempDataByID($id);
    $windSpeed = getWindSpeedDataByID($id);

    return(array(
      'temperature' => $temp,
      'wind_speed' => $windSpeed,
    ));
  }

  ?>