<html>
    <head>
        <meta property="og:image" content="https://grcodeclub.github.io/file/background/5.png"/>
        <meta property="og:title" content="GrCode Club | Php - Εμφάνιση στοιχείων υπολογιστή">
        <script src="https://grcodeclub.github.io/js/jquery.js"></script>
        <script src="https://grcodeclub.github.io/website/js/menu.js"></script>
        <script src="https://grcodeclub.github.io/js/prism.js"></script>
       <script src="https://grcodeclub.github.io/javascript/add-elements/head.js"></script>
    </head>

    <body class="website">
        <div class="container">
            <div id="add_headder_and_menu"></div><script src="https://grcodeclub.gr/javascript/add-elements/headder_and_menu.js"></script>

            <div class="Text"> <!--Αρχή Κειμένου-->
                <div class="text_bg"> <!-- Αρχή Background Κειμένου-->
                    <h1 class="title">Εμφάνιση στοιχείων υπολογιστή</h1>

                    <p>Πληροφορίες του διακομιστή (Server Information):Μπορείς να χρησιμοποιήσεις την phpinfo() για να εμφανίσεις 
                        πληροφορίες σχετικά με τη ρύθμιση παραμέτρων της PHP, το λειτουργικό σύστημα, τις εκδόσεις των εγκατεστημένων 
                        επεκτάσεων και πολλά άλλα:</p>
                    <div class="bg_preview">
                        <div class="appearance">
                            <div class="space">
                                <div class="buttons1"> </div>
                                <div class="buttons2"> </div>
                                <div class="buttons3"></div>
                            </div>
                        </div>
                    <div  class="line-numbers"><pre class="code_editor"><code class="language-php">&lt;?php
    phpinfo();
?></code></pre></div></div>

                    <p>Αν θέλεις συγκεκριμένες πληροφορίες για το σύστημά σου, όπως το λειτουργικό σύστημα ή το όνομα του υπολογιστή, 
                        μπορείς να χρησιμοποιήσεις ορισμένες συναρτήσεις:</p>
                    <div class="bg_preview">
                        <div class="appearance">
                            <div class="space">
                                <div class="buttons1"> </div>
                                <div class="buttons2"> </div>
                                <div class="buttons3"></div>
                            </div>
                        </div>
                    <div  class="line-numbers"><pre class="code_editor"><code class="language-php">&lt;?php
    // Εμφάνιση λειτουργικού συστήματος
    echo 'Λειτουργικό σύστημα: ' . php_uname('s') . PHP_EOL;

    // Εμφάνιση ονόματος υπολογιστή
    echo 'Όνομα υπολογιστή: ' . php_uname('n') . PHP_EOL;

    // Εμφάνιση έκδοσης λειτουργικού συστήματος
    echo 'Έκδοση λειτουργικού συστήματος: ' . php_uname('v') . PHP_EOL;

    // Εμφάνιση αρχιτεκτονικής υπολογιστή
    echo 'Αρχιτεκτονική υπολογιστή: ' . php_uname('m') . PHP_EOL;

    // Εμφάνιση λειτουργικού συστήματος
    echo 'Λειτουργικό σύστημα: ' . php_uname('s') . PHP_EOL;

    // Εμφάνιση ονόματος υπολογιστή
    echo 'Όνομα υπολογιστή: ' . php_uname('n') . PHP_EOL;

    // Εμφάνιση έκδοσης λειτουργικού συστήματος
    echo 'Έκδοση λειτουργικού συστήματος: ' . php_uname('v') . PHP_EOL;

    // Εμφάνιση αρχιτεκτονικής υπολογιστή
    echo 'Αρχιτεκτονική υπολογιστή: ' . php_uname('m') . PHP_EOL;
?>
</code></pre></div></div>

                

                </div><!-- Τέλος Background Κειμένου-->
            </div> <!--Τέλος Κειμένου-->

        </div> <!--Τέλος container-->
        
        <!-- Footer -->
        <footer id="add_footer"></footer><script src="https://grcodeclub.github.io/javascript/add-elements/footer.js"></script>
    </body>
</html>
