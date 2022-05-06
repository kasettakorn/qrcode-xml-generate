<?php
require_once('./phpqrcode/qrlib.php');
$data = json_decode(file_get_contents('php://input'), true);

$text = "CourseID\t\tCourseName";
for ($i = 0; $i < count($data); $i++) {
  $text .= "\n" . $data[$i]['courseID'] . "\t" . $data[$i]['courseName'];
}
$path = 'images/';
$file = $path . uniqid() . ".png";

QRcode::png(utf8_encode($text), $file);


// initializing or creating array
$template_info =  $data;
// creating object of SimpleXMLElement
$xml_template_info = new SimpleXMLElement("<?xml version=\"1.0\"?><template></template>");

function array_to_xml($template_info, &$xml_template_info)
{
  foreach ($template_info as $key => $value) {
    if (is_array($value)) {
      if (!is_numeric($key)) {
        $subnode = $xml_template_info->addChild("$key");
        array_to_xml($value, $subnode);
      } else {
        array_to_xml($value, $xml_template_info);
      }
    } else {
      $xml_template_info->addChild("$key", "$value");
    }
  }
}

// function call to convert array to xml
array_to_xml($template_info, $xml_template_info);

//saving generated xml file
$xml_template_info->asXML("./xml/manifest.xml");

// function defination to convert array to xml


echo $file;
