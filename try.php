<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Triggering Bootstrap Popover on Mouseover</title>
<?php include'style.php';?>


</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered">
  Launch centered demo modal
</button>

<!-- Modal -->
<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Popover title" data-content="Default popover">Popover</button>
   <!--  <button type="button" class="btn btn-success" data-toggle="popover" title="Popover title" data-content="Another popover">Another popover</button>
    <button type="button" class="btn btn-info" data-toggle="popover" title="Popover title" data-content="A larger popover to demonstrate the max-width of the Bootstrap popover.">Large popover</button>
    <button type="button" class="btn btn-warning" data-toggle="popover" title="Popover title" data-content="The last popover!">Last popover</button> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
     $(".prof").hover(
    function () {
      let refID = '#' + $(this).data('modal_reactions');
      $(refID).modal('show');
    },
    function () {
      let refID = '#' + $(this).data('modal_reactions');
      $(refID).modal('hide');
    });
});
</script>