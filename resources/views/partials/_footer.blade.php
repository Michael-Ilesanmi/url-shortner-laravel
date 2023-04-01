<footer class="bg-[#4B7A74]  bottom-0 left-0 right-0 py-6">
    <div class="container">
        <p class="text-center text-gray-50 font-medium">
            <a class="font-light" href="https://github.com/Michael-Ilesanmi" target="_blank" rel="noopener noreferrer">Michael Ilesanmi </a> || Copyright © 2023
        </p>  
    </div>
</footer>

<script  type="text/javascript">
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.backgroundColor = "#111827";
        document.getElementById("navbar").style.borderBottom = "2px solid #F9FAFB";
    } else {
        document.getElementById("navbar").style.backgroundColor = "transparent";
        document.getElementById("navbar").style.borderBottom = "none";
    }
    }
    function copyToClipboard(id) {
        let copyText = document.getElementById(id);
        let copyIcon = document.getElementById(id+"_icon").classList;
        copyIcon.remove("fa-copy")
        copyIcon.add("fa-clipboard")
        copyText.select();
        copyText.setSelectionRange(0, 99999); 
        navigator.clipboard.writeText(copyText.value);
    }
</script>