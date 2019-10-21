<button style="background-color: white; width: 60px" onclick="document.getElementById('modal-wrapper').style.display='block'"  >Login</button>
    <a href="<?php echo action('homeController@registrasi')?>"><button style="background-color: navy; border: 1px solid white; color: white; width: 60px">Daftar</button></a>
    


    <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" action="/action_page.php">

        <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="../assets/login.png" alt="Avatar" class="avatar">
            
        </div>

        <div class="container">
            <input type="text" placeholder="Enter Username" name="uname">
            <input type="password" placeholder="Enter Password" name="psw">
            <button type="submit" class="myButton">Login</button>
        </div>

        </form>
    </div>
    
    <script>
    
// If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
    </script>
    