
<?php 
  
 if(Yii::app()->getModule('user')->isAuthor()){
     ?>
 
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />


        <div class="span3" style="">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Links</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li>Manage Articles</li>
                        <li>Write new Article</li>
                       
                    </ul></div>
            </div>
        </div>
 
<?php
}
  else{
      echo "<h1>OOPS!</h1>";
      echo '<h2>Error 403</h2>';
      echo '<br />';
      echo '<h3>You Are Not Authorized to View This Page</h3>';
  }

?>

    