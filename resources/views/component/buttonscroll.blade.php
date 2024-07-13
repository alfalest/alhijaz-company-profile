<button class="btn btn-danger"
id="scrollUpButton" title="Scroll to top">
<i class="bi bi-chevron-up d-flex justify-content-center
align-items-center fs-6"></i></button>

<style>
    #scrollUpButton {
        display: none;
        position: fixed;
        bottom:70px;
        right: 5px;
        width: 40px;
        height: 40px;
        padding: 10px 20px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        z-index: 99;
        background-color: #f0a224;
    }
</style>

<script>
    // init Scroll Button
        var scrollUpButton = document.getElementById("scrollUpButton");
    // Tampilin button pas user scroll ke bawah lur
    window.addEventListener("scroll",
    function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop >20) {
            scrollUpButton.style.display="block";
        } else {
            scrollUpButton.style.display = "none";
        }
    });

    //  scroll back keatas lur jika diklik
    scrollUpButton.addEventListener("click", function(){
        document.body.scrollTop=0; // buat browser kaum elit apel kroak (khuldi)
        document.documentElement.scrollTop=0; //buat browser kaum elit yg ngutamain fungsi bukan gengsi (anti privilage)
    });
</script>


