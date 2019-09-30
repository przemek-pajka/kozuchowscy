<?php

                         
                                // Tworzymy zmienną dla imienia i nazwiska
                                $name = $_POST['name'];

                                // Tworzymy zmienną dla adresu email
                                $email = $_POST['email'];

                                // Tworzymy zmienną dla numeru telefonu
                                $phone = $_POST['phone'];

                                // Tworzymy zmienną dla wiadomości
                                $message = $_POST['message'];

                                // Podajesz adres email z którego ma być wysłana wiadomość
                                $odkogo = "TwojAdresEmail1@gmail.com";

                                // Podajesz adres email na który chcesz otrzymać wiadomość
                                $dokogo = "przemyslawpajka94@gmail.com";

                                // Podajesz tytuł jaki ma mieć ta wiadomość email
                                $tytul = "Formularz kontaktowy z przemyslawpajka.pl";

                                // Przygotowujesz treść wiadomości
                                $wiadomosc = "";
                                $wiadomosc .= "Imie i nazwisko: " . $name . "\n";
                                $wiadomosc .= "Email: " . $email . "\n";
                                $wiadomosc .= "Telefon: " . $phone . "\n";
                                $wiadomosc .= "Wiadomość: " . $message . "\n";

                                // Wysyłamy wiadomość
                                $sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");
                         
                        ?>