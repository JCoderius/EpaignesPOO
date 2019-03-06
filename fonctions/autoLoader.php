<?php

function autoLoader($className)
{
    require_once "./classes/" . $className . ".php";
}