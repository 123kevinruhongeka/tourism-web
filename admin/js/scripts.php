<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- js ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- pop js -->
<script>
        document.addEventListener('DOMContentLoaded', function() {
        const inputBoxes = document.querySelectorAll('.input-box input');
        inputBoxes.forEach(function(inputBox) {
            inputBox.addEventListener('focus', function() {
                this.parentNode.querySelector('label').style.top = '-5px';
                this.parentNode.querySelector('label').style.fontSize = '0.8em'; // Optional
                this.parentNode.querySelector('label').style.color = '#007bff'; // Optional
            });
            inputBox.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentNode.querySelector('label').style.top = '50%';
                    this.parentNode.querySelector('label').style.fontSize = '1em'; // Optional
                    this.parentNode.querySelector('label').style.color = '#162938'; // Optional
                }
            });
        });
    });

</script>

<!-- slider js -->

<script>
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 160,
            max: 760,
            values: [160, 760],
            slide: function(event, ui) {
                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            }
        });
        $("#min_price").val($("#slider-range").slider("values", 0));
        $("#max_price").val($("#slider-range").slider("values", 1));
    });
</script>

