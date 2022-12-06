<?php

function tour()
{

    if (func_num_args() == 0) {

        echo "沒有指定旅遊的景點";

    } else {

        echo '旅遊的景點有:';
        for ($i = 0; $i < func_num_args(); $i++) {
            echo func_get_arg($i) . " ";
        }

    }

}

tour('高雄', '台東', '花蓮');