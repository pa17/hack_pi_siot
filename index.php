<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- JavaScript to handle RaspPi Buttons -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()){
            $('#clickON').click(function()){
                var a = new XMLHttpRequest();
                a.open("GET","pinon.php");
                a.onreadystatechange=function(){
                    if(a.readyState==4){
                        if(a.status == 200){
                        }
                        else alert("HTTP ERROR");
                    }
                }
                a.send();
            });

            $('#clickOFF').click(function()){
                var a = new XMLHttpRequest();
                a.open("GET","pinoff.php");
                a.onreadystatechange=function(){
                    if(a.readyState==4){
                        if(a.status == 200){
                        }
                        else alert("HTTP ERROR");
                    }
                }
                a.send();
            });
        });
    </script>
    <title>hackPi</title>
</head>

<body>
    <div id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                <!-- Buttons -->
                <p></p>
                <button type="button" class="btn btn-success" id="clickON">On</button>
                <button type="button" class="btn btn-danger" id="clickOFF">Off</button>
            </div>
        </div>
</body>

</html>
