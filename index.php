<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row underline">
                <div class="col-xs-9">
                    <h1>Product List</h1>
                </div>
                <div class="col-xs-3">
                    <!-- Mass delete button -->
                    <div class="col-xs-8">
                        <form method="post">
                            <input type="button" id='clickAll' value="Mass delete action">
                        </form>  
                    </div>
                    <!-- Apply button -->
                    <div class="col-xs-4">
                        <form action="delete.php" method="post">
                            <input type="hidden" id="data" name="data" value="">
                            <input type="submit" value="Apply!">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container" id="allCheckoxes">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row justify-content-around">

    <!-- Inserts information from main.php -->
    <?php include 'main.php'; ?>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>&copy Edgars. All rights reserved 2018.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        const hiddenInput = document.getElementById('data');
        const checkBoxes = document.querySelectorAll('.item-checkbox');
        const selectAll = document.getElementById('clickAll');

        let itemsIdToDelete = [];
        
        // creating a loop, to listen to clicks
            checkBoxes.forEach(function (checkBox) {
                checkBox.addEventListener('click', checkBoxClickHandler);
            });

        // creating a function, to send or delete id from array, if it's checked
            function checkBoxClickHandler(e) {
                const isChecked = e.srcElement.checked;
                if (isChecked) {
                    itemsIdToDelete.push(e.srcElement.dataset.itemid);
                } else {
                    itemsIdToDelete.splice(itemsIdToDelete.indexOf(e.srcElement.dataset.itemid),1); //paskaties mdn index of
                }
                hiddenInput.value = itemsIdToDelete;
            };
        
        // on click, select all checkboxes and send there id to array
            selectAll.addEventListener('click', function(e){
                e.preventDefault();
                itemsIdToDelete = [];
                checkBoxes.forEach(function (checkBox) {
                    itemsIdToDelete.push(checkBox.dataset.itemid);
                });
                hiddenInput.value = itemsIdToDelete;
                console.log(hiddenInput.value);
            });
                
        // Checks all checkboxes
            $('#clickAll').click(function(){
                $(this).toggleClass('clicked');
                if ($(this).hasClass('clicked')){
                    $('#allCheckoxes').find(':checkbox').prop('checked', true);
                }
            });
    </script>
</body>
</html>