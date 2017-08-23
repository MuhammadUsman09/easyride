<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- {!!Html::script('public/css/app.css')!!} -->
        {!!Html::script('public/js/app.js')!!}
        {!!Html::script('public/js/bootstrap.js')!!}
        <title>HI Laravel</title>
        
        <!-- Fonts -->
        

        <!-- Styles -->
       
    </head>
    <body>
        <center>
            <form  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                Username:<input type="text" name="username"><br>
                Password:<input type="password" name="password"><br>
                <input type="button" name="login" value="Login" id="submitId">
                {!!csrf_field()!!}
            </form>
            <!-- <form class="form-horizontal" id="loginForm">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10"> 
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" class="btn btn-default" id="submitId">Submit</button>
                </div>
              </div>
            </form> -->
        </center>

            
    </body>
    <script type="text/javascript">
        jQuery(document).ready(function($)  {
            $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name="_token"]').attr('content') }
                });
        });
        $(function(){
            $("#submitId").click(function(){
                    
                    //var token={!!csrf_field()!!};    
                    var data=$("#loginForm").serialize();
                    var ur=$("#loginForm").attr('action');
                    alert('in button ajax');
                    $.ajax({
                        type:'post',
                        url:'maniFun',
                       // headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        data:{data, '_token': '{!! csrf_token() !!}'},
                        dataType:'json',
                        
                
                        success:function(res){
                            alert(res.Id);
                             alert('in ajax');
                        },
                        error:function(res){
                            alert('in error')
                             alert(res);
                            
                        }


                    });
            });
        });
    </script>
</html>
