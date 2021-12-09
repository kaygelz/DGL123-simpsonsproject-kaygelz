<!DOCTYPE html>
<html lang="en">
<head>
    <!--Author: Kaylee Gelz-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header id="masthead" class="site-header layout-container">
        <a href="/">
            <img class="site-header__logo" src="images/logo.svg" alt="Logo">
        </a>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
            
                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">

                            <div class="form__imageContainer">
                                <img src="images/simpsons.jpg" alt="Simpsons" class="form__image">
                            </div>

                            <div class="form__card">

                                <h3 class="form__heading">
                                    Select characters to show
                                </h3>

                                <form  action="#" method="post">

                                    <ul class="form__items">
                                       <li class="form__item">
                                            <label for="homer">Homer Simpson</label>  
                                            <input id="homer" type="checkbox" name="homer" value="homer">                                                      
                                       </li>
                                       <li class="form__item">
                                            <label for="homer">Marge Simpson</label>  
                                            <input id="marge" type="checkbox" name="marge" value="marge">                                                      
                                       </li>
                                       <li class="form__item">
                                            <label for="homer">Bart Simpson</label>  
                                            <input id="bart" type="checkbox" name="bart" value="bart">                                                      
                                       </li>
                                       <li class="form__item">
                                            <label for="lisa">Lisa Simpson</label>  
                                            <input id="lisa" type="checkbox" name="lisa" value="lisa">                                                      
                                       </li>
                                       <li class="form__item">
                                            <label for="maggie">Maggie Simpson</label>  
                                            <input id="maggie" type="checkbox" name="maggie" value="maggie">                                                      
                                       </li>
                                       <li class="form__item">
                                            <label for="moe">Moe Szyslak</label>  
                                            <input id="moe" type="checkbox" name="moe" value="moe">                                                      
                                       </li>
                                      
                                                
                                </ul>                                                                                                 
                                            
            
                                    <input class="form__button" type="submit" value="Show Characters">

                                </form>

                                

                            </div>

                        </div>
                    </div>
                </div>

                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                          
                       <?php



//create character cards
$character['homer'] = [
    'first_name' => 'Homer',
    'last_name' => 'Simpson',
    'age' => '40',
    'occupation' => 'Nuclear Safety Inspector',
    'voiced_by' => 'Dan Castellaneta',
    'image' => 'images/homer.png'
];

$marge = [
    'first_name' => 'Marge',
    'last_name' => 'Simpson',
    'age' => '40',
    'occupation' => 'Homemaker',
    'voiced_by' => 'Julie Kavner',
    'image' => 'images/marge.png'
];

 $bart = [
    'first_name' => 'Bart',
    'last_name' => 'Simpson',
    'age' => '10',
    'occupation' => 'Student',
    'voiced_by' => 'Nancy Cartwright',
    'image' => 'images/bart.png'
 ];

    $lisa = [
    'first_name' => 'Lisa',
    'last_name' => 'Simpson',
    'age' => '8',
    'occupation' => 'Student',
    'voiced_by' => 'Yeardley Smith',
    'image' => 'images/lisa.png'
    ];

    $maggie = [
    'first_name' => 'Maggie',
    'last_name' => 'Simpson',
    'age' => '8',
    'image' => 'images/maggie.png'
    ];

    $moe = [
    'first_name' => 'Moe',
    'last_name' => 'Szyslak',
    'age' => '55',
    'occupation' => 'Bartender',
    'voiced_by' => '',
    'image' => 'images/moe.png'
    ];

    ///create forloop
   if(isset($_POST) || is_array($_POST)) {
        foreach ($_POST as $characters) { ?>
        <!--print characters-->   
            <li><h3><?= $characters?></h3><img src="images/<?=$characters?>.png" alt="name"/></li> <?
  
      
        }

      
}

?>
                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
</html>
                                                                                                                                                </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
</html>

