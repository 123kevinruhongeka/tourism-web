<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- js ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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

<!-- new js -->
<script>
    function alert(type,msg){
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
        <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    document.body.append(element);
    setTimeout(remAlert, 2000);
    }
 
   
    function remAlert(){
      document.getElementsByClassName('alert')[0].remove();
    }



</script>


<!-- swiper js -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper', {
      // Optional parameters
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.teams-card-next',
        prevEl: '.teams-card-prev',
      },
    });
  });
</script>






