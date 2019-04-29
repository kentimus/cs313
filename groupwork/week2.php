<!doctype>
<html>
    <head>
        <title>Week 2 Team Activity</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="week2.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card-deck">
                <div class="first box card" id="box1">
                    <div class='card-body'>
                        <p>This is the first box.</p>
                    </div>
                    <div class='card-footer'>
                        <label>Change the first box's text color:</label>
                        <input type="text" id="newColor">
                        <input type="button" id="newColorButton" value="Change color">
                    </div>
                </div>
                <div class="second box card" id="box2">
                    <div class='card-body'>
                        <p>This is the second box.</p>
                    </div>
                    <div class='card-footer'>
                        <label>Change the second box's background color:</label>
                        <input type="text" id="newColor2">
                        <input type="button" id="newColorButton2" value="Change color">
                    </div>
                </div>
                <div class="third box card" id="box3">
                    <div class='card-body'>
                        <p>This is the third box.</p>
                    </div>
                    
                </div>
                
            </div>
            
            
                <button id="myButton">Click Me!</button>

                <div>
                        <input type="button" id="fade3" value="Toggle the 3rd box's Visibility">
                </div>

                
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="week2.js"></script>
    </body>
</html>