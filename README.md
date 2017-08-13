<?php  

  $server = "w33bsrus.webhop.me"; //IP (x.x.x.x or domain name)
        $iceport = "8000"; //Port
        $iceurl = "stream"; //Mountpoint
            $online = "<font color=green><b>ONLINE</b> </font><br />";
            $offline = "<font color=red><b>OFFLINE</b></font><br />";

            if($fp = @fsockopen($server, $iceport, $errno, $errstr, '1')) {
                    fclose($fp);
                    $ice_status=$online;
                    echo "<p><b>Stream Status:</b> $ice_status";
                    $stats = file("http://" . $server . ":" . $iceport . "/status.xsl");
                    $status = explode(",", $stats[5]);
                    $artist = explode("-", $status[5]);
            echo "<b>Artist:</b> " . $artist[1];
            echo "<br>";
            echo "<b>Song:</b> " . $artist[2];
            echo "<br />";
                    echo "<b>Listeners:</b> <b> " . $status[3] . "</b>";
                    echo "</p>";
            //echo "<br />";
            //echo "<p><a href=http://" . $server . ":" . $iceport . "/" . $iceurl . " target=new><b>Listen!</b></a></p>";

            } else {

                    $ice_status=$offline;
                    echo "<b>Stream Status:</b> $ice_status";
            }

        ?>