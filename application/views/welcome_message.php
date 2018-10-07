<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Official Website -EDVIZO MEDIA PVT LTD</title>

    
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
    body {
        padding-top: 70px;
        
    }
    </style>

</head>

<body style="background-color: #dcdcdc;">

    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header" style="background-color:#ff1a1a;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>Official Website -Team Edvizo</b></a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
            </div>
          
        </div>
        
    </nav>

    
    <div class="container">

        <div class="row">
            <div class="col-md-offset-3 col-lg-6"">
                <h1 class="text-center">EDVIZO MEDIA PRIVATE LTD</h1>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" name="country" id="country">
                        <option value="">Select Country</option>
                        <?php foreach($countries as $country): ?>
                            <option value="<?php echo $country->country_id; ?>"><?php echo $country->country_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Edvizo Branch</label>
                    <select class="form-control" name="province" id="province" disabled="">
                        <option value="">Choose Branch</option>
                    </select>
                  </div>
                
                
            </div>
            
            
        </div>
        
    </div>
    
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

   
    <script type="text/javascript">
        $(document).ready(function(){
           $('#country').on('change', function(){
                var country_id = $(this).val();
                if(country_id == '')
                {
                    $('#province').prop('disabled', true);
                }
                else
                {
                    $('#province').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>welcome/get_province",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#province').html(data);
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                }
           }); 
        });
    </script>

</body>

</html>
