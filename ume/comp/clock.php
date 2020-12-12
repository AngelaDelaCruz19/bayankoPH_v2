<div class="row">
    <div class="col-lg-12">
        <h4 id="currentTime"></h4>
        <small> <?php
                    echo '
             
                            <span  style="font-size: 20px;">'.date("D, d F Y").'</span>
                
                    ';
                ?></small>
    </div>
</div>
<script type="text/javascript">
   window.onload = function() {
  clock();  
    function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    var mid = 'pm';
    if (min < 10) {
      min = "0" + min;
    }
    if (hour > 12) {
      hour = hour - 12;
    }    
    if(hour==0){ 
      hour=12;
    }
    if(TwentyFourHour < 12) {
       mid = 'am';
    }     
  document.getElementById('currentTime').innerHTML =     hour+':'+min+':'+sec +' '+mid ;
    setTimeout(clock, 1000);
    }
}

</script>