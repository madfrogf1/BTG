<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <script src="../asset/js/html5shiv/html5shiv.min.js"></script>
    <script src="../asset/js/html5shiv/html5shiv-printshiv.min.js"></script>

    <title></title>

    <link rel="stylesheet" href="../asset/css/normalize/normalize.css">
    <link rel="stylesheet" href="../asset/css/index.css">
    <link rel="stylesheet" href="../asset/css/header/header.css">
    <link rel="stylesheet" href="../asset/css/advertisement/advertisement.css">
    <link rel="stylesheet" href="../asset/css/btGroupLink/btGroupLink.css">
    <link rel="stylesheet" href="../asset/css/btGroupLink/btLogistics/btLogistics.css">
    <link rel="stylesheet" href="../asset/css/btGroupLink/btSupplyChainSolutions/btSupplyChainSolutions.css">
    <link rel="stylesheet" href="../asset/css/btGroupLink/btTransport/btTransport.css">
    <link rel="stylesheet" href="../asset/css/btGroupLink/btWarehousing/btWarehousing.css">
    <link rel="stylesheet" href="../asset/css/footer/footer.css">
    		<!-- Bootstrap CSS -->
		<link href="../asset/css/advertisement/bootstrap.min.css" rel="stylesheet">
		<link href="../asset/css/advertisement/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="../asset/js/advertisement/modernizr-2.6.2.min.js"></script>
		
</head>

<body>

	<div id="content">

        <?php require('partial/header/header.php') ?>

        <?php require('partial/advertisement/advertisement.php') ?>

        <div id="btGroupLink">
            <?php require('partial/btGroupLink/btLogistics/btLogistics.php') ?>
            <?php require('partial/btGroupLink/btSupplyChainSolutions/btSupplyChainSolutions.php') ?>
            <?php require('partial/btGroupLink/btTransport/btTransport.php') ?>
            <?php require('partial/btGroupLink/btWarehousing/btWarehousing.php') ?>
        </div>

        <?php require('partial/footer/footer.php') ?>

    </div>


    <script src="../asset/js/index.js"></script>
    <script src="../asset/js/jQuery/jquery-1.11.1.min.js"></script>
    <script src="../asset/js/header/header.js"></script>
    <script src="../asset/js/advertisement/advertisement.js"></script>
    <script src="../asset/js/btGroupLink/btGroupLink.js"></script>
    <script src="../asset/js/btGroupLink/btLogistics/btLogistics.js"></script>
    <script src="../asset/js/btGroupLink/btSupplyChainSolutions/btSupplyChainSolutions.js"></script>
    <script src="../asset/js/btGroupLink/btTransport/btTransport.js"></script>
    <script src="../asset/js/btGroupLink/btWarehousing/btWarehousing.js"></script>
    <script src="../asset/js/footer/footer.js"></script>
    <script src="../asset/js/advertisement/bootstrap.min.js"></script>
    
    
    <script type='text/javascript'>
    $(document).ready(function() {
         $('.carousel').carousel({
             interval: 3500
         })
    });    
</script>
    
</body>

</html>
