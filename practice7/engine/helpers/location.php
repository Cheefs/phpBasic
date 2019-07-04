<?php

function location($location) {
    header("Location: $location");
    exit();
}