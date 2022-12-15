<?php



class Datareader{


  
  var $xmlData;
  var $jsonData;  

  function loadData($url)
  {
   return $this->xmlData = simplexml_load_file($url);
  }

  function convertToJson($data)
  {

    return $this->jsonData = json_encode($data);
  }




}

$url = "http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml";
$firstdata = new Datareader;
$loadData = $firstdata->loadData($url);

$secondProcess = $firstdata->convertToJson($loadData);
echo "$secondProcess";


?>