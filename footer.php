<footer id="sticky-footer" class="py-4 bg-dark text-white-50 mt-5" >
    <div class="container text-dynamic">
    <div class="row">
       <div class="col-sm-6">
               <div class="center">
                 <h5>Contact us:  &nbsp</h5>
                 <span> reachus@bayanko.ph</span>
              </div>
         </div>
         <div class="col-sm-6">
    
               <span class="center right" style="width: 100%">
                 <span>POWERED BY</span>
              </span>
              <span class="center right" style="width: 100%">
                 <img src="images/16logo.png" style="height: 70px;object-fit: cover;">
              </span>
            
         </div>
      </div>
    </div>
  </footer>
<script type="text/javascript">
   function myFunction() {
   var input = document.getElementById("Search");
   var filter = input.value.toLowerCase();
   var nodes = document.getElementsByClassName('target');
   
   for (i = 0; i < nodes.length; i++) {
   if (nodes[i].innerText.toLowerCase().includes(filter)) {
   nodes[i].style.display = "block";
   } else {
   nodes[i].style.display = "none";
   }
   }
   }
</script>
<script type="text/javascript">
  $(window).on('load resize', function() {
      if($(window).width() < 576) {
         $('.center').addClass('d-flex justify-content-center');
      }else{
         $('.center').removeClass('d-flex justify-content-center');
          $('.right').addClass('d-flex justify-content-end');
          
      }
  })
</script>
