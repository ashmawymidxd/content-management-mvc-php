<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
</html>

<script>
    window.onload = () => {
        // alert("hello");
        var currentUrl = window.location.href;
        document.querySelectorAll(".list-group-flush a").forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add("active");
            }
        });
    };
</script>