  <section id="grad">
      <div class="container text-light">
          <div class="row g-4 justify-content-between align-items-center py-3">
              <div class="col-md-2">
                <img class="img-fluid" src="<?php echo base_url().'assets/dist/img/logo-pkbm.png'?>" style="width:176px;">
              </div>
              <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 col-6 order-3 order-md-2">
                        <h5 class="mb-4 fw-bold">Tentang</h5>
                        <h6 class="mb-3"><a href="#sec-tentangkami" class="text-light" style="text-decoration: none;">Kontak Kami</a></h6> 
                    </div>
                    
                    <div class="col-md-8 order-4">
                        <h5 class="mb-4 fw-bold">Kantor Pusat I</h5>
                        <p>
                            Jl. Bumi Sentosa Raya A1/5-8, A1/31-33, A3/3, B1/3 Cibinong, Kab. Bogor, Jawa Barat, Indonesia 16912.
                            <!-- Jl. Bumi Sentosa Raya Blok A3 No.3, A1 No. 5 - 8, Perum. Bumi Sentosa, Cibinong, Jawa Barat 16912, Indonesia -->
                        </p>
                        
                    </div>
                </div>
              </div>
          </div>
      </div>
    </section>
<section  class="py-3 bg-dark text-light text-center">
<span>
    Copyright&copy; Pusat Kegiatan Belajar Masyarakat (PKBM) by Konsultan Pendidikan Tinggi 2022
</span>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
var currentTab = 0;
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>
</body>
</html>