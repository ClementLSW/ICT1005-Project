<body id="mainbody" class="bg">
        <div class="overlay">
             
                <?php  require  $GLOBALS['root'] . '/users/userhome.php'; ?>
                 <?php 
                    if($GLOBALS['debug']) {
                        print('userhome is wroking');
                    }
                 ?>
                <?php  require $GLOBALS['root'] . '/navigation.php'; ?>
        </div>
</body>