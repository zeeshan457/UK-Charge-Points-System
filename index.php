<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Title  -->
    <title>Charge Points Registry</title>

    <!--  imports CSS and JS, using Boostrap library  -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <!--  Information  -->
<h1 class="text-center">UK Charge Points Registry</h1> <br> <br>
<h5 class = "text-center">Welcome, this application will allow users to search the UK's official database of charge
    points. You can choose from the available lists or use the self-search option to accomplish this, Hope you enjoy.</h5> <br>


<!--  Sample queries  -->
<form action = "" method = "post">
<div class="text-center">
    <button type="submit" name = "query2"  class="btn btn-primary">Query 2</button>
    <button type="submit" name = "query3"  class="btn btn-primary">Query 3</button>
    <button type="submit" name = "query4"  class="btn btn-primary">Query 4</button>
    <button type="submit" name = "query5"  class="btn btn-primary">Query 5</button>
    <button type="submit" name = "query6" class="btn btn-primary">Query 6</button>
    <button type="submit" name = "query7" class="btn btn-primary">Query 7</button>
</div>
</form> <br>

<!--  Search town form  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
            <label>
                <select class = "form-select-lg" name="town">
                    <option value="" disabled selected>Select town................................................................................................................................................................</option>
                    <option value="Nottingham">Nottingham</option>
                    <option value="	Newcastle upon Tyne">Newcastle upon Tyne</option>
                    <option value="Preston">Preston</option>
                    <option value="Thamesmead">Thamesmead</option>
                    <option value="Bradford">Bradford</option>
                    <option value="Halifax">Halifax</option>
                    <option value="Barking">Barking</option>
                    <option value="Sheffield">Sheffield</option>
                    <option value="Stoke-on-Trent">Stoke-on-Trent</option>
                    <option value="Rickmansworth">Rickmansworth</option>
                    <option value="Bristol">Bristol</option>
                    <option value="Plumstead">Plumstead</option>
                    <option value="Milton Keynes">Milton Keynes</option>
                    <option value="Leicester">Leicester</option>
                </select>
            </label>
        </div>
        <div class="col">
            <button type="submit" name="submitTown" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form>

<!--  Search county form  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
            <label>
                <select class = "form-select-lg" name="county">
                    <option value="" disabled selected>Select county............................................................................................................................................................</option>
                    <option value="Greater London">Greater London</option>
                    <option value="Tyne and Wear">Tyne and Wear</option>
                    <option value="Lancashire">Lancashire</option>
                    <option value="West Yorkshire">West Yorkshire</option>
                    <option value="Kent">Kent</option>
                    <option value="Hertfordshire">Hertfordshire</option>
                    <option value="City of Bristol">City of Bristol</option>
                    <option value="Hertfordshire">Hertfordshire</option>
                    <option value="Buckinghamshire">Buckinghamshire</option>
                    <option value="City of Leicester">City of Leicester</option>
                    <option value="Northamptonshire">Northamptonshire</option>
                    <option value="Leicestershire">Leicestershire</option>
                    <option value="West Midlands">West Midlands</option>
                </select>
            </label>
        </div>
        <div class="col">
            <button type="submit" name="submitCounty" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form>

<!--  Search location type form  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
            <label>
                <select class = "form-select-lg" name="location">
                    <option value="" disabled selected>Select location..........................................................................................................................................................</option>
                    <option value="Dealership forecourt">Dealership forecourt</option>
                    <option value="Park & Ride site">Park & Ride site</option>
                    <option value="Workplace car park">Workplace car park</option>
                    <option value="Educational establishment">Educational establishment</option>
                    <option value="Public car park">Public car park</option>
                    <option value="On-street">On-street</option>
                    <option value="Other">Other</option>
                </select>
            </label>
        </div>
        <div class="col">
            <button type="submit" name="submitLocation" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form>

<!--  Search charge device status form  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
            <label>
                <select class = "form-select-lg" name="status">
                    <option value="" disabled selected>Select status..............................................................................................................................................................</option>
                    <option value="In service">In service</option>
                    <option value="Out of service">Out of service</option>
                </select>
            </label>
        </div>
        <div class="col">
            <button type="submit" name="submitStatus" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form>

<!--  Search name form  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
                <input type="text" class="form-control" placeholder="Query by name" name="name">
        </div>
        <div class="col">
            <button type="submit" name = "submitName" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form>

<!--  Search postcode form  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
                <input type="text" class="form-control" placeholder="Query by postcode" name="postcode">
        </div>
        <div class="col">
            <button type="submit" name = "submitPostcode" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form>

    <!--  Latitude form  -->
    <form action = "" method = "post">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Minimum Latitude" name="minlatitude">
                <input type="text" class="form-control" placeholder="Maximum Latitude" name="maxlatitude">
            </div>
            <div class="col">
                <button type="submit" name = "submitLatitude" class="btn btn-primary btn-block">Search</button> <br>
            </div>
        </div>
    </form> <br>

<!--  Search anything here  -->
<form action = "" method = "post">
    <div class="row">
        <div class="col">
                <input type="text" class="form-control" placeholder="Query anything" name="input">
            <input type="text" class="form-control" placeholder="Limit" name="limit">
            <input type="text" class="form-control" placeholder="Skip" name="skip">
            <input type="text" class="form-control" placeholder="Batch size" name="batch">
        </div>
        <div class="col">
            <button type="submit" name = "submitQuery" class="btn btn-primary btn-block">Search</button> <br>
        </div>
    </div>
</form> <br>

<!--   Google map section   -->
<form action = "" method = "post">
<h5 class = "text-center">Users can plot the charge points on this interactive map</h5> <br>
    <div id="map" style="width:100%;height:500px;"></div>

<!--    --><?php
//    /**
//     *
//     * PHP method return values for lat and long.
//     *
//     */
//
//    $latitude = array();
//    $longitude = array();
//    $name = array();
//    $town = array();
//    $county = array();
//    $chargeDeviceStatus = array();
//
//    try {
//            $client = new MongoDB\Driver\Manager('mongodb://localhost:27017');
//            $query = new MongoDB\Driver\Query([]);
//            $rows = $client->executeQuery("mydb.charge_points", $query);
//
//            foreach($rows as $row) {
//                // convert from stdClass to an array that can be displayed.
//                $document = json_decode(json_encode($row),true);
//
//                $latitude[] = $document['latitude'];
//                $longitude[] = $document['longitude'];
//                $name[] = $document['name'];
//                $town[] = $document['town'];
//                $county[] = $document['county'];
//                $chargeDeviceStatus[] = $document['chargeDeviceStatus'];
//            }
//
//        } catch (\MongoDB\Driver\Exception\Exception $e) {
//            echo 'Mongodb error';
//        }
//
//    ?>

<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQCuXjuSLJ5wiL-HdTG8mVNgH0aa6Ovc&callback=myMap"></script> <br>-->
<!---->
<!--    <button type="button" onclick="addMarkers(latitude, longitude, name, town, county, chargeDeviceStatus)" class="btn btn-danger btn-block">Plot map</button>-->
<!--    <button type="submit" name="submitRefresh" class="btn btn-primary btn-block">Refresh table</button>-->
    </div>
</form> <br>
<!--  Defining table headers  -->
<table class = "table table-striped" id = "table">
    <tr>
        <th>ChargeDeviceID</th>
        <th>Name</th>
        <th>Postcode</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Town</th>
        <th>County</th>
        <th>LocationType</th>
        <th>ChargeDeviceStatus</th>
    </tr>

<?php
    /******************************************************************************************************************
     *
     * connect to mongodb database and collection.
     * Try and catch for database and collection errors.
     * getting variables with POST method
     *
     *****************************************************************************************************************/

    $latitude = array();
    $longitude = array();
    $name = array();
    $town = array();
    $county = array();
    $chargeDeviceStatus = array();

    try {
        $client = new MongoDB\Driver\Manager('mongodb://localhost:27017');
        $query = new MongoDB\Driver\Query([]);
        $rows = $client->executeQuery("mydb.charge_points", $query);

        /**************************************************************************************************************
         *
         * Search Querying functions.
         *
         * Getting all variables using &_POST methods and validating. Then filtering mongodb based on the data selected.
         *
         *************************************************************************************************************/

        /**
         *
         * Google map section for plotting the lat and long data
         *
         */
        if (isset($_POST['submitRefresh'])){
            $query = new MongoDB\Driver\Query([]);
            $rows = $client->executeQuery("mydb.charge_points", $query);
        }


        /**
         *
         * Town section
         *
         * Creating filter for finding selected town
         *
         */
       else if (isset($_POST['submitTown'])){
            if(!empty($_POST['town'])) {
                $selected = $_POST['town'];
                echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';
                $filter = [
                    'town' => [ '$eq' => $selected],
                ];
                $query = new MongoDB\Driver\Query($filter);
                $rows = $client->executeQuery("mydb.charge_points", $query);

            } else {
                echo '<p style="color: red; text-align: center">
                  Error, Please select town.
                  </p>';
            }
        }

        /**
         *
         * County section
         *
         * Creating filter for finding selected county
         *
         */
       else if (isset($_POST['submitCounty'])){
            if(!empty($_POST['county'])) {
                $selected = $_POST['county'];
                echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';
                $filter = [
                    'county' => [ '$eq' => $selected],
                ];

                $query = new MongoDB\Driver\Query($filter);
                $rows = $client->executeQuery("mydb.charge_points", $query);

            } else {
                echo '<p style="color: red; text-align: center">
                  Error, Please select county.
                  </p>';
            }
        }

       /**
        *
        * Location section
        *
        * Creating filter for finding selected location
        *
        */
       else if (isset($_POST['submitLocation'])){
            if (!empty($_POST['location'])) {
                $selected = $_POST['location'];
                echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';
                $filter = [
                    'locationType' => [ '$eq' => $selected],
                ];
                $query = new MongoDB\Driver\Query($filter);
                $rows = $client->executeQuery("mydb.charge_points", $query);

            } else {
                echo '<p style="color: red; text-align: center">
                  Error, Please select location.
                  </p>';
            }
        }

       /**
        *
        * Status section
        *
        * Creating filter for finding selected status
        *
        */
       else if (isset($_POST['submitStatus'])){
           if (!empty($_POST['status'])) {
               $selected = $_POST['status'];
               echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';
               $filter = [
                   'chargeDeviceStatus' => [ '$eq' => $selected],
               ];
               $query = new MongoDB\Driver\Query($filter);
               $rows = $client->executeQuery("mydb.charge_points", $query);


           } else {
               echo '<p style="color: red; text-align: center">
                  Error, Please select status.
                  </p>';
           }
       }

       /**
        *
        * Name section
        *
        * Creating filter for searching name
        *
        */
      else if(isset($_POST['submitName'])){
            if(!empty($_POST['name'])) {
                $selected = $_POST['name'];
                echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';
                $filter = [
                    'name' => [ '$eq' => $selected],
                ];
                $query = new MongoDB\Driver\Query($filter);
                $rows = $client->executeQuery("mydb.charge_points", $query);

            } else {
                echo '<p style="color: red; text-align: center"">
                  Error, Please search a name.
                  </p>';
            }
        }

      /**
       *
       * Postcode section
       *
       * Creating filter for searching postcode
       *
       */
      else if(isset($_POST['submitPostcode'])){
          if(!empty($_POST['postcode'])) {
              $selected = $_POST['postcode'];
              echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';
              $filter = [
                  'postcode' => [ '$eq' => $selected],
              ];
              $query = new MongoDB\Driver\Query($filter);
              $rows = $client->executeQuery("mydb.charge_points", $query);


          } else {
              echo '<p style="color: red; text-align: center"">
                  Error, Please search a valid postcode.
                  </p>';
          }
      }


      /**
       *
       * Postcode section
       *
       * Creating filter for latitude
       *
       */
      else if(isset($_POST['submitLatitude'])){
          if(!empty($_POST['minlatitude']) || !empty($_POST['maxlatitude'])) {
              $minlatitude = $_POST['minlatitude'];
              $maxlatitude = $_POST['maxlatitude'];

              echo '<p style="Color: blue; text-align: center '.'">' .$minlatitude . $minlatitude.'</p>';

              $filter  = [
                  '$and' => [
                      ['latitude' => ['$gt' => $minlatitude]],
                      ['latitude' => ['$lt' => $maxlatitude]],
                  ]
              ];
              $query = new MongoDB\Driver\Query($filter);
              $rows = $client->executeQuery("mydb.charge_points", $query);


          } else {
              echo '<p style="color: red; text-align: center"">
                  Error, Please search a latitude value.
                  </p>';
          }
      }

	      /**
       *
       * search anything section
       *
       * Creating filter for all columns
       *
       */
      else if(isset($_POST['submitQuery'])){
            if(!empty($_POST['input'])) {
                $selected = $_POST['input'];
                $limit = $_POST['limit'];
                $skip = $_POST['skip'];
                $batch= $_POST['batch'];

                echo '<p style="Color: blue; text-align: center '.'">' .$selected.'</p>';

                $options = [
                    "limit" => $limit,
                    "skip" => $skip,
                    "batch_size" => $batch,
                ];

                $filter  = [
                    '$or' => [
                        ['name' => ['$eq' => $selected]],
                        ['postcode' => ['$eq' => $selected]],
                        ['town' => ['$eq' => $selected]],
                        ['county' => ['$eq' => $selected]],
                        ['latitude' => ['$eq' => $selected]],
                        ['longitude' => ['$eq' => $selected]],
                        ['locationType' => ['$eq' => $selected]],
                        ['chargeDeviceStatus' => ['$eq' => $selected]]
                    ]
                ];

                $query = new MongoDB\Driver\Query($filter, $options);
                $rows = $client->executeQuery("mydb.charge_points", $query);

            } else {
                  echo '<p style="color: red; text-align: center"">
                  Error, Please search for something.
                  </p>';
            }
        }


      else if(isset($_POST['query2'])){

          echo '<p style="color: blue; text-align: center"">
                  Find the detail of 5 charge points are between the Latitude 51.400000 and the Latitude 51.555555?
                  </p>';

          $options = [
              "limit" => 5,
          ];

          $filter  = [
              '$and' => [
                  ['latitude' => ['$gt' => '51.400000']],
                  ['latitude' => ['$lt' => '51.555555']],
              ]
          ];

          $query = new MongoDB\Driver\Query($filter, $options);
          $rows = $client->executeQuery("mydb.charge_points", $query);
      }

      else if(isset($_POST['query3'])){

          echo '<p style="color: blue; text-align: center"">
                  List all the charge points’ details in Bradford town?
                  </p>';

          $filter  = [
              'town' => ['$eq' => "Bradford"]
          ];

          $query = new MongoDB\Driver\Query($filter);
          $rows = $client->executeQuery("mydb.charge_points", $query);
      }

      else if(isset($_POST['query4'])){

          echo '<p style="color: blue; text-align: center"">
                  List all the charge points’ details where their charge Device Status is “Out of service”?
                  </p>';

          $filter  = [
              'chargeDeviceStatus' => ['$eq' => "Out of service"]
          ];

          $query = new MongoDB\Driver\Query($filter);
          $rows = $client->executeQuery("mydb.charge_points", $query);
      }

      else if(isset($_POST['query5'])){

          echo '<p style="color: blue; text-align: center"">
                  List all the charge points’ details where the location Type is “On-street”?
                  </p>';

          $filter  = [
            'locationType' => ['$eq' => "On-street"]
          ];

          $query = new MongoDB\Driver\Query($filter);
          $rows = $client->executeQuery("mydb.charge_points", $query);
      }

      else if(isset($_POST['query6'])){

          echo '<p style="color: blue; text-align: center"">
                  List all the charge points’ details where town names are Manchester, Leeds, or Glasgow, and the charge Device Status is "In service" only?
                  </p>';

          $filter  = [
              '$and' => [
                  ['town' => ['$in' => ["Manchester", "Glasgow", "Leeds"]]],
                  ['chargeDeviceStatus' => ['$eq' => "In service"]]
              ]
          ];

          $query = new MongoDB\Driver\Query($filter);
          $rows = $client->executeQuery("mydb.charge_points", $query);
      }

      else if(isset($_POST['query7'])){

          echo '<p style="color: blue; text-align: center"">
                  List 30 of the charge points’ details where the county is “West Yorkshire”?
                  </p>';

          $options = [
              "limit" => 30,
          ];

          $filter  = [
                  'county' => ['$eq' => "West Yorkshire"]
          ];

          $query = new MongoDB\Driver\Query($filter, $options);
          $rows = $client->executeQuery("mydb.charge_points", $query);
      }

        /**************************************************************************************************************
         *
         * Display collection from MongoDB.
         *
         * Passing column name to table rows.
         *
         *************************************************************************************************************/

            foreach($rows as $row) {

                // convert from stdClass to an array that can be displayed.
                $document = json_decode(json_encode($row),true);

                $latitude[] = $document['latitude'];
                $longitude[] = $document['longitude'];
                $name[] = $document['name'];
                $town[] = $document['town'];
                $county[] = $document['county'];
                $chargeDeviceStatus[] = $document['chargeDeviceStatus'];

                echo "<tr>";
                echo "<td>" . $document['chargeDeviceID'] . "</td>";
                echo "<td>" . $document['name'] . "</td>";
                echo "<td>" . $document['postcode'] . "</td>";
                echo "<td>" . $document['latitude'] . "</td>";
                echo "<td>" . $document['longitude'] . "</td>";
                echo "<td>" . $document['town'] . "</td>";
                echo "<td>" . $document['county'] . "</td>";
                echo "<td>" . $document['locationType'] . "</td>";
                echo "<td>" . $document['chargeDeviceStatus'] . "</td>";
                echo "</tr>";
            }

        /**************************************************************************************************************
         *
         * Methods.
         *
         *************************************************************************************************************/

            /**
             *
             * Catching these exceptions for error handling.
             *
             */
    } catch (Exception $e) {
        echo "QUERY ERROR.";
    } catch (\MongoDB\Driver\Exception\Exception $e) {
        echo "MONGO_DB DRIVER NOT FOUND.";
    }
?>
</table>

    <script>
        /**
         *
         * Global Attributes needed for initialization
         *
         * Assign php arrays to JS arrays
         *
         */
        var map;

        // Plot the markers based on the fetched data
        var latitude = <?php echo json_encode($latitude);?>;
        var longitude = <?php echo json_encode($longitude);?>;
        var name = <?php echo json_encode($name);?>;
        var town = <?php echo json_encode($town);?>;
        var county = <?php echo json_encode($county);?>;
        var chargeDeviceStatus = <?php echo json_encode($chargeDeviceStatus);?>;


        for (var i = 0; i < latitude.length; i++) {
            addMarker(latitude[i], longitude[i], name[i], town[i], county[i], chargeDeviceStatus[i]);
        }

        /**
         *
         * Initialising with JS, google map, and passing API key below.
         *
         * then sets default marker for UK
         *
         * @param callback passing callback
         */
        function myMap(callback) {
            var mapProp= {
                center:new google.maps.LatLng(53.466056292346444, -2.1445376733893284),
                zoom:6,
                mapTypeId: google.maps.MapTypeId.HYBRID,
            };
            map = new google.maps.Map(document.getElementById("map"),mapProp);
        }



        /**
         *
         * Sets markers on Google map, will be called on button onClick()
         *
         * The markers will be looped based on the fetched data from Mongodb
         *
         */
        // Plot the markers based on the fetched data
        function addMarkers(_latitude, _longitude, _name, _town, _county, _chargeDeviceStatus) {
            for (var i = 0; i < _latitude.length; i++) {
                addMarker(_latitude[i], _longitude[i], _name[i], _town[i], _county[i], _chargeDeviceStatus[i]);
            }
        }
        function addMarker(latitude, longitude, name, town, county, chargeDeviceStatus) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map
            });

            var infowindow = new google.maps.InfoWindow({
                content: 'Name: ' + name + "<br />" + 'Latitude: ' + latitude + "<br />" + 'Longitude: ' + longitude +
                    "<br />" + 'Town: ' + town + "<br />" + 'County: ' + county + "<br />" + 'Status: ' + chargeDeviceStatus
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQCuXjuSLJ5wiL-HdTG8mVNgH0aa6Ovc&callback=myMap"></script> <br>
    <button type="button" onclick="addMarkers(latitude, longitude, name, town, county, chargeDeviceStatus)" class="btn btn-danger btn-block">Plot map</button>
    <button type="submit" name="submitRefresh" class="btn btn-primary btn-block">Refresh table</button>

</body>
</html>