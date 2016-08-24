<?php
header('Content-Type: application/json');
$_q = urlencode($_GET['query']);


echo '{"data":{ "html_attributions" : [], "results" : [ { "formatted_address" : "256 Main St, Farmingdale, NY 11735, United States", "geometry" : { "location" : { "lat" : 40.73316579999999, "lng" : -73.44608769999999 }, "viewport" : { "northeast" : { "lat" : 40.73318650000001, "lng" : -73.44585249999999 }, "southwest" : { "lat" : 40.73315889999999, "lng" : -73.44616609999999 } } }, "icon" : "https:\/\/maps.gstatic.com\/mapfiles\/place_api\/icons\/generic_business-71.png", "id" : "44c64e401a33c775bcc884b054d500bbf28b2b0b", "name" : "Mike\'s Barber Shop", "opening_hours" : { "open_now" : false, "weekday_text" : [] }, "place_id" : "ChIJaW7E6r4q6IkR-WobfwgQJVw", "rating" : 4.4, "reference" : "CnRlAAAAtvLoXTstwY_6Cn4UadSGxhUu7yzDx9hJeX3Y4PaSOYcA07bCzuZAATLVafpF511LCFGvXKZQjawy-cIfuWE5tDJBtYQ1kHED6f-VuSdYJBvpBxbk7gcXXLGPXUqSAk6hZXLE6LKpDh6Z6KgnhGAxABIQ-WsXvCyCBcyxGx3p2CiL3BoUeWOYuwD_wLQaPrwD2z0pbm6On7U", "types" : [ "hair_care", "health", "point_of_interest", "establishment" ] } ], "status" : "OK" }}';

 ?>
