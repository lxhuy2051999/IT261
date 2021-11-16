<footer class="bg-black fl-row-center box-padding h-auto w-100">
    <ul class="fl-col-8 min-w-300 fl-col-center">
        <li class="fc-white">Copyright &copy;
            <?php
            $date_current = date('Y');
            $date_created = 2021;
            if ($date_current == $date_create) {
                echo $date_current;
            } else {
                echo '' . $date_created . ' - ' . $date_current . '';
            }
            ?>. All Rights Reserved</li>
        <li><a href="" class="fc-green">Terms of use</a></li>
        <li><a href="" class="fc-green">Web Made by Huy</a></li>
        <li><a href="" class="fc-green">CSS Validation</a></li>
        <li><a href="http://validator.w3.org/check?uri=referer">HTML</a></li>

        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a></li>
    </ul>
</footer>
</div>
<script>
    //https://tinyurl.com/dynamic-html-checker
    document
        .getElementById("html-checker")
        .setAttribute(
            "href",
            "https://validator.w3.org/nu/?doc=" + location.href
        );
</script>
</body>

</html>