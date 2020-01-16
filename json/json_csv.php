<?
header('Content-Type: application/json; charset=utf-8');
$tmp_name = $_FILES['file']['tmp_name'];
$csv = file_get_contents($tmp_name);
$csvArray = str_getcsv($csv, ';');
$comma_separated = implode(";", $csvArray);
$csv_utf8 = mb_convert_encoding($comma_separated, "utf-8", "cp1251");
$csv_utf8_new = explode(";", $csv_utf8);
$csv_utf8_clear = array_map('trim', $csv_utf8_new);
$new_arr_csv = array_diff($csv_utf8_clear, array('', 0, null));
$vendor = ($new_arr_csv[12]);
if ($curl = curl_init()) {

      $get_vendor = $vendor;
      curl_setopt($curl,CURLOPT_URL, "https://kochshop.ru/catalog/?q=$get_vendor");
      curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl,CURLOPT_TIMEOUT, 30);
      $html = curl_exec($curl);
      preg_match('~<a class="oneItemDescPrCurOpt" href\=\"(.*)\">(.*)<span><span>~',$html,$price);
      preg_match('@longdesc="([^"]+)"@', $html, $images);
      $src = array_pop($images);
      $price = array_pop($price);

    }

else echo "curl error";
$csv_arr = array($src, $price, $new_arr_csv);
$json_csv_arr = json_encode($csv_arr);
print_r($json_csv_arr);
?>
