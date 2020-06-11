<?php $__env->startSection('content'); ?>
<style>
input[type="radio"] {
  display: none;
}
input[type="radio"]:not(:disabled) ~ label {
  cursor: pointer;
}
input[type="radio"]:disabled ~ label {
  color: #bcc2bf;
  border-color: #bcc2bf;
  box-shadow: none;
  cursor: not-allowed;
}

label {
  height: 100%;
  display: block;
  background: white;
  border: 2px solid #002E50;
  border-radius: 15px;
  padding: 1rem;
  margin-bottom: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
  position: relative;
}

input[type="radio"]:checked + label {
  background: #002E50;
  color: white;
  
}
input[type="radio"]:checked + label::after {
  color: #002E50;
  font-family: FontAwesome;
  border: 2px solid #002E50;
  content: "\f00c";
  font-size: 24px;
  position: absolute;
  top: -25px;
  left: 50%;
  transform: translateX(-50%);
  height: 50px;
  width: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 50%;
  background: white;
}

input[type="radio"]#control_05:checked + label {
  background: red;
  border-color: red;
}

</style>
<section class="mt-5 pt-3 ">
    <div class="row p-0 my-5 m-0">
        <div class="col-md-5 text-center container p-4" style="border: 1px solid #80808069;border-radius: 5px;">
            <h4 class="h4 h4-responsive text-uppercase font-weight-bold" style="font-size:25px!important;color:#002E50!important;">Start Your Order</h4>
            <img src="<?php echo e(url('svg/pickup.png')); ?>" class="" width="100" height="100">
            <p class="pt-2 font-weight-bold" style="font-size:20px;">Pick-up</p>
            
            <p class="text-left pt-3 font-weight-bold"><b>Find Your Nearest Location</b></p>
            <input class="form-control p-2" id="autocomplete" placeholder="Enter Your Location" autofocus>
            <button class="badge  py-3 px-4  text-uppercase" style="background:#fff;border:1px solid #002E50;color:#002E50;" id="cal">Find Ordering Store</button>
            <div class="text-left" id="form1" style="display: none;">
                            <p class="text-left pt-3 font-weight-bold pb-2"><b>Select Pickup Store:</b></p>

            <form method="POST" action="<?php echo e(route('start')); ?>">
                <?php echo csrf_field(); ?>
                <div>
                    <input type="radio" id="add1" name="dest" value="add1" checked>
                   <label for="add1">
                  <p>561 Markham Road, Scarborough, ON M1H 2A3. <p>
                </label>
                   </div>
                  <div class="mt-2" >
                  <input type="radio" id="add2" name="dest" value="add2">
                    <label for="add2"><p>2655 Lawrence ave East, Scarborough, ON M1P SA3.<p></label>
                  </div>
                    
                        <p class="font-weight-bold">Specific Date & Time<br>
                            <span style="font-size: 10px">Up to Seven days In Advance</span>
                            </p>
                            <p class="font-weight-bold">Day</p>
                            <select name="date" id="dat" class="form-control p-2">
                                
                                <?php for($i=0;$i<7;$i++): ?>
                                <option><?php echo e(date('D d/m',strtotime(now().'+'.$i.' day'))); ?></option>
                                <?php endfor; ?>
                                
                            </select>
                            <p class="font-weight-bold">Time</p>
                            <select name="time" id="tim" class="form-control p-2">
                                <?php for($i=0;$i<720;$i=$i+15): ?>
                                <option><?php echo e(date('h:i a',strtotime(now().'+'.$i.' minutes'))); ?></option>
                                <?php endfor; ?>
                            </select>  
                            <div class="text-center">
                <button type="submit" class="btn btn-md white-text px-5" style="border:none;background:#002E50;">Start Your Order</button>
                </div>
                </form>
            </div>
            <div class="text-left" id="form2" style="display: none;">
                            <p class="text-left pt-3 font-weight-bold pb-2"><b>Select Pickup Store:</b></p>

                <form method="POST" action="<?php echo e(route('start')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mt-2 " >
                    <input type="radio" id="add3" name="dest" value="add2" checked>
                    <label for="add3">
                    <p>2655 Lawrence ave East, Scarborough, ON M1P SA3.</p>
                    </label>
                    </div>
                    <div>
                    <input type="radio" id="add4" name="dest" value="add1">
                    <label for="add4"><p>561 Markham Road, Scarborough, ON M1H 2A3.</p> </label>
                    </div>
                    
                    
                    

                    <p class="font-weight-bold pt-3">Specific Date & Time<br>
                    <span style="font-size: 10px" class="m-0 p-0">Up to Seven days In Advance</span>
                    </p>
                    <p class="font-weight-bold">Day</p>
                    <select name="date" id="dat" class="form-control p-2">
                        
                        <?php for($i=0;$i<7;$i++): ?>
                        <option><?php echo e(date('D d/m',strtotime(now().'+'.$i.' day'))); ?></option>
                        <?php endfor; ?>
                        
                    </select>
                    <p class="font-weight-bold">Time</p>
                    <select name="time" id="tim" class="form-control p-2">
                        <?php for($i=0;$i<960;$i=$i+15): ?>
                        <option><?php echo e(date('h:i a',strtotime('11:00 AM +'.$i.' minutes'))); ?></option>
                        <?php endfor; ?>
                    </select>  
                    <div class="text-center">
                    <button type="submit" class="btn btn-md white-text px-5" style="border:none;background:#002E50;">Start Your Order</button>
                    </div>
      
                </form>
            </div>
        </div>

        <div class="col-md-7" style="height: auto;display: none" id="map" style="border: 1px solid #80808069;border-radius: 5px;">

        </div>
    </div>
</section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjUB-i3JWraUXBNqnaPF46eLNY19WRqNk&libraries=places&region=EN"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script>
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);
    var src;
    var address1 = "561 Markham Road, Scarborough, ON M1H 2A3 ";
    var address2 = "2655 Lawrence ave East, Scarborough, ON M1P SA3 (Opening Soon.)";
    var dist1;
    var dist2;

    var myLatLng = {
        lat: 43.7582673,
        lng: -79.2265373
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: myLatLng
    });
    var bounds = new google.maps.LatLngBounds();


    $('#cal').click(function() {
        $('#map').show();
        src = $('#autocomplete').val();
        calculateDistance(src, address1, address2);
        getLatitudeLongitude(showResult, src, 'src');
        getLatitudeLongitude(showResult, address1, 'dest');
        getLatitudeLongitude(showResult, address2, 'dest');
    });

    function calculateDistance(sorc, dest, dest2) {

        var distance = 0;
        var distanceService = new google.maps.DistanceMatrixService();
        distanceService.getDistanceMatrix({
                origins: [sorc],
                destinations: [dest, dest2],
                travelMode: google.maps.TravelMode.WALKING,
                unitSystem: google.maps.UnitSystem.METRIC,
                durationInTraffic: true,
                avoidHighways: false,
                avoidTolls: false
            },
            function(response, status) {
                if (status !== google.maps.DistanceMatrixStatus.OK) {
                    return -1;
                } else {
                    console.log(response);
                    var dest1 = response.rows[0].elements[0].distance.value;
                    var dest2 = response.rows[0].elements[1].distance.value
                    if (dest1 < dest2) {
                        $('#form1').show();
                        $('#form2').hide();



                    }
                    if (dest1 > dest2) {
                        $('#form2').show();
                        $('#form1').hide();

                    }
                    if (dest1 == dest2) {
                        $('#form1').show();
                        $('#form2').hide();

                    }


                }
            });


    }

    function getLatitudeLongitude(callback, address,type) {
        // If adress is not supplied, use default value 'Ferrol, Galicia, Spain'
        // Initialize the Geocoder
        geocoder = new google.maps.Geocoder();
        if (geocoder) {
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    callback(results[0], address,type);
                }
            });
        }
    }

    function showResult(result, address,type) {
        var lats = result.geometry.location.lat();
        var lngs = result.geometry.location.lng();
        myLatLng = {
            lat: lats,
            lng: lngs
        };
        var ic="http://maps.google.com/mapfiles/kml/pal3/icon48.png";
        if(type=="dest"){
            ic='http://maps.google.com/mapfiles/kml/pal2/icon40.png';
        }
        
        bounds.extend(myLatLng);
        var marker = new google.maps.Marker({
            position: myLatLng,
            icon:ic,
            map: map,
            title: address
        });
        var infowindow = new google.maps.InfoWindow({
            content: "<p style='font-weight:bold'>" + address + "</p>"
        });

        infowindow.open(map, marker);
        map.fitBounds(bounds);



    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/pickup.blade.php ENDPATH**/ ?>