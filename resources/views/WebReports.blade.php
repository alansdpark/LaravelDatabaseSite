@extends('layout')

@section('content')
    <?php 
        $showTable = false;
        if (isset($accounts)) {
            if (count($accounts) >= 1) {
                foreach($accounts as $account) {
                    if ($account->active == 1) {
                        $showTable = true;
                    }
                }
            }
        }  
        
    ?>

    <?php 
        if ($showTable) { 
    ?>
            <a href="/sample">sample page</a>
    <?php
            echo "<br>";
            echo "reports";
            echo "<br>";
            echo "reports";
            echo "<br>";
            echo "reports";
            echo "<br>";
            echo "reports";
            echo "<br>";
    ?>
            <a href="/edituser">Edit user</a>      
    <?php
        }
    ?>
@endsection