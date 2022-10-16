<?php
error_reporting (E_ALL ^ E_WARNING||E_NOTICE);
$data = file_get_contents("https://ojk-invest-api.vercel.app/api/illegals");
$data_ojkinvest=json_decode($data);
$table = "<h3>OJK INVESTS</h3>";
$table .= "<table border=1>
               <tr><td>No</td>
			    <td>Nama PT</td>
				<td>Alamat</td>	
				<td>Telp<td/>			
				<td>Tipe</td>
				<td>Web</td>
				</tr>";

for($i=0; $i<count($data_ojkinvest->data->illegals);$i++){
	$id=$i+1;
	$table .= "<tr><td>{$id}</td>
			    <td>{$data_ojkinvest->data->illegals[$i]->name}</td>
				<td>{$data_ojkinvest->data->illegals[$i]->address}</td>
				<td>{$data_ojkinvest->data->illegals[$i]->number[0]}</td>
				<td>{$data_ojkinvest->data->illegals[$i]->type}</td>
				<td>{$data_ojkinvest->data->illegals[$i]->urls[0]}</td>
				</tr>";
}
$table .= "</table>";
echo $table;				
?>
