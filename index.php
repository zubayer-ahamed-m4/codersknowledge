<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            .header-wrapper{
                height: auto;
                background-color: #454E5C;
                padding: 0px 20px;
            }
            
            .header-top-menu{
                border: 1px solid #6d6d6d;
            }
            
            .content-wrapper{
                height: auto;
                background-color: #f0f0f0;
                padding: 0px 20px 40px 20px;
            }
            .content-area{
                height: auto;
                border: 1px solid #DDD;
            }
            .content{
                background-color: #ffffff;
            }
            .right-sidebar{
                background-color: #f0f0f0;
            }
            
            .footer-wrapper{
                height: auto;
                background-color: #33363B;
                padding: 0px 20px;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 header-top-menu">
                                Header top menu
                            </div>
                            <div class="col-md-12 header-title">
                                <h1>Header title</h1>
                            </div>
                            <div class="col-md-12 header-main-menu">
                                Header mainmenu
                            </div>
                            <div class="col-md-12 header-noticebar">
                                Notice bar
                            </div>
                            <div class="col-md-12 header-bottom">
                                <div class="row">
                                    <div class="col-md-9">header bottom Col 1 </div>
                                    <div class="col-md-3">header bottom col 2</div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 content-area">
                        <div class="row">
                            <div class="col-md-9 content">asdfsa</div>
                            <div class="col-md-3 right-sidebar">asdfsdf</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 body-scroller"></div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9 footer-description">Copyrights</div>
                            <div class="col-md-3 footer-social">Facebook</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>