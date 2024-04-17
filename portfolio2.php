
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title>Site03-AutoComplete</title>
    <meta charset="utf-8">
    <script src="../cours js/jquery.js"></script>
</head>
<body>
    <h1>Portfolio</h1>
    <button onclick="getData()">Get Data</button>
    <script>
    $(document).ready(function(){
        console.log("Ready");
        getData();
        
    })
    function getData() {
        console.log("ajax");
        $.ajax({
          url: "db.php",
          dataType: "json",
          //method:"post",
          data: {
            
          },
          success: function( datas ) {
              console.log("plop",datas);
              //console.log(data.competences);
              //console.log(data.realisations);
              //console.log(data.croix);
              
              //let result=JSON.parse(data);
              //console.log(result[0].id);
              
            
          }
        });
    }
    </script>
</body>