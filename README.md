# XML-read-using-php

<html>
    <head>
        <Style>
            
            h2{
                text-align:center;
            }
            p{
                border:solid;
                width:fit-content;
                spacing:2px;
                font-size:30px;
                display: flex;
                flex-wrap: wrap;
                width: 18rem;
                justify-content: space-between;
                
            }
            a{
                font-size:25px;
            }
            .card-body {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
                justify-content: space-between;
            }

        </Style>

    </head>
    <body>
        <?php 
        $xml = simplexml_load_file('https://tribune.com.pk/feed/latest.xml');
                        echo'<h2>' . $xml->channel->title . '</h2>';


                        

        ?>




          
        <div class="card" >
                <div class="card-body">
                     <?php
                        
                        foreach ($xml->channel->item as $item) {
                            echo'<p><a href="'.$item->link.'">' . $item->title . "</a><br>" . $item->description . "</p>";
                        }
                        ?>
                    
                </div>
        </div>    
    </body>
</html>
