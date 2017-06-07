<!-- JQuery -->
<script type="text/javascript" src="js/jquery-2.2.3.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.js"></script>

<script>
new WOW().init();
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    $(document).ready(function(){
        $("#signin").click(function(){
            $("#myModalSignIn").modal();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#registration").click(function(){
            $("#myModalReg").modal();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#search").click(function(){
            $("#myModalSearch").modal();
        });
    });
</script>