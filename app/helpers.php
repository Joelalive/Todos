<?php

function flash($data,$message)
{
    session()->flash($data, $message);
}