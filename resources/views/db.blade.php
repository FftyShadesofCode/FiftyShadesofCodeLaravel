<?php
    if(DB::connection()->getPdo()){
    echo "Successfully Connected to DB named " .DB::connection()->getDatabaseName;
    }
