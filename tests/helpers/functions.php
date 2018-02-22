<?php

function create($class)
{
    return factory($class)->create();
}

function make($class)
{
    return factory($class)->make();
}
