<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>
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
                    <h1>Product Add</h1>
                </div>
                <!-- Save button -->
                <div class="col-xs-3 save">
                    <form action="add.php" method="post">
                        <input type="button" id="data2" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 item-form">
                    <form id="product-form" method="post">
                        <div class="errors" style="display:none;">
                            <ul>

                            </ul>
                        </div>
                        <!-- SKU input field -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">SKU</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item-field" id="inputSKU" placeholder="SKU number">
                            </div>
                        </div>
                        <!-- Name input field -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item-field" id="inputName" placeholder="Product name">
                            </div>
                        </div>
                        <!-- Price input field -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item-field" id="inputPrice" placeholder="Product price in dollars">
                            </div>
                        </div>
                        <!-- Type switcher -->
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Type switcher</label>
                            <div class="col-sm-7">
                                <select id="type-selector" def>
                                    <option selected disabled hidden>Select a type</option>
                                    <option data-type="disc">DVD-disc</option>
                                    <option data-type="book">Book</option>
                                    <option data-type="furniture">Furniture</option>
                                </select>
                            </div>
                        </div>
                        <!-- Type switcher hidden fields -->
                        <form id="type-switcher" method="post">
                            <!-- Size input field -->
                            <div class="form-group row switcher hidden" id="disc-input">
                                <label class="col-md-4 col-form-label">Size</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="inputSize" placeholder="Size in MB">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium, nisl vel cursus rutrum, urna augue eleifend justo, ac fringilla ligula enim sed metus. </p>
                            </div>
                            <!-- Weight input field -->
                            <div class="form-group row switcher hidden" id="book-input">
                                <label class="col-sm-12 col-md-4 col-form-label">Weight</label>
                                <div class="col-sm-12 col-md-8">
                                    <input type="text" class="form-control" id="inputWeight" placeholder="Size in Kg">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium, nisl vel cursus rutrum, urna augue eleifend justo, ac fringilla ligula enim sed metus. </p>
                            </div>
                            <!-- Furniture inputs -->
                            <div class="form-group row switcher hidden" id="furniture-input">
                                <!-- Height input field -->
                                <label class="col-sm-12 col-md-4 col-form-label">Height</label>
                                <div class="col-sm-12 col-md-8">
                                    <input type="text" class="form-control" id="inputHeight" placeholder="Height in mm">
                                </div>
                                <!-- Width input field -->
                                <label class="col-sm-12 col-md-4 col-form-label">Width</label>
                                <div class="col-sm-12 col-md-8">
                                    <input type="text" class="form-control" id="inputWidth" placeholder="Width in mm">
                                </div>
                                <!-- Lenght input field -->
                                <label class="col-sm-12 col-md-4 col-form-label">Lenght</label>
                                <div class="col-sm-12 col-md-8">
                                    <input type="text" class="form-control" id="inputLenght" placeholder="Lenght in mm">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium, nisl vel cursus rutrum, urna augue eleifend justo, ac fringilla ligula enim sed metus. </p>
                            </div>
                        </form>     
                    </form>
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

            const selectBox = document.getElementById('type-selector');
            const hiddenFields = document.querySelectorAll('.switcher');
            const sku = document.getElementById('inputSKU');
            const name = document.getElementById('inputName');
            const price = document.getElementById('inputPrice');
            const size = document.getElementById('inputSize');
            const weight = document.getElementById('inputWeight');
            const height = document.getElementById('inputHeight');
            const width = document.getElementById('inputWidth');
            const length = document.getElementById('inputLenght');
            const saveButton = document.getElementById('data2');
            const error = document.querySelectorAll('.errors');

            let selectedInput, selectedType;

        // listening to changes in selected type by type switcher
            selectBox.addEventListener('change', handleSelectBoxChange);

        // looking through all swithcers, giving them class = hidden. For the selected one, removing class.
            function handleSelectBoxChange(event) {
                selectedType = event.srcElement.selectedOptions[0].dataset.type;
                selectedInput = document.getElementById(selectedType + '-input');

                hiddenFields.forEach(function (field) {
                    if (!field.classList.contains('hidden')) {
                        field.classList.add('hidden');
                    };
                });
                
                selectedInput.classList.remove('hidden');
            };

        // listening to save buttons click
            saveButton.addEventListener("click", handleSaveButtonClick);

        // function for save button
            function handleSaveButtonClick(e){
                e.preventDefault();
                let errors = [];
                $('.errors ul').html('');

            // if type not selected, then alert
                if (selectedType == undefined){
                    alert('Please select a type');
                } else {

                // if selected type = furniture, then combine inputs into a single string
                    if(selectedType == 'furniture') {
                        const specifiedInputes = selectedInput.querySelectorAll('INPUT');
                        specificFieldValue = "Dimension: " + specifiedInputes[0].value + "x" + specifiedInputes[1].value + "x" + specifiedInputes[2].value + "mm";
                        skuNumber = "TR" + sku.value;
                    }  

                // if selected type = book, add Kg
                    if(selectedType == 'book') {
                        specificFieldValue = "Weight: " + weight.value + "Kg";
                        skuNumber = "GGWP" + sku.value;
                    }

                // if selected type = disc, add MB
                    if(selectedType == 'disc') {
                        specificFieldValue = "Size: " + size.value + "MB";
                        skuNumber = "JVC" + sku.value;
                    } 

                // validation for numbers only
                    if (isNaN(sku.value) == true || sku.value < 0){
                        errors.push('Only positive numbers allowed in SKU field');
                    };
                    if (isNaN(price.value) == true || price.value < 0){
                        errors.push('Only positive numbers allowed in Price field');
                    };
                    if (selectedType == 'disc' && isNaN(size.value) == true || selectedType == 'disc' && size.value < 0){
                        errors.push('Only positive numbers allowed in Size field');
                    };
                    if (selectedType == 'book' && isNaN(weight.value) == true || selectedType == 'book' && weight.value < 0){
                        errors.push('Only positive numbers allowed in Weight field');
                    };
                    if (selectedType == 'furniture' && isNaN(height.value) == true || selectedType == 'furniture' && height.value < 0){
                        errors.push('Only positive numbers allowed in Height field');
                    };
                    if (selectedType == 'furniture' && isNaN(width.value) == true || selectedType == 'furniture' && width.value < 0){
                        errors.push('Only positive numbers allowed in Width field');
                    };
                    if (selectedType == 'furniture' && isNaN(length.value) == true || selectedType == 'furniture' && length.value < 0){
                        errors.push('Only positive numbers allowed in Length field');
                    };

                // validation for empty fields
                    if (sku.value == ""){
                        errors.push('Please insert SKU');
                    };
                    if (price.value == ""){
                        errors.push('Please insert Price');
                    };
                    if (selectedType == 'disc' && size.value == ""){
                        errors.push('Please insert disc size');
                    };
                    if (selectedType == 'book' && weight.value == ""){
                        errors.push('Please insert book weight');
                    };
                    if (selectedType == 'furniture' && height.value == ""){
                        errors.push('Please insert height for furniture');
                    };
                    if (selectedType == 'furniture' && width.value == ""){
                        errors.push('Please insert width for furniture');
                    };
                    if (selectedType == 'furniture' && length.value == ""){
                        errors.push('Please insert length for furniture');
                    };
                    if (name.value == ""){
                        errors.push('Please insert Name');
                    // validation for text only
                    } else if (!(name.value.match(/([A-Za-z])\w+/g))) {
                            errors.push('Only letters from A-Z allowed in name field. Requires atleast two letters, to be a valid name.');
                    };

                // if any validation errors, then send and show error
                    if (errors.length > 0){
                        for (let index = 0; index < errors.length; index++) {
                            const element = errors[index];
                            $('.errors ul').append('<li>' + element + '</li>');
                        }
                        $('.errors').show();
                        return false;
                    };

                // Creating an object, witch will store information about values, that are going to be stored in our DB table
                    const dataToSend = {
                        sku: skuNumber,
                        name: name.value,
                        price: price.value,
                        type: selectedType,
                        typeSpecificInput: specificFieldValue
                    };

                // Sends data to add.php
                    $.ajax({
                        data: dataToSend,
                        url: 'add.php',
                        method: 'POST',
                        success: function(msg) {
                            window.location.reload(true);
                            alert('Product added successfuly');
                        }
                    });
                };            
            };
    </script>
</body>
</html>