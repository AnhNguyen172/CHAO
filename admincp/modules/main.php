<div class="clear"></div>
<div clas="main">
<?php
       
       if(isset($_GET['action']) && $_GET['query'] )
        {
            $tam=$_GET['action'];
            $query=$_GET['query'];
        }
            else
            {
                $tam= ''; 
                $query=''; 
            }

            if($tam=='qldiadiem'&& $query=='them')
            {
                include("modules/qldiadiem/them.php"); 
                include("modules/qldiadiem/lietke.php");    
            }
            elseif($tam=='qldiadiem'&& $query=='sua')
            {
                include("modules/qldiadiem/sua.php");    
            }
            
            elseif($tam=='qlnganhnghe'&& $query=='them')
            {
                include("modules/qlnganhnghe/them.php"); 
                include("modules/qlnganhnghe/lietke.php");    
            }
            elseif($tam=='qlnganhnghe'&& $query=='sua')
            {
                include("modules/qlnganhnghe/sua.php");    
            }
           
            else
            {
            include("modules/dashboard.php");
            }


         
         
?>
  </div>