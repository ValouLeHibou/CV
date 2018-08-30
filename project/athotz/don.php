<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <title>Testing a PayPal Payments Standard Button</title>
</head>

<body>
    <h2>Buy Strings!</h2>
    <table>
        <tr>
            <td>Bass Guitar Strings</td>
            <td>
<!--https://www.paypal.com/cgi-bin/webscr url pour les vrai adresse paypal -->
                <!-- Si vous voulez modifier la doc est votre ami bon courage -->
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input name="amount" type="hidden" value="1" /> <!-- valeur panier -->
                    <input name="currency_code" type="hidden" value="EUR" /> <!-- devise -->
                    <input name="shipping" type="hidden" value="00" />
                    <input name="tax" type="hidden" value="00" />
                    <input name="return" type="hidden" value="http://psalesse.eemi.tech/athotz/" /> <!-- paiement accepté -->
                    <input name="cancel_return" type="hidden" value="http://www.monsite.com/panier.php" /> <!-- annulé le paiement -->
                    <input name="notify_url" type="hidden" value="http://www.monsite.com/ipn.php" />
                    <input name="cmd" type="hidden" value="_xclick" />
                    <input name="business" type="hidden" value="valnolife@gmail.com" /> <!-- mon compte -->
                    <input name="item_name" type="hidden" value="Le texte que vous voulez" /> <!-- description du produit -->
                    <input name="no_note" type="hidden" value="1" />
                    <input name="lc" type="hidden" value="FR" />
                    <input name="bn" type="hidden" value="PP-BuyNowBF" />
                    <input name="custom" type="hidden" value="45" />
                    <input class="bouton" type="submit" value="Paye ta mere" /> <!-- valider -->
                </form>


<!-- Si vous voulez tester vous devez d'abord crée des comptes devpaypal pour tester, les value peuvent etre changer avec des $variables et
les values ne sont pas modifiable via le html pour les petits rigolo qui voudrait hack, car les donners sont crypter quand on l'envoi a paypal-->
            </td>
        </tr>
    </table>
</body>

</html>
