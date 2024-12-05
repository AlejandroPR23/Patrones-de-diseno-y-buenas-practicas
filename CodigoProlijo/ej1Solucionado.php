<?php
    if (isset($_POST['txtFechainicial']) && $_POST['txtFechainicial'] != "") {
        $where[] = "fecha_recibo > " . $_POST['txtFechainicial'] . "";
    }

    if (isset($_POST['txtFechafinal']) && $_POST['txtFechafinal'] != "") {
        $where[] = "fecha_recibo < " . $_POST['txtFechafinal'] . "";
    }

    if (isset($_POST['txtTrabajador']) && $_POST['txtTrabajador'] != "") {
        $where[] = "trab_recibo = " . $_POST['txtTrabajador'] . "";
    }
    
    if (isset($_POST['txtSerie']) && $_POST['txtSerie'] != "") {
        $where[] = "serie1 = " . $_POST['txtSerie'] . "";
    }