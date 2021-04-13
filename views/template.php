<html>
    <head>
        <meta charset="UTF-8">
        <link href="<?php echo BASE_URL; ?> ../assets/css/template.css" rel="stylesheet" type="text/css" />
        <title>Pàinel - <?php echo $viewData ['company_name']; ?></title>
        <script type ="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script type ="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    </head>
    <body>
    	<div class="leftmenu">
    		<div class="company_name">
    			 <?php  echo $viewData ['company_name']; ?> 
    		</div>
            <div class="menuarea">
                <ul>
                    <li> <a href="<? echo BASE_URL;?>"> Home </a></li>
                    <li> <a href="<? echo BASE_URL;?>"> Permissões </a></li>
                </ul>
            </div>
    		
    	</div>
    	<div class="container">
    		<div class="top">
            <div class="top_right"><a href="<?php echo BASE_URL.'/login/logout'; ?>">Sair</a></div>
   				<div class="top_right"> <?php echo $viewData['user_email']; ?> </div>                
    		</div>
    	</div>
            <div class="area">
                <?php $this->loadViewInTemplate($viewName, $viewData);?>
            </div>
    </body>
</html>
