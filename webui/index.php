<?php
$config_file = __DIR__.'/config.php';
if (is_readable($config_file)) {
    @include($config_file);
} else {
    die("Unable to open config.php please check config.php!");
}

header("Refresh:5");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$action = $_REQUEST['actionButton'];
	switch ($action) {
		case "disable":
			$myfile = fopen("$moduledir/disable", "w") or die("Unable to open file!");
			break;
		case "enable":
			shell_exec(" rm $moduledir/disable");
			break;
	}
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Dashboard - <?php echo $ip ?></title>
        <link rel="canonical" href="index.html">
        
        <!-- Bootstrap core CSS -->
        <link href="webui/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="webui/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="webui/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="webui/assets/img/favicons/yacd-128.png" sizes="32x32" type="image/png">
        <link rel="icon" href="webui/assets/img/favicons/yacd-128.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="webui/dist/js/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/webui/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="https://getbootstrap.com/docs/5.1/webui/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
        
            .bg-color {
                padding: 1px 4px 2px;
                border-radius: 3px;
                color: #FFFFFF;
                background-color: black;
            }

            /*  
                its for android devices
            */ 
            @media (min-width: 320px) { 
                body {
                    display: flex;
                    align-items: center;
                    padding-top: 40px;
                    padding-bottom: 60px;
                    background: #fff;
                    background: url('webui/assets/img/favicons/bg.png');
                    background-size: cover;
                }
            }

            /*  
                its for android devices
            */ 
            @media (min-width: 1025px) {
                body {
                display: flex;
                align-items: center;
                padding-top: 40px;
                padding-bottom: 60px;
                background: #fff;
                background: url('webui/assets/img/favicons/bg2.png');
                background-size: cover;
                }
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            .mb-4 {
                -webkit-filter: drop-shadow(5px 5px 5px #222222);
                filter: drop-shadow(5px 5px 5px #222222);
            }
        </style>

        <script>
            function getIp() {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "http://ip-api.com/json/", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const ipGeo = JSON.parse(xhr.responseText);

                        document.getElementById("isp").innerHTML = "<span class='bg-color'>ISP: " + ipGeo.isp + "</span>";
                        document.getElementById("ip-info").innerHTML = "<span class='bg-color'>IP Info: " + ipGeo.query + ", " + ipGeo.city + ", " + ipGeo.regionName + ", " + ipGeo.country + ", " + ipGeo.zip + "</span>";
                    } else {
                        document.getElementById("isp").innerHTML = "<span class='bg-color' style='background-color: red;'>Error: Failed Connect to Internet </span>";
                    }
                };

                xhr.send();   
            }

            function openBfm(url) {
                var clashUrl = "http://<?php echo $ip . ":" . $port ?>"
                if (url == ('proxy')) {
                    window.open(clashUrl + "/ui/#/proxies");
                } else {
                    location.href=clashUrl
                }

                
            }
            
            getIp();
        </script>

        <!-- Custom styles for this template -->
        <link href="webui/dist/css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        
        <main class="form-signin">
        
        <img class="mb-4" src="webui/assets/img/favicons/yacd-128.png" alt="" width="100" height="100" onclick="openBfm()">
            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-lg btn-secondary" onclick="openBfm('proxy')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <hr>
            <div class="row">
                <form class="btn-group" method="POST" action="">
                    <button type="button" class="btn btn-lg btn-secondary" onclick="window.open('fManager/index.php')">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"  stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <?php if (file_exists($pid)) { ?>
                        <button type="submit" value="disable" class="btn btn-lg btn-danger" name="actionButton" onclick="showToast()">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </button>
                    <?php } else { ?>
                        <button type="submit" value="enable" class="btn btn-lg btn-danger" name="actionButton" onclick="showToast()">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </button>
                    <?php } ?>
                    <button type="button" class="btn btn-lg btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-lg btn-secondary" onclick="window.open('/monitor/index.php')">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <hr>
            <div class="container">
                <p id="ip-info"></p>
                <p id="isp"></p>
            </div>
            <!-- Modal -->
            <div class="modal modal-secondary modal-sm fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Clash Logs</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <ul class="modal-body list-group" style="text-align:left;">
                            <?php
                                $file = fopen("$clashlogs", "r");
                                while (!feof($file)) {
                                        $log = str_replace('"','',fgets($file));
                                        //$log = str_replace('info msg=','[â„¹ï¸]:',$log);
                                        //$log = str_replace('warning msg=','[âš ï¸]:',$log);
                                        //$log = str_replace('error msg=','[â›”]:',$log);
                                        echo nl2br($log);
                                }
                            ?>
                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
