<html>

<body>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/poruke.css'); ?>">
    <div class="container">

        <br><br>

        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="row">
                        <div class="headind_srch">
                            <div class="recent_heading">
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;Poruke</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="inbox_chat">
                            <?php

                            foreach ($korisnici as $kor) {


                                $ret = "";
                                $ret .= "<form class='porform' action=" . site_url("$controller/otvoriKonverzaciju_action") . " method='POST'>";

                                $ret .= "<button class='chat_list";
                                if (isset($selected) && $kor["Kor"]->IdK == $selected) {
                                    $ret .= " active_chat";
                                }
                                $ret .= "' type='submit'> ";

                                $ret .= " <div class='chat_people'> ";
                                $ret .= " <div class='chat_ib'> ";
                                $ret .= "<input type='hidden' name='korisnikPrimalac' value='" . $kor["Kor"]->IdK . "'>";

                                $ret .= "<h5>";
                                $ret .= "<b>";
                                $ret .= $kor["Kor"]->Ime;
                                $ret .= "</b>";
                                $ret .= "<span class='chat_date'>";

                                $ret .= date('D M d', strtotime($kor["Datum"]));

                                $ret .= "</span>";
                                $ret .= "</h5>";

                                $ret .= "<p>";
                                $ret .= $kor["LastPoruka"];
                                $ret .= "</p>";

                                $ret .= " </div> ";
                                $ret .= " </div> ";
                                $ret .= " </button> ";
                                $ret .= " </form> ";

                                echo $ret;
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="mesgs">
                    <div class="msg_history">

                        <?php

                        if (isset($currentPoruke)) {
                            foreach ($currentPoruke as $por) {
                                $ret = "";

                                if ($selected != $por->Korisnik2) {
                                    $ret .= "<div class='incoming_msg'>";
                                    $ret .= "<div class='received_withd_msg'>";
                                } else {
                                    $ret .= "<div class='outgoing_msg'>";
                                    $ret .= "<div class='sent_msg'>";
                                }

                                $ret .=  "<p>";
                                $ret .= $por->Tekst;
                                $ret .= "<span class = 'time_date'>";
                                $ret .= $por->Datum;
                                $ret .= "</span>";
                                $ret .= "</p>";



                                $ret .= "</div>";
                                $ret .= "</div>";

                                $prevPor = $por;
                                echo $ret;
                            }
                        }

                        ?>
                    </div>

                    <form action="<?php echo site_url("$controller/posaljiPor_action"); ?>" method="POST">
                        <div class="type_msg">
                            <div class="input_msg_write">

                                <input type='hidden' name='selected' value=<?php
                                                                            if (isset($selected)) {
                                                                                echo $selected;
                                                                            } else {
                                                                                echo null;
                                                                            }
                                                                            ?>>

                                <input autofocus type="text" name="text" class="write_msg" placeholder="Unesite poruku" />

                                <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <br><br>

        </div>
    </div>
</body>

</html>