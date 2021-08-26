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
            img{
                width:100%;
                height:100px;
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
                     //($xml->channel->item[0]->image->img);
                     

                        foreach ($xml->channel->item as $item) {
                            echo'<p><img src="' . $item[0]->image->img['src'] . '" alt=" image" ><a href="'.$item->link.'">' . $item->title . "</a><br>" . $item->description . "      </p>";
                            //echo '<p><img src="' . $item[0]->image->img['src'] . '" alt=" image" ></p>';


                            



                        }
                        
                        


                        


                        ?>
                    
                </div>
        </div>    
    </body>
</html>