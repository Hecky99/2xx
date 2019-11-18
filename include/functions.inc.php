<?php

        function menuBuilder ( $obj ) {

            echo('<ul>');

            foreach ( $obj as $key => $vaule ) {

                echo( '<li><a href="' . $value[ 'MenuLink' ]. '">' . $vaule[ 'MenuName' ] . '</a></li>' );
            
            }

            echo('</ul>');

        }





?>