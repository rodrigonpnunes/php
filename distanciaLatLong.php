    <?php
    function distanciaLatLong($lat1, $lon1, $lat2, $lon2)
    {

        $lat1 = floatval($lat1);
        $lon1 = floatval($lon1);
        $lat2 = floatval($lat2);
        $lon2 = floatval($lon2);

        $lat1 = deg2rad($lat1);
        $lat2 = deg2rad($lat2);
        $lon1 = deg2rad($lon1);
        $lon2 = deg2rad($lon2);

        $dist = (6371 * acos(cos($lat1) * cos($lat2) * cos($lon2 - $lon1) + sin($lat1) * sin($lat2)));
        $dist = number_format($dist, 2, '.', '');
        return $dist;
    }
    ?>