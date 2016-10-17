<?php

if ($payment_type != ""):
    
SELECT * FROM
    `tickets` JOIN `payments` ON tickets.id = payments.ticket_id
        WHERE payment.type = "karta";

$_POST['payment_type'];

if ($payment_type == ""):
    
    SELECT * FROM 
    `tickers` LEFT JOIN `payments` ON tickets.id = payments.ticket_id
        WHERE payments.type IS NULL;