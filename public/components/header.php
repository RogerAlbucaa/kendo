<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Filmes - Kendo UI Grid</title>
    <link href="https://kendo.cdn.telerik.com/2018.3.911/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2018.3.911/styles/kendo.default.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2018.3.911/styles/kendo.default.mobile.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    
    <script>
        const OMDB_API_KEY = '<?php echo getEnvVariable("OMDB_API_KEY"); ?>';
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2018.3.911/js/kendo.all.min.js"></script>
</head>
<body>
    <header class="header">
        <h1>Kendo Films</h1>
    </header>
</body>
</html>
