<?php
$ID=substr($_GET['id'],0,-3); //removes trailing carriage return
$currentBeer;

//opening up database for finding RFID tag and associated beer
$file=fopen("beerdb","r");
while(!feof($file)){
	$currentLine=fgets($file);
	if(strstr($currentLine, $ID)){
		$currentBeer=substr($currentLine,11, strlen($currentLine));
	}
}

//looking up a random quote to post to Twitter
$rand=file("randq");
	srand ((double) microtime() * 1000000);
$randnum = rand(0,count($rand)-1);
$text = $rand[$randnum];

//setting up cURL
$curlPost = ("status=".$text.$currentBeer);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://twitter.com/statuses/update.xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
curl_setopt($ch, CURLOPT_USERPWD, "USERNAME:PASSWORD");
$data = curl_exec($ch);
curl_close($ch);
//cURL done

//echo $curlPost;
//echo "<script>window.Close</script>";
?>