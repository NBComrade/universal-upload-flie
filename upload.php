<?php
    if (!empty($_FILES['file']['name'][0])) {
        foreach ($_FILES['file']['name'] as $key => $value) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$key], 'css/' . $value)) {
                echo 'ok';
            }
        }
    }